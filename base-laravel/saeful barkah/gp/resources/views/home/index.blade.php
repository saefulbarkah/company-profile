@extends('layouts.master')
@push('proses-css')
<link rel="stylesheet" href="{{ asset('assets/custom/time-line.css') }}">
@endpush

@section('title', 'Genetic Home')
@section('content')
<!-- ======= About Section ======= -->
<section id="home" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Mengapa Memilih kami?</h3>
                <p class="fst-italic">

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Kami akan memberikan Layanan terbaik
                    </li>
                    <li><i class="ri-check-double-line"></i> Dengan prosess yang cepat
                    </li>
                    <li><i class="ri-check-double-line"></i> Pengembangan selalu terjaga</li>
                    <li><i class="ri-check-double-line"></i> Tentukan desain sesuka hati</li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Features Section ======= -->
<section class="features">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Fitur</h2>
            <p>Fitur Yang Kami berikan</p>
        </div>
        <div class="row">
            <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right">
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-receipt"></i>
                    <h4>Proses Cepat</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Pengembangan Terjaga</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-images"></i>
                    <h4>Desain yang akurat</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                    <i class="bx bx-shield"></i>
                    <h4>Kualitas Terbaik</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Features Section -->

<!-- ======= Features Section ======= -->
<section class="Proses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Proses</h2>
            <p>Prosses yang di lakukan</p>
        </div>
        <div class="row mt-4">
            <ul class="timeline">

                {{-- 1 --}}
                <li class="tml-1">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/1.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Bisa desain kostum dan mock up kostum</p>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- 2 --}}
                <li class="timeline-inverted tml-2">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{  asset('assets/img/time-line/2.jpg') }}"
                            alt="..." />
                    </div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>

                {{-- 3 --}}
                <li class="tml-3">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/3.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Bisa desain kostum dan mock up kostum</p>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- 4 --}}
                <li class="timeline-inverted tml-4">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted tml-5">
                    <div class="timeline-image" data-aos="fade-top">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Features Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>Segera hubungi</h3>
            <p> Hubungi kami jika tertarik dengan kami</p>
            <a class="cta-btn" href="{{ url('/contact') }}">Hubungi</a>
        </div>

    </div>
</section>
<!-- End Cta Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                data-aos="fade-right" data-aos-delay="100"></div>
            <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                data-aos-delay="100">
                <div class="content d-flex flex-column justify-content-center">
                    <h3>Hasil Kerja kami</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                    <div class="row">
                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-emoji-smile"></i>
                                <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p><strong>Klien Senang</strong> consequuntur voluptas nostrum aliquid ipsam architecto
                                    ut.</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-journal-richtext"></i>
                                <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p><strong>Proyek</strong> adipisci atque cum quia aspernatur totam laudantium et quia
                                    dere tan</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-clock"></i>
                                <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="4"
                                    class="purecounter"></span>
                                <p><strong>Tahun Pengalaman</strong> aut commodi quaerat modi aliquam nam ducimus aut
                                    voluptate non vel</p>
                            </div>
                        </div>

                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <i class="bi bi-award"></i>
                                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="4"
                                    class="purecounter"></span>
                                <p><strong>Penghargaan</strong> rerum asperiores dolor alias quo reprehenderit eum et
                                    nemo
                                    pad der</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section>
<!-- End Counts Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- End Testimonials Section -->
@endsection
