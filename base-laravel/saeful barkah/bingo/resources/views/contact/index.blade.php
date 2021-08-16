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
            <div class="col-12">
                <div class="title text-center">
                    <h2>Kontak kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab
                        maxime nam ut numquam molestiae quaerat incidunt?</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3>Detail Kontak</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
                    blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat
                    dicta laboriosam labore adipisci.</p>
                <ul class="contact-short-info">
                    <li>
                        <i class="tf-ion-ios-home"></i>
                        <span>Kab bandung</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Phone: +831-8001-2053</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Email: saefulbarkah650@gmail.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                <form method="POST" role="form" action="{{ url('contact') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" placeholder="Email..." class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="subject" placeholder="Subjek..." class="form-control" name="subject" id="subject">
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="Pesan...." class="form-control" name="message"
                            id="message"></textarea>
                    </div>
                    <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                    </div>
                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end section -->

@endsection
