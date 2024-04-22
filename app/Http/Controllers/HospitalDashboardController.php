<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Country;
use App\Models\City;
use App\Models\Order;
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
        // dd($hospital_id);
        $orders = Order::where('hide',0)->get();
        return view('HospitalDashboard.order.index',compact(['orders','hospital_id']));
    }

    public function showGPS($id,$hospital_id){
        $order = Order::find($id);
        return view('HospitalDashboard.order.map',compact('order'));
    }
}
