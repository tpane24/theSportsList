<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  <?php echo e(config('app.name')); ?> | Sign In
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/signin-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title"><?php echo e(config('app.name')); ?> | Sign In</div>
  <div class="contentWhiteFull">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Select your Account Type:</div>
    <div id="buttonDiv" class="h5 text-center mt-4 mb-4">
      <button id="sportsButton" class="blue-button" onclick="participantClick()">Find Sports</button>
      <button id="advertisingButton" class="blue-button" onclick="advertisingClick()">Advertising</button>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div id="participantForm" style="display:none">
      <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Sign in to Find Sports</div>
      <!-- <div class="h6 black-text pl-2 pb-2">Sign In Now:</div> -->
      <div class="">
        <form class="" action="<?php echo e(route('participant.postSignin')); ?>" method="post">
          <div class="pl-3 h5 black-text text-center"><input placeholder="Email address" class="inputFull inputStyle" type="text" name="inputEmail" value=""></div>
          <div class="pl-3 h5 black-text text-center"><input placeholder="Password" class="inputFull inputStyle" type="password" name="inputPassword" value=""></div>

          <div id="buttonDiv1" class="h5 text-center mt-4 pt-4"><button onclick="hideThis1()" class="blue-button">Sign In</button></div>
          <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="text-right pr-2"><a href="<?php echo e(route('participant.signup')); ?>" class="">Create New Account</a></div>
          <div class="text-right pr-2"><a href="<?php echo e(route('participant.password.request')); ?>" class="">Forgot Password?</a></div>
          <?php echo e(csrf_field()); ?>

        </form>
      </div>
    </div>
    <div id="advertisingForm" style="display:none">
      <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Sign in to Advertising!</div>
      <!-- <div class="h6 black-text pl-2 pb-2">Sign In Now:</div> -->
      <div class="">
        <form class="" action="<?php echo e(route('advertising.postSignin')); ?>" method="post">
          <div class="pl-3 h5 black-text text-center"><input placeholder="Email address" class="inputFull inputStyle" type="text" name="inputEmail" value=""></div>
          <div class="pl-3 h5 black-text text-center"><input placeholder="Password" class="inputFull inputStyle" type="password" name="inputPassword" value=""></div>

          <div id="buttonDiv2" class="h5 text-center mt-4 pt-4"><button onclick="hideThis2()" class="blue-button">Sign In</button></div>

          <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <div class="text-right pr-2"><a href="<?php echo e(route('advertising.signup')); ?>" class="">Create New Account</a></div>
          <div class="text-right pr-2"><a href="<?php echo e(route('client.password.request')); ?>" class="">Forgot Password?</a></div>
          <?php echo e(csrf_field()); ?>

        </form>
      </div>
    </div>
  </div>


</div>

<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::to('js/signin.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>