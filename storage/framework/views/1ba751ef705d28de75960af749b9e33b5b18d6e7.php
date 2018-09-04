<div class="container" id="navContainer">
  <nav class="navbar navbar-light" id="navBar">
  <a class="navbar-brand h2" href="<?php echo e(route('page.home')); ?>"><span class="light-blue-text">theSportsList</span></a>
  <form class="form-inline">
    <ul class="nav nav-tabs justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.findSports')); ?>">Find Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo e(route('page.advertising')); ?>">Advertising</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.contact')); ?>">Contact</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('page.sports')); ?>">Sports Offered</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(route('advertising.logout')); ?>">Log Out</a>
      </li>
    </ul>
  </form>
</nav>
</div>
