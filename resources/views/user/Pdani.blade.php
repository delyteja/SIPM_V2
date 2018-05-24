@extends('template.master')
@section('judul')
Usaha Warung Pak Dani
@endsection
@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  input:placeholder-shown {
    color: black;
    font-weight: bold;
  }
</style>
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection


@section('content')
<!-- Page Content -->
<div class="container">
<h1 class="my-4">Usaha Warung Pak Dani</h1>
</br>
<div class="row">

  <div class="col-md-6">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" style="width: 85%; height: 85%;" src="{{asset ('img/warung.jpg')}}" alt="">
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-body">
        <hr>
        <a style="margin-bottom:30px;" href="{{ route('laporan') }}" class="btn btn-primary">Lihat Laporan</a>
        <hr>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-md-6 -->
  <div class="col-md-6">
   
    <div class="list-group" style="text-align: left;">
      <ul style="list-style: none;">
        <li><h4><strong>Total Biaya Yang Dibutuhkan</strong></h4></li>
        <h4>Rp 2.000.000,00</h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Dana Yang Terkumpul</strong></h4></li>
        <h4>Rp 500.000,00</h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Progress Pendanaan</strong></h4></li>
        <div class="w3-light-grey w3-round-large">
        <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
        </div>
        <hr style="border-color: black; width: 35%;">
        <li><h4><strong>Detail Usaha</strong></h4></li>
        <p card-text style="text-align: justify;">
          Pak Dani membuka Usaha beraneka ragam macam kopi dan makan ringan, Pak Dani juga menjual beraneka ragam nasi, Pak Dani membutuhkan tambahan modal sebesar Rp 2.000.000,00 untuk menambah barang dagangan dan untuk membeli kursi baru untuk tempat duduk pelanggan, semua itu dilakukan Pak Dani agar usaha yang sedang dijalaninya sekarang semakin besar sehingga besar pula keuntungan yang didapat
        </p>
      </ul>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>

</div>
<!-- /.container -->
@include('pemodal/investasi')

@endsection