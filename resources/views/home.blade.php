@extends('layout.masterFrontEnd')
@section('title')
We-Wee
@endsection
@section('class_body')
class="preload home1 mutlti-vendor"
@endsection
@section('content')
    <!-- start home ------------------------------------------------------------------- -->
    
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="images/home-bg.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="bold">Save Your Self!</span>
                                </h1>
                                <p class="tagline">Order now an ambulance car</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a class="btn btn--round btn--lg" data-toggle="modal" data-target="#myModal">Request ambulance</a>
                                <a class="btn btn--round btn--lg pl-3 pr-3" data-toggle="modal" data-target="#myModal2">Request emergency ambulance</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->
    </section>

    <!-- start model1 -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body model-bgcolor">
                    <div class="dashboard_contents">
                        <div class="container">
                            <form action="#" class="setting_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="information_module model-bgcolor">
                                            <div class="toggle_title">
                                                <h4>Biling Information </h4>
                                            </div>
                                            <div class="information__set">
                                                <div class="information_wrapper form--fields">
                                                    <!-- name -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="first_name"> Name
                                                                    <sup>*</sup>
                                                                </label>
                                                                <input type="text" id="first_name" class="text_field" placeholder="Name" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- email -->
                                                    <div class="form-group">
                                                        <label for="email1">Email
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="email1" class="text_field" placeholder="Email address" value="">
                                                    </div>
                                                    <!-- password -->
                                                    <div class="form-group">
                                                        <label for="pass">Password
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="password" id="pass" class="text_field" placeholder="password" value="">
                                                    </div>
                                                    <!-- address -->
                                                    <div class="form-group">
                                                        <label for="add">Address
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="add" class="text_field" placeholder="" value="">
                                                    </div>
                                                    <!-- phone -->
                                                    <div class="form-group">
                                                        <label for="pho">Phone
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="pho" class="text_field" placeholder="" value="">
                                                    </div>
                                                    <!-- blood type -->
                                                    <div class="form-group">
                                                        <label for="country1">Blood Type
                                                            <sup>*</sup>
                                                        </label>
                                                        <div class="select-wrap select-wrap2">
                                                            <select name="country" id="country1" class="text_field">
                                                                <option value="">Don't Know</option>
                                                                <option value="bangladesh">O+</option>
                                                                <option value="india">O-</option>
                                                                <option value="uruguye">A+</option>
                                                                <option value="australia">B+</option>
                                                                <option value="australia">B-</option>
                                                                <option value="australia">A-</option>
                                                                <option value="neverland">AB+</option>
                                                                <option value="atlantis">AB-</option>
                                                            </select>
                                                            <span class="lnr lnr-chevron-down"></span>
                                                        </div>
                                                    </div>
                                                    <!-- check box -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        Allow access to your location 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn--round btn--lg ">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end model1 -->
    <!-- start model2 -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body model-bgcolor">
                    <div class="dashboard_contents">
                        <div class="container">
                            <form action="#" class="setting_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="information_module model-bgcolor">
                                            <div class="toggle_title">
                                                <h4>Biling Information </h4>
                                            </div>
                                            <div class="information__set">
                                                <div class="information_wrapper form--fields">
                                                    <!-- phone -->
                                                    <div class="form-group">
                                                        <label for="pho">Phone
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" id="pho" class="text_field" placeholder="" value="">
                                                    </div>
                                                    <!-- blood type -->
                                                    <div class="form-group">
                                                        <label for="country1">Blood Type
                                                            <sup>*</sup>
                                                        </label>
                                                        <div class="select-wrap select-wrap2">
                                                            <select name="country" id="country1" class="text_field">
                                                                <option value="">Don't Know</option>
                                                                <option value="bangladesh">O+</option>
                                                                <option value="india">O-</option>
                                                                <option value="uruguye">A+</option>
                                                                <option value="australia">B+</option>
                                                                <option value="australia">B-</option>
                                                                <option value="australia">A-</option>
                                                                <option value="neverland">AB+</option>
                                                                <option value="atlantis">AB-</option>
                                                            </select>
                                                            <span class="lnr lnr-chevron-down"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn--round btn--lg ">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end model2 -->

    <!-- end home ------------------------------------------------------------------- -->
@endsection