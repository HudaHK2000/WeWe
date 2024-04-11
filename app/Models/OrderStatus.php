<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    protected $fillable=['order_id','status_id','price'];

    public function order(){
        return $this->belongsTo('App\Models\Order','order_id','id');
    }

    public function status(){
        return $this->belongsTo('App\Models\Status','status_id','id');
    }


}
