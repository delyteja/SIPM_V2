@extends('admins.base')

@section('action-content')

<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                </div>
                <br><br>
                <div class="panel-heading">Proposal Pebisnis</div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default" style="margin-left:20px; margin-right:20px;">
<div class="panel-body" style="margin-bottom:10px;">
@if($posts->count())
<div class="table-responsive" style="padding:15px">
<table class="table table-borderless">
    <thead >
      <tr>
        <th><b>Nama Uasaha</b></th>
        <th><b>Kategori</b></th>
        <th><b>Tempat Usaha</b></th>
        <th><b>Biaya</b></th>
        <th><b>Foto</b></th>
        <th><b>Diskripsi</b></th>
        <th><b>Proposal</b></th>
        <th><b>Aksi</b></th>
      </tr>
    </thead>
    @foreach($posts as $p)
    <tr>
        <td>{{ $p->namausaha }}</td>
        @if($p->id_kategori==1)
        <td>Perdagangan</td>
        @else
        <td>Peternakan</td>
        @endif
        <td>
        <a href="/location/{{$p->lokasi}}" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Lihat Lokasi</button></a>
        </td>
        <td>{{ $p->kebutuhan_dana }}</td>
        <td><img src="/foto/{{ $p->namafoto }}" style="width: 150px; height: 150px;"> </td>
        <td>{{ $p->diskripsi }}</td>
        <td>
        <a href="/proposal/{{$p->namaproposal}}" download>{{$p->namaproposal}}</a>        
        </td>
        @php  $token=1;    @endphp
        <td>
          <a href="/admin/delpost/{{$p->id}}/pilihan/2" class="btn btn-sm btn-danger delete-btn" 
          role="button"><i class="fa fa-times-circle"></i> delete</a>
        
        </td>       
    </tr>
    @endforeach
</table>

 

</div>

@else
<div class="alert alert-warning">
  <i class="fa fa-exclamation-triangle"></i> Postingan Kososng
</div>
@endif
</div>
</div>
        

@endsection
