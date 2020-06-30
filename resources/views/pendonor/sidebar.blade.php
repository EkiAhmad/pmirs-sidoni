
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <div class="position-sticky text-center" style="top:0">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('pendonor.kegiatan')}}">
        <div class="sidebar-brand-icon">
          <img class="logo-dashboard" src="{{asset('assets_landing/img/icon/logo_icon_sidoni.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">SIDONI<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ request()->is('pendonor/kegiatan') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendonor.kegiatan')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kegiatan</span></a>
      </li>
   {{--    <li class="nav-item {{ request()->is('pendonor/info') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendonor.info')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Info</span></a>
      </li>
      <li class="nav-item {{ request()->is('pendonor/stok') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendonor.stok')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Stock Darah</span></a>
      </li> --}}
      <li class="nav-item {{ request()->is('pendonor/agenda') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendonor.agenda')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Agenda</span></a>
      </li>

      {{-- <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Master Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ request()->is('mitra/darah*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Darah</span>
        </a>
        <div id="collapseTwo" class="collapse {{ request()->is('mitra/darah*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Darah</h6>
            <a class="collapse-item {{ request()->is('mitra/darah/stock') ? 'active' : '' }}" href="{{ url('mitra/darah/stock') }}">Stok Darah</a>
            <a class="collapse-item {{ request()->is('mitra/darah/order') ? 'active' : '' }}" href="{{ url('mitra/darah/order') }}">Form Pemesanan</a>
          </div>
        </div>
      </li>
      <li class="nav-item {{ request()->is('mitra/track') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('mitra/track/') }}" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Tracking</span>
        </a>
      </li> --}}
      <!-- Divider -->
      {{-- <hr class="sidebar-divider"> --}}

      <!-- Heading -->
  {{--     <div class="sidebar-heading">
        Addons
      </div> --}}

      <!-- Nav Item - Pages Collapse Menu -->
    {{--  <li class="nav-item {{ request()->is() }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> --}}

      <!-- Nav Item - Charts -->
  {{--     <li class="nav-item {{ request()->is() }}">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      Nav Item - Tables
      <li class="nav-item {{ request()->is() }}">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </div>
  </ul>
  <!-- End of Sidebar