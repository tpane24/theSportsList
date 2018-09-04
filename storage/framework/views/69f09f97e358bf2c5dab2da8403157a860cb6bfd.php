<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  theSportsList | Sign In
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<div class="container" id="navContainer">
  <nav class="navbar navbar-light" id="navBar">
  <a class="navbar-brand h2" href="<?php echo e(route('page.home')); ?>"><span class="light-blue-text">theSportsList</span></a>
  <form class="form-inline">
    <ul class="nav nav-tabs justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.findSports')); ?>">Find Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.advertising')); ?>">Advertising</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.contact')); ?>">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(route('participant.signin')); ?>">Sign In</a>
      </li>
    </ul>
  </form>
</nav>
</div>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">theSportsList | Sign In</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>