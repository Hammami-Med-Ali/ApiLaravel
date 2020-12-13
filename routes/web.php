<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});

    
//Route::get('/student','App\Http\Controllers\ApiController@index');
Route::get('/index','ApiController@index');
Route::get('/editdata/{id} ','ApiController@edit');
Route::put('/modifier/{id} ','ApiController@update');
