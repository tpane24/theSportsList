<!doctype html>
<html lang="en">
  <head>
    <!-- Required boostrap meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- My meta tages -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="discription" content="Connecting sports community to adult sports and youth sports. Volleyball, Soccer, Baseball, Football, Pickleball, Basketball tournaments and leagues.">
    <meta name="keywords" content="sports, sport, sport league, sports league, sport tournament, sports tournament">
    <?php echo $__env->yieldContent('metaTags'); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php echo $__env->yieldContent('styles'); ?>

  </head>
  <div class="container-fluid" id="splashContainer">
    <body>
      <?php echo $__env->yieldContent('body'); ?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
    <div class="container footerContainer">
      <footer>
        <div class="copyright">
          <p>&copy 2018 - <?php echo e(config('app.name')); ?></p>
        </div>
        <div class="social">
          <a href="<?php echo e(route('page.contact')); ?>">Contact Us</a>
        </div>
        <div class="social">
          <a href="<?php echo e(route('page.animation')); ?>">Mission</a>
        </div>
      </footer>
    </div>
  </div>
</html>
