<?php $__env->startComponent('mail::message'); ?>
# Advertising Account Created

Click on the button bellow to activate your account!
<?php
  $domain = 'http://127.0.0.1:8000';
  $url = $domain.'/advertising/activate?email='.$client['email'].'&password='.$client['password'];
?>

<?php $__env->startComponent('mail::button', ['url' => $url, 'color' => 'blue']); ?>
Activate Now! <?php echo $client['email']?>
<?php echo $__env->renderComponent(); ?>

Thanks you,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
