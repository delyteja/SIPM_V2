@extends('template.master_pemodal')

@section('judul')
{{$proposal->namausaha}}
@endsection
@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  input:placeholder-shown {
    color: black;
    font-weight: bold;
  }

  .accordion {
    background-color: #0080ff;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #0040ff; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;

}
</style>
@endsection
@section('new-js')
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
@endsection


@section('content')
<!-- Page Content -->
<div class="container">
<h1 class="my-4">{{$proposal->namausaha}}</h1>
</br>
<div class="row">

  <div class="col-md-6">

    <div class="card mt-4">
    <img class="card-img-top img-fluid" style="width: 85%; height: 85%;" src="/foto/{{$proposal->namafoto}}" alt="{{$proposal->namafoto}}">
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-body">
        <hr>
        <a style="margin-bottom:30px;" data-toggle="modal" data-target="#modal-investasi" class="btn btn-success">Bantu {{$pebisnis->name}}</a>
        <a style="margin-bottom:30px; margin-left: 30px;" href="{{ route('laporanPakDani') }}" class="btn btn-primary">Lihat Laporan</a>
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
        <h4>Rp {{$proposal->kebutuhan_dana}}</h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Dana Yang Terkumpul</strong></h4></li>
        <h4>Rp {{$proposal->dana_terkumpul}} </h4><hr style="border-color: black; width: 35%;">
        <li><h4><strong>Progress Pendanaan</strong></h4></li>
        <div class="w3-light-grey w3-round-large">
        
        <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
        </div>
        <hr style="border-color: black; width: 35%;">
        <li><h4><strong>Detail Usaha</strong></h4></li>
        <p card-text style="text-align: justify;">
        {{$proposal->diskripsi}}
        </p>

        <button class="accordion"><b>Unduh Proposal > </b> </button>
        <div class="panel">
          <p><b><a href="/proposal/{{$proposal->namaproposal}}" download>{{$proposal->namaproposal}}</a></b></p>
        </div>
        <button class="accordion"><b>Chat Dengan Pebisnis > </b> </button>
        <div class="panel">
          <p><b>Chat via pesan pada email: {{$pebisnis->email}}</b></p>
          <p><b>Nomor KTP: {{$pebisnis->no_ktp}}</b></p>
        </div>
        <button class="accordion"><b>Lihat Rekening > </b> </button>
        <div class="panel">
          <p><b>BCA     :  5220304212</b></p>
          <p><b>Mandiri :  1400304212</b></p>
        </div>

      </ul>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>

</div>
<!-- /.container -->
@include('pemodal/investasi')

@endsection


