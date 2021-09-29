@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')

<!--
==================================================
Slider Section Start
================================================== -->
<section class="home">
<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">

                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                            <span>Genetic wear</span><br>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">jersey</b>
                                <b>Baju</b>
                                <b>kemeja</b>
                                <b>jaket</b>
                            </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                       Berpengalaman sejak tahun 2008 hingga sekarang, kami berkomitmen untuk<br> memberikan layanan terbaik dan terpercaya.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        Lebih dari sekedar membuat sebuah produk...
                    </h2>
                    <p>
                        Tidak hanya bergerak di bidang pembuatan jersey dan sebagainya kami juga memiliki layanan berupa jasa untuk mencetak gambar anda dengan menggunakan sublime printing atau kami dapat menempelkan hasil printing yg sudah anda buat dengan menggunakan sublime press/heat transfer kedalam produk berbahan kain yang anda inginkan...
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('assets/images/about/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->

{{-- section timeline --}}
{{-- <div class="title">
    <h2>Sortable Vertical Timeline</h2>
    <h4><b>How use</b>: Drag and drop any object in timeline and feel the experience :)</h4>
  </div>

  <div class="Timeline" id="Timeline">
    <div class="Timeline-line">
      <div class="Timeline-line-menu"></div>
    </div>

    <div class="Timeline-item">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Item</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item Timeline-item--quote">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Quote</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item Timeline-item--image">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Image</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body">
            <img src="http://fakeimg.pl/350x200/ddd/FFF/?text=Hola">
          </div>
        </div>

      </div>
    </div>

    <div class="Timeline-item">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Video</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-body">
            <iframe src="//player.vimeo.com/video/112719694?title=0&byline=0&portrait=0" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </div>

    <div class="Timeline-item">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Item</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item Timeline-item--quote">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Quote</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum inventore quas deserunt, reprehenderit est doloribus praesentium minima sequi repudiandae libero!</p>
            </blockquote>
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Item</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Item</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body"></div>
        </div>

      </div>
    </div>

    <div class="Timeline-item Timeline-item--image">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Image</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body">
            <img src="http://fakeimg.pl/350x100/ddd/FFF/?text=Chao">
          </div>
        </div>

      </div>
    </div>

      <div class="Timeline-item Timeline-item--image">
      <div class="Timeline-item-inner">
        <div class="Timeline-item-index"></div>
        <div class="Timeline-item-top">
          <div class="Timeline-item-top-type">
            <i></i> <span>Image</span>
          </div>

        </div>
        <div class="Timeline-item-content">
          <div class="Timeline-item-content-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing.
          </div>
          <div class="Timeline-item-content-body">
            <img src="http://placekitten.com/350/208">
          </div>
        </div>

      </div>
    </div>

  </div> --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <h2 class="title-timeline text-center">Proses kerja kami</h2>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Memilih produk</h3>
                        <p class="description">
                            Pembeli memilih pruduk dan menentukan jenis produk yang ingin di pesan beserta keterangan jumlah, ukuran, warna dan sebagainya.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Negosiasi harga produk</h3>
                        <p class="description">
                            Melakukan negosiasi harga produk terlebih dahulu untuk mengetahui kebutuhan pembeli dan kesepakatan harga.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Down payment(DP) minimal 50%</h3>
                        <p class="description">
                            Setelah pembeli telah menentukan jenis barang dan negosiasi harga produk kemudian memberikan down payment atau DP sebesar 50%.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Produksi</h3>
                        <p class="description">
                            Pihak penjual akan mulai memproduksi produk sesuai kesepakatan.
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Pembayaran sisa invoice</h3>
                        <p class="description">
                            Setelah barang selesai di produksi pembeli melakukan pembayaran sisa invoice
                        </p>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <h3 class="title">Pengambilan/Pengiriman</h3>
                        <p class="description">
                            Setelah selesai melakukan pembayaran sisa invoice, barang dapat di ambil oleh pembeli atau dapat di kirim oleh pihak penjual.
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end section timeline --}}


<!-- ======= F.A.Q Section ======= -->
{{-- <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  Non consectetur a erat nam at lectus urna duis?
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">

          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
              </h2>
              <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  Varius vel pharetra vel turpis nunc eget lorem dolor?
                </button>
              </h2>
              <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div> --}}

  </section><!-- End F.A.Q Section -->

@endsection
