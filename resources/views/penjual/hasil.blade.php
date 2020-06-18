@extends('layout.master-penjual')

@section('title', 'SASA | Riwayat Beli')

@section('style')
<link href="{{asset('assets/css/table.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5 pt-5">
	@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}} <i class="fa fa-thumbs-up"></i>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<section class="featured spad">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><i class="fas fa-wallet mb-3"></i> Riwayat Penghasilan</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 px-0">
					<table class="table table-striped " id="tabel">
						<thead>
							<tr class="bg-success text-white">
								<th scope="col" style="width: 10%">No</th>
								<th scope="col" style="width: 30%"> Hari</th>
								<th scope="col" style="width: 30%"> Tanggal</th>
								<th scope="col" >Total Penghasilan</th>
							</tr>
						</thead>
						<tbody>
							@if($transaksi->isEmpty())
							<tr>
								<td colspan="3" class="text-center">Belum ada transaksi!</td>
							</tr>
							@endif
							@foreach($transaksi as $i => $item)
							<tr>
								<td style="text-align: center;">{{++$i}}</td>
								<td><?php 
								$time = strtotime($item->day);
								$day = date('N', $time);
								$hari = "Minggu";
								switch($day){
									case 1: $hari = "Senin"; break;
									case 2: $hari = "Selasa"; break;
									case 3: $hari = "Rabu"; break;
									case 4: $hari = "Kamis"; break;
									case 5: $hari = "Jumat"; break;
									case 6: $hari = "Sabtu"; break;
								}
								echo $hari;
								?></td>
								<td>{{ $item->day }}</td>
								<td>{{ $item->tot }}</td>
							</tr> 
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@endsection