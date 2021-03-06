@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | find sports
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/loadingAnimation.css') }}">
@endsection

@section('body')
@include('templates/nav/advertising-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | View Advertisement</div>
  <?php
    $game = get_object_vars($game);
    $edit = '<a href="/advertising/edit?id='.$game['id'].'"><button class="blue-button">Edit</button></a>';
    $createdBy = '<input type="hidden" value="'.$game['created_by'].'">';
    $event = $game['event_name'];
    $sport = $game['sport'];
    $type = $game['type'];
    $startDate = $game['start_date'];
    $endDate = $game['end_date'];
    $startTime = $game['start_time'].' '.$game['start_tod'];
    $endTime = $game['end_time'].' '.$game['end_tod'];
    $age = $game['age'];
    $gender = $game['gender'];
    $link = $game['link'];
    $description = $game['description'];
    $address = $game['address'].' '.$game['city'].' '.$game['state'].', '.$game['zip'];
  ?>
  <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><a href="{{ route('advertising.home') }}"><button class="blue-button">Go Back</button></a></div>
  <div id="buttonDiv" class="h5 text-center mt-4 pt-4 mb-4 pb-4"><?php echo $edit; ?></div>
  <div class="contentWhiteFull">
    <div class="h2 light-blue-text text-center pt-4 mt-1 pb-4"><span class="light-gray-text">Event Name: </span><?php echo $event; ?></div>
    <div class="pl-3 h5 black-text text-left"><span class="light-gray-text">Sport: </span><?php echo $sport.' '.$type.' <span class="light-gray-text">For: </span>'.$age.' '.$gender; ?></div>
    <div class="pl-3 h5 black-text text-left"><span class="light-gray-text">Date(s): </span><?php echo $startDate.' to '.$endDate; ?></div>
    <div class="pl-3 h5 black-text text-left"><span class="light-gray-text">Time: </span><?php echo $startTime.' to '.$endTime; ?></div>
    <div class="pl-3 h5 black-text text-left"><span class="light-gray-text">Link for more information: </span><?php echo $link; ?></div>
    <div class="pl-3 h5 black-text text-left"><span class="light-gray-text">Address: </span><?php echo $address ?></div>
    <div class="pl-3 h5 gray-text text-left"><span class="light-gray-text">Description: </span></div>
    <div class="pl-4 pb-4 h5 gray-text text-left"><?php echo $description; ?></div>
  </div>

</div>
<script type="text/javascript" src="{{ URL::to('js/loadingAnimation.js') }}"></script>

@endsection
