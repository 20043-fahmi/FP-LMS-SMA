<div class="container-fluid page-body-wrapper">
  <!-- menu -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="{{url('admin/images/faces/face8.jpg')}}" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          {{-- Nama User --}}
          <div class="text-wrapper">
            <p class="profile-name">User</p>
            <p class="designation">@if (empty(Auth::user()->name))
              {{''}}
              @else
              {{Auth::user()->name}}
              @endif
            </p>
          </div>
        </a>
      </li>

      {{-- Menu dasboar --}}
      <li class="nav-item nav-category">
        <span class="nav-link">Dashboard</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <span class="menu-title">Dashboard</span>
          <i class="icon-screen-desktop menu-icon"></i>
        </a>
      </li>

      <li class="nav-item nav-category"><span class="nav-link">Data</span></li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('/laporan_akademik')}}">
          <span class="menu-title">Laporan Akademik</span>
          <i class="icon-globe menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('masuk')}}">
          <span class="menu-title">user</span>
          <i class="icon-globe menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Tables</span>
          <i class="icon-layers menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('guru')}}">Guru & Staff</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('siswa')}}">Siswa</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('tugas')}}">Tugas</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('nilai')}}">nilai</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('jadwal')}}">Jadwal</a></li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Form</span>
          <i class="icon-book-open menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('form_guru')}}">Guru & Staff</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_siswa')}}">Siswa</a></li>
            @if (Auth::user()->role=='administrator' && 'guru' )
            <li class="nav-item"> <a class="nav-link" href="{{url('form_nilai')}}">nilai</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('form_tugas')}}">Tugas</a></li>
            @endif
            <li class="nav-item"> <a class="nav-link" href="{{url('form_jadwal')}}">Jadwal</a></li>

          </ul>
        </div>
      </li>





      <li class="nav-item nav-category"><span class="nav-link">Information</span></li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('event')}}">
          <span class="menu-title">Kalender Akademik</span>
          <i class="icon-grid menu-icon"></i>
        </a>
      </li>
      @if (Auth::user()->role=='administrator')
      <li class="nav-item">
        <a class="nav-link" href="{{url('/register')}}">
          <span class="menu-title">register</span>
          <i class="icon-grid menu-icon"></i>
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          {{ __('Logout') }} <i class="icon-grid menu-icon"></i>

        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf </form>

      </li>

    </ul>
  </nav>