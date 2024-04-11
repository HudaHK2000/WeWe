<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarStatus extends Model
{
    use HasFactory;
    protected $fillable=['car_id','status_id'];

    public function status(){
        return $this->belongsTo('App\Models\Status','status_id','id');
    }

    public function car(){
        return $this->belongsTo('App\Models\Car','car_id','id');
    }
}
