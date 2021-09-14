@extends('layouts.master')

@section('title', 'Genetic | Layanan Full Order')
@section('content')
@push('styles')
<style>
/* Equal-height card images, cf. https://stackoverflow.com/a/47698201/1375163*/
.card-img-top {
    /*height: 11vw;*/
    object-fit: cover;
}
  /* Small devices (landscape phones, 576px and up) */
  @media (min-width: 576px) {
    .card-img-top {
        height: 19vw;
    }
  }
  /* Medium devices (tablets, 768px and up) */
  @media (min-width: 768px) {
    .card-img-top {
        height: 16vw;
    }
  }
  /* Large devices (desktops, 992px and up) */
  @media (min-width: 992px) {
    .card-img-top {
        height: 11vw;
    }
  }
  /* Extra large devices (large desktops, 1200px and up) */
  @media (min-width: 992px) {
    .card-img-top {
        height: 18vw;
    }
  }
</style>

@endpush
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
            <p>Full Order</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/img/services/jersey-bola.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center"> Jersey Futsal</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="https://id-live-05.slatic.net/p/55bf7d26f60dee854ab06761a10e7b85.jpg_720x720q80.jpg_.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jersey Gaming</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="https://s4.bukalapak.com/img/90507174642/large/data.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jersey Mancing</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="https://s3.bukalapak.com/img/80844100242/large/data.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jersey Sepeda</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="https://1.bp.blogspot.com/-5bz7f7SDKr4/XFm9txpcWDI/AAAAAAAAC2k/hVqsvktILtoyiJZ1-7W2JsnEEo420YTlwCLcBGAs/w1200-h630-p-k-no-nu/mockup-jaket-hoodie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Jacket</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="https://lh6.googleusercontent.com/proxy/JK3EcFc8MMugtXf5rTGzb1BdDXnFcnjUO-zo1rszL5-4H8Eza2_mL5yqnfahDWsQLC_tyebeY7gdBHLQjerlLIQicBMhUG5k3YIntD_NyHm7=w1200-h630-p-k-no-nu" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Kemeja</h5>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/img/services/tshirt.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-center">Tshirt</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
