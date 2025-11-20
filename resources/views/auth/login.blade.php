@extends('global.inc.master')
@php($business_info = business_info())

@section('title')
    Home
@endsection
@section('description')
    {{ optional($business_info)->meta_description }}
@endsection
@section('keywords')
    {{ optional($business_info)->meta_keywords }}
@endsection
@section('layout')
    <!-- Top Header -->
    <!-- Top Nav -->
    @include('global.inc.top-nav')
    <!-- side bar -->
    @include('global.inc.side-bar')
@endsection
@section('content')
    <style>
        
        /* ---- LOGIN PAGE CUSTOM STYLING ---- */

        .login__section {
            background: #f7f7f7;
            padding: 60px 0;
        }

        .login__section--inner {
            display: flex;
            justify-content: center;
        }

        .account__login {
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .account__login--header__title {
            font-size: 28px;
            font-weight: 700;
            color: #333;
        }

        .account__login--input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            margin-top: 10px;
            transition: all 0.2s ease;
        }

        .account__login--input:focus {
            border-color: #ee2761;
            box-shadow: 0 0 0 3px rgba(238, 39, 97, 0.15);
            outline: none;
        }

        .account__login--btn {
            width: 100%;
            padding: 13px;
            background: #ee2761;
            color: #fff;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .account__login--btn:hover {
            background: #c91d4f;
        }

        .account__login--forgot {
            color: #ee2761;
            font-size: 14px;
        }

        .account__login--forgot:hover {
            text-decoration: underline;
        }

        .account__login--signup__text {
            text-align: center;
            margin-top: 15px;
            font-size: 15px;
        }

        .account__login--signup__text a {
            color: #ee2761;
            font-weight: 600;
        }

        .text-right {
            text-align: right;
        }

        /* ---- MOBILE ---- */
        @media (max-width: 768px) {
            .sign_in_top {
                padding-top: 0 !important;
            }

            .account__login {
                padding: 25px 20px;
                box-shadow: none;
            }

            .account__login--header__title {
                font-size: 24px;
            }
        }
    </style>

    <!-- Start login section  -->
    <div class="login__section py-5 border-top sign_in_top">
        <div class="container">
            <form method="POST" action="{{ route('custom.login') }}">
                @csrf
                <div class="login__section--inner">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25 text-center">
                                        <h2 class="account__login--header__title h3 mb-10">Login Your Account</h2>
                                        <p class="account__login--header__desc"></p>
                                    </div>
                                    <div class="account__login--inner">

                                        <input class="account__login--input mb-0" id="userName" name="userName" required
                                            value="{{ old('userName') }}" placeholder="Please Enter Email or phone number"
                                            type="text">
                                        @error('userName')
                                            <span style="color: #EE2761;">{{ $message }}</span>
                                        @enderror

                                        <input class="account__login--input mt-3 mb-1" placeholder="Password"
                                            name="password" required type="password">
                                        <div class="account__login--remember__forgot mb-15  text-right">
                                            {{-- <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                    Remember me</label>
                                            </div> --}}
                                            <a href="{{ route('password.request') }}" class="account__login--forgot"
                                                type="button">Forgot Password?</a>
                                        </div>
                                        <button class="account__login--btn primary__btn mb-10" type="submit">Login</button>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <a type="button"
                                            href="{{ route('register') }}" class="account__login--forgot">Register now</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('global.inc.footer')
@endsection
