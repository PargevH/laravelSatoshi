<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light main-navbar">
        <div class="content">
            <a class="navbar-brand brand-logo" href="{{route('index')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbarMenu">
                    <li>
                        <a class="nav-link" href="{{route('pricing')}}"> PRICING </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('resources')}}"> RESOURCES </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('news')}}"> NEWS & UPDATES </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('contact')}}"> CONTACT </a>
                    </li>
                    <li>
                        <p class="nav-link"> | </p>
                    </li>
                        @guest
                            <li>
                                <a class="nav-link" href="{{route('login')}}"> SIGN IN </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('register')}}"> SIGN UP </a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('LOGOUT') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>


    <div class="modalSmall" style="
            padding-top:  100px;">

        @if(Session::has('message'))
            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">E - mail verify</h4>
                            </div>
                            <div class="modal-body">
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>












        @endif

    </div>





    <div id="app">


        <main class="py-4">

            @yield('content')
        </main>
    </div>

    <footer>

        <div class="content">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="socialLinks">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><img src="{{ asset('img/facebook-logo-button.png') }}" alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><img src="{{ asset('img/twitter-logo-button.png') }}" alt=""></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><img src="{{ asset('img/instagram-logo.png') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyRight">
                        <p>© 2018 Company name</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/otherjs/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/popper.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/wow.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </footer>

</body>
</html>
