@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | contact
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/loadingAnimation.css') }}">
@endsection

@section('body')
@include('templates/nav/nothing-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Contact</div>
  <div class="contentGrayHalfLeft">
    <div class="h4 text-center gray-text mt-4 pt-4 pb-4">Find Sports using <span class="light-blue-text h3">{{ config('app.name') }}</span>!</div>
    <div class="h5 text-center mt-4 pt-4"><a href="{{ route('participant.signup') }}"><button class="blue-button">Join Now</button></a></div>
    <div class="h4 text-center mt-4 pt-4 gray-text">Its Free For Sports Fans!</div>
  </div>
  <div class="contentWhiteHalfRight">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4">Talk to Us:</div>
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
          <label for="inputMessage">Message:</label>
          <textarea name="inputMessage" class="form-control inputStyle" rows="8" placeholder="Enter your message here!"></textarea>
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
