@extends('layouts.master')

@section('title','Genetic | Tentang')
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="{{ asset('assets/images/background/bg-home.jpg') }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Tentang kami</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row text-justify">
            <div class="col-md-12">
                <div class="heading heading-1">
                    <p class="heading--subtitle">Tentang Kami</p>
                    <h2 class="heading--title">Genetic Wear</h2>
                    <p class="heading--desc">Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan
                        Design, pembuatan (T-shirt,Jersey,kemeja,jaket) dan Makloon Sublime printing beserta Makloon
                        Press Sublime. Genetic Wear mulai di dirikan pada tahun 2008 dengan penyedia layanan konveksi
                        seiring perkembangan waktu pada tahun 2010 perusahaan Genetic Wear mulai bergerak ke sebuah
                        layanan baru yaitu sablon. Terus berlanjut Genetic Wear mulai mengadakan sebuah layanan baru
                        dengan alat teknologi terbaru yaitu Sublime. Genetic Wear juga bergerak di bidang vandor jersey,
                        T-shirt sablon, kemeja, dan juga makloon sublime printing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team3" class="team team-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center">
                    <p class="heading--subtitle">Tim Kami</p>
                    <h2 class="heading--title">Tim Genetic Wear</h2>
                    <p class="heading--desc"></p>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/team/hannif.jpg') }}" alt="member">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="member-info">
                                <h5>Hannif Kurniawan</h5>
                                <h6>CEO</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/team/angga.jpg') }}" alt="member">
                        <div class="member-overlay">
                            <div class="member-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="member-info">
                                <h5>Angga Pratama</h5>
                                <h6>COO</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
