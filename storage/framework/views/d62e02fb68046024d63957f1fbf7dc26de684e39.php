<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  theSportsList | Advertising Sign Up
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/advertising-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">theSportsList | New Advertising Account</div>
  <div class="contentGrayHalfLeft">
    <?php echo $__env->make('templates/html/providers-advertisement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
  <div class="contentWhiteHalfRight">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Create Advertising Account</div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputName">Name</label>
          <input type="text" class="form-control inputStyle" name="inputName" placeholder="Name">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputBusinessName">Business Name</label>
          <input type="text" class="form-control inputStyle" name="inputBusinessName" placeholder="Business Name">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputEmail">Email address</label>
          <input type="email" class="form-control inputStyle" name="inputEmail" placeholder="email@example.com">
        </div>
        <div class="col pr-4">
          <label for="inputPhone">Phone number</label>
          <input type="text" class="form-control inputStyle" name="inputPhone" placeholder="xxx-xxx-xxxx">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control inputStyle" name="inputAddress" placeholder="Address">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputCity">City</label>
          <input type="text" class="form-control inputStyle" name="inputCity" placeholder="City">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputState">State</label>
          <select class="form-control inputStyle" name="inputState">
            <?php echo $__env->make('templates/state-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputZip">Zip Code</label>
          <input type="number" maxlength="5" class="form-control inputStyle" name="inputZip" placeholder="xxxxx">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control inputStyle" name="inputPassword" placeholder="Password">
        </div>
        <div class="col pr-4">
          <label for="inputConfirmPassword">Confirm Password</label>
          <input type="password" class="form-control inputStyle " name="inputConfirmPassword" placeholder="Password">
        </div>
      </div>

        <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><button onclick="hideThis()" class="blue-button">Submit</button></div>
        <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(csrf_field()); ?>

    </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>