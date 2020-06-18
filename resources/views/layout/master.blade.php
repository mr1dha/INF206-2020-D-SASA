<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/all.min.css')}}" type="text/css">

  <!-- My Css -->
  <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}">
  
  <!-- Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

  @yield('style')
</head>

<body >
  <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">SASA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-default">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="javascript:void(0)">
                <p class="display-4">SASA</p>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <ul class="navbar-nav ml-lg-auto">
         @guest
         <li class="nav-item active">
          <a class="nav-link badge badge-primary py-2" id="jual" href="{{ url('penjual/dashboard') }}"><i class="fas fa-store my-1"></i>JUAL SAYUR</a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link badge badge-primary py-2" id="beli" href="{{ route('login') }}"><i class="fas fa-cart-plus my-1"></i>BELI SAYUR</a>
        </li>
        @else
        @isset($kategori)
        <li class="nav-item dropdown active">
          <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <span class="fas fa-list"> </span>  KATEGORI <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right menu-kategori" aria-labelledby="navbarDropdown">
            @foreach($kategori as $item)
            <a class="dropdown-item" href="{{url('/cari/kategori/'.$item->kategori)}}">{{$item->kategori}} </a>
            @endforeach
          </div>
        </li>
        @endisset
        <li class="nav-item active">
          <a class="nav-link nav-link-icon" href="{{url('/transaksi')}}">
           <span class="fas fa-cart-plus"></span><span> KERANJANG SAYA</span>
         </a>
       </li>
       
       <li class="nav-item active">
        <a class="nav-link nav-link-icon" href="{{url('pembeli/dashboard')}}">
         <span class="fas fa-home"></span><span> BERANDA</span>
       </a>
     </li>

     <li class="nav-item dropdown active">
      <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        <span class="fas fa-user-circle"> </span>  {{ Auth::user()->nama }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </li>
  @endguest
</ul>
</div>
</div>
</nav>


<!-- End Navbar -->
@yield('content')
<!-- Modal -->
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-success">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification">Pemberitahuan</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-3 text-center">
          <i class="fas fa-check-circle fa-7x"></i>
          <h1 class="h2 mt-4 font-weight-bold text-white">
           @if(session('status'))
           {{session('status')}}
           @endif  
         </h1>
       </div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tutup</button>
    </div>
  </div>
</div>
</div>
<!-- End Modal -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<!-- Core -->
<script src="{{url('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>

<!-- Optional plugins -->
<script src="{{url('assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js')}}"></script>

<!-- Argon JS -->
<script src="{{url('assets/js/argon-design-system.js')}}"></script>

<!-- My Script -->
<script src="{{url('assets/js/myscript.js')}}"></script>

@if(session('status'))
<script>
  $(document).ready(function(){
    $('#modal-notification').modal('show');
  });
</script>
@endif
</body>
</html>