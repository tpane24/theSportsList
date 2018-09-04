<div class="container" id="navContainer" style="background-color:blue">
  <ul class="nav nav-tabs justify-content-end">
    <li class="nav-item">
      <a class="nav-link" <?php echo $__env->yieldContent('activeHome'); ?> href="<?php echo e(route('page.home')); ?>">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo $__env->yieldContent('activeContact'); ?>" href="<?php echo e(route('page.contact')); ?>">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php echo $__env->yieldContent('activeAdvertising'); ?>" href="<?php echo e(route('page.advertising')); ?>">Advertising</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled <?php echo $__env->yieldContent('activeSignIn'); ?>" href="<?php echo e(route('page.signin')); ?>">Sign In</a>
    </li>
  </ul>
</div>
