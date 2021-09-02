@extends('_layouts.master')

@section('title', 'Tentang kami')
@section('content')

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tentang Kami</h2>
            </div>
        </div>
    </div>
</section>


{{-- about --}}
<section class="about-shot-info section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-20">
                <h2>Kami Membuat Desain<br> dan Teknologi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat voluptate molestias, quaerat quo
                    natus dolor harum voluptatibus modi dicta ducimus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quae officia earum dolore est quaerat
                    cupiditate voluptatibus id, magni alias veniam voluptate, libero explicabo, distinctio atque!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt
                    voluptas. Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae
                    molestias aut, aperiam!</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ asset('assets/images/company/company-image.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
{{-- about end --}}


<!--Start Call To Action -->
<section class="call-to-action-2 section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum
                    nulla sed justo tempor posuere sit amet sit amet ligula.</h2>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->


<!-- Start Our Team -->
<section class="team" id="team">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center ">
                    <h2>Tim Kami</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati,
                        quis
                        similique quos.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/member-1.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Michael Jonson</h3>
                        <span>Head Of Marketing</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/member-2.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Carrick Mollenkamp</h3>
                        <span>Web Developer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->
                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/member-3.jpg') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>David Gauthier</h3>
                        <span>Head Of Management</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam,
                            culpa odio.</p>
                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->

<!-- Start Call To Action -->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Mari Menciptakan Sesuatu Bersama</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                    consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                <a href="" class="btn btn-main">Hubungi kami</a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->
@endsection
