@extends('layouts.master')

@section('title', 'Genetic About Us')
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
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
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

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch text-center">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Hannif Kurniawan</h4>
                        <span>CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch text-center">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Angga Pratama</h4>
                        <span>COO</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Team Section -->
@endsection
