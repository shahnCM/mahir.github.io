<nav class="navbar navbar-expand-sm navbar-light bg-white pt-0 pb-0 mb-5">
  <div class="container">
    <a class="navbar-brand text-army-green font-weight-bolder" href="<?php echo $__env->yieldContent('index_link'); ?>">Mahir Shahrier</a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo $__env->yieldContent('is_active'); ?>">
          <a class="nav-link" href="<?php echo $__env->yieldContent('experience_link'); ?>">Experience</a>
        </li>
        <li class="nav-item <?php echo $__env->yieldContent('is_active'); ?>">
          <a class="nav-link" href="<?php echo $__env->yieldContent('skills_link'); ?>">Skills</a>
        </li>
        <li class="nav-item <?php echo $__env->yieldContent('is_active'); ?>">
          <a class="nav-link" href="<?php echo $__env->yieldContent('projects_link'); ?>">Projects</a>
        </li>
      </ul>
    </div>  
  </div>
</nav>

<?php /**PATH /opt/lampp/htdocs/dev/php/portfolio/shahncm.github.io/source/resources/views/partials/navbar.blade.php ENDPATH**/ ?>