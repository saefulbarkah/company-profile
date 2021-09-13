@extends('layouts.master')

@section('title', 'Genetic Home')
@section('content')

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Layanan</h2>
            <p>Layanan Yang kami berikan</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                    <h4><a href="">Full order Jersey</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-tshirt"></i></div>
                    <h4><a href="">T-shirt sablon</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/icon/shirt.png') }}" alt="" class="img-fluid"
                            width="40px"></div>
                    <h4><a href="">Kemeja</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon">
                        <img src="{{ asset('assets/icon/hoodie.png') }}" alt="" class="img-fluid" width="40px">
                    </div>
                    <h4><a href="">Jaket</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/icon/printer-filled-tool-for-print-button.png') }}"
                            alt="" class="img-fluid" width="35px"></div>
                    <h4><a href="">makloon Sublime Printing</a></h4>
                    <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="{{ asset('assets/icon/sublimation.png') }}" alt="" class="img-fluid"
                            width="35px"></div>
                    <h4><a href="">Makloon press sublime</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->

@endsection
