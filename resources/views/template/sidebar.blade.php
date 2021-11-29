@hasrole('admin')
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" style="display:block; margin:left;" class="ml-5 pl-3 navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  class="nav-link {{ url()->current() == url('admin/home') ? 'active' :''}}"  href="{{ url('admin/home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/jadwal') ? 'active' :''}}"  href="{{ url('admin/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Mata Pelajaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/soal') ? 'active' :''}}" href="{{ url('admin/soal') }}">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Soal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/hasil') ? 'active' :''}}" href="{{ url('admin/hasil') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/kelolaguru') ? 'active' :''}}" href="{{ url('admin/kelolaguru') }}">
                <i class="ni ni-briefcase-24 text-sucess"></i>
                <span class="nav-link-text">Kelola guru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/kelolasiswa') ? 'active' :''}}" href="{{ url('admin/kelolasiswa') }}">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-text">Kelola Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('logout') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->

        </div>
      </div>
    </div>
  </nav>

@endhasrole

@hasrole('teacher')
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  class="nav-link {{ url()->current() == url('admin/home') ? 'active' :''}}"  href="{{ url('admin/home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/jadwal') ? 'active' :''}}"  href="{{ url('admin/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Mata Pelajaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/soal') ? 'active' :''}}" href="{{ url('admin/soal') }}">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Soal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/hasil') ? 'active' :''}}" href="{{ url('admin/hasil') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/kelolasiswa') ? 'active' :''}}" href="{{ url('admin/kelolasiswa') }}">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-text">Kelola Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('logout') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->

        </div>
      </div>
    </div>
  </nav>

@endhasrole

@hasrole('student')
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  class="nav-link {{ url()->current() == url('admin/home') ? 'active' :''}}"  href="{{ url('admin/home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Admin</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/jadwal') ? 'active' :''}}"  href="{{ url('admin/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Mata Pelajaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/soal') ? 'active' :''}}" href="{{ url('admin/soal') }}">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Soal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('admin/hasil') ? 'active' :''}}" href="{{ url('admin/hasil') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="{{ url('logout') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->

        </div>
      </div>
    </div>
  </nav>

@endhasrole
