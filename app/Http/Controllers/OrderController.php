<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Hospital;
use App\Models\UrgentUser;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function search(Order $order)
    {
        
        // ابحث عن الطلبات المطابقة باستخدام Eloquent ORM
        // $orders = Order::whereNull('price')
        //     ->where('hide', 0)
        //     ->whereNull('car_id')
        //     ->get();
        // حلق عبر كل طلب
        // foreach ($orders as $order) {
            // ابحث عن أقرب مشفى متاح لكل طلب باستخدام Eloquent ORM
            $nearestHospital = Hospital::select('id', 'name', 'address', 'latitude', 'longitude')
                ->where('status', 'Available')
                ->orderByRaw('POW(latitude - ?, 2) + POW(longitude - ?, 2)', [$order->latitude, $order->longitude])
                ->first();
            // dd($nearestHospital);
            // هنا يمكنك استخدام $nearestHospital كما تشاء، مثلاً إضافته إلى مصفوفة أو ما شابه ذلك
        // }
    }
    /**
     * Store a newly created resource in storage.
     */
    
    public function submitOrder(Request $request)
    {
        // تحديد قواعد التحقق
        // $rules = [
        //     'phone' => ['required', 'numeric', 'digits:10', 'regex:/^09/'],
        //     'status_id' => ['required'],
        //     'blood_group' => ['required'],
        //     'latitude' => ['required'],
        //     'longitude' => ['required'],
        // ];

        // تحقق من البيانات المرسلة
        // $validator = Validator::make($request->all(), $rules);

        // في حال حدوث أي أخطاء في التحقق
        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'errors' => $validator->errors()->toArray()]);
        // }
        // dd( $validator->errors()->toArray());
        // معالجة البيانات الصحيحة هنا
        // على سبيل المثال: إنشاء الطلب في قاعدة البيانات


        $order = Order::create([
            'phone' => $request->phone,
            'status_id' => $request->status_id,
            'blood_group' => $request->blood_group,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            // قم بإضافة المزيد من الحقول إذا لزم الأمر
        ]);

        // استجابة JSON بنجاح الإرسال
        return response()->json(['success' => true]);
    }

    public function addOrderGuest(Request $request)
    {
        // تنفيذ التحقق من الصحة
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'numeric', 'digits:10', 'regex:/^09/'],
            'status_id' => ['required'],
            'blood_group' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ], [
            'phone.required' => 'Phone number is required.',
            'phone.numeric' => 'Phone number must be numeric.',
            'phone.digits' => 'Phone number must be 10 digits long.',
            'phone.regex' => 'Phone number must start with "09".',
            'status_id.required' => 'status is required.',
        ]);
        
        // إذا كان هناك خطأ في التحقق من الصحة، قم بإعادة عرض النموذج مع رسائل الخطأ واستدعاء الدالة `displayModal2()`
        $hasErrors = $validator->fails();
    
        // إذا كان هناك خطأ في التحقق من الصحة، قم بإعادة عرض النموذج مع رسائل الخطأ
        if ($hasErrors) {
            // dd($hasErrors,$validator);
            return redirect()->back()->withErrors($validator)->withInput()->with('modal', 'modal2');
        } else {
            // يجب التحقق أولاً مما إذا كان رقم الهاتف موجودًا بالفعل في جدول المستخدمين العاجلين
            $urgentUser = UrgentUser::firstOrCreate(['phone' => $request->phone]);
            // يمكنك الآن الوصول إلى الـ id للمستخدم العاجل
            $urgentUserId = $urgentUser->id;
            // يمكنك الآن إنشاء الطلب باستخدام الـ id الخاص بالمستخدم العاجل
            $order = Order::create([
                'urgent_user_id' => $urgentUserId,
                'blood_group' => $request->blood_group,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);
            // حصول على id الطلب
            $orderId = $order->id;
            $selectedStatuses = $request->input('status_id'); 
            // استخدام foreach لإنشاء سجلات في جدول OrderStatus لكل قيمة من $selectedStatuses
            foreach($selectedStatuses as $selectedStatus) {
                $status = new OrderStatus();
                $status->order_id = $orderId;
                $status->status_id = $selectedStatus;
                $status->save();
            }
             // إذا لم يكن هناك أخطاء، يمكنك هنا إظهار المودال
            // $modalMessage = "Find the nearest hospital";
            
            // قم بتمرير الرسالة إلى العرض
            return redirect()->back()->with('modal', 'modal3');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addOrderUser(Request $request)
    {
        // تنفيذ التحقق من الصحة
        $validator = Validator::make($request->all(), [
            'status_id' => ['required'],
            'blood_group' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ], [
            'status_id.required' => 'status is required.',
        ]);
        
        // إذا كان هناك خطأ في التحقق من الصحة، قم بإعادة عرض النموذج مع رسائل الخطأ واستدعاء الدالة `displayModal2()`
        $hasErrors = $validator->fails();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('modal', 'modal2');
        } else {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'blood_group' => $request->blood_group,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                // my sister's home
                // 'latitude' => 36.1988229,
                // 'longitude' => 37.0991074,
                // near alresale hospital
                // 'latitude' => 36.21327470968656,
                // 'longitude' => 37.1408298611641,
            ]);
            // حصول على id الطلب
            $orderId = $order->id;
            $selectedStatuses = $request->input('status_id'); 
            // استخدام foreach لإنشاء سجلات في جدول OrderStatus لكل قيمة من $selectedStatuses
            foreach($selectedStatuses as $selectedStatus) {
                $status = new OrderStatus();
                $status->order_id = $orderId;
                $status->status_id = $selectedStatus;
                $status->save();
            }
            // إذا لم يكن هناك أخطاء، يمكنك هنا إظهار المودال
            $modalMessage = "Find the nearest hospital";
            // search($orderId);
            $this->search($order);
            // قم بتمرير الرسالة إلى العرض
            return redirect()->back()->with('modal', 'modal3');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
    
}
