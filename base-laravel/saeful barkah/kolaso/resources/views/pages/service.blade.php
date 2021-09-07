@extends('layouts.master')

@section('title','Genetic | Layanan')

@push('styles')
<style>
    .fix-img {
        float: left;
        width: 100%;
        height: 250px;
        background-size: cover;
    }
</style>
@endpush

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

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="service-panel">
                    <div class="service--img">
                        <a href="{{ url('layanan/full-order') }}">
                            <img src="https://jengsusan.com/wp-content/uploads/2020/09/Jenis-Konveksi-Baju-yang-Perlu-Kamu-Tahu.jpg"
                                alt="feature" class="img-fluid fix-img">
                        </a>
                    </div>
                    <div class="service--content">
                        <h4>Full Order</h4>
                        <p>After all, as described in Web Design Trends 2015 & 2016, vision dominates a lot of our
                            subconscious
                            interpretation of the world around images create a user experience.</p>
                    </div>
                    <div class="service--footer">
                        <a href="{{ url('layanan/full-order') }}" class="btn-sm btn-primary"><i
                                class="fas fa-search"></i><span> Detail</span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="service-panel">
                    <div class="service--img">
                        <a href="{{ url('layanan/makloon-sublim') }}">
                            <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" alt="feature"
                                class="img-fluid fix-img">
                        </a>
                    </div>
                    <div class="service--content">
                        <h4>Makloon Sublim</h4>
                        <p>After all, as described in Web Design Trends 2015 & 2016, vision dominates a lot of our
                            subconscious
                            interpretation of the world around images create a user experience.</p>
                    </div>
                    <div class="service--footer">
                        <a href="{{ url('layanan/makloon-sublim') }}" class="btn-sm btn-primary"><i
                                class="fas fa-search"></i><span> Detail</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
