@component('mail::message')
# New Contact us message:

<?php
  $email = $data['email'];
  $name = $data['name'];
  $message = $data['message'];
  echo 'This email is from Email: '.$email.'<br>Name: '.$name.
  '<br>Message:<br>'.$message;
?>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
