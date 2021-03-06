<div class="container" id="navContainer">
  <nav class="navbar navbar-light" id="navBar">
  <a class="navbar-brand h2" href="{{ route('page.home') }}"><span class="light-blue-text">{{ config('app.name') }}</span></a>
  <form class="form-inline">
    <ul class="nav nav-tabs justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('page.findSports') }}">Find Sports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('page.advertising') }}">Advertising</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('page.sports') }}">Sports Offered</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="{{ route('page.contact') }}">Contact</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('participant.logout') }}">Log Out</a>
      </li>
    </ul>
  </form>
</nav>
</div>
