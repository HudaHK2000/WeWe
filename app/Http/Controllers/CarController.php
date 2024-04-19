<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Hospital;
use App\Models\Status;
use App\Models\CarStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=car::all();
        return view('BackEnd.car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hospitals=Hospital::all();
        return view('BackEnd.car.create',compact(['hospitals']));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'car_number' => ['required','min:4','unique:cars,car_number'],
            'hospital_id' => ['required'],
    ],[
        'car_number.required'=> 'Please enter the car_number',
    ])->validate();
    $car = car::create([
        'car_number' => $request->car_number,
        'hospital_id' => $request->hospital_id,
    ]);
    return redirect()->back()->with('success','The addition process was completed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $hospitals=Hospital::all();
        return view('BackEnd.car.edit',compact(['hospitals','car']));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validator = Validator::make($request->all(), [
            'car_number' => ['required', 'min:4'],
            'hospital_id' => ['required'],
            'status_id' => ['required', 'array'], // يجب أن تكون مصفوفة
        ], [
            'car_number.required' => 'Please enter the car number',
        ])->validate();

        $car->update([
            'car_number' => $request->car_number,
            'hospital_id' => $request->hospital_id,
        ]);
        return redirect()->back()->with('success', 'The update process was completed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->with('success','The deletion was completed successfully.');
    }
}
