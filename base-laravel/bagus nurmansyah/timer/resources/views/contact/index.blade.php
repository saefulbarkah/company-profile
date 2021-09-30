@extends('layouts.master')
@section('title', 'kontak')
@section('content')

<section class="contact">
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>kontak</h2>
                        <ol class="breadcrumb list-inline text-center">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}">
                                    <i class="ion-ios-home"></i>
                                    Beranda &nbsp; &nbsp;/
                                </a>
                            </li>
                            <li class="active list-inline-item">Kontak</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
==================================================
    Contact Section Start
================================================== -->
    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 mb-5 mb-md-0">
                    <div class="row address-details justify-content-center">
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                                <i class="ion-ios-location-outline"></i>
                                <h5>Jl.Katapang Andir No.503,<br>kab. Bandung, 40921</h5>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6">
                            <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                                <i class="ion-ios-email-outline"></i>
                                <h5>genetic.wear@gmail.com <br>genetic.wear@gmail.com</h5>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-6s">
                            <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                                <i class="ion-ios-telephone-outline"></i>
                                <h5>+62 81221337876</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="map-area">
                        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Alamat Kami
                        </h2>
                        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                            Anda dapat menggunakan google map di bawah untuk mengetahui alamat kami.

                        </p>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.071232505725!2d107.5719010142015!3d-7.000893970512589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630132691439!5m2!1sid!2sid"
                                width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    @endsection
