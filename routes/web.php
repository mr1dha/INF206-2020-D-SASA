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
Route::get('/tampilan', 'PageController@tampilan');


// Route Autentikasi Penjual
Route::get('penjual/login', 'Auth\PenjualAuthController@getLogin')->name('penjual.login');
Route::get('penjual/daftar', 'Auth\PenjualAuthController@getDaftar')->name('penjual.daftar');
Route::post('penjual/logout', 'Auth\PenjualAuthController@postLogout')->name('penjual.logout');;
Route::post('penjual/login', 'Auth\PenjualAuthController@postLogin');
Route::post('penjual/daftar', 'Auth\PenjualAuthController@postDaftar');

// Route Autentikasi Pembeli
Auth::routes();

// Route Aktifitas Penjual
Route::resource('sayur','SayurController');
Route::get('penjual/dashboard', 'PenjualController@dashboard');

// Route Aktifitas Pembeli
Route::get('pembeli/dashboard', 'PembeliController@dashboard');


// Route::get('/penjual/home', 'HomeController@dashboard')->name('home');
