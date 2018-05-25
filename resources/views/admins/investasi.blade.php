@extends('admins.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Mengelola Investasi Masuk</div>

                <div class="panel-body">
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
                            @foreach ($investasi as $oneinvestasi )
                                <tr>
                                    <td class="col-md-2">{{$oneinvestasi['no_ktp_pemodal']}}</td>
                                    <td class="col-md-2">{{$oneinvestasi['no_ktp_pebisnis']}}</td>
                                    <td class="col-md-2">{{$oneinvestasi['jumlah']}}</td>
                                    <td class="col-md-3"><img src="/bukti_investasi/{{ $oneinvestasi['namafoto'] }}" style="width: 150px; height: 150px;"></td>
                                    <td class="col-md-1">{{$oneinvestasi['updated_at']}}</td>
                                    <td class="col-md-2">
                                    @if ( $oneinvestasi['status'] == 0 )
                                    <a href="{{ route('admin.verifikasiInvestasi', $oneinvestasi->id, $oneinvestasi['no_ktp_pebisnis'], $oneinvestasi['jumlah']) }}" class="btn btn-success">Verifikasi</a></td>
                                    @else
                                    <a href="{{ route('admin.batalInvestasi', $oneinvestasi->id, $oneinvestasi['no_ktp_pebisnis'], $oneinvestasi['jumlah']) }}" class="btn btn-danger">Batalkan</a></td>
                                    @endif
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
