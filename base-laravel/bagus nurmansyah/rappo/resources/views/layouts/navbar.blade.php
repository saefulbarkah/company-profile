
    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
        <div class="container">
            <a class="navbar-brand" href="index-3.html">
                <h3>Rapoo</h3>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item ">
                        <a href="{{ url('/') }}" class="nav-link ">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('about') }}" class="nav-link ">
                            Tentang
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('service') }}" class="nav-link ">
                            Layanan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('portfolio') }}" class="nav-link ">
                            Portofolio
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('contact') }}" class="nav-link">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .container -->
    </nav>
