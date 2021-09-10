@extends('layouts.master')
@section('title','Genetic | Kontak')
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
                        <h1>Hubungi Kami</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact3" class="contact contact-3 text-center">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-6">
                <div class="contact--panel">
                    <div class="contact--icon">
                        <i class="kolaso-Globe"></i>
                    </div>
                    <div class="contact--content">
                        <h4>Alamat</h4>
                        <p>Jl. Katapang Andir No.503, Sangkanhurip, Kec. Katapang, Bandung, Jawa Barat
                            40921</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-6">
                <div class="contact--panel">
                    <div class="contact--icon">
                        <i class="kolaso-Mail"></i>
                    </div>
                    <div class="contact--content">
                        <h4>Informasi Kontak</h4>
                        <p>
                            Email: genetic.wear@gmail.com
                            <br>
                            Phone: +62 81221337876</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.071232505725!2d107.5719010142015!3d-7.000893970512589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630132691439!5m2!1sid!2sid"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>
@endsection
