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
                        <p>
                            3280 Peachtree Rd NE Atlanta, GA 30305
                        </p>
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
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                <div class="mainForm">
                    <form method="POST" action="{{route('contact')}}">

                    @csrf

                        <div class="form-group">
                            <label for="name" class="sr-only"></label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="sr-only"></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="message" class="sr-only"></label>
                            <textarea class="form-control" id="message" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>

                        <button name="submit" class="btn btn-primary float-right">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
