@extends('layouts.master')
@section('title', 'Login')
@section('content')
<style>
    body::-webkit-scrollbar {
        width: 2px !important;
        color: #9e2828;
    }

    ::-webkit-scrollbar {
        /* background: #9e2828;  */
    }

    ::-webkit-scrollbar-thumb {
        background: #9e2828;
    }

    .login-wrap {
        background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
        z-index: 0;
    }

    .login-html {
        width: 100%;
        height: 100%;
        padding: 56px 60px 56px 60px;
        background: rgba(9, 12, 20, 0.9);
    }

    .login-html .sign-in-htm,
    .login-html .sign-up-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked+.tab,
    .login-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }

    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 7px 20px;
        border-radius: 7px;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        background: #1161ee;
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked+label {
        color: #fff;
    }

    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
        transform: rotate(0);
    }

    .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }
</style>
<section style="height: 100vh; display:flex; justify-content:center; align-items:center;">
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-5">
                    <div class="login-wrap">
                        <div class="login-html">
                            @if (Session::has('password_check'))
                            <div class="container-fluid hidediv">
                                <div class="card card-style">
                                    <div class="card-body">
                                        <div class="alert alert-danger">{{ session::get('password_check') }}</div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                            <div class="login-form">
                                <form action="{{url('login-user')}}" method="POST">
                                    @csrf
                                    <div class="sign-in-htm">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="user" class="label">Email</label>
                                                    <input id="user" type="text" name="email" class="input">
                                                    @if ($errors->has('email'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">Password</label>
                                                    <input id="pass" type="password" name="password" class="input" data-type="password">
                                                    @if ($errors->has('password'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-5 pb-2">
                                            <div class="col-md-6">
                                                <div class="group">
                                                    <input id="check" type="checkbox" class="check" checked>
                                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="foot-lnk">
                                                    <a href="#forgot">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Sign In">
                                        </div>
                                    </div>
                                </form>
                                <form action="{{url('save-user')}}" method="POST">
                                    @csrf
                                    <div class="sign-up-htm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="user" class="label">First Name</label>
                                                    <input id="user" type="text" name="first_name" class="input">
                                                    @if ($errors->has('first_name'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">Last Name</label>
                                                    <input id="pass" type="text" class="input" name="last_name">
                                                    @if ($errors->has('last_name'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('last_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">User Name</label>
                                                    <input id="pass" type="text" class="input" name="user_name">
                                                    @if ($errors->has('user_name'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('user_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">Email</label>
                                                    <input id="pass" type="email" name="email" class="input">
                                                    @if ($errors->has('email'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">Password</label>
                                                    <input id="pass" type="password" name="password" class="input" data-type="password">
                                                    @if ($errors->has('password'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('password') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="group">
                                                    <label for="pass" class="label">Confirm Password</label>
                                                    <input id="pass" type="password" name="confirm_password" class="input" data-type="password">
                                                    @if ($errors->has('confirm_password'))
                                                    <span class="text-danger errorsignup">{{ $errors->first('confirm_password') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="group">
                                                    <input type="submit" class="button" value="Sign Up">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="foot-lnk">
                                            <label for="tab-1">Already Member?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection