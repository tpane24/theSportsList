<?php $__env->startComponent('mail::message'); ?>
# Participant Account Created

Click on the button bellow to activate your account!
<?php
  $domain = 'http://127.0.0.1:8000';
  $url = $domain.'/participant/activate?email='.$participant['email'].'&password='.$participant['password'];
?>

<?php $__env->startComponent('mail::button', ['url' => $url, 'color' => 'blue']); ?>
Activate Now! <?php echo $participant['email']?>
<?php echo $__env->renderComponent(); ?>

Thanks you,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
