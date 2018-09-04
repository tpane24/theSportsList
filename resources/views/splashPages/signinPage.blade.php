@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | Sign In
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
@endsection

@section('body')
@include('templates/nav/signin-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Sign In</div>
  <div class="contentWhiteFull">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Select your Account Type:</div>
    <div id="buttonDiv" class="h5 text-center mt-4 mb-4">
      <button id="sportsButton" class="blue-button" onclick="participantClick()">Find Sports</button>
      <button id="advertisingButton" class="blue-button" onclick="advertisingClick()">Advertising</button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="participantForm" style="display:none">
      <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Sign in to Find Sports</div>
      <!-- <div class="h6 black-text pl-2 pb-2">Sign In Now:</div> -->
      <div class="">
        <form class="" action="{{ route('participant.postSignin') }}" method="post">
          <div class="pl-3 h5 black-text text-center"><input placeholder="Email address" class="inputFull inputStyle" type="text" name="inputEmail" value=""></div>
          <div class="pl-3 h5 black-text text-center"><input placeholder="Password" class="inputFull inputStyle" type="password" name="inputPassword" value=""></div>

          <div id="buttonDiv1" class="h5 text-center mt-4 pt-4"><button onclick="hideThis1()" class="blue-button">Sign In</button></div>
          @include('templates/html/loading-animation')
          <div class="text-right pr-2"><a href="{{ route('participant.signup') }}" class="">Create New Account</a></div>
          <div class="text-right pr-2"><a href="{{ route('participant.password.request') }}" class="">Forgot Password?</a></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
    <div id="advertisingForm" style="display:none">
      <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Sign in to Advertising!</div>
      <!-- <div class="h6 black-text pl-2 pb-2">Sign In Now:</div> -->
      <div class="">
        <form class="" action="{{ route('advertising.postSignin') }}" method="post">
          <div class="pl-3 h5 black-text text-center"><input placeholder="Email address" class="inputFull inputStyle" type="text" name="inputEmail" value=""></div>
          <div class="pl-3 h5 black-text text-center"><input placeholder="Password" class="inputFull inputStyle" type="password" name="inputPassword" value=""></div>

          <div id="buttonDiv2" class="h5 text-center mt-4 pt-4"><button onclick="hideThis2()" class="blue-button">Sign In</button></div>

          @include('templates/html/loading-animation')

          <div class="text-right pr-2"><a href="{{ route('advertising.signup') }}" class="">Create New Account</a></div>
          <div class="text-right pr-2"><a href="{{ route('client.password.request') }}" class="">Forgot Password?</a></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>


</div>

<script type="text/javascript" src="{{ URL::to('js/loadingAnimation.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/signin.js') }}"></script>
@endsection
