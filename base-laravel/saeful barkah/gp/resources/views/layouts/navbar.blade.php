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
                    <a class="nav-link scrollto {{ Request::is('about') ? 'active' : '' }}"
                        href="{{ url('/about') }}">Tentang</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('service') ? 'active' : '' }}"
                        href="{{ url('service') }}">Layanan</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('portfolio') ? 'active' : '' }}"
                        href="{{ url('portfolio') }}">Portofolio</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}"
                        href="{{ url('contact') }}">kontak</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
