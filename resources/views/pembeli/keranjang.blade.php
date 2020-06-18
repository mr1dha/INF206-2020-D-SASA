@extends('layout.master')

@section('title', 'SASA | Keranjang Sayur')

@section('style')
<link href="{{asset('assets/css/table.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<section class="featured spad">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2><i class="fas fa-cart-plus"></i> Keranjang Saya</h2>
					</div>
					@if($transaksi->isEmpty())
					<p class="text-muted text-center">Belum ada transaksi!</p>
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 px-0">
				<table class="table table-striped " id="tabel">
					<thead>
						<tr class="bg-success text-white">
							<th scope="col" >No</th>
							<th scope="col" > Foto</th>
							<th scope="col" >Nama Sayur</th>
							<th scope="col" > Harga</th>
							<th scope="col" > Penjual</th>
							<th scope="col" > Pasar</th>
							<th scope="col" > Waktu Order</th>
							<th scope="col" >Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($transaksi as $i => $item)
						<tr>
							<td style="text-align: center;">{{++$i}}</td>
							<td><img src="{{asset('img/'.$item->sayur->gambar)}}" alt="makanan" class="img-fluid"></td>
							<td>{{$item->sayur->nama}}</td>
							<td>@currency($item->harga)</td>
							<td>{{$item->sayur->penjual->nama}}</td>
							<td>{{$item->sayur->penjual->alamat_pasar}}</td>
							<td>{{$item->created_at}}</td>
							<td>
								@if($item->status)
									<span class="badge badge-success">Selesai</span>
								@else
									<span class="badge badge-primary">On Proccess</span>
								@endif
								</td>
							</tr> 
							@endforeach
						</tbody>
					</table>
					<div class="row w-100 justify-content-center">
						{{$transaksi->links()}}
					</div>
				</div>
			</div>
		</div>
		@endsection