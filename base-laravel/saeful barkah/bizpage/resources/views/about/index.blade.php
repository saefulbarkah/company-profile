@extends('layouts.master')
@section('title','Genetic | Tentang kami')
@section('title-pages','Genetic Wear')
@section('subtitle-pages','Tentang')
@section('content')
<!-- ======= About Us Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>Tentang Kami</h3>
            <p>Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan Design, pembuatan
                (T-shirt,Jersey,kemeja,jaket) dan Makloon Sublime printing beserta Makloon Press Sublime. Genetic Waer
                mulai di dirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan waktu pada tahun
                2010 perusahaan Genetic Wear mulai bergerak ke sebuah layanan baru yaitu sablon. Terus berlanjut Genetic
                Wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru yaitu Sublime. Genetic Wear juga
                bergerak di bidang vandor jersey, T-shirt sablon, kemeja, dan juga makloon sublime printing.</p>
        </header>
    </div>
</section>
{{-- <!-- End About Us Section --!> --}}

{{-- team  --}}
<section id="team">
    <div class="container" data-aos="fade-right">
        <div class="section-header">
            <h3>Tim kami</h3>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
{{-- end team --}}
@endsection
