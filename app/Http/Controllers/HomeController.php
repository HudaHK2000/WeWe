<?php

namespace App\Http\Controllers;
use App\Models\Status;
use App\Models\Order;
use App\Models\Hospital;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        return view('home',compact('statuses'));
    }
    public function trackWidth(){
        $order_id = 44;
        $hospital_id = 5;
        $order = Order::find($order_id);
        $hospital = Hospital::find($hospital_id);
        return view('frontEnd.map',compact(['order','hospital']));
    }
}
