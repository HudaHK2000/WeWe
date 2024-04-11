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
    public function city(){
        return $this->belongsTo('App\Models\City','city_id','id');
    }
}
