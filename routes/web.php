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

Route::get('/', 'PembeliController@dashboard');


// Route Autentikasi Penjual
Route::get('penjual/login', 'Auth\PenjualAuthController@getLogin')->name('penjual.login');
Route::get('penjual/daftar', 'Auth\PenjualAuthController@getDaftar')->name('penjual.daftar');
Route::post('penjual/logout', 'Auth\PenjualAuthController@postLogout')->name('penjual.logout');
Route::post('penjual/login', 'Auth\PenjualAuthController@postLogin');
Route::post('penjual/daftar', 'Auth\PenjualAuthController@postDaftar');

// Route Autentikasi Pembeli
Auth::routes();

// Route Aktifitas Penjual
Route::resource('sayur', 'SayurController');
Route::get('penjual/dashboard', 'PenjualController@dashboard');
Route::get('penjual/riwayat', 'PenjualController@riwayat');
Route::get('penjual/proses', 'PenjualController@proses');
Route::get('penjual/hasil', 'PenjualController@hasil');
Route::post('status/{transaksi}', 'PenjualController@status');

// Route Aktifitas Pembeli
Route::get('pembeli/dashboard', 'PembeliController@dashboard');
Route::get('pembeli/cart', 'PembeliController@cart');
Route::get('/produk', 'PageController@tampilan');
Route::post('/sayur/cari', 'PembeliController@postCari');
Route::get('/cari/{jenis}/{key}', 'PembeliController@cari');
Route::post('/transaksi', 'TransaksiController@store');
Route::get('/transaksi', 'TransaksiController@index');

// Route::get('/penjual/home', 'HomeController@dashboard')->name('home');
