@extends('layout.masterFrontEnd')
@section('title')
About Us
@endsection
@section('class_body')
class="preload home1 mutlti-vendor"
@endsection
@section('content')
<section class="about_mission">
    <div class="content_block1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="content_area">
                        <h1 class="content_area--title">About
                            <span class="highlight">We-Wee </span> website:
                        </h1>
                        <p>It is a website for requesting ambulance car and emergency medical services quickly and efficiently.</p>
                        <br>
                        <p> <b>our goal is:</b>  <br>
                            Providing emergency medical services quickly and immediately to patients and injured individuals in emergency situations and Improving the quality of healthcare in emergency situations.</p>
                    </div>
                </div>
                <!-- end /.col-md-5 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->

        <div class="content_image bgimage">
            <div class="bg_image_holder" style="background-image: url(&quot;images/ab1.jpg&quot;); opacity: 1;">
                <img src="{{ asset('images/about.jpg') }}" alt="about image">
            </div>
        </div>
    </div>
    <!-- end /.about -->
    <!-- end /.mission-->
</section>
<section class="why_choose section--padding" >
<!-- start container -->
<div class="container">
    <!-- start row -->
    <div class="row">
        <!-- start col-md-12 -->
        <div class="col-md-12">
            <div class="section-title">
                <h1>The services that the 
                    <span class="highlighted">We-Wee</span>
                    offers:
                </h1>
            </div>
        </div>
        <!-- end /.col-md-12 -->
    </div>
    <!-- end /.row -->

    <!-- start row -->
    <div class="row">
        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .reason -->
            <div class="feature2">
                <span class="feature2__count">01</span>
                <div class="feature2__content">
                    <i class="fas fa-ambulance" style="color: steelblue; font-size: 300%;"></i>
                    <h3 class="feature2-title">Requesting:</h3>
                    <p> Requesting an ambulance When needed.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->

        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .feature2 -->
            <div class="feature2 ">
                <span class="feature2__count ">02</span>
                <div class="feature2__content">
                    <i class="fas fa-map-marked-alt" style="color: steelblue; font-size: 300%;"></i>
                    <h3 class="feature2-title">Tracking:</h3>
                    <p> Tracking the dispatched ambulance in real-time.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->

        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .feature2 -->
            <div class="feature2">
                <span class="feature2__count">03</span>
                <div class="feature2__content">
                    <i class="fas fa-search-location" style="color: steelblue; font-size: 300%;"></i>
                    <h3 class="feature2-title">Identifying:</h3>
                    <p> Identifying the nearest hospital to the accident or injured person's location.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->

        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .feature2 -->
            <div class="feature2">
                <span class="feature2__count">04</span>
                <div class="feature2__content">
                    <i class="fas fa-briefcase-medical" style="color: steelblue; font-size: 300%;"></i>
                    <h3 class="feature2-title">Providing:</h3>
                    <p>Providing emergency medical services quickly and immediately to patients and injured individuals in emergency situations.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->

        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .feature2 -->
            <div class="feature2">
                <span class="feature2__count">05</span>
                <div class="feature2__content">
                    <i class="fas fa-clinic-medical" style="color: steelblue; font-size: 300%;"></i>
                    <h3 class="feature2-title">Organizing:</h3>
                    <p>Organizing emergency response operations and directing medical vehicles to locations in need of emergency services.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->

        <!-- start .col-md-4 -->
        <div class="col-lg-4 col-md-6 ">
            <!-- start .feature2 -->
            <div class="feature2">
                <span class="feature2__count">06</span>
                <div class="feature2__content">
                    <i class="fas fa-book-medical" style="color: steelblue; font-size: 300%; "></i>
                    <h3 class="feature2-title">Awareness:</h3>
                    <p>Raising awareness about the importance of accessing emergency services and communicating with medical facilities in emergencies.</p>
                </div>
                <!-- end /.feature2__content -->
            </div>
            <!-- end /.feature2 -->
        </div>
        <!-- end /.col-md-4 -->
    </div>
    <!-- end /.row -->
</div>
<!-- end /.container -->
</section>
@endsection
