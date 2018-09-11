@extends('layouts.app')







@section('content')
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="input-group mb-3 mainRegInput">
                                    <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Username"
                                           aria-label="Username"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('name') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E - Mail Address"
                                           aria-label="Email"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"
                                           aria-label="password"
                                           aria-describedby="basic-addon1">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="input-group mb-3 mainRegInput">
                                    <input name="password_confirmation" type="password" class="form-control"
                                           placeholder="Confirm Password"
                                           aria-label="confirm password" aria-describedby="basic-addon1">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary login">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 rightSideImg">
                    <div class="">
                        <img src="{{ asset('img/signUp.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
