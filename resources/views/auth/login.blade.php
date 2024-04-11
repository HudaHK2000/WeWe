@extends('layout.masterFrontEnd')
@section('title')
We Wee-Login
@endsection
@section('class_body')
class="preload login-page"
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
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Login</h1>
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
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="email_ad">Email Address</label>
                                    <input id="email_ad" type="text" class="text_field  @error('email') validation @enderror" name="email" placeholder="Please,Enter your email address" value="{{ old('email') }}">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 span-validation" />
                                </div>
    
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="text_field  @error('password') validation @enderror" name="password" placeholder="Please,Enter your password..." value="{{ old('password') }}">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 span-validation" />
                                </div>
                                
                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2" name="remember">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn--round" type="submit">
                                    {{ __('Log in') }}
                                </button>
                                
                                <div class="login_assist">
                                    @if (Route::has('password.request'))
                                    <p class="recover">Forgot your
                                        <a href="{{ route('password.request') }}">{{ __('Password?') }}</a>
                                        ?
                                    </p>
                                    @endif
                                    <p class="signup">Don't have an
                                        <a href="{{ route('register') }}">account</a>?</p>
                                </div>
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
    <!--================================
            END LOGIN AREA
    =================================-->
@endsection