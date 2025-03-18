<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="{{ url('/') }}">
                <img src="{{ url('/') }}/assets/images/logo/A-Labs2.png" alt="A-Labs Rental" class="rounded">
            </a>
        </h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ request()->is('beranda') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                <li><a class="nav-link scrollto {{ request()->is('rental') ? 'active' : '' }}" href="{{ url('rental') }}">Daftar Rental</a></li>
                <li><a class="nav-link scrollto {{ request()->is('jadwal') ? 'active' : '' }}" href="{{ url('jadwal') }}">Jadwal</a></li>
                <li><a class="nav-link scrollto {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('kontak') }}">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->