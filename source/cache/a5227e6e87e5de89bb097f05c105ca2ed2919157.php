<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('index_link', $pages->index); ?>
<?php $__env->startSection('experience_link', $pages->experience); ?>
<?php $__env->startSection('skills_link', $pages->skills); ?>
<?php $__env->startSection('projects_link', $pages->projects); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
        <h1><?php echo e($title); ?></h1>
        <h3><?php echo e($subtitle); ?></h3>
        <div class="row">
            <div class="mx-auto">
                <img src="<?php echo e($img); ?>" alt="">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dev/php/php_static_site_generator-master/resources/views/basic.blade.php ENDPATH**/ ?>