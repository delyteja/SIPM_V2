@extends('template.master_pemodal')
@section('judul')
Home
@endsection

@section('new-css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('nav-right')
  @if (Auth::guest())
    <li><a href="{{ URL::to('register')}}" style="color:white; font-size:17px;"><i class="fa fa-registered" aria-hidden="true" style="font-size:15px;"></i>Register</a></li>
    <li><a href="{{ URL::to('login')}}" style="color:white; font-size:17px;"> <i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
  @else
      @include('layouts/user_nav')
  @endif
@endsection

@section('content')
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#newpost" aria-controls="newpost" role="tab" data-toggle="tab">Perdagangan</a></li>
  <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">Peternakan</a></li>
</ul>
<!-- <br> -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="newpost">      
    <div class="row text-center">
      <h2><p>Perdagangan</p></h2>
      <div class="row">
    @foreach($perdagangan as $p)
        <div class="col-sm-3">
          <div class="thumbnail">
            <img src="/foto/{{$p->namafoto}}" alt="{{$p->namafoto}}" width="400" height="200">
            <a href="{{ URL::to('/proposal/detail/'.$p->namausaha.'/'.$p->kebutuhan_dana)}}"><p><strong>{{$p->namausaha}}</strong></p></a>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp{{$p->dana_terkumpul}}/Rp {{$p->kebutuhan_dana}} </b></p>
          </div>
        </div>
    @endforeach
      </div>
    </div>
  </div>

  <div role="tabpanel" class="tab-pane" id="favourites">
    <div class="row text-center">
      <h2><p>Peternakan</p></h2>
      <div class="row">
      @foreach($peternakan as $pn)
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="/foto/{{$pn->namafoto}}" alt="{{$pn->namafoto}}" width="400" height="200">
             <a href="{{ URL::to('/proposal/detail/'.$pn->namausaha.'/'.$pn->kebutuhan_dana)}}"><p><strong>{{$pn->namausaha}}</strong></p></a>
            <div class="w3-light-grey w3-round-large">
              <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
            </div>
            <p style="margin-top:10px;"><b>Terkumpul Rp{{$pn->dana_terkumpul}}/Rp {{$pn->kebutuhan_dana}} </b></p>            
          </div>
        </div>
      @endforeach


      </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('new-js')
@endsection