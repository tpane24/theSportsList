<div class="container" id="navContainer">
  <nav class="navbar navbar-light" id="navBar">
  <a class="navbar-brand h2" href="<?php echo e(route('page.home')); ?>"><span class="light-blue-text"><?php echo e(config('app.name')); ?></span></a>
  <form class="form-inline">
    <ul class="nav nav-tabs justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.findSports')); ?>">Find Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.advertising')); ?>">Advertising</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.sports')); ?>">Sports Offered</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.signin')); ?>">Sign In</a>
      </li>
    </ul>
  </form>
</nav>
</div>
