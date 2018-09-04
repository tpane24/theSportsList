<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  <?php echo e(config('app.name')); ?> | advertsing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/advertising-active-logged-out', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title"><?php echo e(config('app.name')); ?> | Advertising</div>
  <div class="contentGrayHalfLeft">
    <div class="h4 text-center gray-text mt-4 pt-4 pb-4">Advertise with <span class="light-blue-text h3"><?php echo e(config('app.name')); ?></span>!</div>
    <div class="h5 text-center mt-4 pt-4"><a href="<?php echo e(route('advertising.signup')); ?>"><button class="blue-button">Join Now</button></a></div>
    <div class="h4 text-center mt-4 pt-4 gray-text">Its Free For Sports Fans!</div>
  </div>
  <div class="contentWhiteHalfRight">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Already have an Account?</div>
    <!-- <div class="h6 black-text pl-2 pb-2">Sign In Now:</div> -->
    <div class="">
      <form class="" action="<?php echo e(route('advertising.postSignin')); ?>" method="post">
        <div class="pl-3 h5 black-text text-center"><input placeholder="Email address" class="inputFull inputStyle" type="text" name="inputEmail" value=""></div>
        <div class="pl-3 h5 black-text text-center"><input placeholder="Password" class="inputFull inputStyle" type="password" name="inputPassword" value=""></div>

        <div id="buttonDiv" class="h5 text-center mt-4 pt-4"><button onclick="hideThis()" class="blue-button">Sign In</button></div>

        <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="text-right pr-2"><a href="<?php echo e(route('advertising.signup')); ?>" class="">Create New Account</a></div>
        <div class="text-right pr-2"><a href="<?php echo e(route('client.password.request')); ?>" class="">Forgot Password?</a></div>
        <?php echo e(csrf_field()); ?>

      </form>
    </div>
  </div>
  <div class="bannerWhiteFull">
    <div class="h3 text-center pt-4 pb-4 light-blue-text">How to Advertise YOUR Games:</div>
  </div>
  <div class="contentWhiteFull">
    <div class="h5 mt-4 pt-4 gray-text indentText">
      <div><span class="black-text">- </span>Join Now and Create an Account.</div>
      <div><span class="black-text">- </span>Tell us about your Games</div>
      <div><span class="black-text">- </span>Edit/Delete/Add Games as you Desire.</div>
      <div class="light-blue-text"><span class="black-text">- </span>Instantly boost awareness for your game!</div>

      <!-- <div><span class="black-text">-Step 1  </span>Create an account for your business by clicking the Join Now button above.</div>
      <div><span class="black-text">-Step 2  </span>Fill out the information fields for your games or fitness classes you wish to advertise. This step takes less than 5 minutes per class or sport.</div>
      <div><span class="black-text">-Step 3  </span>Edit/Delete/Add games and fitness classes to your advertising list as you desire.</div>
      <div class="light-blue-text"><span class="black-text">-Step 4  </span>Watch as participation in your leagues/tournaments/drop-in games and fitness classes increases.</div> -->
      <div class="pt-4 mt-2 pb-4">
        <?php echo e(config('app.name')); ?> is, and alway will be, FREE to use. Here at <?php echo e(config('app.name')); ?>, we are people who love sports and love to play them!
        Our mission with creating <?php echo e(config('app.name')); ?> is to form a community of Sport's Players and Sport's Providers,
        in order to assist YOU in advertising your sports Leagues or Tournaments.
        Whether you are advertising a casual adult Softball league, aka beer league, or a youth Soccer league
         <?php echo e(config('app.name')); ?> has got you covered. We make it easy to advertise sports for all ages and genders.

        <br><br>Looking to advertise a Cash Money Men's Basketball Tournament? It is no problem!
        How about a Couples Pickleball League? A Youth Football Leauge?
        You can Advertise practically any sport you can think of on <?php echo e(config('app.name')); ?>.  We even have a Paralympic section
        to assist Paralympic athletes in searching for sports to participate in.
        <?php echo e(config('app.name')); ?> make's it simple and easy to advertise your sport's events.
         We hope you enjoy our App!
        <div><br><span class="black-text">-  </span><?php echo e(config('app.name')); ?></div>
      </div>

    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>