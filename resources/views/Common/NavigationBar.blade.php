<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Japan Travel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          @isset($homePageSelected)
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          @else
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          @endif
          <li class="nav-item">
          @isset($weatherPageSelected)
            <a class="nav-link active" aria-current="page" href="{{ route('weather') }}">Weather</a>
          @else
            <a class="nav-link" href="{{ route('weather') }}">Weather</a>
          @endif
        </li>
        <li class="nav-item">
          @isset($venuePageSelected)
            <a class="nav-link active" aria-current="page" href="{{ route('venue') }}">Tourist Spots</a>
          @else
            <a class="nav-link" href="{{ route('venue') }}">Tourist Spots</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>