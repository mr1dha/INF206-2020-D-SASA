@extends('layout.master')

@section('title', 'SASA | Situs Jual Beli Sayur Sisa')

@section('style')
<style>
  @media(min-width: 720px){
    #logo{
      display: none;
    }
  }
  .card-img-overlay img{
    object-fit: cover;
  }
  .card-img-overlay, .card-img-overlay img{
    height: 507px;
  }
</style>
<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/produk.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">

<link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"> 
@endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero mt-5 pt-5">
  <div class="container">
    <!-- Logo -->

    <div class="col-lg-12" id="logo">
      <div class="section-title text-center">
        <img src="{{ asset('assets/pic/logo.PNG') }}" alt="" class="img-fuid" width="90%">
        <h2></h2>
      </div>
    </div>

    <!-- End Logo -->
    <div class="row">
      <div class="col-lg-3 kategori">
        <img src="{{ asset('assets/pic/logo.PNG') }}" alt="" class="img-fuid mb-4">
        <div class="hero__categories">
          <div class="hero__categories__all bg-gradient-success">
            <i class="fa fa-bars"></i>
            <span>Kategori Sayur</span>
          </div>
          <ul>
            @foreach($kategori as $item)
            <li><a href="{{url('/kategori/'.$item->kategori)}}">
              <i class="fas fa-chevron-circle-right text-success mr-1"></i> {{$item->kategori}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="{{ url('/sayur/cari') }}" method="POST">
                @csrf
                <input type="text" placeholder="Mau beli sayur apa?" name="key">
                <button type="submit" class="site-btn bg-gradient-success">CARI</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>+62 823 1582 1616 </h5>
                <span>Call Center SASA</span>
              </div>
            </div>
          </div>

          <div class="card bg-dark text-white ">
            <img class="card-img" src="{{ asset('img/'.$sayur[0]->gambar) }}" alt="Card image">
            <div class="card-img-overlay p-0">
              <div class="card-body banner-info">
               <p class="card-title font-weight-bold  my-0">{{ $sayur[0]->nama }}</p>
               <small class="text-white mr-1 lead"><i class="ni ni-pin-3"></i> {{ $sayur[0]->penjual->alamat_pasar }}</small>
               @if($sayur[0]->fresh_state >= 80)
               <small class="text-white d-inline-block lead mt-1"><i class="ni ni-tag"></i>  Segar</small>
               @elseif($sayur[0]->fresh_state >= 50)
               <small class="text-white d-inline-block lead mt-1"><i class="ni ni-tag"></i>  Kurang segar</small>
               @else
               <small class="text-white d-inline-block lead mt-1"><i class="ni ni-tag"></i>  Tidak segar</small>
               @endif
               <div class="d-block mt-1">
                <a  href="{{ url('sayur/'.$sayur[0]->id) }}" class="btn btn-primary px-3 py-2" >@currency($sayur[0]->harga)</a>
                <a  href="{{ url('sayur/'.$sayur[0]->id) }}" class="btn btn-success px-3 py-2" >Lihat</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Sayur Terbaru</h2>
        </div>
      </div>
    </div>
    <!-- Produk -->
    <div class="row">
      @foreach($sayur as $item)
      <div class="col-md-3 col-sm-6 mb-3">
        <a href="{{ url('/sayur/'.$item->id) }}">
          <div class="card border-0 shadow">
            <img src="{{ asset('img/'.$item->gambar) }}" alt="sayur" class="card-img-top">
            <div class="card-body">
             <p class="card-title font-weight-bold  my-0">{{ $item->nama }}</p>
             <small class="text-muted mr-1"><i class="ni ni-pin-3"></i> {{ $item->penjual->alamat_pasar }}</small>
             @if($item->fresh_state >= 80)
             <small class="text-success d-inline-block"><i class="ni ni-tag"></i>  Segar</small>
             @elseif($item->fresh_state >= 50)
             <small class="text-warning d-inline-block"><i class="ni ni-tag"></i>  Kurang segar</small>
             @else
             <small class="text-danger d-inline-block"><i class="ni ni-tag"></i>  Tidak segar</small>
             @endif
             <div class="d-block mt-1">
              <span class="badge badge-primary px-3 py-2" >@currency($item->harga)</span>
              <span class="badge badge-success px-3 py-2" >Lihat</span>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
</section>
<!-- Featured Section End -->

<!-- Footer Section Begin -->
<hr class="bg-gradient-success" style="width: 3px">
<footer class="footer spad p-0">
  <div class="container text-center">
    <p class="pt-4 pb-4 mb-0"><span class="text-success font-weight-bold">SASA</span> | 2020, Managed By: Kelompok D RPL-DY</p>
  </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@endsection