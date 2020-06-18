@extends('layout.master-penjual')

@section('title', 'SASA | Dashboard Penjual')

@section('style')
<!-- Bootstrap core CSS -->
<link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">
<!-- Add custom CSS here -->
<link href="css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<!-- Page Specific CSS -->
<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
@endsection

@section('content')
<div class="container" id="wrapper">
  <div id="page-wrapper">

    <div class="row">
      <div class="col-lg-6">
        <h1 style= "margin-top: 60px;">Dashboard <small>Penjual</small></h1> 
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-lg-3">
        <div class="panel panel-success statistik">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-shopping-basket fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">{{ $statistik['total_sayur'] }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p class="announcement-text text-right">Total Sayur</p>
              </div>
            </div>
          </div>
          <a href="{{route('sayur.index')}}">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Tampilkan semua sayur
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="panel panel-success statistik">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-check fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">{{ $statistik['total_beli'] }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p class="announcement-text text-right">Total Pembelian</p>
              </div>
            </div>
          </div>
          <a href="{{ url('penjual/riwayat') }}">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat riwayat pembelian
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>


      <div class="col-lg-3">
        <div class="panel panel-success statistik">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading">{{ $statistik['total_proses'] }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p class="announcement-text text-right">Dalam Proses pembelian</p>
              </div>
            </div>
          </div>
          <a href="{{ url('penjual/proses') }}">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat Rincian
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>


      <div class="col-lg-3">
        <div class="panel panel-success statistik">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="far fa-money-bill-alt fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading h-100 mb-0">@currency($statistik['total_hasil'])</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p class="announcement-text text-right">Penjualan Bulan ini</p>
              </div>
            </div>
          </div>
          <a href="{{ url('penjual/hasil') }}">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat semua pemasukan
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div><!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Data proses pembelian</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th >No</th>
                    <th >Nama Sayur</th>
                    <th > Harga</th>
                    <th > Pembeli</th>
                    <th > Waktu Order</th>
                    <th >Status</th>
                  </tr>
                </thead>
                <tbody>
                  @if($transaksi->isEmpty())
                  <tr>
                    <td colspan="6" class="text-center">Belum ada transaksi!</td>
                  </tr>
                  @endif
                  @foreach($transaksi as $i => $item)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{$item->sayur->nama}}</td>
                    <td>@currency($item->harga)</td>
                    <td>{{$item->user->nama}}</td>
                    <td>{{$item->created_at}}</td>
                    <th><span class="badge">on progress</span></th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="text-right">
              <a href="{{ url('penjual/proses') }}">Tampilkan semua pembelian <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->

  </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

@endsection

<!-- CATATAN UNTUK YANG BUAT DASHBOARD INI:
Boleh ambil desain dashboard orang lain, tapi disesuaikan juga lah dengan 
blade template dan asset nya,
Semua file di bawah gak kebaca sama sekali -->

<!--     <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script> -->