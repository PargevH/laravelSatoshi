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


    {{ asset('/style.css') }}


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

                <li class="active">
                    <a class="nav-link" href="contact"> CONTACT </a>
                </li>

                <li>
                    <p class="nav-link"> | </p>
                </li>

                <li>
                    <a class="nav-link" href="signIn.html"> SIGN IN </a>
                </li>

                <li>
                    <a class="nav-link" href="signUp.html"> SIGN UP </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="map no-padding">
    <iframe src="https://snazzymaps.com/embed/50199" width="100%" height="600px" style="border:none;"></iframe>
</section>

<section class="contactForm">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
               <div class="columeTitle">
                   <h3>Get in touch with us</h3>
               </div>
                <div class="mainContactInfo">
                    <div class="location">
                        <h5>Location</h5>
                        <p>Pacific Union Real Estate <br>
                            1290 Howard Avenue, Suite 201 <br>
                            Burlingame, California 94010</p>
                    </div>
                    <div class="mail">
                        <h5>Mail</h5>
                        <p>companyname@domain.com</p>
                    </div>
                    <div class="phone">
                        <h5>Phone</h5>
                        <p>+1234567891011</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="columeTitle">
                    <h3>Contact Form</h3>
                </div>
                <div class="mainForm">
                    <form>
                        <div class="form-group">
                            <label for="name" class="sr-only"></label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="email" class="sr-only"></label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="message" class="sr-only"></label>
                            <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Send</button>
                    </form>
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