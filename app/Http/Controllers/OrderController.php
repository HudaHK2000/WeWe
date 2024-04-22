<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Hospital;
use App\Models\UrgentUser;
use App\Models\OrderStatus;
use App\Models\OrderHospital;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::whereNotIn('status', ['NewOrder'])->get();
        return view('BackEnd.order.index',compact('orders'));
    }

    public function showGPS($id){
        $order = Order::find($id);
        return view('BackEnd.order.map',compact('order'));
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

    public function addOrderGuest(Request $request)
    {
        // تنفيذ التحقق من الصحة
        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'numeric', 'digits:10', 'regex:/^09/'],
            'status_id' => ['required'],
            'blood_group' => ['required'],
            // 'latitude' => ['required'],
            // 'longitude' => ['required'],
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
            // dd($request);
            // يجب التحقق أولاً مما إذا كان رقم الهاتف موجودًا بالفعل في جدول المستخدمين العاجلين
            $urgentUser = UrgentUser::firstOrCreate(['phone' => $request->phone]);
            // يمكنك الآن الوصول إلى الـ id للمستخدم العاجل
            $urgentUserId = $urgentUser->id;
            // يمكنك الآن إنشاء الطلب باستخدام الـ id الخاص بالمستخدم العاجل
            $order = Order::create([
                'urgent_user_id' => $urgentUserId,
                'blood_group' => $request->blood_group,
                // 'latitude' => $request->latitude,
                // 'longitude' => $request->longitude,
                // near alresale hospital
                'latitude' => 36.21327470968656,
                'longitude' => 37.1408298611641,
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
            return redirect()->back();
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
            // 'latitude' => ['required'],
            // 'longitude' => ['required'],
        ], [
            'status_id.required' => 'status is required.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('modal', 'modal2');

            // return response()->json(['success' => false, 'errors' => $validator->errors()->toArray()]);
        } else {
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'blood_group' => $request->blood_group,
                // 'latitude' => $request->latitude,
                // 'longitude' => $request->longitude,
                // my sister's home
                // 'latitude' => 36.1988229,
                // 'longitude' => 37.0991074,
                // Amira's home
                // 'latitude' => 36.20220687746932,
                // 'longitude' => 37.09321528673173,
                // near alresale hospital
                'latitude' => 36.21327470968656,
                'longitude' => 37.1408298611641,
                // near al-razi hospital
                // 'latitude' => 36.21134433619996 ,
                // 'longitude' => 37.138995230197914 ,
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
            // بعد حفظ بيانات الطلب بشكل صحيح

            // إغلاق واجهة modal2
            // return response()->json(['success' => true, 'closeModal' => 'myModal2', 'openModal' => 'myModal3']);

            // إيجاد أقرب مستشفى متاح
            // $userLatitude = $request->latitude;
            // $userLongitude = $request->longitude;
            // $userLatitude = 36.1988229;
            // $userLongitude = 37.0991074;
            // Amira's home
            // $userLatitude = 36.20220687746932;
            // $userLongitude = 37.09321528673173;
            // near alresale hospital
            $userLatitude =  36.21327470968656;
            $userLongitude = 37.1408298611641;
            // dd($userLatitude,$userLongitude);
            $availableHospitals = Hospital::where('status', 'Available')->get(); // استرداد المستشفيات المتاحة فقط
            // dd($availableHospitals->count());
            // اذا كان هناك مشافي متاحة
            if ($availableHospitals) {
                $nearestHospitals = $this->findNearestHospitalsUsingKNN($userLatitude, $userLongitude, $availableHospitals);
                if ($nearestHospitals) {
                    // إرسال طلب إلى أقرب مستشفى
                    // sendOrderRequest($nearestHospital->id, $orderId);
                    // dump($nearestHospitals);
                    foreach ($nearestHospitals as $hospital) {
                        $this->sendOrderToHospitaldashboard($orderId, $hospital->id);
            
                        // $orderStatus = $this->getOrderStatus($orderId);
                        // if ($orderStatus === 'Agree') {
                        //     break;
                        // }
                    }

                } else {
                    // لا توجد مستشفيات متاحة في المنطقة

                }
            }
            // اذا لم يكن هناك مشافي متاحة
            else{

            }
        // return redirect()->back();

        }
    }

    private function sendOrderToHospitaldashboard($orderId, $hospitalId)
    {
        $order = Order::find($orderId);
        // $hospitalData = [
        //     'order_id' => $order->id,
        //     'hospital_id' => $hospitalId,
        // ];
        // dump($hospitalData);

        $orderHospital = OrderHospital::create([
            'order_id' => $orderId,
            'hospital_id' => $hospitalId,
        ]);
        // $response = Http::post('http://localhost:8000/receive-order/', $hospitalData);

        // if ($response->ok()) {
        //     $this->updateOrderStatus($orderId, 'Agree');
        // } else {
        //     $this->updateOrderStatus($orderId, 'Dis Agree');
        // }
    }
    private function updateOrderStatus($orderId, $status)
    {
        Order::find($orderId)->update(['status' => $status]);
    }

    private function getOrderStatus($orderId)
    {
        return Order::find($orderId)->status;
    }
    function findNearestHospitalsUsingKNN($userLatitude, $userLongitude, $hospitals, $k = 1) {
        // قائمة فارغة لتخزين معلومات المسافة والمستشفى
        $distanceAndHospitalData = [];
    
        // حساب المسافات بين المشافي المتاحة ومكان الشخص الذي قام بالطلب وإنشاء هيكل البيانات
        foreach ($hospitals as $hospital) {
            $distance = $this->calculateDistance($userLatitude, $userLongitude, $hospital->latitude, $hospital->longitude);
            $distanceAndHospitalData[] = [
                'distance' => $distance,
                'hospital' => $hospital,
            ];
        }
    
        // فرز هيكل البيانات حسب المسافة
        // تقوم دالة usort بفرز مصفوف في PHP وفقًا لمعيار مخصص. في هذا الجزء من الكود، يتم استخدامها لفرز مصفوف $distanceAndHospitalData بحيث تكون أقرب المستشفيات في المقدمة.
        usort($distanceAndHospitalData, function ($data1, $data2) {
            return $data1['distance'] - $data2['distance'];
        });
        // foreach ($distanceAndHospitalData as $data) {
        //     echo "distance: " . $data['distance'] . " hospital: " . $data['hospital']->name . "\n"; // استبدل name بصفة اسم المستشفى في الكائن
        // }
        
    
        // اختيار أقرب `k` مستشفيات
        $nearestHospitals = [];
        for ($i = 0; $i < $k; $i++) {
            $nearestHospitals[] = $distanceAndHospitalData[$i]['hospital'];
        }
        // dump($nearestHospitals);

        return $nearestHospitals;
    }
    
    // دالة لحساب المسافة بين نقطتين
    function calculateDistance($latitude1, $longitude1, $latitude2, $longitude2) {
        $earthRadius = 6371e3; // نصف قطر الأرض بالأمتار
    
        $deltaLatitude = deg2rad($latitude2 - $latitude1);
        $deltaLongitude = deg2rad($longitude2 - $longitude1);
    
        $a = sin($deltaLatitude / 2) * sin($deltaLatitude / 2) +
            cos($latitude1) * cos($latitude2) *
            sin($deltaLongitude / 2) * sin($deltaLongitude / 2);
    
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
        $distance = $earthRadius * $c;
    
        return $distance;
    }
    
    // دالة لتحويل الدرجات إلى راديان
    function deg2rad($degrees) {
        return $degrees * (pi() / 180);
    }
    
    
}
