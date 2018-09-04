<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  <?php echo e(config('app.name')); ?> | find sports
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/table.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/findsports-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title"><?php echo e(config('app.name')); ?> | Sports Center</div>
  <div class="contentGrayHalfLeft">
    <?php echo $__env->make('templates/html/players-advertisement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
  <div class="contentWhiteHalfRight mb-4">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Find Sports:</div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form class="" action="<?php echo e(route('participant.homeFindSports')); ?>" method="post">

      <div class="form-row">
        <div class="col pl-4">
          <label for="inputSport">Sport</label>
          <select class="form-control inputStyle" name="inputSport">
            <?php echo $__env->make('templates/sports-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputType">Event Type</label>
          <select class="form-control inputStyle" name="inputType">
            <option>League</option>
            <option>Tournament</option>
            <option>Both</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputAge">Age Group</label>
          <select class="form-control inputStyle" name="inputAge">
            <option value="Youth">Youth</option>
            <option value="Adult">Adult</option>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputGender">Gender</label>
          <select class="form-control inputStyle" name="inputGender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Co-Ed">Co-Ed</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputZip">Zip Code</label>
          <input type="number" maxlength="5" class="form-control inputStyle" name="inputZip" placeholder="xxxxx">
        </div>
        <div class="col pr-4">
          <label for="inputRadius">Search Radius</label>
          <select class="form-control inputStyle" name="inputRadius">
            <option value="10">10 miles</option>
            <option value="25">25 miles</option>
            <option value="50">50 miles</option>
            <option value="100">100 miles</option>
          </select>
        </div>
      </div>

        <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><button onclick="hideThis()" class="blue-button">Search</button></div>
        <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(csrf_field()); ?>

    </form>
  </div>
  <br>
  <section class="quarterscores mt-4 mb-4" style="clear:right">
    <div class="row row--heading">
      <div class="cell cell--empty">
        Event Name:
      </div>
      <div class="cell cell--quarter">
        Start Date:
      </div>
      <div class="cell cell--quarter">
        Remove
      </div>
      <div class="cell cell--quarter">
        View
      </div>
    </div>
    <?php
    if (!is_int($games)) {
      foreach ($games as $game) {
        $game = get_object_vars($game);
        echo '<div class="row row--team"><h2 class="cell cell--team">'.$game['event_name'].
             '</h2><div class="cell cell--quarter">'.$game['start_date'].
             '</div><div class="cell cell--quarter"><a href="/participant/remove?id='.$game['id'].
             '">Remove</a></div><div class="cell cell--quarter"><a href="/participant/view?id='.$game['id'].
             '">View</a></div></div>';
      }
    }
    ?>
  </section>

</div>
<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>