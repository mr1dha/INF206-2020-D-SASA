@extends('layout.master-penjual')

@section('title', 'SASA | Daftar Sayur')

@section('style')
    <link href="{{asset('assets/css/table.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-5 pt-4">
		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}} <i class="fa fa-thumbs-up"></i>
			</div>
		@endif

	<div class="row">
		<a href="{{ url('sayur/create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus-circle"></i> Tambah Sayur</a>
		<div class="col-md-12 px-0">
		<table class="table table-striped " id="tabel">
		      <thead>
		        <tr class="bg-success text-white">
		          <th scope="col" style="width: 5%;">No</th>
		          <th scope="col" style="width: 15%;"> Foto</th>
		          <th scope="col" style="width: 30%;">Nama Sayur</th>
		          <th scope="col" style="width: 20%;"> Harga</th>
		          <th scope="col" style="width: 20%;"> Waktu Upload</th>
		          <th scope="col" style="width: 10%;">Aksi</th>
		        </tr>
		      </thead>
		      <tbody>
		        @foreach($sayur as $i => $item)
		        <tr>
		          <td style="text-align: center;">{{++$i}}</td>
		          <td><img src="{{asset('img/'.$item->gambar)}}" alt="makanan" class="img-fluid"></td>
		          <td>{{$item->nama}}</td>
		          <td>@currency($item->harga)</td>
		          <td>{{$item->created_at}}</td>
		          <td>
		            <a href="{{url('/sayur/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm px-3 py-2 mb-2"><i class="fas fa-edit"></i> </a>

		            <form action="{{url('sayur/'.$item->id)}}" method="POST">
		                  @csrf
		                  {{method_field('DELETE')}}
		                <button type="submit" class="btn btn-danger btn-sm px-3 py-2" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i> </a>
		            </form>
		          </td>
		        </tr> 
		        @endforeach
		      </tbody>
		    </table>
	    <div class="row w-100 justify-content-center">
	      {{$sayur->links()}}
	    </div>
		</div>
	</div>
</div>
@endsection