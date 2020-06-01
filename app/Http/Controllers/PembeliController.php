<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
   /* Degan menambahkan method ini 
		Maka Controller ini hanya dapat di akses
		Jika Pembeli sudah login
   */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	return view('pembeli.dashboard');
    }    

}
