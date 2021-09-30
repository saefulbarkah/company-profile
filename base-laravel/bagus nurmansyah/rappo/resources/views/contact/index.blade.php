@extends('layouts.master')
@push('styles')
<style>
    .map-responsive{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-responsive iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
    </style>
@endpush
@section('title', 'kontak')
@section('content')

@include('layouts.navbar')
<!-- HERO
================================================== -->
<section class="page-banner-area page-contact">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">Ada pertanyaan?</h1>
                    <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


  <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Alamat</h4>
                        <p class="lead">Jl.Katapang Andir No.503, 40921</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Email</h4>
                        <p class="lead">genetic.wear@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Nomor telepon</h4>
                        <p class="lead">+62 81221337876</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.071232505725!2d107.5719010142015!3d-7.000893970512589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630132691439!5m2!1sid!2sid"
                width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
    </section>
</section>

@endsection
