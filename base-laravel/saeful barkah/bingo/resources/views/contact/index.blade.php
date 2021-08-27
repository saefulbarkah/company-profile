@extends('_layouts.master')

@section('title', 'Kontak')
@section('content')

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Hubungi kami</h2>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Us -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">

            <!-- section title -->
            {{-- <div class="col-sm-12">
                <div class="title text-center">
                    <h2>Kontak kami</h2>
                    <p></p>
                    <div class="border"></div>
                </div>
            </div> --}}
            <!-- /section title -->

            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3>Detail Kontak</h3>
                <p></p>
                <ul class="contact-short-info">
                    <li>
                        <i class="tf-ion-ios-home"></i>
                        <span> Jl. Katapang Andir No.503, Sangkanhurip, Kec. Katapang, Bandung, 40921</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Phone: 081221337876</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Email: genetic.wear@gmail.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/gntcwr/" target="_blank" ><i class="tf-ion-social-instagram"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <div class="map-responsive col-md-6 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.6679504933044!2d107.57418209530506!3d-7.001020950017788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630035982778!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- / End Contact Details -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end section -->
@endsection
