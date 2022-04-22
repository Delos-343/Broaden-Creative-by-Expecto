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
Route::get('kontak','KontakController@get_all_kontak');
Route::post('kontak','KontakController@create');
Route::put('/kontak/{id}','KontakController@update');
Route::delete('/kontak/{id}','KontakController@delete');

