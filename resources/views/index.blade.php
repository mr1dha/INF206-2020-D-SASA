@extends('layout.master')

@section('title', 'SASA | Home')

@section('style')
  <link rel="stylesheet" href="{{url('assets/css/index.css')}}">
@endsection

@section('content')
<img src="{{url('assets/pic/wave-min.png')}}" class="wave">
<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-trasnparent fixed-top">
	    <div class="container">
	        <a class="navbar-brand" href="#">SAYUR SISA ONLINE</a>
	        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation"> -->
	            <!-- <span class="navbar-toggler-icon"></span> -->
	        </button>
	        <div class="collapse navbar-collapse" id="navbar-default">
	            <div class="navbar-collapse-header">
	                <div class="row">
	                    <div class="col-6 collapse-brand">
	                        <a href="javascript:void(0)">
	                            <img src="../../assets/img/brand/blue.png">
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
	                <li class="nav-item">
	                    <a class="nav-link nav-link-icon" href="#">
	                        <i class="ni ni-favourite-28"></i>
	                        <span class="nav-link-inner--text d-lg-none">Discover</span>
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link nav-link-icon" href="#">
	                        <i class="ni ni-notification-70"></i>
	                        <span class="nav-link-inner--text d-lg-none">Profile</span>
	                    </a>
	                </li>
	                <li class="nav-item dropdown">
	                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="ni ni-settings-gear-65"></i>
	                        <span class="nav-link-inner--text d-lg-none">Settings</span>
	                    </a>
	                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
	                        <a class="dropdown-item" href="#">Action</a>
	                        <a class="dropdown-item" href="#">Another action</a>
	                        <div class="dropdown-divider"></div>
	                        <a class="dropdown-item" href="#">Something else here</a>
	                    </div>
	                </li>
	            </ul>            
	        </div>
	    </div>
	</nav>
	<!-- End navbar -->
		
	<div class="container">	
			<div class="row baris">	
				<!-- Image-->
				<div class="col-lg kolom-1">
					<img src="	{{url('assets/pic/ilus1.svg')}}" class="image image-fluid"  alt="shopping">
				</div>

				<!-- Login Form -->
				<div class="col-lg kolom-2">
					<div class="login-form border-0">
						<img src="{{url('assets/pic/icon.png')}}" alt="icon" width="150px">
						<p class="welcome-text">sasa</p>
						<form action="" method="post">
							<div class="form-group">
						        <div class="input-group input-group-alternative mb-4">
						          <div class="input-group-prepend">
						            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
						          </div>
						          <input class="form-control form-control-alternative" placeholder="Username" type="text" name="username">
						        </div>
						      </div>
						      <div class="form-group">
						        <div class="input-group input-group-alternative mb-4">
						          <div class="input-group-prepend">
						            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
						          </div>
						          <input class="form-control form-control-alternative" placeholder="Password" type="password" name="password">
						        </div>
						      </div>
						      <button class="btn btn-success w-100 mb-2">Masuk</button>
						</form>
						<smal class="text-muted">Belum punya akun? daftar <a href="#">di sini</a></smal>		
					</div>
				</div>
			</div>
		</div>
		<!-- End Login Form -->

@endsection