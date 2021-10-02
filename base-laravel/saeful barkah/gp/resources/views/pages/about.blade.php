@extends('layouts.master')
@push('styles')
<style>
    .centering {
        align-content: center !important;
    }
</style>
@endpush
@section('page-title', 'Genetic wear')
@section('page-subtitle', 'tentang kami')
@section('title', 'Genetic | Tentang Kami')
@section('content')
<!-- ======= About Section ======= -->
<section class="about">
    <div class="container">
        <div class="section-title">
            <h2>Tentang</h2>
            <p>Tentang kami</p>
        </div>
        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Genetic wear</h3>
                <p style="text-align: justify">
                    Genetic wear merupakan sebuah perusahaan konveksi yang memiliki layanan desain pembuatan (kaos,
                    jersey, kemeja, jaket) dan makloon sublime printing beserta makloon sublime press heat transfer.
                    Genetic wear mulai didirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan
                    waktu pada tahun 2010 perusahaan Genetic wear mulai bergerak ke sebuah layanan baru yaitu sablon.
                    Genetic Wear juga menyediakan layanan dan pembuatan di antaranya :

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i>
                        Jersey
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
            <p>Genetic wear</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-group">
                    <div class="card text-center mx-3 shadow">
                        <img src="{{ asset('assets/img/team/hannif.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Hannif Kurniawan</strong></h5>
                            <p class="card-text" style="font-size: 14px;">CEO</p>
                        </div>
                    </div>
                    <div class="card text-center mx-3 shadow">
                        <img src="{{ asset('assets/img/team/angga.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Angga Pratama</strong></h5>
                            <p class="card-text" style="font-size: 14px;">COO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Team Section -->
@endsection
