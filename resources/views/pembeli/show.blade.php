@extends('layout.master')

@section('title', 'SASA | Keranjang Sayur')

@section('style')
<link rel="stylesheet" href="{{asset('assets/css/show.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->

<link rel="stylesheet" href="{{asset('assets/fontawesome-free/css/all.min.css')}}" type="text/css">
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-gradient-success">
				<h5 class="modal-title text-white h3" id="exampleModalLabel"><i class="fas fa-phone-square-alt"></i> Kontak Penjual</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<p class="h4">Silakan hubungi Penjual pada Nomor Berikut:</p>
				<p class="h1"><i class="fas fa-phone-volume fa-2x"></i></p>
				<p class="h2 mb-2 font-weight-bold" id="nomor">{{ $sayur->penjual->no_hp }}</p>
				<button class="btn btn-success" onclick="copy(this);"><i class="fas fa-copy"></i> Salin Nomor</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Oke Mengerti!</button>
			</div>
		</div>
	</div>
</div>

<!-- End Modal -->
<div class="container mt-5 pt-5">
	<div class="row">
		<div class="col-md-6">
			<img src="{{ asset('/img/'.$sayur->gambar) }}" class="gambar img-fluid">
		</div>
		<div class="col-md-6">
			<div class="card shadow">
				<div class="card-header nama">
					{{ $sayur->nama }}
					<h5 class="card-title harga mb-0">@currency($sayur->harga)</h5>
				</div>
				<div class="card-body">
					<table class="table">
						<tr>
							<td style="width: 10%;"><i class="fas fa-map-marker-alt"></i></td>
							<td> Pasar {{ $sayur->penjual->alamat_pasar }}</td>
						</tr>
						<tr>
							<td style="width: 10%;"><i class="fas fa-leaf"></i></td>
							<td>
								@if($sayur->fresh_state >= 80)
								<span class="badge badge-success d-inline-block">{{ $sayur->fresh_state}}% (Segar)</span>
								@elseif($sayur->fresh_state >= 50)
								<span class="badge badge-warning d-inline-block">{{ $sayur->fresh_state}}% (Kurang segar)</span>
								@else
								<span class="badge badge-danger d-inline-block">{{ $sayur->fresh_state}}% (Tidak segar)</span>
								@endif
							</td>
						</tr>
						<tr>
							<td style="width: 10%;"><i class="fas fa-tags"></i></td>
							<td>{{ $sayur->kategori }}</td>
						</tr>
						<tr>
						</table>
						<form action="{{ url('/transaksi') }}" method="POST">
							@csrf
							<input type="hidden" name="sayur_id" value="{{ $sayur->id }}">
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
							<input type="hidden" name="penjual_id" value="{{ $sayur->penjual->id }}">
							<input type="hidden" name="jumlah" value="1">
							<input type="hidden" name="harga" value="{{ $sayur->harga }}">
							<button type="submit" class="btn btn-success btn-lg w-100 mb-2"><i class="fas fa-cart-plus"></i>  Order Sayur</button>
						</form>


						<a href="#" class="btn btn-outline-success btn-lg pesan w-100 text-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-comment-dots"> </i>  Hubungi Penjual</a>

					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<section class="featured spad">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Rekomendasi Sayur</h2>
						</div>
						@if($rekomendasi->isEmpty())
						<p class="text-muted text-center">Tidak Ada Rekomendasi Sayur</p>
						@endif
					</div>
				</div>
			</div>
			<!-- Produk -->
			<div class="row">
				@foreach($rekomendasi as $item)
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
</div>
</div>
@endsection
<script>
    function copy(e) {
        var range = document.createRange();
        range.selectNode(document.getElementById("nomor"));
        window.getSelection().removeAllRanges(); // clear current selection
        window.getSelection().addRange(range); // to select text
        document.execCommand("copy");
        window.getSelection().removeAllRanges();// to deselect

        e.textContent = "Tersalin";
        e.className = "btn btn-outline-success";
    }
</script>