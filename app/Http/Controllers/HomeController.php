<?php

namespace App\Http\Controllers;
use App\Models\Status;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('home',compact('statuses'));
    }
}
