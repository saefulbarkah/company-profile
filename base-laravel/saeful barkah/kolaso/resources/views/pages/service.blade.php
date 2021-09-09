@extends('layouts.master')

@section('title','Genetic | Layanan')
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="assets/images/page-titles/5.jpg" alt="Background" />
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
                        <li class="breadcrumb-item"><a href="index-3.html">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services1" class="services services-1 pt-130 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card-group">
                    <div class="card mx-4 shadow">
                        <img src="https://jengsusan.com/wp-content/uploads/2020/09/Jenis-Konveksi-Baju-yang-Perlu-Kamu-Tahu.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Full Order</h5>
                            <p class="card-text">Full order merupakan layanan produk berupa pembelian penuh dengan
                                kelengkapan yang sesuai layanan</p>
                        </div>
                        <div class="card-footer text-right">
                            <small class="text-muted">
                                <a href="{{ url('layanan/full-order') }}" class="btn-sm btn-primary">
                                    <i class="fas fa-search"></i>
                                    Detail
                                </a>
                            </small>
                        </div>
                    </div>
                    <div class="card mx-4 shadow">
                        <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Makloon Sublime</h5>
                            <p class="card-text mt-auto">Makloon sublime merupakan layanan jasa yang menyediakan layanan
                                berupa
                                printing & press</p>
                        </div>
                        <div class="card-footer text-right">
                            <small class="text-muted">
                                <a href="{{ url('layanan/makloon-sublime') }}" class="btn-sm btn-primary">
                                    <i class="fas fa-search"></i>
                                    Detail
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