<?php $__env->startSection('metaTags'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
  <?php echo e(config('app.name')); ?> | find sports
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
  <link rel="stylesheet" href="<?php echo e(URL::to('css/splashPage.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::to('css/loadingAnimation.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo $__env->make('templates/nav/advertising-active', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title"><?php echo e(config('app.name')); ?> | New Advertisement</div>
  <div class="contentGrayHalfLeft">
    <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><a href="<?php echo e(route('advertising.home')); ?>"><button class="blue-button w-25 mt-4">Go Back</button></a></div>
    <div id="buttonDiv" class="h5 text-center mt-4 pt-4"><button onclick="showHelpDiv()" class="blue-button w-25">Help</button></div>
  </div>
  <div class="contentWhiteHalfRight mb-4 pb-4">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Create Advertisement</div>
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
      <input type="hidden" name="inputCreatedBy" value="<?php echo $created_by; ?>">

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputEventName">Event Name</label>
          <input type="text" class="form-control inputStyle" name="inputEventName" placeholder="Event Name">
        </div>
      </div>

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
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="startDate">Start Date (mm/dd/yyyy)</label><br>
          <input type="text" class="form-control inputStyle input2char" name="inputStartMonth" maxlength="2" placeholder="mm">/
          <input type="text" class="form-control inputStyle input2char" name="inputStartDay" maxlength="2" placeholder="dd">/
          <input type="text" class="form-control inputStyle input4char" name="inputStartYear" maxlength="4" placeholder="yyyy">
        </div>
        <div class="col pr-4">
          <label for="endDate">End Date (mm/dd/yyyy)</label><br>
          <input type="text" class="form-control inputStyle input2char" name="inputEndMonth" maxlength="2" placeholder="mm">/
          <input type="text" class="form-control inputStyle input2char" name="inputEndDay" maxlength="2" placeholder="dd">/
          <input type="text" class="form-control inputStyle input4char" name="inputEndYear" maxlength="4" placeholder="yyyy">
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="startTime">Start Time</label><br>
          <select class="form-control inputStyle input4char" name="inputStartHour">
            <?php echo $__env->make('templates/hour-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>:
          <select class="form-control inputStyle input4char" name="inputStartMinute">
            <?php echo $__env->make('templates/minute-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
          <select class="form-control inputStyle input4char" name="inputStartTOD">
            <option>am</option>
            <option>pm</option>
          </select>
        </div>
        <div class="col pr-4">
          <label for="startTime">End Time</label><br>
          <select class="form-control inputStyle input4char" name="inputEndHour">
            <?php echo $__env->make('templates/hour-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>:
          <select class="form-control inputStyle input4char" name="inputEndMinute">
            <?php echo $__env->make('templates/minute-options', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </select>
          <select class="form-control inputStyle input4char" name="inputEndTOD">
            <option>am</option>
            <option>pm</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pl-4">
          <label for="inputAge">Age Group  (Specify Age in Description Below)</label>
          <select class="form-control inputStyle" name="inputAge">
            <option value="Youth">Youth</option>
            <option value="Adult">Adult</option>
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputGender">Gender</label><br><br>
          <select class="form-control inputStyle" name="inputGender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Co-Ed">Co-Ed</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputLink">Link to your Website</label>
          <input type="text" class="form-control inputStyle" name="inputLink" placeholder="www.link.com">
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputDescription">Description (For Leagues, remember to include day(s) it is played on.)</label>
          <textarea name="inputDescription" class="form-control inputStyle" rows="8" placeholder="Please describe your event here. Remember to include the day(s) your game will be played on for League games. Example: Games are every Saturday! Also, please specify the age group if necessary."></textarea>
        </div>
      </div>

      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control inputStyle" name="inputAddress" placeholder="Address" value="<?php echo $address; ?>">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputCity">City</label>
          <input type="text" class="form-control inputStyle" name="inputCity" placeholder="City" value="<?php echo $city; ?>">
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
          <input type="number" maxlength="5" class="form-control inputStyle" name="inputZip" placeholder="xxxxx" value="<?php echo $zip; ?>">
        </div>
      </div>


        <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><button onclick="hideThis()" class="blue-button">Create Add</button></div>
        <?php echo $__env->make('templates/html/loading-animation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(csrf_field()); ?>

    </form>
  </div>
  <div id="helpDiv" class="contentGrayHalfLeft mt-4 pt-4 pb-4 pl-4 pr-4 gray-text" style="display:none">
    <div class="h3 text-center mt-4 pt-4 pb-4 light-blue-text">How to Create an Add.</div>
    In order to create a new Advertisement for your Sport's Game, fill out the form to
    your right and then click the button Create Add. <br>
    <div class="text-center light-blue-text pt-2 pb-1">Guide Lines:</div>
    <span class="pt-1 pb-1 black-text">Event Name</span>: Create unique event names so you can
    distinguish you adds.<br>
    <span class="pt-1 pb-1 black-text">Time and Dates</span>: If you don't know an exact time or date,
     just enter an aproximate and mentioned that in the description.<br>
    <span class="pt-1 pb-1 black-text">Age</span>: For youth sports, you can specify
    age groups in the Description.
    <span class="pt-1 pb-1 black-text">Description</span>: Please be as descriptive, but brief. This is
    your chance to let players know what makes your game different.<br>
    <span class="pt-1 pb-1 black-text">Link</span>: This is optional, but provides players a way to connect to
    your games further.
  </div>

</div>
<script type="text/javascript" src="<?php echo e(URL::to('js/loadingAnimation.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::to('js/helpButton.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.masterSplash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>