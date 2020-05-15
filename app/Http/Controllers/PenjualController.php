<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualController extends Controller
{
   /* Degan menambahkan method ini 
		Maka Controller ini hanya dapat di akses
		Jika Penjual sudah login
   */
   public function __construct()
    {
        $this->middleware('auth:penjual');
    }

    public function dashboard(){
    	return view('penjual.dashboard');
    }

    // Silakan tambahkan method lain di sini
}
