<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  theSportsList | Sports Results
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/table.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/findsports-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">theSportsList | Sports Center</div>
  <?php
    if ($type == "Both") {
      $type = 'Leagues or Tournament';
    }
    echo 'Showing results for '.$age.' '.$gender.' '.$sport.' '.$type.'s within a radius of '.$radius.' miles around '.$zip.'. <a href="/findsports">Click here</a> to search again.';
  ?>
  <section class="quarterscores mt-4 mb-4">
    <div class="row row--heading">
      <div class="cell cell--empty">
        Event Name:
      </div>
      <div class="cell cell--quarter">
        Start Date:
      </div>
      <div class="cell cell--quarter">
        Save
      </div>
      <div class="cell cell--quarter">
        View
      </div>
    </div>
    <?php
    foreach ($games as $game) {
      $game = get_object_vars($game);
      echo '<div class="row row--team"><h2 class="cell cell-team">'.$game['event_name'].
           '</h2><div class="cell cell--quarter">'.$game['start_date'].
           '</div><div class="cell cell--quarter"><a href="/participant/save?id='.$game['id'].
           '">Save</a></div><div class="cell cell--quarter"><a href="/participant/view?id='.$game['id'].
           '">View</a></div></div>';
    }
    ?>
  </section>
</div>
<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>