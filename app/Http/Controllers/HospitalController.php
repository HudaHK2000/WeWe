<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('BackEnd.hospital.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        return view('BackEnd.hospital.create',compact(['countries','cities']));
    }

    public function getCities($countryId){
        $cities = City::where('country_id', $countryId)->get();
        return response()->json($cities);
    }
    public function showGPS($id){
        $hospital = Hospital::find($id);
        // dd($hospital);
        return view('BackEnd.hospital.map',compact('hospital'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            // 'about.required' => 'Please enter the description about the hospital',
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
        $hospital = new Hospital();
        $hospital->name = $request->name ;
        $hospital->address = $request->address ;
        $hospital->latitude = $request->latitude ;
        $hospital->longitude = $request->longitude ;
        $hospital->city_id = $request->city_id ;
        $hospital->status = "Available" ;
        $hospital->save();
        return redirect()->back()->with('success','The addition process was completed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        $countries = Country::all();
        $cities = City::all();
        return view('BackEnd.hospital.edit',compact(['countries','cities','hospital']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
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
        $hospital->name = $request->name ;
        $hospital->address = $request->address ;
        $hospital->latitude = $request->latitude ;
        $hospital->longitude = $request->longitude ;
        $hospital->city_id = $request->city_id ;
        $hospital->save();
        return redirect()->back()->with('success','The modification was completed successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        return redirect()->back()->with('success','The deletion was completed successfully.');
    
    }
}
