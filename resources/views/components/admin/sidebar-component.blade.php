<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ route('home') }}"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" /> <span
          class="logo-name">FlipBook</span>
      </a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="{{asset(Auth()->user()->photo)}}">
      </div>
      <div class="sidebar-user-details">
        <div class="user-name">{{ Auth()->user()->name }}</div>
        <div class="user-role">Administrator</div>
        <div class="sidebar-userpic-btn">
          <a href="{{ route('profile') }}" data-toggle="tooltip" title="Profile">
            <i data-feather="user"></i>
          </a> 
          <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Log Out">
            <i data-feather="log-out"></i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>

      {{-- Dashboard Menu --}}
      <li class="dropdown  {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link"><i  data-feather="monitor"></i><span>Dashboard</span></a> 
      </li>

      {{-- Flipbook Menu --}}
      <li class="dropdown {{ request()->is('admin/flipbook*') ? 'active' : '' }}">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i  data-feather="briefcase"></i><span>Flipbook</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('flipbook.create') }}">Tambah Flipbook</a></li>
          <li><a class="nav-link" href="{{ route('flipbook') }}">Daftar Flipbook</a></li>
        </ul>
      </li> 

      {{-- Manga Main Menu --}}
      <li class="menu-header">Komik / Manga</li>

      {{-- Genre Menu --}}
      <li class="dropdown  {{ request()->is('admin/genre') ? 'active' : '' }}">
        <a href="{{ route('genre') }}" class="nav-link"><i  data-feather="list"></i><span>Genre</span></a> 
      </li>

      {{-- Flipbook Menu --}}
      <li class="dropdown {{ request()->is('admin/manga*') ? 'active' : '' }}">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i  data-feather="book-open"></i><span>Komik</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('komik.create') }}">Tambah Komik</a></li>
          <li><a class="nav-link" href="{{ route('komik') }}">Daftar Komik</a></li>
        </ul>
      </li> 

    </ul>
  </aside>