@extends('layouts.master')

@section('content')

<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="{{ asset('assets/images/page-titles/2.jpg') }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Portofolio kami</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-3.html">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Portofolio</li>
                    </ol>
                </div>

            </div>

        </div>

    </div>

</section>


<section id="workGrid" class="work work-grid pb-90">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-md-12 work-filter">
                <ul class="list-inline mb-0">
                    <li><a class="active-filter" href="#" data-filter="*">ALL</a></li>
                    <li><a href="#" data-filter=".filter-merah">Merah</a></li>
                    <li><a href="#" data-filter=".filter-green">Hijau</a></li>
                    <li><a href="#" data-filter=".filter-orange">Orange</a></li>
                </ul>
            </div>

        </div>
        <div id="work-all" class="row">

            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-merah">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-merah-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-merah-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-merah">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-merah-belakang.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-merah-belakang.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-green">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-green">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-hijau-belakang.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-hijau-belakang.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-orange">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-orange-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-orange-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 work-item filter-orange">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/baju-orange-belakang.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/baju-orange-belakang.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

@endsection
