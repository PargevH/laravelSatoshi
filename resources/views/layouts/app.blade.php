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
    <!-- Links -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                                {{--<a class="nav-link">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>--}}
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-name dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">My Account
                                           </button>
                                        <ul class="dropdown-menu dropdown-name-menu" role="menu" aria-labelledby="menu1">
                                            <li  role="presentation">
                                                <a role="menuitem" tabindex="-1" href="#">My Subscriptions</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="{{route('referral')}}">Referrals</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="{{route('users.edit', $user_id = Auth::user()->id)}}">Account Settings</a>
                                            </li>
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="{{route('payment')}}">Payment</a>
                                            </li>
                                        </ul>
                                    </div>
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
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif


    <div class="modalSmall">
        @if(Auth::user() && !Auth::user()->provider && !Auth::user()->email_verified_at)
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
                                <p class="alert alert-danger">'If your mail address is not verified please check your mail and verified your email address!'</p>
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
                                <a class="nav-link nav-color" href="{{route('pricing')}}"> PRICING </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="nav-link nav-color" href="{{route('resources')}}"> RESOURCES </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="nav-link nav-color" href="{{route('news')}}"> NEWS & UPDATES </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="nav-link nav-color" href="{{route('contact')}}"> CONTACT </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="content">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="socialLinks">
                        <ul class="socialIcons">
                            <li class="facebook"><a href="#"><i class="fa fa-fw fa-facebook"></i>Facebook</a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-fw fa-twitter"></i>Twitter</a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-fw fa-google-plus"></i>google plus</a></li>
                        </ul>
                    </div>
                    <div class="copyRight">
                        <p>© 2018 Company name</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/otherjs/jquery-3.3.1.min.js') }}"></script>
        {{--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>--}}
        <script src="{{ asset('js/share.js') }}"></script>
        <script src="{{ asset('js/otherjs/popper.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/wow.min.js') }}"></script>
        <script src="{{ asset('js/otherjs/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </footer>
    <div>
            @guest

                @else
                    <a href="#">
                        <span id="fixed" class="scrollToTop"></span>
                    </a>
            @endguest
    </div>
</body>
</html>
