<!doctype html>
<html lang="en">
  <head>
    <!-- Required boostrap meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- My meta tages -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="discription" content="Connecting sports community to adult sports and youth sports. Volleyball, Soccer, Baseball, Football, Pickleball, Basketball tournaments and leagues. ">
    <meta name="keywords" content="sports, sport, sport league, sports league, sport tournament, sports tournament">
    <title><?php echo e(config('app.name')); ?> | Home</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('css/animation.css')); ?>">

  </head>
  <div class="container-fluid" id="splashContainer">
  <body>
    <div id="animationContainer" style="display:none">
      <div id="animationBrandText" class="h2 text-center light-blue-text" style="display:none">
        <?php echo e(config('app.name')); ?>

      </div>
      <div class="writeit"></div>
    </div>
    <a href="#" onclick="animationClick()">
      <svg class="arrows">
        <path class="a1" d="M0 0 L30 32 L60 0"></path>
        <path class="a2" d="M0 20 L30 52 L60 20"></path>
        <path class="a3" d="M0 40 L30 72 L60 40"></path>
      </svg>
    </a>
    <div class="container">
        <div class="contentGrayHalfLeft" style="display:none">
          <a href="/findsports">
            <?php echo $__env->make('templates/html/players-advertisement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </a>
        </div>

        <div class="contentWhiteHalfRight" style="display:none">
          <a href="/advertising">
            <?php echo $__env->make('templates/html/providers-advertisement', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </a>
        </div>

    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo e(URL::to('js/animation.js')); ?>"></script>
  </div>
</html>
