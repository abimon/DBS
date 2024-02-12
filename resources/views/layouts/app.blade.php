<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Heart-Ed | {{request()->path()}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css' rel='stylesheet'>
    <style>
        body {
            background-image: linear-gradient(to-right, #411900, #4b5320);
        }

        .nav-link {
            font-family: 'Montserrat black';
            font-size: 21px;
            /* font-weight: bold; */
        }
    </style>
</head>

<body>
    @if((request()->path() == 'login')||(request()->path() == 'register'))
    <div class="col-7" style="position:absolute;z-index:-1; background-color:white; min-height:650px; border-radius:0px 50% 50% 0px; margin:0px;"></div>
    @else
    <img src="{{asset('storage/images/home.png')}}" style="position:absolute;z-index:-1;">
    @endif
    <div id="app">
        @if((request()->path() == 'login')||(request()->path() == 'register'))
        <div style="min-height: 70px;"></div>
        @else
        <nav class="navbar navbar-expand-md navbar-light bg-transparent text-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('storage/images/logo.png')}}" style="width: 60%;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto me-0">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">Lessons</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif

        <main class="py-4 pt-5 bg-transparent">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>