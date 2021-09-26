{{-- navbar section --}}

<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('assets/images/logo.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Beranda
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('about') }}">tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('service') }}">layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('portfolio') }}">portofolio</a>
                            </li>}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact') }}">kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
{{-- end navbar section --}}

{{-- https://www.instagram.com/gntcwr/?hl=id target="_blank--}}
