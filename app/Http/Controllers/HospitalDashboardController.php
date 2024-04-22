<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Country;
use App\Models\City;
use App\Models\Order;
use App\Models\OrderHospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HospitalDashboardController extends Controller
{
    public function dashboard($hospital_id)
    {
        // dd($hospital_id);
        // $hospital = Hospital::find($hospital_id->id);
        $hospital = Hospital::find($hospital_id);
        return view('HospitalDashboard.hospitalDashboard',compact('hospital'));    
    }

    public function show($hospital_id)
    {
        // dd($hospital_id);
        $hospital = Hospital::find($hospital_id);
        $countries = Country::all();
        $cities = City::all();
        return view('HospitalDashboard.show',compact(['countries','cities','hospital']));
    }

    public function update(Request $request,$hospital_id)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required','min:3'],
            'address' => ['required','min:10'],
            'latitude' => ['required','numeric'],
            'longitude' => ['required','numeric'],
            'country_id' => ['required'],
            'city_id' => ['required','exists:cities,id'],
        ],[
            'name.required'=> 'Please enter the hospital name',
            'address.required' => 'Please enter the address of hospital',
            'latitude.required'=> 'Please enter the hospital location coordinates',
            'latitude.numeric'=> 'Please enter coordinates as numbers only',
            'longitude.required' => 'Please enter the hospital location coordinates',
            'longitude.numeric' => 'Please enter coordinates as numbers only',
            'city_id.required'=> 'Please choose the city name',
            'city_id.exists' => 'Please choose the city name from the list',
            'country_id.required' => 'Please choose the country',
            // 'country_id.exists' => 'Please choose the country from the list',
        ])->validate();
        $hospital = Hospital::find($hospital_id);
        $hospital->name = $request->name ;
        $hospital->address = $request->address ;
        $hospital->latitude = $request->latitude ;
        $hospital->longitude = $request->longitude ;
        $hospital->city_id = $request->city_id ;
        $hospital->save();
        return redirect()->back()->with('success','The modification was completed successfully.');
    }
    public function index($hospital_id)
    {
        $hospital = Hospital::findOrFail($hospital_id);
        $orders = $hospital->orders()->get();
        // dump($orders);
        return view('HospitalDashboard.order.index', compact(['orders', 'hospital_id']));
    }
    public function agreeOrder($hospital_id,$order_hospital_id)
    { 

        $order_hospital_id = OrderHospital::find($order_hospital_id);
        $order_hospital_id->update([
            'status' => 'Agree',
        ]);

        $hospital = Hospital::find($hospital_id);
        $hospital->car_count -= 1;
        $hospital->save();

        $order = $order_hospital_id->order()->first();
        $order->update([
            'status' => 'Agree Hospital',
        ]);
        return redirect()->back()->with('success','The request was accepted successfully.');
    }
    public function disAgreeOrder($hospital_id,$order_hospital_id)
    { 
        $order_hospital_id = OrderHospital::find($order_hospital_id);
        $order_hospital_id->update([
            'status' => 'Dis Agree',
        ]);

        $order = $order_hospital_id->order()->first();
        $order->update([
            'status' => 'Dis Agree Hospital',
        ]);
        return redirect()->back()->with('success','The task was rejected successfully.');
    }
    public function completedOrder($hospital_id,$order_hospital_id)
    { 
        $order_hospital_id = OrderHospital::find($order_hospital_id);
        $order_hospital_id->update([
            'status' => 'Completed',
        ]);

        $hospital = Hospital::find($hospital_id);
        $hospital->car_count += 1;
        $hospital->save();
        
        $order = $order_hospital_id->order()->first();
        $order->update([
            'status' => 'Completed',
        ]);
        return redirect()->back()->with('success','The task was completed successfully.');
    }

    public function showGPS($id,$hospital_id){
        $order_id = OrderHospital::find($id);
        $order_id = $order_id->order()->first();
        $order_id = $order_id->id;
        $order = Order::find($order_id);
        return view('HospitalDashboard.order.map',compact('order'));
    }
    public function receiveOrder(Request $request)
    {
        // استقبال البيانات المرسلة من التطبيق
        $order_id = $request->input('order_id');
        $hospital_id = $request->input('hospital_id');
        // قم بأي إجراءات إضافية هنا، مثل تحديث حالة الطلب في قاعدة البيانات

        // إرسال رد إلى التطبيق بالنتيجة
        return response()->json(['message' => 'Order received successfully']);
    }

}
