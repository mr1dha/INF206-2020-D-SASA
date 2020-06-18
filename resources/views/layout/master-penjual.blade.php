<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

  <!-- My Css -->
  <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}">
  
  <!-- Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/all.min.css')}}" type="text/css">

  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

</head>
@yield('style')

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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('penjual.login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('penjual.daftar') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{url('penjual/dashboard')}}">
                               <span class="fas fa-home"></span><span> Dashboard</span>
                            </a>
                          </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="fas fa-user-circle"> </span> {{ Auth::user()->nama }} <span class="caret"></span>
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


  </body>
</html>