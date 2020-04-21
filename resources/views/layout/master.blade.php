<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

  <!-- Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

  <!-- My Css -->
  <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}">
</head>
@yield('style')

<body >
@yield('content')
  

  <!-- Core -->
  <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{url('assets/scss/argon-design-system/vendor/bootstrap/bootstrap.min.js')}}"></script>

  <!-- Optional plugins -->
  <script src="{{url('assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js')}}"></script>

  <!-- Argon JS -->
  <script src="{{url('assets/js/argon-design-system.js')}}"></script>

  <!-- My Script -->
  <script src="{{url('assets/js/myscript.js')}}"></script>

  </body>
</html>