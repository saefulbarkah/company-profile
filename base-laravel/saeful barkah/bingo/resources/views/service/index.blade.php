@extends('_layouts.master')

@section('title', 'Layanan')
@section('content')

{{-- single page header --}}
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2></h2>
            </div>
        </div>
    </div>
</section>
{{-- end single page header --}}


<!-- Start Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="row no-gutters">
            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Layanan</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, perferendis delectus aliquid,
                        ea, eligendi rem nesciunt dicta optio adipisci repellat ipsum tempore tenetur maiores harum est
                        ut sed voluptatem enim.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>
        <!-- End row -->

        <div class="row">
            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/order.png') }}" alt="" class="img-fluid" width="128px">
                    </div>
                    <h3>Full Order Jersey</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/shirt.png') }}" alt="" class="img-fluid" width="128px">
                    </div>
                    <h3>T-shirt Sablon</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/kemeja.png') }}" alt="" class="img-fluid" width="128px">
                    </div>
                    <h3>Kemeja</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->
        </div>
        <div class="row mt-3 p-3">
            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/hoodie.png') }}" alt="" class="img-fluid" width="128px">
                    </div>
                    <h3>Jaket</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/printing.png') }}" alt="" class="img-fluid"
                            width="128px">
                    </div>
                    <h3>Makloon Sublime Printing</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="service-block p-4 text-center shadow">
                    <div class="service-icon text-center">
                        <img src="{{ asset('assets/images/icon/sublimation.png') }}" alt="" class="img-fluid"
                            width="128px">
                    </div>
                    <h3>Makloon Press Sublime</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->
        </div>
    </div> <!-- End container -->
</section>
<!-- End section -->
@endsection
