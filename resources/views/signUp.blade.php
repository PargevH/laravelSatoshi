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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
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
                <li>
                    <a class="nav-link" href="signIn"> SIGN IN </a>
                </li>
                <li class="active">
                    <a class="nav-link" href="signUp"> SIGN UP </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="signUp">

    <div class="content">

        <div class="row no-gutters">

            <div class="col-md-6">
                <div class="signInForms">
                    <div class="signInTitle">
                        <h2>Sign Up</h2>
                    </div>
                    <div class="signUpForm">
                        <p>Fill in the form below to get instant access:</p>
                        <form>
                            <div class="input-group mb-3 mainRegInput">
                                <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3 mainRegInput">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3 mainRegInput">
                                <input type="password" class="form-control" placeholder="Password" aria-label="password"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3 mainRegInput">
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                       aria-label="confirm password" aria-describedby="basic-addon1">
                            </div>
                        </form>
                        <div>
                            <button type="submit" class="btn btn-primary login">Register</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 rightSideImg">
                <div class="">
                    <img src="img/signUp.png" alt="">
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

<script src="libs/js/jquery-3.3.1.min.js"></script>
<script src="libs/js/popper.min.js"></script>
<script src="libs/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>