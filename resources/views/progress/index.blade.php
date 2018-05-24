@extends('template.master')
@section('judul')
Progress Pengerjaan Bisnis
@endsection

@section('nav-right')
  @include('layouts/user_nav')
@endsection


@section('content')
 <div class="panel panel-default">
<div class="panel-body" style="margin-bottom:200px;">
<h4><i class="fa fa-university"></i> Progress Pengerjaan Bisnis</h4><hr>
<div class=row>
    <div class="col-md-6">
        <a href="{{ URL::to('progress/add')}}" class="btn btn-primary">
        <i class="fa fa-plus-circle"></i> Tambah progres</a>
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
        <td><b>Tanggal</b></td>
        <td><b>Keterangan</b></td>
        <td><b>Foto</b></td>
        <td colspan="2"><b>Aksi</b></td>
      </tr>
    </thead>
    <?php setlocale(LC_ALL, 'IND');?>
    @foreach($progres as $p)
    <tr>
        <td>{{$loop->iteration or $p->id}}</td>
        <td>{{strftime(" %d %b %Y", strtotime($p->tgl_progres))}}</td>
        <td>{{$p->keterangan}}</td>
        <td><img src="/progresss/{{ $p->namafoto }}" style="width: 150px; height: 150px;"> </td>        
        <td align="center" width="30px">
          <a href="{{ url('/progress/edit/'.$p->id ) }}" class="btn btn-warning btn-sm" 
          role="button"><i class="fa fa-pencil-square"></i> Edit</a>
        </td>
        <td align="center" width="30px">
          <a href="{{ url('/progress/delete/'.$p->id ) }}" class="btn btn-sm btn-danger delete-btn" 
          role="button"><i class="fa fa-times-circle"></i> delete</a>
        </td>        
    </tr>
    @endforeach
</table>

</div>
</div>
</div>
@endsection


