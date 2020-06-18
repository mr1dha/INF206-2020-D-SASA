<?php

namespace App\Http\Controllers;

use App\Sayur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;

class SayurController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only'=> 'show']);
        $this->middleware('auth:penjual')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sayur = Sayur::orderBy('id', 'desc')->where('penjual_id', Auth::user()->id)->paginate(7);
        return view('penjual.sayur-index', compact('sayur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Sayur::orderBy('kategori', 'asc')->select('kategori')->distinct()->get();
        return view('penjual.tambah', compact('kategori'));
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
            'kategori' => ucfirst($request->kategori),
            'harga' => $request->harga,
            'gambar' => $nama_file
        ]);

        return redirect('/sayur')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function show(Sayur $sayur)
    {
        $rekomendasi = Sayur::orderBy('id', 'desc')->where('kategori', $sayur->kategori)
        ->where('id', '!=', $sayur->id)->get();
        return view('pembeli.show', compact('sayur', 'rekomendasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function edit(Sayur $sayur)
    {
        $kategori = Sayur::orderBy('kategori', 'asc')->select('kategori')->distinct()->get();
        return view('penjual.update', compact('sayur', 'kategori'));
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
            'kategori' => ucfirst($request->kategori),
            'harga' => $request->harga,
            'gambar' => $nama_file
        ]);

        return redirect('/sayur')->with('status', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sayur  $sayur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sayur $sayur)
    {
        $image_path = "img/".$sayur->gambar;
        if(File::exists($image_path))
            File::delete($image_path);

        Sayur::destroy($sayur->id);
        return redirect('/sayur') -> with('status','Data '.$sayur->nama.' berhasil dihapus');
    }
}
