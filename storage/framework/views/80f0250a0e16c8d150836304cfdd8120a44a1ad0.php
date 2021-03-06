<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  theSportsList | find sports
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/advertising-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php
  $game = get_object_vars($game);
?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">theSportsList | Edit Advertisement</div>
  <div class="contentGrayHalfLeft">
    <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><a href="<?php echo e(route('advertising.home')); ?>"><button class="blue-button w-25 mt-4">Go Back</button></a></div>
    <div id="buttonDiv" class="h5 text-center mt-4 pt-4"><a href="/advertising/delete/<?php echo $game['id']; ?>"><button class="blue-button w-25">Delete</button></a></div>
  </div>
  <div class="contentWhiteHalfRight">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Update Advertisement</div>
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
      <input type="hidden" name="inputCreatedBy" value="<?php echo $game['created_by']; ?>">

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputEventName">Event Name</label>
          <input type="text" class="form-control inputStyle" name="inputEventName" placeholder="Event Name" value="<?php echo $game['event_name'] ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="inputSport">Sport</label>
          <select class="form-control inputStyle" name="inputSport">
            <?php echo $__env->make('templates/sports-selected', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputType">Event Type</label>
          <select class="form-control inputStyle" name="inputType">
            <option <?php if ($game['type'] == 'League') { echo 'selected'; } ?>>League</option>
            <option <?php if ($game['type'] == 'Tournament') { echo 'selected'; } ?>>Tournament</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="startDate">Start Date (mm/dd/yyyy)</label><br>
          <input type="text" class="form-control inputStyle input2char" name="inputStartMonth" maxlength="2" placeholder="mm" value="<?php echo $startMonth; ?>">/
          <input type="text" class="form-control inputStyle input2char" name="inputStartDay" maxlength="2" placeholder="dd" value="<?php echo $startDay; ?>">/
          <input type="text" class="form-control inputStyle input4char" name="inputStartYear" maxlength="4" placeholder="yyyy" value="<?php echo $startYear; ?>">
        </div>
        <div class="col pr-4">
          <label for="endDate">End Date (mm/dd/yyyy)</label><br>
          <input type="text" class="form-control inputStyle input2char" name="inputEndMonth" maxlength="2" placeholder="mm" value="<?php echo $endMonth; ?>">/
          <input type="text" class="form-control inputStyle input2char" name="inputEndDay" maxlength="2" placeholder="dd" value="<?php echo $endDay; ?>">/
          <input type="text" class="form-control inputStyle input4char" name="inputEndYear" maxlength="4" placeholder="yyyy" value="<?php echo $endYear; ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="startTime">Start Time</label><br>
          <select class="form-control inputStyle input4char" name="inputStartHour">
            <?php echo $__env->make('templates/hour-selected-start', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>:
          <select class="form-control inputStyle input4char" name="inputStartMinute">
            <?php echo $__env->make('templates/minute-selected-start', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
          <select class="form-control inputStyle input4char" name="inputStartTOD">
            <option <?php if ($game['start_tod'] == "am") { echo 'selected'; } ?>>am</option>
            <option <?php if ($game['start_tod'] == "pm") { echo 'selected'; } ?>>pm</option>
          </select>
        </div>
        <div class="col pr-4">
          <label for="startTime">End Time</label><br>
          <select class="form-control inputStyle input4char" name="inputEndHour">
            <?php echo $__env->make('templates/hour-selected-end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>:
          <select class="form-control inputStyle input4char" name="inputEndMinute">
            <?php echo $__env->make('templates/minute-selected-end', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
          <select class="form-control inputStyle input4char" name="inputEndTOD">
            <option <?php if ($game['end_tod'] == "am") { echo 'selected'; } ?>>am</option>
            <option  <?php if ($game['end_tod'] == "pm") { echo 'selected'; } ?>>pm</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="inputAge">Age Group  (Specify Age in Description Below)</label>
          <select class="form-control inputStyle" name="inputAge">
            <option  <?php if ($game['age'] == "Youth") { echo 'selected'; } ?> value="Youth">Youth</option>
            <option  <?php if ($game['age'] == "Adult") { echo 'selected'; } ?> value="Adult">Adult</option>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputGender">Gender</label><br><br>
          <select class="form-control inputStyle" name="inputGender">
            <option <?php if ($game['gender'] == "Male") { echo 'selected'; } ?> value="Male">Male</option>
            <option <?php if ($game['gender'] == "Female") { echo 'selected'; } ?> value="Female">Female</option>
            <option <?php if ($game['gender'] == "Co-Ed") { echo 'selected'; } ?> value="Co-Ed">Co-Ed</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputLink">Link to your Website</label>
          <input type="text" class="form-control inputStyle" name="inputLink" placeholder="www.link.com" value="<?php echo $game['link']; ?>">
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputDescription">Description (For Leagues, remember to include day(s) it is played on.)</label>
          <textarea name="inputDescription" class="form-control inputStyle" rows="8" placeholder="Please describe your event here. Remember to include the day(s) your game will be played on for League games. Example: Games are every Saturday! Also, please specify the age group if necessary."><?php echo $game['description']; ?></textarea>
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control inputStyle" name="inputAddress" placeholder="Address" value="<?php echo $game['address']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputCity">City</label>
          <input type="text" class="form-control inputStyle" name="inputCity" placeholder="City" value="<?php echo $game['city']; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputState">State</label>
          <select class="form-control inputStyle" name="inputState">
            <?php echo $__env->make('templates/state-selected', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputZip">Zip Code</label>
          <input type="number" maxlength="5" class="form-control inputStyle" name="inputZip" placeholder="xxxxx" value="<?php echo $game['zip']; ?>">
        </div>
      </div>


        <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><button onclick="hideThis()" class="blue-button">Update Add</button></div>
        <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(csrf_field()); ?>

    </form>
  </div>
</div>

<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>