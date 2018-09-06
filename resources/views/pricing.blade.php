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
    <style>

    </style>
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
                <li class="active">
                    <a class="nav-link" href="pricing">PRICING</a>
                </li>
                <li>
                    <a class="nav-link" href="resources">RESOURCES</a>
                </li>
                <li>
                    <a class="nav-link" href="news"> NEWS & UPDATES </a>
                </li>
                <li>
                    <a class="nav-link" href="contact">CONTACT</a>
                </li>
                <li>
                    <p class="nav-link">|</p>
                </li>
                <li>
                    <a class="nav-link" href="signIn">SIGN IN</a>
                </li>
                <li>
                    <a class="nav-link" href="signUp">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="pricing">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Be confident about your next cryptocurrency trade</h1>
                    <p>Concise trading signals to help you make the right decision, every time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricingType">
    <div class="content">
        <div class="row no-gutters">
            <div class="col-md-5">
                <div class="checkPrice">
                    <ul id="myCheckbox">
                        <li class="active">
                            <div class="radioButtons">
                                <label class="checkContainer">Free
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Free</span>
                            </div>

                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Starter
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide"> <span>$20</span> USD / <span>month</span> </span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Pro
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Q3 2018</span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Advanced
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Q3 2018</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 offset-1">
                <div class="starter">
                    <h3>Starter</h3>
                    <p>For traders new to the cryptocurrency markets, or traders that only want to receive
                        the most common trading signals.</p>
                    <div class="mainPoints">
                        <ul>
                            <li>Upside Potential / Bullish Alerts</li>
                            <li>Coin Price & Volume Check</li>
                            <li> RSI Signals</li>
                            <li> Ichimoku Signals</li>
                            <li>CryptoPanic Sentiment Alerts</li>
                            <li>Price Alerts in USDT</li>
                        </ul>
                        <ul>
                            <li>Blacklisted Coins</li>
                            <li>ITF Proprietary Alert 1 (RSI + SMA)</li>
                            <li>ITF Proprietary Alert 2 (Q3 2018)</li>
                            <li>ITF Proprietary Alert 3 (Q4 2018)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="asweredQuest">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="quest">
                    <h5 class="question">How do I get started with Telegram?</h5>
                    <p class="answer">You can learn more about Telegram on their website.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I pay?</h5>
                    <p class="answer">The Starter plan is $20 USD per month, payable in ITT tokens. After
                        you purchase ITT tokens on a cryptocurrency exchange, you can
                        transfer them to us within the Telegram Bot.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I transfer ITT tokens?</h5>
                    <p class="answer">Please refer to the User Guide.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="quest">
                    <h5 class="question">What should I do after I install Telegram?</h5>
                    <p class="answer">You need to add @intelligenttradingbot in your Telegram app, then
                        complete the registration wizard. Here are step-by-step instructions.</p>
                </div>
                <div class="quest">
                    <h5 class="question">Does my subscription automatically renew?</h5>
                    <p class="answer">No. You must manually transfer additional ITT tokens after your
                        30-day subscription runs out.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I transfer ITT tokens?</h5>
                    <p class="answer">Please refer to the User Guide.</p>
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
<script>

    // var btnContainer = document.getElementById("myCheckbox");
    //
    // var lists = btnContainer.getElementsByTagName("li");
    //
    // // Loop through the buttons and add the active class to the current/clicked button
    // for (var i = 0; i < lists.length; i++) {
    //     lists[i].addEventListener("click", function() {
    //         var current = document.getElementsByClassName("active");
    //         current[0].className = current[0].className.replace(" active", "");
    //         this.className += " active";
    //     });
    // }

    $('#myCheckbox').on('click', 'li', function() {
        $('#myCheckbox li.active').removeClass('active');
        $(this).addClass('active');
    });


</script>
</body>
</html>