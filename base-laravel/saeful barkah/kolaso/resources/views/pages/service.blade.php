@extends('layouts.master')

@section('title','Genetic | Layanan')
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="{{ asset('assets/images/background/bg-layanan2.png') }}" alt="Background" width="400" height="500" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Layanan</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services1" class="services services-1 pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center mb-60">
                    <p class="heading--subtitle"></p>
                    <h2 class="heading--title">Layanan & jasa</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card-group">
                    <div class="card mx-4 shadow">
                        <img src="https://jengsusan.com/wp-content/uploads/2020/09/Jenis-Konveksi-Baju-yang-Perlu-Kamu-Tahu.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Full order</h5>
                            <p class="card-text">Full order merupakan layanan produk berupa pemesanan penuh dengan
                                kelengkapan yang sesuai pemesanan</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-muted">
                                <a href="{{ url('layanan/full-order') }}" class="btn btn--primary">
                                    <i class="fas fa-search"></i>
                                    Selengkapnya
                                </a>
                            </small>
                        </div>
                    </div>
                    <div class="card mx-4 shadow">
                        <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Makloon sublime</h5>
                            <p class="card-text mt-auto">Makloon sublime merupakan layanan jasa yang menyediakan layanan
                                berupa
                                printing & press</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-muted">
                                <a href="{{ url('layanan/makloon-sublime') }}" class="btn btn--primary">
                                    <i class="fas fa-search"></i>
                                    Selengkapnya
                                </a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
