@extends('layout.master-penjual')

@section('title', 'SASA | Riwayat Beli')

@section('style')
<link href="{{asset('assets/css/table.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5 pt-5">
	<div class="container">
		<div class="row justify-content-center">
			<section class="featured spad">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><i class="fas fa-cart-plus mb-3"></i> Dalam Proses Pembelian</h2>
						</div>
					</div>
				</div>
			</div>
			@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}} <i class="fa fa-thumbs-up"></i>
			</div>
			@endif
			<div class="row">
				<div class="col-md-12 px-0">
					<table class="table table-striped " id="tabel">
						<thead>
							<tr class="bg-success text-white">
								<th scope="col" >No</th>
								<th scope="col" > Foto</th>
								<th scope="col" >Nama Sayur</th>
								<th scope="col" > Harga</th>
								<th scope="col" > Pembeli</th>
								<th scope="col" > Waktu Order</th>
								<th scope="col" >Status</th>
							</tr>
						</thead>
						<tbody>
							@if($transaksi->isEmpty())
							<tr>
								<td colspan="7" class="text-center">Belum ada transaksi!</td>
							</tr>
							@endif
							@foreach($transaksi as $i => $item)
							<tr>
								<td style="text-align: center;">{{++$i}}</td>
								<td><img src="{{asset('img/'.$item->sayur->gambar)}}" alt="makanan" class="img-fluid"></td>
								<td>{{$item->sayur->nama}}</td>
								<td>@currency($item->harga)</td>
								<td>{{$item->user->nama}}</td>
								<td>{{$item->created_at}}</td>
								<td>
									<div class="dropdown show">
										<a class="btn btn-primary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">On Proccess
										</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<form action="{{url('status/'.$item->id)}}" method="POST">
												@csrf
												<input type="hidden" value="{{$item->status}}" name="status_sekarang">
												<button type="submit" class="dropdown-item"><i class="fas fa-check"></i>Tandai selesai</button>
											</form>
										</div>
									</div>
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