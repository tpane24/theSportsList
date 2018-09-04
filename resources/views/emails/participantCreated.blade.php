@component('mail::message')
# Participant Account Created

Click on the button bellow to activate your account!
<?php
  $domain = 'thesportslist-env.wpuxhcjbdz.us-east-2.elasticbeanstalk.com';
  $url = $domain.'/participant/activate?email='.$participant['email'].'&password='.$participant['password'];
?>

@component('mail::button', ['url' => $url, 'color' => 'blue'])
Activate Now! <?php echo $participant['email']?>
@endcomponent

Thanks you,<br>
{{ config('app.name') }}
@endcomponent
