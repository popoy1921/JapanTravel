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

        @isset($venuePageSelected)
          <li class="nav-item dropdown">
            <a class="nav-link active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tourist Spots
            </a>
            <ul class="dropdown-menu venue-category" data-category="{{ $category }}">
              <li>
                <a class="nav-link dropdown-item {{ $category === 'hotel' ? 'active' : '' }}" href="{{ route('venue', ['category' => 'hotel']) }}">
                  Hotels
                </a>
              </li>
              <li>
                <a class="nav-link dropdown-item {{ $category === 'restaurant' ? 'active' : '' }}" href="{{ route('venue', ['category' => 'restaurant']) }}">
                  Restaurants
                </a>
              </li>
              <li>
                <a class="nav-link dropdown-item {{ $category === 'attraction' ? 'active' : '' }}" href="{{ route('venue', ['category' => 'attraction']) }}">
                  Attractions
                </a>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tourist Spots
            </a>
            <ul class="dropdown-menu venue-category">
              <li>
                <a class="nav-link dropdown-item" href="{{ route('venue', ['category' => 'hotel']) }}">
                  Hotels
                </a>
              </li>
              <li>
                <a class="nav-link dropdown-item" href="{{ route('venue', ['category' => 'restaurant']) }}">
                  Restaurants
                </a>
              </li>
              <li>
                <a class="nav-link dropdown-item" href="{{ route('venue', ['category' => 'attraction']) }}">
                  Attractions
                </a>
              </li>
            </ul>
          </li>
        @endif

      </ul>
    </div>
  </div>
</nav>