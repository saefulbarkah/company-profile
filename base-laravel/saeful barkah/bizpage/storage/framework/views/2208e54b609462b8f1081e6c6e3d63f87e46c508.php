<div class="row justify-content-center align-items-center">
    <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Genetic Wear</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php echo e(Request::is('/') ? 'active' : ' '); ?>"
                        href="<?php echo e(url('/')); ?>">Beranda</a></li>
                <li><a class="nav-link scrollto <?php echo e(Request::is('about') ? 'active' : ' '); ?>"
                        href="<?php echo e(url('about')); ?>">Tentang Kami</a></li>
                <li><a class="nav-link scrollto <?php echo e(Request::is('service') ? 'active' : ' '); ?>"
                        href="<?php echo e(url('service')); ?>">Layanan</a></li>
                <li><a class="nav-link scrollto <?php echo e(Request::is('portfolio') ? 'active' : ' '); ?>"
                        href="<?php echo e(url('portfolio')); ?>">Portofolio</a></li>
                <li><a class="nav-link scrollto <?php echo e(Request::is('contact') ? 'active' : ' '); ?>"
                        href="<?php echo e(url('contact')); ?>">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</div>
<?php /**PATH E:\WEBSITE\company-profile\base-laravel\saeful barkah\bizpage\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>