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
        @media only screen and (max-width: 768px) {
            .sign_in_top {
                padding-top: 0px !important;
            }
        }

        /* ---- REGISTER PAGE CUSTOM STYLING ---- */

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
            max-width: 450px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .account__login--header__title {
            font-size: 28px;
            font-weight: 700;
            color: #333;
        }

        .account__login--header__desc {
            color: #666;
            font-size: 15px;
            margin-top: 5px;
        }

        .account__login--input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            margin-top: 12px;
            transition: all 0.2s ease;
        }

        .account__login--input:focus {
            border-color: #ee2761;
            box-shadow: 0 0 0 3px rgba(238, 39, 97, 0.18);
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

        /* Error messages */
        .account__login--inner span {
            font-size: 13px;
            display: block;
            margin-top: 5px;
        }

        /* Terms checkbox */
        .checkout__checkbox--input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .login__remember--label {
            font-size: 14px;
            margin-left: 6px;
            cursor: pointer;
        }

        .account__login--signup__text {
            text-align: center;
            margin-top: 20px;
            font-size: 15px;
        }

        .account__login--forgot {
            color: #ee2761;
            font-size: 14px;
            cursor: pointer;
        }

        .account__login--forgot:hover {
            text-decoration: underline;
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
            <form method="POST" action="{{ route('custom.register') }}">
                @csrf
                <div class="login__section--inner">
                    <input type="hidden" name="register_type" id="register_type" value="phone">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25 text-center">
                                        <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" placeholder="Name" name="name"
                                            value="{{ old('name') }}" required type="text">

                                        <input class="account__login--input mb-0" id="phone" name="phone" required
                                            value="{{ old('phone') }}" placeholder="Please Enter your phone number"
                                            minlength="11" maxlength="11" type="number">

                                        <input class="account__login--input mb-0" id="email" style="display: none;"
                                            value="{{ old('email') }}" name="email" placeholder="Email Addres"
                                            type="email">

                                        <div
                                            class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-end">
                                            <div class="account__login--remember position__relative">
                                                @error('phone')
                                                    <span style="color: #EE2761;">{{ $message }}</span>
                                                @enderror

                                                @error('email')
                                                    <span style="color: #EE2761;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            {{--
                                            <button class="account__login--forgot" id="use_email_btn" onclick="use_register_type('email')" type="button">Use Email</button>
                                            <button class="account__login--forgot" id="use_mobile_btn" onclick="use_register_type('phone')" style="display: none;" type="button">Use Mobile Number</button>
                                            --}}
                                        </div>

                                        <input class="account__login--input" placeholder="Password [Min: 8]" name="password"
                                            required type="password">
                                        <input class="account__login--input" placeholder="Confirm Password" required
                                            name="password_confirmation" type="password">

                                        <div class="account__login--remember position__relative mb-3" style="margin-top: 12px">
                                            <input class="checkout__checkbox--input" id="check2" required
                                                type="checkbox">
                                            {{-- <span class="checkout__checkbox--checkmark"></span> --}}
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms &amp; conditions</label>
                                        </div>
                                        <button class="account__login--btn primary__btn mb-10 " type="submit">Submit &amp;
                                            Register</button>
                                    </div>
                                    <p class="account__login--signup__text">Have an Account? <a type="button"
                                            href="{{ route('login') }}" class="account__login--forgot">Login now</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3"></div>
                        {{-- <div class="col">
                            <div class="account__login">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                    <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" placeholder="Email Addres" type="text">
                                    <input class="account__login--input" placeholder="Password" type="password">
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                Remember me</label>
                                        </div>
                                        <button class="account__login--forgot" type="submit">Forgot Your Password?</button>
                                    </div>
                                    <button class="account__login--btn primary__btn" type="submit">Login</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <div class="account__social d-flex justify-content-center mb-15">
                                        <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                                        <a class="account__social--link google" target="_blank" href="https://www.google.com">Google</a>
                                        <a class="account__social--link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <button type="submit">Sign up now</button></p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End login section  -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>
        @if (session('register_type'))
            $(document).ready(function() {
                use_register_type('{{ session('register_type') }}');
            });
        @endif

        function use_register_type(type) {

            if (type == 'email') {
                $('#use_mobile_btn').show();
                $('#use_email_btn').hide();
                $('#phone').hide();
                $('#email').show();
                $("#email").prop('required', true);
                $("#phone").prop('required', false);
                $('#register_type').val('email');
            } else if (type == 'phone') {
                $('#use_mobile_btn').hide();
                $('#use_email_btn').show();
                $('#phone').show();
                $('#email').hide();
                $("#email").prop('required', false);
                $("#phone").prop('required', true);
                $('#register_type').val('phone');
            }
        }
    </script>
    @include('global.inc.footer')
@endsection
