  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/admin.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <!-- <p>{{ Auth::user()->name}}</p> -->
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" style="margin-left:10px; ">
        <li style="margin-bottom:5px;">
          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.user') }}'">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Kelola Pengguna
          </button> 
        </li>
        <li style="margin-bottom:5px;">
          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.message') }}'">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Kelola Pesan
          </button>
        </li>
        <li style="margin-bottom:5px;">
          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.dashboard') }}'">
          <span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Kelola Proposal
          </button>
        </li>
        <li style="margin-bottom:5px;">
          <button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.investasi') }}'">
              <span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Kelola Investasi
          </button>
                
        </li>
    
  
  
        
        
        
        
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-link"></i> <span>Verifiksai Pengajuan</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>