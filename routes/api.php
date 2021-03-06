<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('employees', App\Http\Controllers\API\EmployeeAPIController::class);

Route::resource('customers', App\Http\Controllers\API\CustomerAPIController::class);

Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class)->middleware('auth:api');;

Route::post('/register', 'App\Http\Controllers\API\AuthController@register');
Route::post('/login', 'App\Http\Controllers\API\AuthController@login');
