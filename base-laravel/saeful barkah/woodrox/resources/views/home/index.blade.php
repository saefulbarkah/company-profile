@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_content">
                        <h2>Precise concept design <br />for stylish living</h2>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
                        <a class="banner_btn" href="#">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_box">
                        <div class="home_item">
                            <i class="flaticon-sofa"></i>
                        </div>
                        <div class="home_item">
                            <i class="flaticon-bed"></i>
                        </div>
                        <div class="home_item">
                            <i class="flaticon-computer"></i>
                        </div>
                        <div class="home_item">
                            <i class="flaticon-mirror"></i>
                        </div>
                        <div class="home_item">
                            <i class="flaticon-closet"></i>
                        </div>
                        <div class="home_item">
                            <i class="flaticon-kitchen"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="furniture_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Most Popular Furnitures</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="furniture_inner row">
            <div class="col-lg-4">
                <div class="furniture_item">
                    <img class="img-fluid" src="{{ asset('assets/img/furniture/furniture-1.jpg' ) }}" alt="">
                    <h4>Green Butter Sofa</h4>
                    <p>Sony laptops are among the most well known laptops on today’s market. Sony is a name that.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="furniture_item">
                    <img class="img-fluid" src="{{ asset('assets/img/furniture/furniture-2.jpg' ) }}" alt="">
                    <h4>Green Butter Sofa</h4>
                    <p>Sony laptops are among the most well known laptops on today’s market. Sony is a name that.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="furniture_item">
                    <img class="img-fluid" src="{{ asset('assets/img/furniture/furniture-3.jpg' ) }}" alt="">
                    <h4>Green Butter Sofa</h4>
                    <p>Sony laptops are among the most well known laptops on today’s market. Sony is a name that.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================Projects Area =================-->
<section class="projects_area">
    <div class="row m0">
        <div class="projects_item wd_18">
            <img src="{{ asset('assets/img/projects/projects-1.jpg' ) }}" alt="">
            <div class="hover">
                <h4>Alex Complex for esidence</h4>
                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
            </div>
        </div>
        <div class="projects_item wd_18">
            <img src="{{ asset('assets/img/projects/projects-2.jpg' ) }}" alt="">
            <div class="hover">
                <h4>Alex Complex for esidence</h4>
                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
            </div>
        </div>
        <div class="projects_item wd_44">
            <img src="{{ asset('assets/img/projects/projects-3.jpg' ) }}" alt="">
            <div class="hover">
                <h4>Alex Complex for esidence</h4>
                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
            </div>
        </div>
        <div class="projects_item wd_18">
            <img src="{{ asset('assets/img/projects/projects-4.jpg' ) }}" alt="">
            <div class="hover">
                <h4>Alex Complex for esidence</h4>
                <p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create  slimmer.</p>
            </div>
        </div>
    </div>
</section>
<!--================End Projects Area =================-->

<!--================Feature Area =================-->
<section class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Some Features that Made us Unique</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="row feature_inner">
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-user"></i>Expert Technicians</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-license"></i>Professional Service</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-phone"></i>Great Support</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-rocket"></i>Technical Skills</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-diamond"></i>Highly Recomended</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <h4><i class="lnr lnr-bubble"></i>Positive Reviews</h4>
                    <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<!--================Impress Area =================-->
<section class="impress_area p_120">
    <div class="container">
        <div class="impress_inner text-center">
            <h2>Looking for a <br />quality and affordable Furniture?</h2>
            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace.</p>
            <a class="main_btn" href="#">Read Details</a>
        </div>
    </div>
</section>
<!--================End Impress Area =================-->

<!--================Our Blog Area =================-->
<section class="our_blog_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Recent Posts from our blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="blog_inner row">
            <div class="col-lg-4">
                <div class="o_blog_item">
                    <div class="blog_img">
                        <img class="img-fluid" src="{{ asset('assets/img/our-blog/our-blog-1.jpg' ) }}" alt="">
                    </div>
                    <div class="blog_text">
                        <div class="blog_cat">
                            <a class="active" href="#">Travel</a>
                            <a href="#">Life style</a>
                        </div>
                        <a href="#"><h4>Low Cost Advertising</h4></a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
                        <a class="date" href="#">31st January, 2018</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="o_blog_item">
                    <div class="blog_img">
                        <img class="img-fluid" src="{{ asset('assets/img/our-blog/our-blog-2.jpg' ) }}" alt="">
                    </div>
                    <div class="blog_text">
                        <div class="blog_cat">
                            <a class="active" href="#">Travel</a>
                            <a href="#">Life style</a>
                        </div>
                        <a href="#"><h4>Low Cost Advertising</h4></a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
                        <a class="date" href="#">31st January, 2018</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="o_blog_item">
                    <div class="blog_img">
                        <img class="img-fluid" src="{{ asset('assets/img/our-blog/our-blog-3.jpg' ) }}" alt="">
                    </div>
                    <div class="blog_text">
                        <div class="blog_cat">
                            <a class="active" href="#">Travel</a>
                            <a href="#">Life style</a>
                        </div>
                        <a href="#"><h4>Low Cost Advertising</h4></a>
                        <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
                        <a class="date" href="#">31st January, 2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Blog Area =================-->

<!--================Clients Logo Area =================-->
<section class="clients_logo_area p_120">
    <div class="container">
        <div class="clients_slider owl-carousel">
            <div class="item">
                <img src="{{ asset('assets/img/clients-logo/c-logo-1.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/clients-logo/c-logo-2.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/clients-logo/c-logo-3.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/clients-logo/c-logo-4.png') }}" alt="">
            </div>
            <div class="item">
                <img src="{{ asset('assets/img/clients-logo/c-logo-5.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!--================End Clients Logo Area =================-->
@endsection
