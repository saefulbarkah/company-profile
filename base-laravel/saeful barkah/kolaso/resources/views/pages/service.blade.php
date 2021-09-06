@extends('layouts.master')

@section('title','Genetic | Layanan')
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="assets/images/page-titles/5.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Layanan</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-3.html">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features1" class="features features-1 pt-130 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center mb-60">
                    <h2 class="heading--title">Layanan</h2>
                </div>
            </div>

        </div>

        <div class="row justify-content-center text-center">

            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/order.png') }}" class="img-fluid" width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>Full order</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/hoodie.png') }}" class="img-fluid" width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>Sablon jacket</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/cloth.png') }}" class="img-fluid" width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>Sablon kemeja</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/shirt.png') }}" class="img-fluid" width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>Sablon Kaos</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/sublimation.png') }}" class="img-fluid"
                            width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>makloon Sublime Press</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/printing.png') }}" class="img-fluid"
                            width="100px"></img>
                    </div>
                    <div class="feature--content">
                        <h4>makloon Sublime Printing</h4>
                        <p></p>
                    </div>
                    {{-- <div class="feature--more">
                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>More</span></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
