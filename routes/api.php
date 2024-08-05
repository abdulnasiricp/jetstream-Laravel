<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserMemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=> 'auth:sanctum'], function () {
    
Route::get('getApiData',[testApiController::class,'getData']);

Route::get('list/{id?}',[testApiController::class,'deviceList']);

Route::post('addapi',[DeviceController::class,'add']);

Route::put('update',[DeviceController::class,'update']);

Route::delete('delete',[DeviceController::class,'delete']);

Route::get('search/{name}',[DeviceController::class,'search']);

Route::post('validate',[DeviceController::class,'validateData']);

Route::apiResource('member',UserController::class);

});


Route::post('loginUser',[UserMemberController::class,'index']);

Route::post('upload',[fileController::class,'upload']);