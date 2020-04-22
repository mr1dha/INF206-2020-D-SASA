<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function daftar(){
    	return view('daftar');
    }

    public function login(){
    	return view('login');
    }
}
