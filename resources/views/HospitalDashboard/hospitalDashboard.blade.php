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
    <style>
    .f-li{
        margin-left: 30px !important;
    }
    </style>
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
                                <a href='{{ url("/hospital/{$hospital->id}/dashboard") }}'>Hospital Dashboard</a>
                            </li>
                            <li>
                                @yield('dashboard_breadcrumb')
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
                    <li class="@if  (Request::is('hospital/*/dashboard')) active @endif">
                        <a href='{{ url("/hospital/{$hospital->id}/dashboard") }}'>
                            <span class="lnr lnr-home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="@if (Request::is('hospital/*/show')) active @endif">
                        <a href='{{ url("/hospital/{$hospital->id}/show") }}'>
                            <span class="fas fa-hospital-user"></span>
                            Profile
                        </a>
                    </li>
                    <li class="has_dropdown">
                        <a href="#" class="@if (Request::is('car') | Request::is('car/create') | Request::is('car/*/edit')) active_nav @endif">
                            <i class="fa-solid fa-truck-medical"></i>
                            <span>Cars</span>
                        </a>
                        <div class="dropdowns dropdown--menu">
                            <ul>
                                <li class="f-li @if (Request::is('car/create')) active @endif">
                                    <a href="{{ url('car/create') }}">
                                        <i class="fa-solid fa-plus"></i>
                                        Add
                                    </a>
                                </li>
                                <li class="@if (Request::is('car')) active @endif">
                                    <a href="{{ url('car') }}">
                                        <i class="fa-solid fa-eye"></i>
                                        Show
                                </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="has_dropdown">
                        <a href="#" class="@if (Request::is('status/create') | Request::is('status') | Request::is('status/*/edit')) active_nav @endif">
                            <span class="lnr lnr-dice"></span>Status</a>
                        <div class="dropdowns dropdown--menu">
                            <ul>
                                <li class="f-li @if (Request::is('status/create')) active @endif">
                                    <a href="{{ url('status/create') }}">
                                        <i class="fa-solid fa-plus"></i>
                                        Add
                                    </a>
                                </li>
                                <li class="@if (Request::is('status')) active @endif">
                                    <a href="{{ url('status') }}">
                                        <i class="fa-solid fa-eye"></i>
                                        Show
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if (Request::is('order')) active @endif">
                        <a href="{{ url('order') }}">
                            <span class="lnr lnr-upload"></span>
                            Orders
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
                {{-- @php
                $hospital = $hospital->find($request->route('hospital_id'));
                @endphp --}}
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