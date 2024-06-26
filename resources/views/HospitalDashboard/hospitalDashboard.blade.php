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
        Dashboard Hospital
    </title>

    <!-- inject:css -->
    @include('layout.css')
    <style>
    .f-li{
        margin-left: 30px !important;
    }
        .back {
            background-color: #eff1f5;
            padding-top: 50px;
            padding-bottom: 15px;
        }
    </style>
    </head>

<body class="preload home3">

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
                                <a href='{{ url("/hospital/" . auth()->user()->hospital_id . "/dashboard") }}'>
                                Hospital Dashboard
                                </a>
                            </li>
                            <li>
                                <a href='{{ url("/hospital/" . auth()->user()->hospital_id . "/dashboard") }}'>
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="page-title">
                        {{ $hospital->name }}
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
                        <a href='{{ url("/hospital/" . auth()->user()->hospital_id . "/dashboard") }}'>
                            <span class="lnr lnr-home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="@if (Request::is('hospital/*/show')) active @endif">
                        <a href='{{ url("/hospital/" . auth()->user()->hospital_id . "/show") }}'>
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
                    <li class="@if (Request::is('hospital/*/show-order')) active @endif">
                        <a href='{{ route("hospital.show-order", ["hospital_id" => auth()->user()->hospital_id ]) }}'>
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
                <!--================================START COLOR DIV=================================-->

<div class="back">
    <div class="container">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="statement_info_card">
            <div class="info_wrap">
                <span class="fa-regular fa-hospital  icon mcolorbg1"></span>
                <div class="info">
                    <p>7</p>
                    <span>Hospitals</span>
              </div>
            </div>
            <!-- end /.info_wrap -->
          </div>
          <!-- end /.statement_info_card -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-lg-3 col-md-3">
          <div class="statement_info_card">
            <div class="info_wrap">
                <span class="fa-solid fa-truck-medical icon mcolorbg2"></span>
                <div class="info">
                    <p>10</p>
                    <span>cars</span>
                </div>
            </div>
            <!-- end /.info_wrap -->
          </div>
          <!-- end /.statement_info_card -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-lg-3 col-md-3">
          <div class="statement_info_card">
            <div class="info_wrap">
              <span class="fas fa-briefcase-medical icon mcolorbg3"></span>
              <div class="info">
                <p>10</p>
                <span>Orders</span>
              </div>
            </div>
            <!-- end /.info_wrap -->
          </div>
          <!-- end /.statement_info_card -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-lg-3 col-md-3">
          <div class="statement_info_card">
            <div class="info_wrap">
              <span class="fa-solid fa-user icon mcolorbg4"></span>
              <div class="info">
                <p>20</p>
                <span>Users</span>
              </div>
            </div>
            <!-- end /.info_wrap -->
          </div>
          <!-- end /.statement_info_card -->
        </div>
        <!-- end /.col-md-3 -->
      </div>
    </div>
</div>
<!--================================END COLOR DIV=================================-->
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