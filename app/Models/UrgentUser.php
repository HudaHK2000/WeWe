<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrgentUser extends Model
{
    use HasFactory;
    protected $fillable=['phone'];

    public function ordersUrgent(){
        return $this->hasMany('App\Models\Order');
    }
}
