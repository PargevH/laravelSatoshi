@extends('layouts.app')


@section('content')
    <div class="container">
        <h2 class="accountH2">Account settings</h2>
        <hr>
        <div class="row">
            <!-- edit form column -->
            <div class="col-md-6 personal-info">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <h3>Personal info</h3>
                <form method="POST" action="{{route('users.update', $user = Auth::user())}}">
                    @csrf
                    {{ method_field('patch') }}

                    <div class="input-group mb-3 mainRegInput">
                        <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{Auth::user()->email}}"
                               aria-label="Email"
                               aria-describedby="basic-addon1" disabled>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('email') }}
                                    </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 mainRegInput">
                        <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{$user->name}}"
                               aria-label="Username"
                               aria-describedby="basic-addon1">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                            {{ $errors->first('name') }}
                                    </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 mainRegInput">
                        <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 mainRegInput">
                        <input name="newPassword" type="password" class="form-control{{ $errors->has('newPassword') ? ' is-invalid' : '' }}" placeholder="New Password" aria-label="NewPassword" aria-describedby="basic-addon1">
                        @if ($errors->has('newPassword'))
                            <span class="invalid-feedback" role="alert">
                                {{ $errors->first('newPassword') }}
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3 mainRegInput">
                            <input name="newPassword_confirmation" type="password" class="form-control" placeholder="Confirm New Password" aria-label="confirm newPassword" aria-describedby="basic-addon1">
                    </div>
                    <div>
                        <button type="submit" class="btn btnAcc">Edit Account</button>
                    </div>
                </form>
            </div>
            {{--<div class="col-md-6 personal-info">--}}
                {{--<div class="alert alert-info alert-dismissable">--}}
                    {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
                    {{--<i class="fa fa-coffee"></i>--}}
                    {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
                {{--</div>--}}
                {{--<h3>Password</h3>--}}

                {{--<form method="POST" action="{{route('users.updatePass', $user = Auth::user())}}">--}}
                    {{--@csrf--}}
                    {{--{{ method_field('patch') }}--}}



                    {{--<div class="input-group mb-3 mainRegInput">--}}
                        {{--<input name="name" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password"--}}
                               {{--aria-label="password"--}}
                               {{--aria-describedby="basic-addon1">--}}
                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--{{ $errors->first('password') }}--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<div class="input-group mb-3 mainRegInput">--}}
                        {{--<input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="New Password"--}}
                               {{--aria-label="password"--}}
                               {{--aria-describedby="basic-addon1">--}}
                        {{--@if ($errors->has('password'))--}}
                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--{{ $errors->first('password') }}--}}
                                    {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                    {{--<div class="input-group mb-3 mainRegInput">--}}
                        {{--<input name="password_confirmation" type="password" class="form-control"--}}
                               {{--placeholder="Confirm New Password"--}}
                               {{--aria-label="confirm password" aria-describedby="basic-addon1">--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<button type="submit" class="btn btn-primary login">Edit Password</button>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection