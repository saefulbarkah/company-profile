<!--Fixed Navigation-->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- logo -->
            <a class="navbar-brand logo" href="index.html">
                <img class="logo-default" src="{{ asset('assets/images/logo.png') }}" alt="logo" />
                <img class="logo-white" src="{{ asset('assets/images/logo-white.png') }}" alt="logo" />
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('services') }}">Layanan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!-- End Fixed Navigation -->
