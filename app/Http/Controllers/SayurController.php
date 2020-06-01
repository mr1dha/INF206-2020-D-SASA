<?php

namespace App\Http\Controllers;

use App\Sayur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SayurController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:penjual');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjual.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $folder_tujuan = 'img';
        $file->move($folder_tujuan, $nama_file);

        Sayur::create([
                'penjual_id' => $request->penjual_id,
                'nama' => $request->nama,
                'fresh_state' => $request->fresh_state,
                'harga' => $request->harga,
                'gambar' => $nama_file
        ]);

        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function show(Sayur $sayur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function edit(Sayur $sayur)
    {
        return view('penjual.update', compact('sayur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sayur $sayur)
    {
        $nama_file = $sayur->gambar;
        if($request->hasFile('gambar')){
            $nama_file = time()."_".$request->file('gambar')->getClientOriginalName();
            $folder_tujuan = 'img';
            $request->file('gambar')->move($folder_tujuan, $nama_file);
            $image_path = "img/".$sayur->gambar;

            if(File::exists($image_path))
                File::delete($image_path);
            }

            Sayur::where('id', $sayur->id)
            ->update([
                'penjual_id' => $request->penjual_id,
                'nama' => $request->nama,
                'fresh_state' => $request->fresh_state,
                'harga' => $request->harga,
                'gambar' => $nama_file
            ]);

        return redirect()->back()->with('status', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sayur $sayur)
    {
        //
    }
}
