<?php $__env->startSection('title','Genetic | Portofolio'); ?>
<?php $__env->startSection('title-pages','Genetic Wear'); ?>
<?php $__env->startSection('subtitle-pages','Portfolio'); ?>
<?php $__env->startSection('content'); ?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="section-bg">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3 class="section-title">portofolio Kami</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100"">
            <div class=" col-lg-12">
            <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-hijau">Hijau</li>
                <li data-filter=".filter-merah">Merah</li>
                <li data-filter=".filter-orange">Orange</li>
            </ul>
        </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-hijau">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-hijau-belakang.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-hijau-belakang.jpg')); ?>" data-lightbox="portfolio"
                        data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Hijau belakang</a></h4>
                    <p>App</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-hijau">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-hijau-depan.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-hijau-depan.jpg')); ?>"
                        class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i
                            class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Hijau Depan</a></h4>
                    <p>Web</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-merah">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-merah-belakang.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-merah-belakang.jpg')); ?>"
                        class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i
                            class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Merah belakang</a></h4>
                    <p>App</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-merah">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-merah-depan.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-merah-depan.jpg')); ?>"
                        class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i
                            class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Merah Depan</a></h4>
                    <p>Card</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-orange">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-orange-belakang.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-orange-belakang.jpg')); ?>"
                        class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i
                            class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Orange belakang</a></h4>
                    <p>Web</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-orange">
            <div class="portfolio-wrap">
                <figure>
                    <img src="<?php echo e(asset('assets/img/portfolio/baju-orange-depan.jpg')); ?>" class="img-fluid" alt="">
                    <a href="<?php echo e(asset('assets/img/portfolio/baju-orange-depan.jpg')); ?>"
                        class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i
                            class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" class="link-details" title="More Details"><i
                            class="bi bi-link"></i></a>
                </figure>

                <div class="portfolio-info">
                    <h4><a href="portfolio-details.html">Desain Orange depan</a></h4>
                    <p>App</p>
                </div>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WEBSITE\company-profile\base-laravel\saeful barkah\bizpage\resources\views/portfolio/index.blade.php ENDPATH**/ ?>