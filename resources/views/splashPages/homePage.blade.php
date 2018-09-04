@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | home
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
@endsection

@section('body')
@include('templates/nav/nothing-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Home</div>
  <div class="contentGrayHalfLeft">
    <a href="/findsports">
      @include('templates/html/players-advertisement')
    </a>
  </div>
  <div class="contentWhiteHalfRight">
    <a href="/advertising">
      @include('templates/html/providers-advertisement')
    </a>
  </div>

  <div class="bannerWhiteFull">
    <div class="h3 text-center pt-4 pb-4 light-blue-text">What is {{ config('app.name') }}?</div>
  </div>
  <div class="contentWhiteFull">
    <div class="h5 mt-4 pt-4 gray-text indentText">
      <div><span class="black-text">-  </span>It's FREE for Sport's Fans</div>
      <div><span class="black-text">-  </span>Connects the Sport's Community</div>
      <div><span class="black-text">-  </span>More Competition and Opportunity to Play!</div>
      <div class="light-blue-text"><span class="black-text">-  </span>The Perfect Tool when Searching for Sports!</div>
      <div class="pt-4 mt-2 pb-4">
        {{ config('app.name') }} is an application dedicated to forming a community of Sport's Players and
        Sport's Providers, in order to create more comptetion and opportunity to play.
        We offer a wide variety of Sports to choose from!
        Whether you are looking for a casual Softball League, aka beer league, for you and the fellas or if you are looking
        for your child's first soccer league, {{ config('app.name') }} has got you covered. We make it easy to find sports for all ages and genders.
        We even have Adult sports ranging in competition from Cash Money Basketball Tournaments to Couples Pickleball Leagues.
        <br><br>
        To get started, select how YOU will use {{ config('app.name') }}! Click either
        <a href="/sports">the Players</a> or
        <a href="/advertising">the Sports Providers</a> and get connected with the sports community!
        <div><br><span class="black-text">-  </span>{{ config('app.name') }}</div>
      </div>

    </div>
  </div>

</div>

@endsection
