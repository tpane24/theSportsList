<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  theSportsList | Sign Up
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
        <a class="nav-link" href="<?php echo e(route('page.signin')); ?>">Sign In</a>
      </li>
    </ul>
  </form>
</nav>
</div>
<div class="containerCutTwo container">
  <div class="h3 text-center light-blue-text text-center= banner-title">theSportsList | Sign Up</div>
</div>


<form action="" method="post">
    <div class="minibannerForm banner20white">Sign up for a free User Account now!</div>
    <div class="sectionHeaderForm black"><div class="sectionNumber">1</div>Your basic information:</div>
    <div class="fullRow">
      <input class="inputHalf inputStyle" id="userFirstName" name="userFirstName" type="text" placeholder="First name">
      <input class="inputHalf inputStyle" id="userLastName" name="userLastName" type="text" placeholder="Last name">
    </div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userAddress" name="userAddress" type="text" placeholder="Address">
    </div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userCity" name="userCity" type="text" placeholder="City">
    </div>
    <div class="fullRow">
      <select class="inputHalf inputStyle" id="userState" name="userState" type="text" placeholder="State Abbreviation" maxlength="2" onblur="stateCheck()" onfocus="emptyElement('userInfoSpan')">
  <?php
  // include_once("php-includes/state-options.php");
  ?>
</select>
      <input class="inputHalf inputStyle" id="userZip" name="userZip" type="text" placeholder="Zip Code" maxlength="5" onblur="zipCheck()" onfocus="emptyElement('userInfoSpan')">
      <br><span id="userInfoSpan"></span>
    </div>
    <div class="grayLine"></div>
    <div class="sectionHeaderForm black"><div class="sectionNumber">2</div>Your credentials:</div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userUserName" name="userUserName" type="text" placeholder="User Name" onkeyup="userCheck()" onfocus="emptyElement('userUserNameSpan')" onblur="uniqueUserName()">
      <br><span id="userUserNameSpan"></span>
    </div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userEmail" name="userEmail" type="text" placeholder="Email" onblur="emailCheck()" onfocus="emptyElement('userEmailSpan')">
      <br><span id="userEmailSpan"></span>
    </div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userPassword" name="userPassword" type="password" placeholder="Password" onblur="passwordLength()" onfocus="emptyElement('userPassword1Span')">
      <br><span id="userPassword1Span"></span>
    </div>
    <div class="fullRow">
      <input class="inputFull inputStyle" id="userConfirmPassword" name="userConfirmPassword" type="password" placeholder="Confirm Password" onkeyup="passwordCheck()" onfocus="emptyElement('userPassword2Span')">
      <br><span id="userPassword2Span"></span>
    </div>
    <div class="grayLine"></div>
    <div class="fullRow">
      <button class="button" id="userSignupbtn" name="userSignupbtn" onclick="createIT()">Create Account</button>
      <br><span id="userStatus"></span>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>