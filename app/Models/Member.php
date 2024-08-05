<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

//     public function setNameAttribute($value)
//     {
//    return $this->attributes["name"] = 'Mr.' .$value;
//     }
//     public function setAddressAttribute($value)
//     {
//    return $this->attributes["address"] = $value.',pakistan';
    // }

    // function getDevice()
    // {
    //     return $this->hasMany('App\Models\Device');
    // }
    public $connection = "mysql2";
}
