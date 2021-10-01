@extends('layouts.master')
@section('title','Genetic | Portofolio')
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
                        <h1>Portofolio</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">beranda</a></li>
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
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center mb-60">
                    <p class="heading--subtitle"></p>
                    <h2 class="heading--title">Daftar portofolio</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-md-12 work-filter">
                <ul class="list-inline mb-0">
                    <li><a class="active-filter" href="#" data-filter="*">Semua</a></li>
                    <li><a href="#" data-filter=".filter-jersey">Jersey</a></li>
                    <li><a href="#" data-filter=".filter-kemeja">kemeja</a></li>
                    <li><a href="#" data-filter=".filter-jaket">jaket</a></li>
                    <li><a href="#" data-filter=".filter-kaos">kaos</a></li>
                </ul>
            </div>
        </div>
        <div id="work-all" class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jersey">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/futsal-1-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/futsal-1-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                {{-- <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div> --}}
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jersey">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/futsal-1-belakang.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/futsal-1-belakang.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                {{-- <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jersey">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/futsal-3-belakang.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/futsal-3-belakang.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                                {{-- <div class="work--content">
                                    <div class="work--title">
                                        <h4><a href="work-single-small-images.html">Baby Tshirt Branding</a></h4>
                                    </div>
                                    <div class="work--cat">
                                        <a href="#">Packaging</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jersey">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/futsal-3-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/futsal-3-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jersey">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/futsal-3-depan.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery"
                                        href="{{ asset('assets/images/portfolio/futsal-3-depan.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- jaket --}}
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jaket">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/jaket.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/jaket.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jaket">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/jaket2.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/jaket2.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jaket">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/jaket3.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/jaket3.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-jaket">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/jaket4.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/jaket4.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kemeja --}}
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-kemeja">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/kemeja.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/kemeja.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-kemeja">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/kemeja2.png') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/kemeja2.png') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-kemeja">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/kemeja3.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/kemeja3.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- kaos --}}
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-kaos">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/kaos.jpg') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/kaos.jpg') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 work-item filter-kaos">
                <div class="work-item-container">
                    <div class="work--img">
                        <img src="{{ asset('assets/images/portfolio/kaos2.png') }}" alt="work Item">
                        <div class="work--hover">
                            <div class="work--action">
                                <div class="work--zoom">
                                    <a data-fancybox="galery" href="{{ asset('assets/images/portfolio/kaos2.png') }}"
                                        title="Work Item">
                                        <i class="fas fa-search"></i>
                                    </a>
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
