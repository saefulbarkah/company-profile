@extends('layouts.master')

@section('page-title', 'Genetic wear')
@section('page-subtitle', 'tentang kami')
@section('title', 'Genetic | Tentang Kami')
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Tentang</h2>
            <p>Tentang kami</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Genetic Wear</h3>
                <p>
                    Genetic wear merupakan sebuah perusahaan konveksi yang memiliki layanan desain pembuatan (kaos,
                    jersey, kemeja, jaket) dan makloon sublime printing beserta makloon sublime press heat transfer.
                    Genetic wear mulai didirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan
                    waktu pada tahun 2010 perusahaan genetic wear mulai bergerak ke sebuah layanan baru yaitu sablon.
                    Terus berlanjut genetic wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru
                    yaitu sublime. Genetic Wear juga menyediakan layanan :

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i>
                        jersey
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Kaos
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Jaket
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Kemeja</li>
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Makloon sublime printing
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Makloon sublime press - heat transfer
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tim</h2>
            <p>Tim Genetic Wear</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group">
                    <div class="card text-center mx-3 shadow">
                        <img src="{{ asset('assets/img/team/hannif.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hannif Kurniawan</h5>
                            <p class="card-text">CEO</p>
                        </div>
                    </div>
                    <div class="card text-center mx-3 shadow">
                        <img src="{{ asset('assets/img/team/angga.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Angga Pratama</h5>
                            <p class="card-text">COO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Team Section -->
@endsection
