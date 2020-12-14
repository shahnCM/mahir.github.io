<?php $__env->startSection('title', 'Mahir/Projects'); ?>

<?php $__env->startSection('index_link', $pages->index); ?>
<?php $__env->startSection('experience_link', $pages->experience); ?>
<?php $__env->startSection('skills_link', $pages->skills); ?>
<?php $__env->startSection('projects_link', $pages->projects); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

      <div class="text-right">
        <h1 class="text-army-green mb-5"><?php echo e($title); ?></h1>
      </div>

      <div class="project row">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pjt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
          <div class="pjt p-1 col-sm-6">
            <div class="border rounded" style="border-color: #F8F8F8; min-height:180px;">
              <div class="p-2">
                <div class="row">
                  <h4 class="col-6 text-army-green"><?php echo e($pjt->name); ?></h4>
                  <h6 class="col-6 text-secondary text-right">[<?php echo e($pjt->languages); ?>]</h6>
                </div>
                <div class="p-2">
                  <p class="text-wrap text-justified text-secondary"><?php echo e($pjt->description); ?></p>
                </div>

                <div class="position-relative bottom-0">
                  <div class="row">
                    <a class="text-decoration-none text-left col-6 text-danger" href="<?php echo e($pjt->live->link); ?>"><?php if($pjt->live->available): ?> Live <?php endif; ?></a>
                    <a class="text-decoration-none text-right col-6 text-success" href="<?php echo e($pjt->github->link); ?>"><?php if($pjt->github->available): ?> Github <?php endif; ?></a>
                  </div>
                </div>            
              </div>
            </div>
          </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
      </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/dev/php/portfolio/shahncm.github.io/source/resources/views/template_3.blade.php ENDPATH**/ ?>