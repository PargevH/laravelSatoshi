@extends('layouts.app')


@section('content')


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
                            <form method="POST" action="{{ route('login') }}">

                                @csrf

                                <div class="input-group mb-3 mail-input-val">
                                    <input name="email" type="text"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="E - Mail Address" aria-label="Email"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('email'))
                                        <span class=rtvModal-error" role="alert" style="display: block">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mail-input-val">
                                    <input name="password" type="password"
                                           class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           placeholder="Password" aria-label="Password"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                       {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="checkboxRemember">
                                    <label class="checkContainer">Remember me
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="btn btn-primary login">SIGN IN</button>
                                    <a href="{{ route('password.request') }}" class="float-right forgotPassword">Forgot
                                        your password?</a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="signUpFace">
                                <p>or login with</p>

                                <div class="loginWithOtherWay">
                                <span class="facebook_link">
                                    <a href="{{ url('/auth/facebook') }}">
                                   <i class="fab fa-facebook-f"></i>  Facebook</a>
                                </span>
                                    <span class="twitter_links">
                                    <a href="{{ url('/auth/twitter') }}">
                                      <i class="fab fa-twitter"></i>   Twitter</a>
                                    </span>
                                    <span class="google_links">
                                    <a href="{{ url('/auth/google') }}">
                                      <i class="fab fa-google-plus-g"></i>  Google</a>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 rightSideImg">
                    <div class="">
                        <img src="{{ asset('img/signIn.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
