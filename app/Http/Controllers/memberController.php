<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;



class memberController extends Controller
{
    //
    function index()
    {
        // return Member::find(1)->companyData;

        // $member = new Member();
        // $member ->name="salman";
        // $member ->email="salman@gmail.com";
        // $member ->address="kohat";
        // $member->save();

    // return 'one to many';
        return Member::find(2)->getDevice;



    }
}
