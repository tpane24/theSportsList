@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | Advertising Sign Up
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/loadingAnimation.css') }}">
@endsection

@section('body')
@include('templates/nav/advertising-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | New Advertising Account</div>
  <div class="contentGrayHalfLeft">
    @include('templates/html/providers-advertisement')
  </div>
  <div class="contentWhiteHalfRight">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Create Advertising Account</div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputName">Name</label>
          <input type="text" class="form-control inputStyle" name="inputName" placeholder="Name">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputBusinessName">Business Name</label>
          <input type="text" class="form-control inputStyle" name="inputBusinessName" placeholder="Business Name">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputEmail">Email address</label>
          <input type="email" class="form-control inputStyle" name="inputEmail" placeholder="email@example.com">
        </div>
        <div class="col pr-4">
          <label for="inputPhone">Phone number</label>
          <input type="text" class="form-control inputStyle" name="inputPhone" placeholder="xxx-xxx-xxxx">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control inputStyle" name="inputAddress" placeholder="Address">
        </div>
      </div>
      <div class="form-row">
        <div class="col pr-4 pl-4">
          <label for="inputCity">City</label>
          <input type="text" class="form-control inputStyle" name="inputCity" placeholder="City">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputState">State</label>
          <select class="form-control inputStyle" name="inputState">
            @include('templates/state-options')
          </select>
        </div>
        <div class="col pr-4">
          <label for="inputZip">Zip Code</label>
          <input type="number" maxlength="5" class="form-control inputStyle" name="inputZip" placeholder="xxxxx">
        </div>
      </div>
      <div class="form-row">
        <div class="col pl-4">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control inputStyle" name="inputPassword" placeholder="Password">
        </div>
        <div class="col pr-4">
          <label for="inputConfirmPassword">Confirm Password</label>
          <input type="password" class="form-control inputStyle " name="inputConfirmPassword" placeholder="Password">
        </div>
      </div>

        <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><button onclick="hideThis()" class="blue-button">Submit</button></div>
        @include('templates/html/loading-animation')
        {{ csrf_field() }}
    </form>
  </div>
</div>
<script type="text/javascript" src="{{ URL::to('js/loadingAnimation.js') }}"></script>

@endsection
