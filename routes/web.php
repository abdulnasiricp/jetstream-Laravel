<?php

use App\Http\Controllers\fileController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('data',[memberController::class,'index']);


// $info='hello welcome to the site';

// $info = Str::of($info)->ucfirst($info)->replaceFirst("Hello","Hi",$info)->camel($info);

// echo $info;

// Route::get('device/{key}',[DeviceController::class,'index']);
Route::get('device/{key:name}',[DeviceController::class,'index']);

Route::get('postList',[PostController::class,'list']);

Route::controller(fileController::class)->group(function () {

    Route::get("list/{name}","index");

});

