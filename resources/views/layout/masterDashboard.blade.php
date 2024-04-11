<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>
        @yield('title')
    </title>

    <!-- inject:css -->
    @include('layout.css')
    </head>

<body @yield('class_body')>

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
    @include('layout.nav')
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
=================================-->

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
                                <a href="{{ url('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('dashboard') }}">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">
                        @yield('title_dashboard')
                    </h1>
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
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li class="@if (Request::is('dashboard')) active @endif">
                                <a href="{{ url('dashboard') }}">
                                    <span class="lnr lnr-home"></span>Dashboard</a>
                            </li>
                            <li class="@if (Request::is('hospital')) active @endif">
                                <a href="{{ url('hospital') }}">
                                    <span class="lnr lnr-cog"></span>All Hospitals
                                </a>
                            </li>
                            <li class="@if (Request::is('hospital/create')) active @endif">
                                <a href="{{ url('hospital/create') }}">
                                    <span class="lnr lnr-cog"></span>Add Hospital
                                </a>
                            </li>
                            <li class="@if (Request::is('car')) active @endif">
                                <a href="{{ url('car') }}">
                                    <span class="lnr lnr-cart"></span>Cars
                                </a>
                            </li>
                            <li class="@if (Request::is('employee')) active @endif">
                                <a href="{{ url('employee') }}">
                                    <span class="lnr lnr-dice"></span>Employee
                                </a>
                            </li>
                            <li class="@if (Request::is('user')) active @endif">
                                <a href="{{ url('user') }}">
                                    <span class="lnr lnr-chart-bars"></span>User
                                </a>
                            </li>
                            <li class="@if (Request::is('status')) active @endif">
                                <a href="{{ url('status') }}">
                                    <span class="lnr lnr-upload"></span>Status
                                </a>
                            </li>
                            <li class="@if (Request::is('order')) active @endif">
                                <a href="{{ url('order') }}">
                                    <span class="lnr lnr-briefcase"></span>Order
                                </a>
                            </li>
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents ">
            <div class="container">
                @yield('content')
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

    <!--================================
    START FOOTER AREA
=================================-->
    @include('layout.footer')
    <!--================================
    END FOOTER AREA
=================================-->

    <!--//////////////////// JS GOES HERE ////////////////-->

    @include('layout.script')
    <!-- endinject -->
</body>

</html>