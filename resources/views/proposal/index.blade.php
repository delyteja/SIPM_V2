@extends('proposal.main')

@section('namausaha')
{{$proposal->namausaha}}
@endsection

@section('foto')
<img class="card-img-top img-fluid" style="width: 85%; height: 85%;" src="/foto/{{$proposal->namafoto}}" alt="{{$proposal->namafoto}}">
@endsection

@section('pebisnis')
{{$pebisnis->name}}
@endsection

@section('dana_butuh')
{{$proposal->kebutuhan_dana}}
@endsection

@section('dana_kumpul')
@if($proposal->dana_terkumpul==null)
0
@endif
@endsection

@section('diskripsi')
{{$proposal->diskripsi}}
@endsection
@section('kontak')
{{$pebisnis->email}}
@endsection