@extends('layout.master')

@section('title', 'SASA | Daftar')

@section('style')
  <link rel="stylesheet" href="{{url('assets/css/daftar.css')}}">
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-5 kolom-1">
			<p class="display-4"><i class="ni ni-single-copy-04"></i> Registrasi akun SASA<p>
			<form action="">
			  <div class="form-group shadow">
		        <div class="input-group input-group-alternative">
		          <div class="input-group-prepend">
		            <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
		          </div>
		          <input class="form-control form-control-alternative" placeholder="Nama lengkap" type="text" name="nama">
		        </div>
		      </div>
		       <div class="custom-control custom-radio d-inline mx-2 ">
		       		<input type="radio" class="custom-control-input" name="jk" id="custom-radio">
		       		<label for="custom-radio" class="custom-control-label">Laki-laki</label>
		       </div>
		       <div class="custom-control custom-radio d-inline">
		       		<input type="radio" class="custom-control-input" name="jk" id="custom-radio-2">
		       		<label for="custom-radio-2" class="custom-control-label">Perempuan</label>
		       </div>
		       <div class="form-group shadow mt-3">
		        <div class="input-group input-group-alternative">
		          <div class="input-group-prepend">
		            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
		          </div>
		          <input class="form-control form-control-alternative" placeholder="Buat Username" type="text" name="username">
		        </div>
		      </div>
		      <div class="form-group shadow mt-3">
		        <div class="input-group input-group-alternative">
		          <div class="input-group-prepend">
		            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
		          </div>
		          <input class="form-control form-control-alternative" placeholder="Buat Password" type="text" name="password">
		        </div>
		      </div>
		      <div class="form-group shadow mt-3">
		        <div class="input-group input-group-alternative">
		          <div class="input-group-prepend">
		            <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
		          </div>
		          <input class="form-control form-control-alternative" placeholder="Nomor Hp" type="text" name="nomor_hp">
		        </div>
		      </div>
		      <div class="form-group shadow mt-3">
		        <div class="input-group input-group-alternative">
		          <div class="input-group-prepend">
		            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
		          </div>
		          <textarea class="form-control form-control-alternative" placeholder="Alamat Lengkap" type="text" name="alamat"></textarea>
		        </div>
		      </div>
		      <div class="form-group">
				<select class="form-control" name="daftar-sebagai">
					<option value="none">Daftar Sebagai</option>
					<option value="Pembeli">1. Pembeli</option>
					<option value="Penjual">2. Penjual</option>
				</select>
			</div>
		      <button class="btn btn-success" type="submit" name="submit">DAFTAR</button>
			</form>
			<small class="text-muted">Sudah punya akun? Login <a href="#">di sini</a></small>
			</div>
		<div class="col-lg-7 kolom-2">
			<img src="{{url('assets/pic/daftar.png')}}" alt="gambar-daftar" class="img-fluid">
			<p class="lead text-muted">Ayo bergabung bersama <span>SASA</span> dan <span>BANTU  </span>pedagang kecil</p>
			<hr>
		</div>
	</div>
</div>
@endsection










<!-- 
<div class="form-group">
			        <div class="input-group input-group-alternative">
			          <div class="input-group-prepend">
			            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
			          </div>
			          <input class="form-control form-control-alternative" placeholder="Username" type="text" name="username">
			        </div>
			      </div>
				<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="far fa-id-card"></i></div>
							</div>
							<input type="text" class="form-control" name="nama" placeholder="Nama lengkap">
						</div>
					</div>
					<div class="form-group border">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-venus-mars"></i></div>
							</div>
							<div class="form-check pilihan ml-2 mt-1">
								<input type="radio" class="form-check-input" name="jenis-kelamin">
								<label for="Laki-laki">Laki-laki</label>
							</div>
							<div class="form-check pilihan ml-2 mt-1">
								<input type="radio" class="form-check-input" name="jenis-kelamin">
								<label for="Laki-laki">Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-user"></i></div>
							</div>
							<input type="text" class="form-control" name="username" placeholder="Buat username">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
							</div>
							<input type="password" class="form-control" name="password" placeholder="Buat Password">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-phone"></i></div>
							</div>
							<input type="number" class="form-control" name="nomor-hp" placeholder="Nomor HP">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
							</div>
							<textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap"></textarea>
						</div>
					</div>
					<div class="form-group">
						<select class="form-control" name="daftar-sebagai">
							<option value="none">Daftar Sebagai</option>
							<option value="Pembeli">1. Pembeli</option>
							<option value="Penjual">2. Penjual</option>
						</select>
					</div>
					<p class="text-left reg">Sudah punya akun? Login <a href="login.html">di sini</a></p>
					<button type="submit" class="btn btn-success">DAFTAR</button> -->