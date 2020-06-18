<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sayur;
class PembeliController extends Controller
{
   /* Degan menambahkan method ini 
		Maka Controller ini hanya dapat di akses
		Jika Pembeli sudah login
   */
    public function __construct()
    {
      $this->middleware('auth')->except(['dashboard','cari', 'postCari']);
    }

    public function dashboard(){
      $kategori = Sayur::orderBy('kategori', 'asc')->select('kategori')->distinct()->get();
      $sayur = Sayur::orderBy('id', 'desc')->limit(8)->get();
      return view('pembeli.dashboard', compact('kategori', 'sayur'));
    }   

    public function cart(){
      return view('pembeli.shop');
    }

    public function postCari(Request $request){
      return redirect('/cari/sayur/'.$request->key);
    } 

    public function cari($jenis, $key){
      $kategori = Sayur::orderBy('kategori', 'asc')->select('kategori')->distinct()->get();

      if($jenis == 'kategori'){
        $sayur = Sayur::orderBy('id', 'desc')->where('kategori', $key)->paginate(9);
        return view('pembeli.cari', compact('sayur', 'kategori', 'key'));
      
      }else{
        $sayur = Sayur::where('nama', 'LIKE', "%{$key}%")
          ->orWhere('kategori', 'LIKE', "%{$key}%")->paginate(9);

        return view('pembeli.cari', compact('sayur', 'kategori', 'key')); 
      }
    }

  }
