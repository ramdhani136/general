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

Route::resource('/karyawan','Karyawan\KaryawanController');
Route::resource('/divisi','Divisi\DivisiController');
Route::resource('/dataasset','Aset\DataassetController');
Route::resource('/lokasi','Lokasi\LokasiController');
Route::resource('/asset','Aset\AsetController');
Route::get('/asset/{id}','AsetController@show');
Route::put('/asset/{id}','AsetController@update');
Route::delete('/asset/{id}','AsetController@destroy');

