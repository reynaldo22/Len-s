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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/service', 'ServiceController@index');
Route::post('/service/store', 'ServiceController@store');

Route::get('/service/detail', function () {
    return view('detail');
});

Route::get('/service/detail/booking', function () {
    return view('booking');
});