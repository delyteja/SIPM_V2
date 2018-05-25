@extends('template.master')
@section('judul')
Laporan Pendanaan
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection


@section('content')
 <div class="panel panel-default" style="margin-bottom:100px;">
<div class="panel-body" style="margin-bottom:300px;">
<h4><i class="fa fa-university"></i> Laporan Pendanaan</h4><hr>
<div class=row>
    <div class="col-md-6">
        <a href="{{ URL::to('laporan/add')}}" class="btn btn-primary">
        <i class="fa fa-plus-circle"></i> Tambah Aktivitas</a>
    </div>
  <div class="col-md-2">
  </div>
    <div class="col-md-4"></div>
</div>
<br>


<div class="table-responsive">
<table class="table table-bordered table-striped 
                  table-hover table-condensed tfix">
    <thead align="center">
      <tr>
        <td><b>No</b></td>
        <td><b>Aktivitas</b></td>
        <td><b>Biaya Yang Dikeluarkan</b></td>
        <td><b>Keterangan</b></td>
        <td colspan="2"><b>Aksi</b></td>
      </tr>
    </thead>
    @foreach($laporan as $l)
    <tr>
        <td>{{$loop->iteration or $l->id}}</td>
        <td>{{$l->aktivitas}}</td>
        <td>{{$l->Biaya}}</td>
        <td>{{$l->keterangan}}</td>
        <td align="center" width="30px">
          <a href="{{ url('/laporan/edit/'.$l->id ) }}" class="btn btn-warning btn-sm" 
          role="button"><i class="fa fa-pencil-square"></i> Edit</a>
        </td>
        <td align="center" width="30px">
          <a href="{{ url('/laporan/delete/'.$l->id ) }}" class="btn btn-sm btn-danger delete-btn" 
          role="button"><i class="fa fa-times-circle"></i> delete</a>
        </td>       
    </tr>
    @endforeach
</table>

</div>
</div>
</div>
@endsection


