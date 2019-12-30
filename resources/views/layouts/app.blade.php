<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="homepagina">
    <div id="app">
        <nav class="weclothenav navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h2 class="weclothetitel">Weclothe</h2>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="Logofoto" src="/images/Logo.png"><br>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.products.index') }}">
                                <span class="knoptekst"> {{ __('Products') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.reviews.index') }}">
                                <span class="knoptekst">{{ __('Reviews') }}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.suggestions.index') }}">
                                <span class="knoptekst">{{ __('Suggestions') }}</span>
                            </a>
                        </li>


                    </ul>

                    <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><span class="knoptekst">{{ __('Login') }}</span></a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}"><span class="knoptekst">{{ __('Register') }}</span></a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.shoppingcarts.index') }}">
                                        <span class="knoptekst">{{ __('Shopping Cart') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.wishlists.index') }}">
                                        <span class="knoptekst">{{ __('Wishlist') }}</span>
                                    </a>
                                </li>
                            @can('Moderate Website')
                                <li class="nav-item dropdown">
                                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                       <span class="knoptekst">Admin Dashboard</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right adminnav" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('permissions.index') }}">
                                            <h2 class="knoptekst">{{ __('Permissions') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('roles.index') }}">
                                            <h2 class="knoptekst">{{ __('Roles') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('products.index') }}">
                                            <h2 class="knoptekst">{{ __('Products') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('reviews.index') }}">
                                            <h2 class="knoptekst">{{ __('Reviews') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('users.index') }}">
                                            <h2 class="knoptekst">{{ __('Users') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('coupons.index') }}">
                                            <h2 class="knoptekst">{{ __('Coupons') }}</h2>
                                        </a>
                                    </div>


                                @endcan
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <span class="knoptekst">{{ Auth::user()->name }}</span> <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right adminnav" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('user.profile.index') }}">
                                            <h2 class="knoptekst">{{ __('Profile') }}</h2>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <h2 class="knoptekst"> {{ __('Logout') }}</h2>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="wcfooter">
    {{--<div id="footer">--}}
    {{--<div class="card-deck">--}}
        {{--<div class="card">--}}
            {{--<div class="card-body">--}}
                <h2 class="footertekst">Copyright 2019 © WeClothe Nederland Inc. All rights reserved.</h2>
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    </footer>
    </div>
</div>
</body>
</html>
