<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}"> <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" /> <span class="logo-name">FlipBook</span>
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
            <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        {{-- Web Content Menu --}}
        <li class="menu-header">Web Content</li>

        {{-- Genre Menu --}}
        <li class="dropdown  {{ request()->is('admin/category*') ? 'active' : '' }}">
            <a href="{{ route('category') }}" class="nav-link"><i data-feather="menu"></i><span>Kategori Konten</span></a>
        </li>

        {{-- Flipbook Menu --}}
        <li class="dropdown {{ request()->is('admin/flipbook*') ? 'active' : '' }}">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Flipbook</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('flipbook.create') }}">Tambah Flipbook</a></li>
                <li><a class="nav-link" href="{{ route('flipbook') }}">Daftar Flipbook</a></li>
            </ul>
        </li>

          {{-- Video Menu --}}
        <li class="dropdown {{ request()->is('admin/video*') ? 'active' : '' }}">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="video"></i><span>Video</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('video.create') }}">Tambah Video</a></li>
                <li><a class="nav-link" href="{{ route('video') }}">Daftar Video</a></li>
            </ul>
        </li>

        {{-- Manga Main Menu --}}
        <li class="menu-header">Komik / Manga</li>

        {{-- Genre Menu --}}
        <li class="dropdown  {{ request()->is('admin/genre') ? 'active' : '' }}">
            <a href="{{ route('genre') }}" class="nav-link"><i data-feather="list"></i><span>Genre</span></a>
        </li>

        {{-- Flipbook Menu --}}
        <li class="dropdown {{ request()->is('admin/manga*') ? 'active' : '' }}">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Komik</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('komik.create') }}">Tambah Komik</a></li>
                <li><a class="nav-link" href="{{ route('komik') }}">Daftar Komik</a></li>
            </ul>
        </li>
        @if(Auth()->user()->role == 'super_admin')
        {{-- Manga Main Menu --}}
        <li class="menu-header">Pengaturan Tampilan</li>

        {{-- Web Slider --}}
        <li class="dropdown  {{ request()->is('admin/slider*') ? 'active' : '' }}">
            <a href="{{ route('slider.index') }}" class="nav-link"><i data-feather="tv"></i><span>Web Slider</span></a>
        </li>

        {{-- Web Banner --}}
        <li class="dropdown  {{ request()->is('admin/banner*') ? 'active' : '' }}">
            <a href="{{ route('banner.index') }}" class="nav-link"><i data-feather="gift"></i><span>Web Banner</span></a>
        </li>

        {{-- Pengaturan Umum --}}
        <li class="dropdown  {{ request()->is('admin/pengaturan') ? 'active' : '' }}">
            <a href="{{ route('admin.settings') }}" class="nav-link"><i data-feather="settings"></i><span>Pengaturan Umum</span></a>
        </li>

        {{-- Page Menu --}}
        <li class="dropdown {{ request()->is('admin/page*') ? 'active' : '' }}">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sidebar"></i><span>Website Page</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin.about') }}">About Page</a></li>
                <li><a class="nav-link" href="{{ route('admin.term') }}">Term Page</a></li>
                <li><a class="nav-link" href="{{ route('admin.policy') }}">Policy Page</a></li>
            </ul>
        </li>
        @endif
    </ul>
</aside>
