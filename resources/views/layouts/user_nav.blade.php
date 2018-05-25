<div style="display:inline-block;">
  <h4 style="color:white; "><b>{{ Auth::user()->name }}</b></h4>
</div>
<div style="display:inline-block; margin-right:60px;">
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 10px ">
      <img src="/avatar/{{Auth::user()->avatar}}" style="width: 32px; height: 32px; position: relative; top: 0px; left: 0px; border-radius: 50% "> 
      <span id="caret" class="caret" ></span>
    </a>
    <ul class="dropdown-menu" role="menu" style="background-color: black;">
      <li>
        <a href="{{ url('/profile')}}"><i class="fa fa-btn fa-user"></i> Profile</a>
      </li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
      </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
</div>