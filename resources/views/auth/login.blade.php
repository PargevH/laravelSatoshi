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
                                <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E - Mail Address" aria-label="Email"
                                       aria-describedby="basic-addon1">
                                @if ($errors->has('email'))
                                    <span class=rtvModal-error" role="alert" style="display: block">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="input-group mb-3 mail-input-val">
                                <input name="password" type="password" class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-label="Password"
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
                                <button type="submit"  class="btn btn-primary login">SIGN IN</button>
                                <a href="{{ route('password.request') }}" class="float-right forgotPassword">Forgot your password?</a>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                            <div class="signUpFace">
                                <p>or login with</p>

                                <div class="loginWithOtherWay">
                                <span>
                                    <a href="{{ url('/auth/facebook') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14.395 25.467"><image id="facebook-logo" width="14.394" height="25.467" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAXCAMAAADneDWzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAV1BMVEWAgIAjH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10jH10AAAB5yDD3AAAAG3RSTlMAA2bI+LIEs8B97Sz9nIBOQLaggdDoZ7GQN5Oi/bORAAAAAWJLR0QcnARBBwAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+IIGAsXLX6ME5oAAABTSURBVBjTvc05DoAwEEPRCavZIezM/e+JPEIiBUrJr/wqizCXpJmq5oaiVAumSgO5OlTD1XZ9P1AjNcmTyX9oBhZqBbAJ9M1HtQc6og+/6KQurhvjWRC+mJoaEAAAAABJRU5ErkJggg=="/></svg>
                                    Facebook</a>
                                </span>
                                    <span>
                                    <a href="{{ url('/auth/twitter') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.438 25.544"><defs><style>.cls-1 {fill: #03a9f4;}</style></defs><path id="twitter_1_" data-name="twitter (1)" class="cls-1" d="M31.439,51.024a13.438,13.438,0,0,1-3.714,1.018,6.409,6.409,0,0,0,2.835-3.562,12.88,12.88,0,0,1-4.087,1.56,6.445,6.445,0,0,0-11.149,4.407,6.636,6.636,0,0,0,.149,1.47A18.243,18.243,0,0,1,2.189,49.175,6.447,6.447,0,0,0,4.17,57.789,6.365,6.365,0,0,1,1.258,57v.071A6.475,6.475,0,0,0,6.421,63.4a6.433,6.433,0,0,1-1.69.212,5.7,5.7,0,0,1-1.22-.11,6.507,6.507,0,0,0,6.022,4.49A12.95,12.95,0,0,1,1.542,70.74,12.072,12.072,0,0,1,0,70.651a18.145,18.145,0,0,0,9.887,2.892c11.86,0,18.344-9.825,18.344-18.34,0-.285-.01-.56-.024-.833A12.858,12.858,0,0,0,31.439,51.024Z" transform="translate(0 -48)"/></svg>
                                     Twitter</a>
                                    </span>
                                    <span>
                                    <a href="{{ url('/auth/google') }}">
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
                    <img src="{{ asset('img/signIn.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
