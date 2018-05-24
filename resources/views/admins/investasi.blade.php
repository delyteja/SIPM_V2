@extends('admins.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Mengelola Investasi Masuk</div>

                <div class="panel-body">
                    @extends('admins.header_menu')
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">NO.KTP Pengirim</th>
                                <th class="col-md-2">NO.KTP Penerima</th>                         
                                <th class="col-md-2">Jumlah Investasi</th>
                                <th class="col-md-3">Bukti Transfer</th>
                                <th class="col-md-1">Tanggal</th>
                                <th class="col-md-2">Aksi</th>
                            </tr>
                        <tbody>
                            @foreach ($messages as $message )
                                <tr>
                                    <td class="col-md-2">{{$investasi->no_ktp_pemodal}}</td>
                                    <td class="col-md-2">{{$investasi->no_ktp_pebisnis}}</td>
                                    <td class="col-md-2">{{$investasi->jumlah}}</td>
                                    <td class="col-md-3"><img src="/foto/{{ $investasi->namafoto }}" style="width: 150px; height: 150px;"></td>
                                    <td class="col-md-1">{{$investasi->updated_at}}</td>
                                    <td class="col-md-2">
                                    <a href="{{route('deletemessage',$message->id)}}" class="btn btn-default">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </thead>
                      </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
