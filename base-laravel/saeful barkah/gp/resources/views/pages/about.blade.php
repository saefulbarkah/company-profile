@extends('layouts.master')

@section('title', 'Genetic | Tentang Kami')
@section('p-title', 'Tentang Kami')
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
                    Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan Design, pembuatan
                    (T-shirt,Jersey,kemeja,jaket) dan Makloon Sublime printing beserta Makloon Press Sublime. Genetic
                    Waer mulai di dirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan waktu
                    pada tahun 2010 perusahaan Genetic Wear mulai bergerak ke sebuah layanan baru yaitu sablon. Terus
                    berlanjut Genetic Wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru yaitu
                    Sublime. Genetic Wear juga menyediakan layanan :

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i>
                        jersey
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        T-shirt
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Jacket
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        kemeja</li>
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        makloon sublime printing
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        makloon sublime press - heat transfer
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
                      <img src="{{ asset('assets/img/team/angga.jpg') }}" class="card-img-top" alt="...">
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
