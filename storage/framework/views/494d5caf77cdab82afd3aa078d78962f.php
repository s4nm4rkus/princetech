

<?php $__env->startSection('content'); ?>
   
    <?php echo app('Illuminate\Foundation\Vite')('resources/assets/css/home.style.css'); ?>
<body>
    <div class="home-content">
        Hello World
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\prince-technologies\resources\views/pages/home.blade.php ENDPATH**/ ?>