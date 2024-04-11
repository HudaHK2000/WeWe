@extends('layout.masterFrontEnd')
@section('title')
We Wee-Recover Password
@endsection
@section('class_body')
class="preload recover-pass-page"
@endsection
@section('content')
<!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="active">
                                <a href="{{ route('password.request') }}">Recover Password</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Recover Password</h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

        <!--================================
            START DASHBOARD AREA
    =================================-->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
        <section class="pass_recover_area section--padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="cardify recover_pass">
                                <div class="login--header">
                                    <p>Please enter the email address for your account. A verification code will be sent to you.
                                        Once you have received the verification code, you will be able to choose a new password
                                        for your account.</p>
                                </div>
                                <!-- end .login_header -->

                                <div class="login--form">
                                    <div class="form-group">
                                        <label for="email_ad">Email Address</label>
                                        <input id="email_ad" type="text" class="text_field  @error('email') validation @enderror" name="email" placeholder="Please,Enter your email address" value="{{ old('email') }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 span-validation" />
                                    </div>

                                    <button class="btn btn--md btn--round register_btn" type="submit">
                                        {{ __('Email Password Reset Link') }}
                                    </button>
                                </div>
                                <!-- end .login--form -->
                            </div>
                            <!-- end .cardify -->
                        </form>
                    </div>
                    <!-- end .col-md-6 -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </section>
    {{-- </x-guest-layout> --}}
    <!--================================
            END DASHBOARD AREA
    =================================-->
@endsection