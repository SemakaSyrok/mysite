<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148517618-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148517618-1');
    </script>


    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="web development web studio creating websites websites by order">
    <meta name="description" content="Сreating individual websites">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    @yield('scripts')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('css')

</head>
<body>
<div id="app">

    <nav class="menu-activea">
        <h1>Menu</h1>
        <ul>
            <li class="">
                <a href="{{ route('main')  }}"
                   class=" @route('main') current-route @endroute">Main</a>
            </li>
            <li class="">
                <a href="{{ route('skills')  }}"
                   class=" @route('skills') current-route @endroute">Skills</a>
            </li>
            <li class="">
                <a href="{{ route('projects')  }}"
                   class=" @route('projects') current-route @endroute">Projects</a>
            </li>
            <li class="">
                <a href="{{ route('contact')  }}"
                   class=" @route('contact') current-route @endroute">Contact</a>
            </li>
        </ul>
    </nav>

    <main class="">

        <section id="section" style="min-height: 95vh">

            @yield('content')


            <footer class="bg-dark border-top ">
                <div class="container py-2">
                    <div class="row  d-flex justify-content-around">
                        <div class="col-sm-12 col-md-6 d-flex justify-content-around p-1 mt-2">

                        </div>
                    </div>

                    <div style="width: 400px" class="mx-auto text-center mt-3">
                        <p class=" text-white">info@simon-svirkov.com</p>
                    </div>

                </div>
            </footer>
        </section>

    </main>




</div>

<script>


        var nav = $('nav'),
            menu = $('nav h1'),
            main = $('main'),
            open = false,
            hover = false;

        menu.on('click', function() {
            open = !open;
            nav.toggleClass('menu-active');
            main.toggleClass('menu-active');
            nav.removeClass('menu-hover');
            main.removeClass('menu-hover');
        });



</script>

@stack('scripts')
</body>

</html>
