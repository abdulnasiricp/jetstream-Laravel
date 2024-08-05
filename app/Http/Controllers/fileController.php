<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class fileController extends Controller
{
    //
    function upload(Request $req)
    {
        $result=$req->file("file")->store("docs");
        return ["result"=>$result];
       
    }

    function index($name)
    {
        $totle="Mr.";
        return Blade::render("<h1>Hello  $totle $name</h1>");


    }
}
