<header id="navbar-spy" class="header header-1 header-transparent">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('')}}">
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

                    <li class="{{ Request::is('tentang') ? 'active' : '' }}">
                        <a href="{{ url('tentang') }}" class="menu-item">Tentang</a>
                    </li>

                    <li class="{{ Request::is('layanan') ? 'active' : '' }}">
                        <a href="{{ url('layanan') }}" class="menu-item">Layanan</a>
                    </li>

                    <li class="{{ Request::is('portofolio') ? 'active' : '' }}">
                        <a href="{{ url('portofolio') }}" class="menu-item">Portofolio</a>
                    </li>
                    <li class="{{ Request::is('kontak') ? 'active' : '' }}">
                        <a href="{{ url('kontak') }}" class="menu-item">kontak</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
</header>
