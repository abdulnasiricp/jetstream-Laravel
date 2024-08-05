<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class testApiController extends Controller
{
    //
    function getData()
    {
        return [
           
            "name"=>"Nasir",
            "age"=>"24",
            "address"=>"karak"
           

        ];
    }
    function deviceList($id=null)
    {
        // return Device::all();
        // return Device::find($id);
        return $id?Device::find($id):Device::all();
    }
}
