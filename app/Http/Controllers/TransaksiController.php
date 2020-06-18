<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use App\Sayur;
use Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kategori = Sayur::orderBy('kategori', 'asc')->select('kategori')->distinct()->get();
      $transaksi = Transaksi::orderBy('id', 'desc')->where('user_id', Auth::user()->id)->paginate(7);
      return view('pembeli.keranjang', compact('transaksi', 'kategori'));
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'sayur_id' => $request->sayur_id,
            'user_id' => $request->user_id,
            'penjual_id' => $request->penjual_id,
            'jumlah'=>$request->jumlah,
            'harga' => $request->harga
        ]);
        return redirect('/transaksi')->with('status', 'Order Sayur Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
