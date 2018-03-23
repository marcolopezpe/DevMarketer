<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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
                                <a class="navbar-link"> Hey Alex </a>
                                <div class="navbar-dropdown is-right">
                                    <a href="#" class="navbar-item">Profile</a>
                                    <a href="#" class="navbar-item">Notifications</a>
                                    <a href="#" class="navbar-item">Settings</a>
                                    <hr class="navbar-divider">
                                    <a href="#" class="navbar-item">Logout</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    
</body>
</html>
