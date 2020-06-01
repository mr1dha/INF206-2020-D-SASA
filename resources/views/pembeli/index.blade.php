@extends('layout.master')

@section('title', 'SASA | Home')

@section('style')
  <link rel="stylesheet" href="{{url('assets/css/index.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/produk.css')}}">

@endsection
	<div class="wave-container">
		<h1>Selamat Datang <br><span class="font-weight-bold">Ridha</span></h1>
 		 <p class="welcome">Check out my awesome waves!</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,160C384,149,480,107,576,117.3C672,128,768,192,864,224C960,256,1056,256,1152,224C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <div class="container">
     <h4 class="text-center font-weight-bold mb-4">
      <i class="ni ni-bullet-list-67" style="color: grey; font-size: 21px;"></i> SAYUR TERBARU</h4>
      <!-- <hr class=" garis"> -->
    	<div class="row">
        <a href="">
        <div class="col-md-3 col-sm-6 mb-3">
          <div class="card border-0 shadow">
              <img src="{{url('assets/pic/sayur/bayam.jpg')}}" alt="" class="card-img-top">
              <div class="card-body">
               <p class="card-title font-weight-bold  my-0">Bayam Lezat</p>
               <small class="text-muted mr-1"><i class="ni ni-pin-3"></i> Pasar Peunayong</small>
               <small class="text-warning d-inline-block"><i class="ni ni-tag"></i> Tidak segar </small>
                <div class="d-block mt-1">
                <button class="btn btn-primary d-inline">Rp 5,000</button>
                <button class="btn btn-success d-inline">Beli</button>
              </div>
            </div>
          </div>
        </a>
      </div>
    	</div>
    </div>
@section('content')