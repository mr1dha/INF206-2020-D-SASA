@extends('layout.master-penjual')

@section('title', 'SASA | Login')

@section('style')
  <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
@endsection

@section('content')

<img src="{{url('assets/pic/wave-min.png')}}" class="wave">
<div class="container"> 
            <div class="row baris"> 
                <!-- Image-->
                <div class="col-lg kolom-1">
                    <img src="  {{url('assets/pic/ilus1.svg')}}" class="image image-fluid"  alt="shopping">
                </div>

                <!-- Login Form -->
                <div class="col-lg kolom-2">
                    <div class="login-form border-0">
                        <img src="{{url('assets/pic/icon.png')}}" alt="icon" width="150px">
                        <p class="welcome-text">sasa | Penjual</p>

                        <form action="" method="post">
                        @csrf

                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4"> 
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                  </div>
                                  <input class="form-control form-control-alternative" placeholder="E-Mail" type="text" name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                  </div>
                                  <input class="form-control form-control-alternative" placeholder="Password" type="password" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                              </div>

                            <div class="form-group row">
                                <div class="col-md-12 text-left">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label text-left" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                              <button type="submit" class="btn btn-success w-100 mb-2">Masuk</button>
                        </form>
                        
                        <smal class="text-muted">Belum punya akun? daftar <a href="{{url('/daftar')}}">di sini</a></smal>       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Login Form -->
@endsection