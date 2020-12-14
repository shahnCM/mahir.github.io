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

      <div class="skill">
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          <div class="text-secondary mb-1 row">
            <h5 class="text-army-green col-sm-2">[<?php echo e($skill->name); ?>] &nbsp;&nbsp;&nbsp;&nbsp; </h5> 
            <h5 class="col-sm-10 text-left"> <?php echo e($skill->skill); ?></h5>
          </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
      </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dev/php/php_static_site_generator-master/resources/views/template_2.blade.php ENDPATH**/ ?>