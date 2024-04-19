<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['car_number','hospital_id'];

    public function hospital(){
        return $this->belongsTo('App\Models\Hospital','hospital_id','id');
    }

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

    public function employees(){
        return $this->hasMany('App\Models\Employee');
    }

}
