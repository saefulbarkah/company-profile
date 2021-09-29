<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}" style="font-size: 25px">Genetic<span> Wear</span></a>
        </h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}">Beranda</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('tentang') ? 'active' : '' }}"
                        href="{{ url('/tentang') }}">Tentang</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('layanan') ? 'active' : '' }}"
                        href="{{ url('layanan') }}">Layanan</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('portofolio') ? 'active' : '' }}"
                        href="{{ url('portofolio') }}">Portofolio</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('kontak') ? 'active' : '' }}"
                        href="{{ url('kontak') }}">kontak</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
