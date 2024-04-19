<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalDashboardController extends Controller
{
    public function index(Hospital $hospital)
    {
        $this->middleware('hospital:' . $hospital->id);
            return view('HospitalDashboard.index',compact('hospital'));
    }
}
