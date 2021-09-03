<div class="row justify-content-center align-items-center">
    <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Genetik Wear</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{  Request::is('/') ? 'active' : ' ' }}"
                        href="{{ url('/') }}">Beranda</a></li>
                <li><a class="nav-link scrollto {{  Request::is('about') ? 'active' : ' ' }}"
                        href="{{ url('about') }}">Tentang Kami</a></li>
                <li><a class="nav-link scrollto {{  Request::is('service') ? 'active' : ' ' }}"
                        href="{{ url('service') }}">Layanan</a></li>
                <li><a class="nav-link scrollto {{  Request::is('portfolio') ? 'active' : ' ' }}"
                        href="{{ url('portfolio') }}">Portofolio</a></li>
                <li><a class="nav-link scrollto {{  Request::is('contact') ? 'active' : ' ' }}"
                        href="{{ url('contact') }}">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</div>
