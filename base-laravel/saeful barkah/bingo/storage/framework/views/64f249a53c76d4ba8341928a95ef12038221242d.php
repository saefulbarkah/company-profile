<!DOCTYPE html>
<html>



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Mobile Specific Meta
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- CSS
  ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/themefisher-font/style.css')); ?>">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/lightbox2/dist/css/lightbox.min.css')); ?>">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/animate/animate.css')); ?>">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/slick/slick.css')); ?>">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

</head>


<body id="body">

    <!--
  Start Preloader
  ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
  End Preloader
  ==================================== -->



    
    <?php echo $__env->make('_layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    
    <?php echo $__env->yieldContent('content'); ?>
    


    
    <?php echo $__env->make('_layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    



    
    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>

    <!-- Form Validation -->
    <script src="<?php echo e(asset('assets/plugins/form-validation/jquery.form.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/form-validation/jquery.validate.min.js')); ?>"></script>

    <!-- Bootstrap4 -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!-- Parallax -->
    <script src="<?php echo e(asset('assets/plugins/parallax/jquery.parallax-1.1.3.js')); ?>"></script>
    <!-- lightbox -->
    <script src="<?php echo e(asset('assets/plugins/lightbox2/dist/js/lightbox.min.js')); ?>"></script>
    <!-- Owl Carousel -->
    <script src="<?php echo e(asset('assets/plugins/slick/slick.min.js')); ?>"></script>
    <!-- filter -->
    <script src="<?php echo e(asset('assets/plugins/filterizr/jquery.filterizr.min.js')); ?>"></script>
    <!-- Smooth Scroll js -->
    <script src="<?php echo e(asset('assets/plugins/smooth-scroll/smooth-scroll.min.js')); ?>"></script>

    <!-- Custom js -->
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\File\templating-blade\base-laravel\saeful barkah\bingo\resources\views/_layouts/master.blade.php ENDPATH**/ ?>