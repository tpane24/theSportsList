@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | find sports
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/loadingAnimation.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/table.css') }}">
@endsection

@section('body')
@include('templates/nav/advertising-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Advertising Center</div>
  <a href="{{ route('advertising.newAdd') }}"><button class="blue-button">New Advertisement</button></a>
  <section class="quarterscores mt-4 mb-4">
    <div class="row row--heading">
      <div class="cell cell--empty">
        Event Name:
      </div>
      <div class="cell cell--quarter">
        Start Date:
      </div>
      <div class="cell cell--quarter">
        Edit
      </div>
      <div class="cell cell--quarter">
        View
      </div>
      <!-- <div class="cell cell--quarter">
        A forth cell if you want it
      </div> -->
    </div>
    <?php
    foreach ($games as $game) {
      $game = get_object_vars($game);
      echo '<div class="row row--team"><h2 class="cell cell-team">'.$game['event_name'].
           '</h2><div class="cell cell--quarter">'.$game['start_date'].
           '</div><div class="cell cell--quarter"><a href="/advertising/edit?id='.$game['id'].
           '">Edit</a></div><div class="cell cell--quarter"><a href="/advertising/view/'.$game['id'].
           '">View</a></div></div>';
    }
    ?>
  </section>
</div>
<script type="text/javascript" src="{{ URL::to('js/loadingAnimation.js') }}"></script>

@endsection

<!-- <div class="row row--team">
  <h2 class="cell cell--team">
    West Coast Eagles
  </h2>
  <div class="cell cell--quarter">
    0.7.5
  </div>
  <div class="cell cell--quarter">
    0.13.7
  </div>
  <div class="cell cell--quarter">
    1.20.9
  </div>
  <div class="cell cell--quarter">
    1.23.11
  </div>
</div> -->
