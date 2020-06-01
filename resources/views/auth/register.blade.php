@extends('layout.master')

@section('title', 'SASA | Daftar')

@section('style')
  <link rel="stylesheet" href="{{url('assets/css/daftar.css')}}">
@endsection

@section('content')
<div class="container" id="container-daftar">
  <div class="row">
    <div class="col-lg-5 kolom-1">
      <p class="display-4"><i class="ni ni-single-copy-04"></i> Registrasi User Baru SASA<p>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group shadow">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
              </div>
              <input class="form-control form-control-alternative" placeholder="Nama lengkap" type="text" name="nama" required>

            </div>
              @error('nama')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

           <div class="form-group shadow mt-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
              </div>
              <input class="form-control form-control-alternative" placeholder="Masukkan Email" type="text" name="email" required>
            </div>
              @error('email')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

          <div class="form-group shadow mt-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control form-control-alternative" placeholder="Buat Password" type="password" name="password" required>
            </div>
              @error('password')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

          <div class="form-group shadow mt-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
              </div>
              <input class="form-control form-control-alternative" placeholder="Konfirmasi Password" type="password" name="password_confirmation" required>
            </div>
              @error('password')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

          <div class="form-group shadow mt-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
              </div>
              <input class="form-control form-control-alternative" placeholder="Nomor Hp" type="text" name="no_hp" required>
            </div>
              @error('no_hp')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

          <div class="form-group shadow mt-3">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
              </div>
              <textarea class="form-control form-control-alternative" placeholder="Alamat Lengkap" type="text" name="alamat_rumah" required></textarea>
            </div>
              @error('alamat_rumah')
                  <span class="text-danger" role="alert">
                      <small>{{ $message }}</small>
                  </span>
              @enderror
          </div>

          <button class="btn btn-success mb-2" type="submit" name="submit">DAFTAR</button>
      </form>
      <span class="text-muted">Sudah punya akun? Login <a href="{{url('/login')}}">di sini</a></span>
      </div>
    <div class="col-lg-7 kolom-2">
      <img src="{{url('assets/pic/daftar.png')}}" alt="gambar-daftar" class="img-fluid">
      <p class="lead text-muted">Ayo bergabung bersama <span>SASA</span> dan <span>BANTU  </span>pedagang kecil</p>
      <hr>
    </div>
  </div>
</div>
@endsection