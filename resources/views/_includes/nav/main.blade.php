<nav class="navbar">
  <div id="specialShadow" class="bd-special-shadow" style="opacity: 1; transform: scaleY(1);"></div>
  <div class="container">    
      <div class="navbar-brand">
          <a class="navbar-item m-r-10" href="{{route('home')}}">
              <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer logo">
          </a>
          <div class="navbar-burger" data-target="menuNav">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
      <div id="menuNav" class="navbar-menu">
          <div class="navbar-start">
              <a href="#" class="navbar-item">Learn</a>
              <a href="#" class="navbar-item">Discuss</a>
              <a href="#" class="navbar-item">Share</a>
          </div>
          <div class="navbar-end">
              @if (Auth::guest())
                  <a href="{{route('login')}}" class="navbar-item">Login</a>
                  <a href="{{route('register')}}" class="navbar-item">Join The Community</a>
              @else
                  <div class="navbar-item has-dropdown is-hoverable">
                      <a class="navbar-link"> Hey {{Auth::user()->name}} </a>
                      <div class="navbar-dropdown is-right">
                          <a href="#" class="navbar-item">Profile</a>
                          <a href="#" class="navbar-item">Notifications</a>
                          <a href="{{route('manage.dashboard')}}" class="navbar-item">Manage</a>
                          <hr class="navbar-divider">
                          <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="navbar-item">Logout</a>
                          @include('_includes.forms.logout')
                      </div>
                  </div>
              @endif
          </div>
      </div>
  </div>
</nav>