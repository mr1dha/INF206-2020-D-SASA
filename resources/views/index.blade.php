@extends('layout.main')

@section('title', 'SASA | Home')

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/welcome.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/all.min.css')}}" type="text/css">
@endsection

@section('content')
<div class="jumbotron bg-graient-dark">
  <div class="container landing">
    <p class="lead mb-0 pt-5">SELAMAT DATANG DI</p>
    <p class="nama">SASA STORE</p>
    <hr class="my-4">
    <p class="lead">Situs Jual Beli <span class="font-weight-bold"> SAYUR SISA</span> Secara Daring,<br>Pertama <span class="font-weight-bold"> DI DUNIA</span></p>
    <a class="btn bg-gradient-primary btn-lg text-white" href="{{ url('/penjual/dashboard') }}" role="button"><i class="fas fa-user-plus mr-2 shadow"></i>JUAL SAYUR</a>
    <a class="btn bg-gradient-primary btn-lg text-white" href="{{ url('/pembeli/dashboard') }}" role="button"><i class="fas fa-cart-plus mr-2 shadow"></i>BELI SAYUR</a>
  </div>
</div>
<!-- 	<div class="wave-container">
		<h1 class="text-default welcome">Selamat Datang di <br><span class="font-weight-bold nama text-default">SASA</span></h1>
    <hr class="my-4">
 		 <p class="tagline">Situs Jual Beli Sayur Sisa Pertama di Dunia!</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,160C384,149,480,107,576,117.3C672,128,768,192,864,224C960,256,1056,256,1152,224C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    	</div>
    </div> -->
    @endsection