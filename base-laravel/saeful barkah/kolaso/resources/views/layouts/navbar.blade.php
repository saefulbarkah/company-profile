<header id="navbar-spy" class="header header-1 header-transparent">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <div class="logo logo-light text-white bold">
                    Genetic Wear
                </div>
                <div class="logo logo-dark text-dark bold">
                    Genetic Wear
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">

                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="menu-item">Beranda</a>
                    </li>

                    <li class="{{ Request::is('about') ? 'active' : '' }}">
                        <a href="{{ url('about') }}" class="menu-item">Tentang kami</a>
                    </li>

                    <li class="{{ Request::is('service') ? 'active' : '' }}">
                        <a href="{{ url('service') }}" class="menu-item">Layanan</a>
                    </li>

                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}">
                        <a href="{{ url('portfolio') }}" class="menu-item">Portofolio</a>
                    </li>
                    <li class="{{ Request::is('kontak') ? 'active' : '' }}">
                        <a href="{{ url('contact') }}" class="menu-item">Kontak</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
</header>
