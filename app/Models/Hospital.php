<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable=['name','address','latitude','longitude','status','city_id'];

    public function cars(){
        return $this->hasMany('App\Models\Car');
    }
    public function orders(){
        return $this->hasMany('App\Models\OrderHospital');
    }
    public function city(){
        return $this->belongsTo('App\Models\City','city_id','id');
    }
    public function user(){
        return $this->hasMany('App\Models\User');
    }

}
