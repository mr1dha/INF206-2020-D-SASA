<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Sayur;
use Auth;

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
    $statistik = [
      'total_sayur' => Sayur::select('id')->where('penjual_id', Auth::user()->id)->count(),
      'total_beli' => Transaksi::select('id')->where('penjual_id', Auth::user()->id)->where('status', 1)->count(),
      'total_proses'=> Transaksi::select('id')->where('penjual_id', Auth::user()->id)->where('status', 0)->count(),
      'total_hasil' =>Transaksi::select('harga')->where('penjual_id', Auth::user()->id)->sum('harga')
    ];

    $transaksi = Transaksi::orderBy('id', 'desc')
    ->where('penjual_id', Auth::user()->id)
    ->where('status', 0)
    ->get();

    return view('penjual.dashboard', compact('statistik', 'transaksi'));
  }

  public function riwayat(){
    $transaksi = Transaksi::orderBy('id', 'desc')
    ->where('penjual_id', Auth::user()->id)
    ->where('status', 1)
    ->paginate(10);
    return view('penjual.riwayat-beli', compact('transaksi'));
  }

  public function proses(){
    $transaksi = Transaksi::orderBy('id', 'desc')
    ->where('penjual_id', Auth::user()->id)
    ->where('status', 0)
    ->paginate(10);
    return view('penjual.proses-beli', compact('transaksi'));
  }

  public function status(Transaksi $transaksi){
    $transaksi->update(['status' => 1]);
    return redirect()->back()->with('status', 'Pesanan Selesai');
  }

  public function hasil(){
    $transaksi = \DB::table('transaksi as tr')
    ->select(array(\DB::Raw('sum(tr.harga) as tot'), \DB::Raw('DATE(tr.created_at) day')))
    ->groupBy('day')->orderBy('day','desc')->get();
    return view('penjual.hasil', compact('transaksi'));
  }

}
