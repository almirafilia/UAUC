<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Pelaporan UAUC') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
        html, body{
            background-image: url(bgpas.png);
            background-color: #fbc800;
            background-repeat: no repeat;
            height: auto;
        }

        .navbar-style{
            background-color: #fff;
        }

        .hide-show{
            width: 94%;
            margin: -3.62em 3% 0 1.5%;
            position: relative;
            z-index: 5;
            display: none;
        }

        span {
            background: $maincolor;
            font-size: 1em;
            padding: .5em;
            float: right;
            cursor: pointer;
        }

</style>

<body>
<!-- <img src="Logo_petro.png" alt="gambar" class="bg"/> -->
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-style" style="background-color: #fff;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Sistem Pelaporan UAUC') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right panel-heading">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('welcome') }}">Home</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('home') }}">
                                            Formulir Pelaporan UAUC
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('dashkar') }}">
                                            Pelaporan Individu
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('rank') }}">
                                            Ranking Pelapor
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
