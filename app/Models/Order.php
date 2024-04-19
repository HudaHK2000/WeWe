<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['latitude','longitude','blood_group','user_id','urgent_user_id','car_id','price','hide'];

    public function ordersStatuses(){
        return $this->hasMany('App\Models\OrderStatus');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function urgentUser(){
        return $this->belongsTo('App\Models\UrgentUser','urgent_user_id','id');
    }

    public function hospitals(){
        return $this->hasMany('App\Models\OrderHospital');
    }
    public function car(){
        return $this->belongsTo('App\Models\Car','car_id','id');
    }
}