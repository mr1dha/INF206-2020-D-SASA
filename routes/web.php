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

Route::get('/', 'PageController@index');
Route::get('/daftar', 'PageController@daftar');
Route::get('/login', 'PageController@login');

Route::resource('sayur','SayurController');

Route::get('/dashboard', function () {
    return view('dashboard');
});

