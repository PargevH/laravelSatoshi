<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    {{ asset('css/libs/css/bootstrap.min.css') }}
    {{ asset('css/libs/css/animate.css') }}
    {{ asset('css/libs/css/owl.carousel.min.css') }}
    {{ asset('css/style.css') }}
</head>

<body class="home">

<nav class="navbar navbar-expand-md navbar-light main-navbar">
    <div class="content">
        <a class="navbar-brand brand-logo" href="/index"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbarMenu">
                <li>
                    <a class="nav-link" href="pricing"> PRICING </a>
                </li>
                <li>
                    <a class="nav-link" href="resources"> RESOURCES </a>
                </li>
                <li>
                    <a class="nav-link" href="news"> NEWS & UPDATES </a>
                </li>
                <li>
                    <a class="nav-link" href="contact"> CONTACT </a>
                </li>
                <li>
                    <p class="nav-link"> | </p>
                </li>
                <li class="active">
                    <a class="nav-link" href="signIn"> SIGN IN </a>
                </li>
                <li>
                    <a class="nav-link" href="signUp"> SIGN UP </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="signIn">

    <div class="content">

        <div class="row no-gutters">

            <div class="col-md-6">

                <div class="signInForms">
                    <div class="signInTitle">
                        <h2>Sign In</h2>
                    </div>
                    <div class="signInForm">
                        <p>Enter username and password to log in:</p>
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>
                        </form>
                        <div class="checkboxRemember">
                            <label class="checkContainer">Remember me
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <button type="submit" class="btn btn-primary login">SIGN IN</button>
                            <a href="#" class="float-right forgotPassword">Forgot your password?</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="signUpFace">
                            <p>or login with</p>

                            <div class="loginWithOtherWay">
                            <span>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14.395 25.467"><image id="facebook-logo" width="14.394" height="25.467" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAXCAMAAADneDWzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAV1BMVEWAgIAjH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10AAAB5yDD3AAAAG3RSTlMAA2bI+LIEs8B97Sz9nIBOQLaggdDoZ7GQN5Oi/bORAAAAAWJLR0QcnARBBwAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+IIGAsXLX6ME5oAAABTSURBVBjTvc05DoAwEEPRCavZIezM/e+JPEIiBUrJr/wqizCXpJmq5oaiVAumSgO5OlTD1XZ9P1AjNcmTyX9oBhZqBbAJ9M1HtQc6og+/6KQurhvjWRC+mJoaEAAAAABJRU5ErkJggg=="/></svg>
                                Facebook</a>
                            </span>
                                <span>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.438 25.544"><defs><style>.cls-1 {fill: #03a9f4;}</style></defs><path id="twitter_1_" data-name="twitter (1)" class="cls-1" d="M31.439,51.024a13.438,13.438,0,0,1-3.714,1.018,6.409,6.409,0,0,0,2.835-3.562,12.88,12.88,0,0,1-4.087,1.56,6.445,6.445,0,0,0-11.149,4.407,6.636,6.636,0,0,0,.149,1.47A18.243,18.243,0,0,1,2.189,49.175,6.447,6.447,0,0,0,4.17,57.789,6.365,6.365,0,0,1,1.258,57v.071A6.475,6.475,0,0,0,6.421,63.4a6.433,6.433,0,0,1-1.69.212,5.7,5.7,0,0,1-1.22-.11,6.507,6.507,0,0,0,6.022,4.49A12.95,12.95,0,0,1,1.542,70.74,12.072,12.072,0,0,1,0,70.651a18.145,18.145,0,0,0,9.887,2.892c11.86,0,18.344-9.825,18.344-18.34,0-.285-.01-.56-.024-.833A12.858,12.858,0,0,0,31.439,51.024Z" transform="translate(0 -48)"/></svg>
                                 Twitter</a>
                                </span>
                                <span>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.912 25.537"><defs><style>.cls-1 {fill: #f34a38;}</style></defs><g id="google-plus_2_" data-name="google-plus (2)" transform="translate(0 -82.519)"><path id="Path_594" data-name="Path 594" class="cls-1" d="M14,97.922h6.236a7.927,7.927,0,1,1-2.152-8.5.859.859,0,0,0,1.168,0l2.29-2.156a.856.856,0,0,0,0-1.245,12.721,12.721,0,0,0-8.525-3.5A12.769,12.769,0,1,0,25.516,96.006c.01-.084.016-2.931.016-2.931H14a.856.856,0,0,0-.856.856v3.135A.856.856,0,0,0,14,97.922Z" transform="translate(0)"/><path id="Path_595" data-name="Path 595" class="cls-1" d="M331.751,167.021v-3.063a.75.75,0,0,0-.75-.75h-2.578a.75.75,0,0,0-.75.75v3.063H324.61a.75.75,0,0,0-.75.75v2.578a.75.75,0,0,0,.75.75h3.063v3.063a.75.75,0,0,0,.75.75H331a.75.75,0,0,0,.75-.75V171.1h3.063a.75.75,0,0,0,.75-.75v-2.578a.75.75,0,0,0-.75-.75Z" transform="translate(-295.653 -73.661)"/></g></svg>
                                    Google</a>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightSideImg">
                <div class="">
                    <img src="img/signIn.png" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<footer>
    <div class="content">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="socialLinks">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#"><img src="img/facebook-logo-button.png" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><img src="img/twitter-logo-button.png" alt=""></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><img src="img/instagram-logo.png" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="copyRight">
                    <p>© 2018 Company name</p>
                </div>
            </div>
        </div>
    </div>
</footer>


{{ asset('libs/js/jquery-3.3.1.min.js') }}
{{ asset('libs/js/popper.min.js') }}
{{ asset('libs/js/bootstrap.min.js') }}
{{ asset('libs/js/wow.min.js') }}
{{ asset('libs/js/owl.carousel.min.js') }}
{{ asset('js/main.js') }}
</body>
</html>