<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::all();
        return view('BackEnd.famousStatus.index',compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BackEnd.famousStatus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required','min:4'],
            'description' => ['required','min:10'],
        ],[
            'name.required'=> 'Please enter the status name',
            'description.required' => 'Please enter the description of status',

        ])->validate();
        $status = new status();
        $status->name = $request->name ;
        $status->description = $request->description ;

        $status->save();
        return redirect()->back()->with('success','The addition process was completed successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('BackEnd.famousStatus.edit',compact('status')) ;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required','min:4'],
            'description' => ['required','min:10'],
        ],[
            'name.required'=> 'Please enter the status name',
            'description.required' => 'Please enter the description of status',
        ])->validate();
        $status->name = $request->name ;
        $status->description = $request->description ;
        $status->save();
        return redirect()->back()->with('success','The modification was completed successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->back()->with('success','The deletion was completed successfully.');
    }
}
