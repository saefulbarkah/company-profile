@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')

<!-- Loader -->
<div class="loader">
    <div class="loader-img"></div>
</div>

<!-- Top content -->
<div class="home">
    <div class="top-content-text wow fadeInUp">
        <div class="divider-2"><span></span></div>
        <h1><a href="">THIS IS Bagoesyah</a></h1>
        <div class="divider-2"><span></span></div>
        <p>This is Riona. A new one page template built with Bootstrap that you can use for your agency, portfolio or business website. Enjoy!</p>
        <div class="top-content-bottom-link">
            <a class="big-link-1" href="#">Start a project!</a>
        </div>
    </div>
</div>

<!-- Clients -->
<div class="clients-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 clients wow fadeInUp">
                <a href="#">
                    <img src="assets/img/clients/1.png" alt="" data-at2x="assets/img/clients/1.png">
                </a>
                <a href="https://wrapbootstrap.com/theme/areta-agency-portfolio-template-WB0L5XF38?ref=azmind">
                    <img src="assets/img/clients/2.png" alt="" data-at2x="assets/img/clients/2.png">
                </a>
                <a href="https://wrapbootstrap.com/theme/seria-coming-soon-landing-page-WB05D4591?ref=azmind">
                    <img src="assets/img/clients/3.png" alt="" data-at2x="assets/img/clients/3.png">
                </a>
                <a href="https://wrapbootstrap.com/theme/jesis-responsive-app-landing-page-WB085528N?ref=azmind">
                    <img src="assets/img/clients/4.png" alt="" data-at2x="assets/img/clients/4.png">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Counters -->
<div class="counters-container section-container section-container-full-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 counter-box wow fadeInUp">
                <h4>7</h4>
                <p>Years of experience</p>
            </div>
            <div class="col-sm-3 counter-box wow fadeInDown">
                <h4>128</h4>
                <p>Projects completed</p>
            </div>
            <div class="col-sm-3 counter-box wow fadeInUp">
                <h4>17430</h4>
                <p>Lines of code</p>
            </div>
            <div class="col-sm-3 counter-box wow fadeInDown">
                <h4>7390</h4>
                <p>Cups of coffee</p>
            </div>
        </div>
    </div>
</div>


<!-- Our motto -->
<div class="our-motto-container section-container section-container-full-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 our-motto section-description wow fadeInLeftBig">
                <p>
                    "Success is not the key to happiness. Happiness is the key to success.
                    If you love what you are doing, you will be successful."
                </p>
                <div class="our-motto-author">ALBERT SCHWEITZER</div>
            </div>
        </div>
    </div>
</div>


<!-- Scroll to top -->
<div class="section-container section-container-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="scroll-to-top">
                    <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
