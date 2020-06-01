<!-- AKSES HALAMAN INI PADA ROUTE : "http://localhost:8000/sayur/create" -->

@extends('layout.master')

@section('title', 'SASA |Tambah')

@section('style')
  <!-- <link rel="stylesheet" href="{{url('assets/css/daftar.css')}}"> -->
  <link rel="stylesheet" href="{{url('assets/css/tambah.css')}}">
@endsection

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

body{
    background-image:url('assets/pic/wave-min.png');
}
</style>
<div class="container" id="container-tambah">
    <div class="card uper">
         <div class="card-header">
        <center>Tambahkan Data Sayur</center>
        </div>
          <div class="card-body">
          @if ($errors->any())
              <div class="alert alert-danger">
                   <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
                   </ul>
             </div><br />
          @endif
      <form method="post" action="{{url('/sayur')}}" enctype="multipart/form-data">
      
          <div class="form-group">
              <input type="text" placeholder="Nama Sayur" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
            @csrf
              <select name="fresh_state" class="form-control" required>
                <option value="">Fresh State</option>
                <option value="10%">10%</option>
                <option value="20%">20%</option>
                <option value="30%">30%</option>
                <option value="40%">40%</option>
                <option value="50%">50%</option>
                <option value="60%">60%</option>
                <option value="70%">70%</option>
                <option value="80%">80%</option>
                <option value="90%">90%</option>
                <option value="100%">100%</option>
              </select>
          </div>
          <div class="form-group">
              <input type="number" class="form-control" placeholder="Harga" name="harga" required>
          </div>

          <div class="form-group">
              <input type="file" class="form-control" placeholder="Masukkan Gambar" name="gambar" required>
          </div>

          <input type="hidden" name="penjual_id" value="{{Auth::user()->id}}" required>
          <button type="submit" class="btn btn-primary">Tambah Sayur</button>
      </form>
  </div>
</div>
</div>

@endsection