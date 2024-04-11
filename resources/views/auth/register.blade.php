@extends('layout.masterFrontEnd')
@section('title')
We Wee-Register
@endsection
@section('class_body')
class="preload signup-page"
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
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">Register</h1>
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
<section class="signup_area section--padding2 section-register">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                            <p>Please fill the following fields with appropriate information to register a new MartPlace
                                account.
                            </p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">

                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input id="user_name" type="text" class="text_field  @error('name') validation @enderror" name="name" placeholder="Please,Enter your username..." value="{{ old('name') }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 span-validation" />
                            </div>

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
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" type="password" class="text_field  @error('password_confirmation') validation @enderror" placeholder="Confirm password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 span-validation" />
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" class="text_field  @error('address') validation @enderror" placeholder="Please,Enter your address" name="address" rows="5"></textarea>
                                <x-input-error :messages="$errors->get('address')" class="mt-2 span-validation" />
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone number</label>
                                <input id="phone" type="text" class="text_field  @error('phone') validation @enderror" placeholder="Please,Enter your phone number" name="phone" value="{{ old('phone') }}">
                                <x-input-error :messages="$errors->get('phone')" class="mt-2 span-validation" />
                            </div>

                            <button class="btn btn--md btn--round register_btn" type="submit">
                                {{ __('Register Now') }}    
                            </button>

                            <div class="login_assist">
                                <p>Already have an account?
                                    <a href="{{ route('login') }}">Login</a>
                                </p>
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
@endsection