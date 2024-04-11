<!-- start menu-area -->
<div class="menu-area">
     <!-- start .top-menu-area -->
     <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <div class="col-lg-3 col-md-3 col-6 v_middle">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <h1 class="logo">We-We</h1>
                        </a>
                    </div>
                </div>
                <!-- end /.col-md-3 -->

                <!-- start .col-md-5 -->
                <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                    <!-- start .author-area -->
                    <div class="author-area">
                        <!--start .author-author__info-->
                        <div class="author-author__info inline has_dropdown">
                            <div class="author__avatar">
                                <img src="images/usr_avatar.png" alt="user avatar">

                            </div>
                            <div class="autor__info">
                                <p class="name">
                                    @guest
                                        user
                                    @endguest
                                    @auth
                                    {{ auth()->user()->name }}
                                    @endauth
                                </p>
                            </div>
                            <div class="dropdowns dropdown--author">
                                <ul>
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <span class="lnr lnr-enter"></span>{{ __('Login') }}
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="{{ route('register') }}">
                                            <span class="lnr lnr-user"></span>{{ __('Register') }}</a>
                                    </li>  
                                    @endguest
                                    @auth
                                        @if (auth()->user()->is_admin == 'admin')
                                            
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <span class="lnr lnr-home"></span>{{ __('Dashboard') }}</a>
                                        </li>
                                        @endif
                                    <li class="@if (Request::is('profile')) active @endif">
                                        <a href="{{ url('profile') }}">
                                            <span class="lnr lnr-user"></span>{{ __('Profile') }}</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-setting.html">
                                            <span class="lnr lnr-cog"></span> Setting</a>
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
                        <span class="lnr lnr-user menu_icon"></span>

                        <!-- offcanvas menu -->
                        <div class="offcanvas-menu closed">
                            <span class="lnr lnr-cross close_menu"></span>
                            <div class="author-author__info">
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
                                    @guest
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <span class="lnr lnr-enter"></span>{{ __('Login') }}
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="{{ route('register') }}">
                                            <span class="lnr lnr-user"></span>{{ __('Register') }}</a>
                                    </li>  
                                    @endguest
                                    @auth
                                    <li>
                                        <a href="{{ route('dashboard') }}">
                                            <span class="lnr lnr-home"></span>{{ __('Dashboard') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('profile') }}">
                                            <span class="lnr lnr-user"></span>{{ __('Profile') }}</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-setting.html">
                                            <span class="lnr lnr-cog"></span> Setting</a>
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
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->
    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    {{-- <div class="navbar-header">
                        <!-- start mainmenu__logo -->
                        <div class="mainmenu__search">
                            
                        </div>
                        <!-- start mainmenu__logo-->
                    </div> --}}

                    <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="">
                                    <a href="{{ url('home') }}" class="@if (Request::is('home')) active @endif">HOME</a>
                                </li>
                                <li class="">
                                    <a href="{{ url('about') }}" class="@if (Request::is('about')) active @endif">ABOUT US</a>
                                </li>
                                <li class="">
                                    <a href="#" class="@if (Request::is('emergency_numbers')) active @endif">EMERGENCY NUMBERS</a>
                                </li>
                                <li class="">
                                    <a href="#" class="@if (Request::is('safety_instructions')) active @endif">SAFETY INSTRUCTIONS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->