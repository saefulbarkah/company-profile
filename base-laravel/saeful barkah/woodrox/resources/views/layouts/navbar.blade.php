<header class="navigation">
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info">
                        <a href="tel:+23-345-67890">Hubungi kami : <span>+62 831-8001-2053</span></a>
                        <a href="mailto:support@gmail.com"><i
                                class="fa fa-envelope mr-2"></i><span>saefulbarkah650@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  py-4" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                Genetic<span> Wear</span>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Beranda <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('about') }}" aria-haspopup="true"
                            aria-expanded="false">Tentang kami</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('service') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('portfolio') }}">portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
