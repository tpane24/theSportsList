@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | contact
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
@endsection

@section('body')
@include('templates/nav/nothing-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Message page</div>
  <div class="contentTextFull">
    <?php
      if ($message == "signupSuccess") {
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        echo '<div class="h5 black-text text-center pb-3">Action Required!</div>Please visit the email address you provided, '.$email.'. Look for our activation email in the BOTH INBOX and SPAM folders. Click on the link to complete your account set up.';
      } else if ($message == "activateFail") {
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        echo '<div class="h5 black-text text-center pb-3">Action Required! We were unable to activate your account.</div>Please visit the email address you provided, '.$email.'. Look for our activation email in the BOTH INBOX and SPAM folders. Click on the link to complete your account set up. If you continue to have problems please try creating an account with another email address.';
      } else if ($message == "activateClientSuccess") {
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        echo '<div class="h5 black-text text-center pb-3">Activation Success!</div> Your advertising account for the email: '.$email.' has been activated! <a href="/advertising">Click here</a> to log in and start creating advertisements for your events.';
      } else if ($message == "activateParticipantSuccess") {
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        echo '<div class="h5 black-text text-center pb-3">Activation Success!</div> Your participant account for the email: '.$email.' has been activated! <a href="/findsports">Click here</a> to log in and start searching for sports right away!';
      } else if ($message == "newAddSuccess") {
        $event = filter_var($_GET['event'], FILTER_SANITIZE_STRING);
        echo '<div class="h5 black-text text-center pb-3">We have successfully created your advertisement named: '.$event.'! <a href="/advertising">Click here</a> to return to the Advertising Center.</div>';
      } else if ($message == "notYourGame") {
        $event = filter_var($_GET['event'], FILTER_SANITIZE_STRING);
        echo '<div class="h5 black-text text-center pb-3">Be Nice!</div>The game: '.$event.' does not belong too. Please <a href="/contact">contact us</a> if you believe this is an error.';
      } else if ($message == "updateAddSuccess") {
        $event = filter_var($_GET['event'], FILTER_SANITIZE_STRING);
        echo '<div class="h5 black-text text-center pb-3">Update Success</div>We have successfully updated your game: '.$event.'. <a href="/advertising">Click here</a> to return to the Advertising Center!';
      } else if ($message == "noSportsFound") {
        $sport = filter_var($_GET['sport'], FILTER_SANITIZE_STRING);
        $type = filter_var($_GET['type'], FILTER_SANITIZE_STRING);
        $radius = filter_var($_GET['radius'], FILTER_SANITIZE_NUMBER_INT);
        $zip = filter_var($_GET['zip'], FILTER_SANITIZE_NUMBER_INT);
        $age = filter_var($_GET['age'], FILTER_SANITIZE_STRING);
        $gender = filter_var($_GET['gender'], FILTER_SANITIZE_STRING);
        if ($type == "Both") {
          $type = 'Leagues or Tournament';
        }
        echo '<div class="h5 black-text text-center pb-3">Nothing Found</div>We are sorry, but no '.$age.' '.$gender.' '.$sport.' '.$type.'s were found within a '.$radius.' mile radius of '.$zip.'. <a href="/findsports">Click here</a> to search again!';
      } else if ($message == "gameSaved") {
        $game = filter_var($_GET['game'], FILTER_SANITIZE_STRING);
        echo '<div class="h5 black-text text-center pb-3">Game Saved!</div>We have successfully saved '.$game.' to your account. <a href="/findsports">Click here</a> to return to your home page.';
      } else if ($message == "gameDeleted") {
        $game = filter_var($_GET['game'], FILTER_SANITIZE_STRING);
        echo '<div class="h5 black-text text-center pb-3">Game Removed!</div> We have successfully removed '.$game.' from your saved games. <a href="/findsports">Click here</a> to return to your home page.';
      } else if ($message == "deleteSuccess") {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        echo 'You have successfully deleted the add with the ID: '.$id.'. <a href="/advertising">Click here</a> to return to your homepage.';
      } else if ($message == "deleteFail") {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        echo 'We were unable to delete the game you selected. Please <a href="/advertising">Click here</a> to return to your homepage.';
      } else if ($message == "noGameFound") {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        echo 'There is no longer a database entry for this game. Please <a href="/advertising">Click here</a> to return to your homepage.';
      } else if ($message == "contactUsSent") {
        $text = filter_var($_GET['text'], FILTER_SANITIZE_STRING);
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        echo 'We have reccieved your message reading:<br>'.$text.'<br> We will send a response, if appropriate, to: '.$email;
      }
    ?>
  </div>
</div>
@endsection
