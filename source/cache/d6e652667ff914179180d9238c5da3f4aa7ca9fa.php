<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('index_link', $pages->index); ?>
<?php $__env->startSection('experience_link', $pages->experience); ?>
<?php $__env->startSection('skills_link', $pages->skills); ?>
<?php $__env->startSection('projects_link', $pages->projects); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="text-right">
            <h1 class="text-army-green mb-5"><?php echo e($title); ?></h1>
        </div>
        
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="job mb-5">
            <h4 class="text-army-green"><?php echo e($job->office_name); ?> [<?php echo e($job->job_type); ?>] </h4>
            <h6 class="text-secondary"><?php echo e($job->duration); ?></h6>
            <small><a target="_blank" class="text-secondary text-decoration-none" href="<?php echo e($job->office_website); ?>">Visit Website</a></small> 
            <ul>
                <?php $__currentLoopData = $job->tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="text-secondary"><?php echo e($task->name); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dev/php/php_static_site_generator-master/resources/views/template_1.blade.php ENDPATH**/ ?>