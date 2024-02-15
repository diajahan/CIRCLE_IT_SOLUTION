<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/orders-api','App\Http\Controllers\ProductController@getOrders');
// Route::get('send-order/{id}','App\Http\Controllers\ProductController@testOrders');
// Route::get('/post-order','App\Http\Controllers\ProductController@getOrders');


