@extends('layouts.app')

@section('content')

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
@endsection