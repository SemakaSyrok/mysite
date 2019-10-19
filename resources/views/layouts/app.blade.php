<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="web development web studio creating websites websites by order">
    <meta name="description" content="Сreating individual websites">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light @route('main')
            bg-transparent
@else
            my-bg  shadow-sm
@endroute ">
        <div class="container">
            <a class="navbar-brand big-font text-white  @route('main')
                    text-white
@endroute" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto big-font text-white @route('main')
                        text-white
                        @endroute">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('skills')  }}" class="nav-link text-inherit
                                                                    @route('skills')
                                    current-route
                                    @endroute">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects')  }}" class="nav-link text-inherit
                                                                    @route('projects')
                                    current-route
                                    @endroute">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact')  }}" class="nav-link text-inherit
                                                                    @route('contact')
                                    current-route
                                    @endroute">Contact</a>
                        </li>
                    @endguest

                </ul>

                <!-- Right Side Of Navbar -->

            </div>
        </div>
    </nav>

    <main class="">

        @yield('content')

    </main>


    <footer class="bg-dark border-top ">
        <div class="container py-2">
            <div class="row  d-flex justify-content-around">
                <div class="col-sm-12 col-md-6 d-flex justify-content-around p-1 mt-2">

                </div>
            </div>

            <p class="text-center mt-3 text-white">info@simon-svirkov.com</p>

        </div>
    </footer>

</div>
</body>
</html>
