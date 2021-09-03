

<?php $__env->startSection('title', __('Not Found')); ?>
<?php $__env->startSection('content'); ?>
<h1>404</h1>
<h2>Halaman tidak di temukan</h2>
<p>Maaf, halaman yang Anda coba lihat tidak ada</p>
<a href="<?php echo e(route('home')); ?>" class="btn btn-main mt-20">Kembali</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.404', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\File\templating-blade\base-laravel\saeful barkah\bingo\resources\views/errors/404.blade.php ENDPATH**/ ?>