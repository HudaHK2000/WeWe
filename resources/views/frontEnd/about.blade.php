@extends('layout.masterFrontEnd')
@section('title')
About Us
@endsection
@section('class_body')
class="preload home1 mutlti-vendor" style="background-color: #C7EBEB;"
@endsection
@section('content')
<div style="padding-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/about-us.jpg') }}" class="img-fluid" alt="About Us Image">
            </div>
            <div class="col-md-12 col-lg-8" style="text-align: center;">
                <h1 class="about-us-title"> About the website:</h1>
                <p style="font-size: 20px;">It is a website for requesting ambulance car and emergency medical services quickly and efficiently.</p>
                <h4 style="font-weight: bold;color: #253e6f;">our goal is:</h4> 
                <p style="font-size: 20px;">Providing emergency medical services quickly and immediately to patients and injured individuals in emergency situations and Improving the quality of healthcare in emergency situations.</p>
            </div>
        </div>
    </div>
    <section class="why_choose section--padding" style="padding-top: 0px;">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <h1 class="about-us-title" style=" border: white solid 2px; margin-bottom: 20px; margin-top: 20px;" >The services that the 
                        <span>We-Wee</span>
                        offers:
                    </h1>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <i class="fas fa-ambulance" style="color: steelblue; font-size: 300%;"></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Requesting:</h3>
                            <p> Easily requesting an ambulance when it is needed with just a click.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2 ">
                        <span class="feature2__count ">02</span>
                        <div class="feature2__content">
                            <i class="fas fa-map-marked-alt" style="color: steelblue; font-size: 300%;"></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Tracking:</h3>
                            <p> Track the dispatched ambulance in real time on the map and know its location.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <i class="fas fa-search-location" style="color: steelblue; font-size: 300%;"></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Identifying:</h3>
                            <p> Identifying the nearest hospital to the accident or injured person's location.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <i class="fas fa-briefcase-medical" style="color: steelblue; font-size: 300%;"></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Providing:</h3>
                            <p>Providing emergency medical services quickly and immediately to patients and injured individuals in emergency situations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <i class="fas fa-clinic-medical" style="color: steelblue; font-size: 300%;"></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Organizing:</h3>
                            <p>Organizing emergency response operations and directing medical vehicles to locations in need of emergency services.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <i class="fas fa-book-medical" style="color: steelblue; font-size: 300%; "></i>
                            <h3 class="feature2-title" style="font-weight: bold;">Awareness:</h3>
                            <p>Raising awareness about the importance of accessing emergency services and communicating with medical facilities in emergencies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>   
</section>
@endsection
