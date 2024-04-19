<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHospital extends Model
{
    use HasFactory;
    protected $fillable=['order_id','hospital_id','status'];
    public function order(){
        return $this->belongsTo('App\Models\Order','order_id','id');
    }
    public function hospital(){
        return $this->belongsTo('App\Models\Hospital','hospital_id','id');
    }
}
