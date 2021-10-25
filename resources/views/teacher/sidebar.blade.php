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
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/profile') ? 'active' :''}}"  href="{{ url('teacher/profile') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-active">profil</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ url()->current() == url('teacher/jadwal') ? 'active' :''}}"  href="{{ url('teacher/jadwal') }}">
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Jadwal</span>
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
                <i class="ni ni-bullet-list-67 text-default"></i>
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
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>

        </div>
      </div>
    </div>
  </nav>
