<!-- start menu-area -->
<div class="menu-area" style="background-color: white;box-shadow: 0px 12px 20px 0px rgb(0 0 0 / 13%), 0px 2px 4px 0px rgb(0 0 0 / 12%);" >
    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <div class="col-6" style="padding: 0;display: flex;align-items: center;">
                    <div class="logo" style="padding: 0">
                        <a href="{{ route('home') }}">
                            <h1 class="logo" style="padding-left:10px">We Wee</h1>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <!-- start .author-area -->
                    <div class="author-area">
                        <!--start .author-author__info-->
                        <div class="author-author__info inline has_dropdown" style="padding: 7px;">
                            <div class="autor__info">
                                <nav class="navbar navbar-light bg-white" style="padding-right: 0;">
                                    <button class="navbar-toggler navbar-blue" type="button">
                                        <span class="navbar-toggler-icon" style="color: #2A6075"></span>
                                    </button>
                                </nav>
                            </div>
                            <div class="dropdowns dropdown--author">
                                <ul>
                                    <li>
                                        <a href="{{ url('home') }}" class="@if (Request::is('home')) active @endif">
                                            <span class="fas fa-home"></span>HOME
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}" class="@if (Request::is('about')) active @endif">
                                            <span class="fas fa-briefcase"></span>ABOUT US
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('first-aid') }}" class="@if (Request::is('first-aid')) active @endif">
                                            <span class="fas fa-briefcase-medical"></span>
                                            FIRST AID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('safety-instructions') }}" class="@if (Request::is('safety-instructions')) active @endif">
                                            <span class="fas fa-shield-alt"></span>SAFETY INSTRUCTIONS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('emergency-numbers') }}" class="@if (Request::is('emergency-numbers')) active @endif">
                                            <span class="fas fa-phone"></span>EMERGENCY NUMBERS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact-us') }}" class="@if (Request::is('contact-us')) active @endif">
                                            <span class="fas fa-envelope-open-text"></span>Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('our-team') }}" class="@if (Request::is('our-team')) active @endif">
                                            <span class="fas fa-users"></span>Our Team
                                        </a>
                                    </li>
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}" class="@if (Request::is('login')) active @endif">
                                            <span class="lnr lnr-enter"></span>{{ __('Login') }}
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="{{ route('register') }}" class="@if (Request::is('register')) active @endif">
                                            <span class="fas fa-user"></span>{{ __('Register') }}</a>
                                    </li>  
                                    @endguest
                                    @auth
                                        @if (auth()->user()->is_admin == '1')
                                        <li>
                                            <a href="{{ route('dashboard') }}" class="@if (Request::is('dashboard')) active @endif">
                                                <span class="fas fa-home"></span>{{ __('Dashboard') }}</a>
                                        </li>
                                        @endif
                                    <li class="@if (Request::is('profile')) active @endif">
                                        <a href="{{ url('profile') }}">
                                            <span class="fas fa-user"></span>{{ __('Profile') }}</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn-top-nav">
                                                <span class="lnr lnr-exit"></span>{{ __('Logout') }}
                                            </button>
                                        </form>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                        <!--end /.author-author__info-->
                    </div>
                    <!-- end .author-area -->

                    <!-- author area restructured for mobile -->
                    <div class="mobile_content ">
                        {{-- <span class="lnr lnr-user menu_icon"></span> --}}
                        <nav class="navbar navbar-light bg-white menu_icon">
                            <button class="navbar-toggler navbar-blue" type="button" style="margin-right: 0;margin-left: 85%;">
                                <span class="navbar-toggler-icon" style="color: #2A6075"></span>
                            </button>
                        </nav>
                        <!-- offcanvas menu -->
                        <div class="offcanvas-menu closed">
                            <span class="lnr lnr-cross close_menu"></span>
                            <div class="author-author__info" style="height: 80px;">
                                <div class="author__avatar v_middle">
                                    <img src="images/usr_avatar.png" alt="user avatar">
                                </div>
                                <div class="autor__info v_middle">
                                    <p class="name">
                                        @guest
                                            user
                                        @endguest
                                        @auth
                                            {{ auth()->user()->name }}
                                        @endauth
                                    </p>
                                </div>
                            </div>
                            <!--end /.author-author__info-->

                            <div class="dropdowns dropdown--author">
                                <ul>
                                    <li>
                                        <a href="{{ url('home') }}" class="@if (Request::is('home')) active @endif">
                                            <span class="fas fa-home"></span>HOME
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}" class="@if (Request::is('about')) active @endif">
                                            <span class="fas fa-briefcase"></span>ABOUT US
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('first-aid') }}" class="@if (Request::is('first-aid')) active @endif">
                                            <span class="fas fa-briefcase-medical"></span>
                                            FIRST AID
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('safety-instructions') }}" class="@if (Request::is('safety-instructions')) active @endif">
                                            <span class="fas fa-shield-alt"></span>SAFETY INSTRUCTIONS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('emergency-numbers') }}" class="@if (Request::is('emergency-numbers')) active @endif">
                                            <span class="fas fa-phone"></span>EMERGENCY NUMBERS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('contact-us') }}" class="@if (Request::is('contact-us')) active @endif">
                                            <span class="fas fa-envelope-open-text"></span>Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('our-team') }}" class="@if (Request::is('our-team')) active @endif">
                                            <span class="fas fa-users"></span>Our Team
                                        </a>
                                    </li>
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}" class="@if (Request::is('login')) active @endif">
                                            <span class="lnr lnr-enter"></span>{{ __('Login') }}
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="{{ route('register') }}" class="@if (Request::is('register')) active @endif">
                                            <span class="fas fa-user"></span>{{ __('Register') }}</a>
                                    </li>  
                                    @endguest
                                    @auth
                                        @if (auth()->user()->is_admin == '1')
                                        <li>
                                            <a href="{{ route('dashboard') }}" class="@if (Request::is('dashboard')) active @endif">
                                                <span class="fas fa-home"></span>{{ __('Dashboard') }}</a>
                                        </li>
                                        @endif
                                    <li class="@if (Request::is('profile')) active @endif">
                                        <a href="{{ url('profile') }}">
                                            <span class="fas fa-user"></span>{{ __('Profile') }}</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn-top-nav">
                                                <span class="lnr lnr-exit"></span>{{ __('Logout') }}
                                            </button>
                                        </form>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end /.mobile_content -->
                </div>
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->