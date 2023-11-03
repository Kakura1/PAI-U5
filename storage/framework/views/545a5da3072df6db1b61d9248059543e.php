
<?php $__env->startSection('title','Curso ' . $curso); ?>
<?php $__env->startSection('content'); ?>
    <h2>Bienvenido al curso <?php echo e($curso); ?></h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/cursos/show.blade.php ENDPATH**/ ?>