<!-- AKSES HALAMAN INI PADA ROUTE : "http://localhost:8000/sayur/{id_sayur}/edit" -->

@extends('layout.master-penjual')

@section('title', 'SASA |Update')

@section('style')

<link rel="stylesheet" href="{{url('assets/css/update.css')}}">
@endsection

@section('content')
<style>
  body{
    background-image:url('assets/pic/wave-min.png');
  }
</style>
<script>
  function cekKategori(val){
    var e = document.getElementById('kategori');
    if(val == 'lain'){
      e.style.display = '';
      e.value = "";
      e.focus();
    }
    else{
      e.style.display = 'none';
      e.value = val;
    }
  }
</script>
<div class="container" id="container-update">
  <div class="card uper">
    <div class="card-header">
     <center> Edit Data Sayur Anda</center>
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
    <form method="post" action="{{url('/sayur/'.$sayur->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <label for="nama_sayur">Nama Sayur :</label>
      <div class="form-group">
        <input type="text" name="nama" class="form-control" value="{{$sayur->nama}}" required>
      </div>

      <label for="freshstate">Fresh State:</label>
      <div class="form-group">
        <select name="fresh_state" class="form-control" required>
          <option value="{{$sayur->fresh_state}}">{{$sayur->fresh_state}}</option>
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

      <label for="kategori ">Kategori:</label>
      <div class="form-group">
        <select name="kategori" class="form-control" required onchange="cekKategori(this.value);">
          <option value="{{$sayur->kategori}}">{{$sayur->kategori}}</option>
          @foreach($kategori as $item)
          <option value="{{$item->kategori}}">{{$item->kategori}}</option>
          @endforeach
          <option value="lain">Lainnya</option>
        </select>
        <input type="text" class="form-control" placeholder="Tulis katgori lain" name="kategori" id="kategori" style="display: none;" value="{{$sayur->kategori}}" required>
      </div>

      <label for="harga ">Harga:</label>
      <div class="form-group">
        <input type="text" class="form-control" name="harga" value="{{$sayur->harga}}">
      </div>

      <input type="hidden" name="penjual_id" value="{{$sayur->penjual_id}}" required>

      <label for="image" class="d-block">Gambar:</label>
      <div class="form-group">
        <img src="{{asset('img/'.$sayur->gambar)}}" alt="" class="img-fluid m-2" width="175px" style="object-fit: cover;">
        <input type="file" class="form-control" name="gambar">
      </div>
      <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
  </div>
</div>
@endsection