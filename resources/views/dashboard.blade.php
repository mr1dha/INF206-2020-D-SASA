@extends('layout.master')

@section('title', 'SASA | Dashboard')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - penjual</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  </head>

  <body>

  <div class="container" id="wrapper">
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-6">
            <h1 style= "margin-top: 60px;">Dashboard <small>Penjual</small></h1> 
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-shopping-basket fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">456</p>
                    <p class="announcement-text">Total Sayur!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Total sayur yang telah terjual!
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">12</p>
                    <p class="announcement-text">Total Pembelian!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Total pembelian yang telah dilakukan!
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><strong>18</strong></p>
                    <p class="announcement-text">Dalam proses pembelian!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Total pembelian yang masih diproses!
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="far fa-money-bill-alt fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Rp.56.000</p>
                    <p class="announcement-text">Total keuntungan!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Total Keuntungan yang diterima bulan ini!
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

       

        <div class="row">
         
          <div class="col-lg-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i> Aktivitas</h3>
              </div>
              <div class="panel-body">
                <table class="list-group">
                  <a href="#" class="list-group-item">
                    <span class="badge">sekarang</span>
                    <i class="fa fa-cart-arrow-down"></i> Memasukkan 1 sayuran baru
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">4 menit lalu</span>
                    <i class="fa fa-trash"></i> Menghapus 2 sayuran
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">23 menit lalu</span>
                    <i class="fa fa-check"></i> Menyelesaikan 3 pembelian
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">46 menit lalu</span>
                    <i class="fa fa-shopping-bag"></i> Menerima 2 pembelian
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">1 jam lalu</span>
                    <i class="fa fa-pencil-alt"></i> Mengedit deskripsi sayur
                  </a>
                </table>
                <div class="text-right">
                  <a href="#">Tampilkan semua aktivitas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Data proses pembelian</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Nama Sayur</th>
                        <th>Pembeli</th>
                        <th>Tanggal order</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>Bayam</td>
                        <td>Ratu</td>
                        <td>10/05/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>Wortel</td>
                        <td>Farras</td>
                        <td>11/04/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>Tomat</td>
                        <td>Azzuhra</td>
                        <td>12/05/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">Tampilkan semua pembelian <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

  </body>
</html>
