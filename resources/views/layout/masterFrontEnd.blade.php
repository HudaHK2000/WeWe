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
    START Content
=================================-->
    @yield('content')
<!--================================
    END Content
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