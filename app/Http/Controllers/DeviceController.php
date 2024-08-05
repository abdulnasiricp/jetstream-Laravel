<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;
class DeviceController extends Controller
{
    //

    function index(Device $key)
    {
        // return $key->all();
        return $key;
    }

    function add(Request $req)
    {
        $device = new Device();
        $device->id = $req->id;

        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if ($result) {

            return ["result" => "Data has been saved Successfully"];
        } else {
            return ["result" => "Opration failled"];

        }

    }
    function update(Request $req)
    {
        $device =  Device::find($req->id);
        $device->id = $req->id;
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if ($result) {

            return ["result" => "Data has been updated Successfully"];
        } else {
            return ["result" => "Opration failled"];

        }

    }

    function delete(Request $req)
    {
        $device = Device::find($req->id);
        $device->delete();
        return ["result"=> "delete sucessfully"];
    }

    function search($name)
    {
        
        return Device::where("name","like","%". $name."%")->get();
    }


    function validateData(Request $req)
    {

        $rules=array(
            "member_id"=>"required || max:4", 
            "name"=>"required",
        );
            $validate = Validator::make($req->all(), $rules);
            if ($validate->fails()) {
                return  response()->json($validate->errors(),401);
            }
            else
            {
                $device = new Device();
                $device->id = $req->id;
        
                $device->name = $req->name;
                $device->member_id = $req->member_id;
                $result = $device->save();
                if ($result) {
        
                    return ["result" => "Data has been saved Successfully"];
                } else {
                    return ["result" => "Opration failled"];
        
                }
        
            }


       
    }
}
