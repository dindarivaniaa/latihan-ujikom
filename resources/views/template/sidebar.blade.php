@hasrole('admin')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/home') }}">
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
          <hr class="my-3">


        </div>
      </div>
    </div>
  </nav>
@endhasrole

@hasrole('teacher')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('teacher/home') }}>
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Guru</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/profile') ? 'active' :''}}"  href="{{ url('teacher/profile') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-active">profil</span>
                </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/jadwal') ? 'active' :''}}"  href="{{ url('teacher/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Mata Pelajran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/soal') ? 'active' :''}}" href="{{ url('teacher/soal') }}">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Soal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/hasil') ? 'active' :''}}" href="{{ url('teacher/hasil') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/kelola siswa') ? 'active' :''}}" href="{{ url('teacher/kelolasiswa') }}">
                <i class="ni ni-badge text-primary"></i>
                <span class="nav-link-text">Kelola Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('logout') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">


        </div>
      </div>
    </div>
  </nav>
@endhasrole

@hasrole('student')
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/LOGO MAHAPUTRA.png')}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/home') ? 'active' :''}}" href="{{ url('student/home') }}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Siswa</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/profile') ? 'active' :''}}"  href="{{ url('student/profile') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-active">profil</span>
                </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/jadwal') ? 'active' :''}}" href="{{ url('student/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Mata Pelajaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/soal') ? 'active' :''}}" href="{{ url('student/soal') }}">
                <i class="ni ni-ruler-pencil text-primary"></i>
                <span class="nav-link-text">Soal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('student/hasil') ? 'active' :''}}" href="{{ url('student/hasil') }}">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('logout') }}">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">


        </div>
      </div>
    </div>
  </nav>
@endhasrole
