@include('template.css')
<nav class="navbar navbar-inverse" style="background-color: #00384d; margin-top:-60px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ URL::to('/pemodal')}}" style="color:white"><b>TernaKita</b></a> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::to('/pemodal')}}" style="color:white;font-size:17px;"><b>Beranda</b></a></li>
      <li><a href="{{ URL::to('laporan/index')}}" style="color:white; font-size:17px;"><b>Laporan Pendanaan</b></a></li>
      <li><a href="{{ URL::to('progress')}}" style="color:white; font-size:17px;"><b>Progres Bisnis</b></a></li>
      <li><a href="{{ route('pemodal_inbox') }}" style="color:white;font-size:17px;"><b>Pesan</b></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @yield('nav-right')
   </ul>
 </div>
</nav>

