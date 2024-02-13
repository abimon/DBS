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
    <title style="text-transform: uppercase;">The Heart-Ed | {{request()->path()}}</title>
    @endif
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html {
            background-image: linear-gradient(to right, #411900, #4b5320);
        }

        body {
            z-index: -1;
            background-image: linear-gradient(to right, #411900, #4b5320);
            max-height: 1vh;
        }

        .nav-link {
            font-size: 21px;
            margin-left: 30px;
            margin-right: 0px;
            font-weight: bolder;
            font-family: 'Monteserrat';
        }

        h1 {
            font-size: 6vw;
            color: white;
        }

        h2 {
            font-size: 3vw;
            color: white;
        }

        h3 {
            font-size: 2vw;
            color: aliceblue;
            
        }

        .btn {
            background-image: linear-gradient(to right, #4b5316, #411901)
        }

        .red-link {
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        .red-link :hover {
            color: white;
        }

        @media (max-width: 800px) {
            .hidden-mobile {
                display: none;
            }
        }
        .auth{
            background-image: url("{{asset('storage/images/authside.png')}}");
        }
    </style>
</head>

<body>
    @if((request()->path() == 'login')||(request()->path() == 'register'))
    <div class="col-8 hidden-mobile" style="position:absolute;z-index:-3; background-color:white; height:100%; border-radius:0px 30% 30% 0px; margin:0px; object-fit:contain;"></div>
    @else
    <img src="{{asset('/storage/images/home.png')}}" style="position:absolute;z-index:-3;width:100%;height:100%;object-fit:cover;" alt="">
    @endif
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent text-light ">
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
                    <ul class="navbar-nav">
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

        <main class="py-4 pt-5 bg-transparent">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>