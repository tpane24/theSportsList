@component('mail::message')
# Advertising Account Created

Click on the button bellow to activate your account!
<?php
  $domain = 'thesportslist-env.wpuxhcjbdz.us-east-2.elasticbeanstalk.com';
  $url = $domain.'/advertising/activate?email='.$client['email'].'&password='.$client['password'];
?>

@component('mail::button', ['url' => $url, 'color' => 'blue'])
Activate Now! <?php echo $client['email']?>
@endcomponent

Thanks you,<br>
{{ config('app.name') }}
@endcomponent
