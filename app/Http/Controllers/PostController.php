<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function list()
    {
        return Member::all();
    }
}
