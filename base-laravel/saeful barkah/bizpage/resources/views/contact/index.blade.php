@extends('layouts.master')
@section('title','Genetic | Kontak Kami')
@section('title-pages','Genetic Wear')
@section('subtitle-pages','Kontak')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3>Detail kontak</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <address>A108 Adam Street, NY 535022, USA</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="bi bi-phone"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.088678438818!2d107.57517311883988!3d-6.998838186373669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630571711629!5m2!1sid!2sid"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
</section><!-- End Contact Section -->
@endsection
