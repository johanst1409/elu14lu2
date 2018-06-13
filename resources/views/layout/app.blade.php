<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ELU 1.4 LU2</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('games.index') }}"><i class="material-icons">videogame_asset</i>Games</a>
                </div>

                <ul class="nav navbar-nav navbar-right justify-content-end">
                    <li class="nav-item {{ Request::is('games*') || Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('games.index') }}">Games</a>
                    </li>
                    <li class="nav-item {{ Request::is('platforms*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('platforms.index') }}">Platforms</a>
                    </li>
                    <li class="nav-item {{ Request::is('companies*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('companies.index') }}">Companies</a>
                    </li>
                    <li class="nav-item {{ Request::is('genres*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('genres.index') }}">Genres</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <div class="container">
            <hr class="my-4"/>
            <div class="col-md-12 text-center">
                <p><strong>Johan Steenbekkers</strong> #2054058 - Avans Academie voor Deeltijd 2018 - ELU 1.4 LU 2</p>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
