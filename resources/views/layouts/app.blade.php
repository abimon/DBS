<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(request()->path()=='/')
    <title>The Heart-Ed | Home</title>
    @else
    <title>The Heart-Ed | {{request()->path()}}</title>
    @endif
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent text-light " style="font-family: Montserrat;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('storage/images/logo2.png')}}" style="width:60%" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse w-50" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav"></ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav" style="flex: content; justify-content:center">
                        <li class="nav-item ms-5">
                            <a class="nav-link text-dark fw-bold" href="/">Home</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-dark fw-bold" href="">Resources</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-dark fw-bold" href="">About</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-dark fw-bold" href="">Academics</a>
                        </li>
                        @guest
                        <li class="nav-item ms-5">
                            <a class="nav-link" href="{{route('login')}}"> <button class="button">Sign In</button></a>
                        </li>
                        @else
                        <li class="nav-item ms-5">
                            <a class="nav-link text-dark fw-bold" href="/dashboard">
                                <i class="bi bi-person-circle"></i> {{Auth()->user()->f_name}} {{Auth()->user()->l_name}}
                            </a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="text-danger nav-link fw-bold" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false">
                                <i class="bi bi-power"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="bg-transparent">
            @yield('content')
            <div class="bottom p-start">
                <div class="row p-3 d-flex justify-content-between" id="connect">
                    <div class="col-md-4  text-start p-2">
                        <h3 class="title">Stay Connected</h3>
                        <p>Be the first to know about news, events and more here at DBS</p>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="ENTER EMAIL ADDRESS" class="form-control">
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3 text-start p-2">
                        <h3 class="title">Resources</h3>
                        <p>Ipsum</p>
                        <p>Blog</p>
                        <p>Podcast</p>
                        <p>Sermons</p>
                        <p>Devotionals</p>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="col-md-2 text-start p-2">
                        <h3 class="title">Connect</h3>
                        <p style="font-size: xx-large; text-align:center"><i class="bi bi-facebook"></i> <i class="bi bi-twitter-x"></i></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="mt-1 mail">
                        <i class="bi bi-envelope"></i> info@thehearted.org
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="text-center">&copy; {{date('Y')}}. All rights reserved</div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>