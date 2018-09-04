<?php $__env->startComponent('mail::message'); ?>
# New Contact us message:

<?php
  $email = $data['email'];
  $name = $data['name'];
  $message = $data['message'];
  echo 'This email is from Email: '.$email.'<br>Name: '.$name.
  '<br>Message:<br>'.$message;
?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
