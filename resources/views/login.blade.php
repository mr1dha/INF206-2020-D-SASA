@extends('layout.master')

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
						<smal class="text-muted">Belum punya akun? daftar <a href="{{url('/daftar')}}">di sini</a></smal>		
					</div>
				</div>
			</div>
		</div>
		<!-- End Login Form -->
@endsection