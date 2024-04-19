@extends('layout.masterFrontEnd')
@section('title')
We Wee
@endsection
@section('class_body')
class="preload home1 mutlti-vendor accordion-page modal-open"
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
<style>
    .load {
        display: flex;
        justify-content: center;
        margin: 40px auto 0px auto;
    }
    .load div {
        width: 20px;
        height: 20px;
        background-color: #2A6075;
        border-radius: 50%;
        margin: 0 5px;
        animation: up-and-down;
        animation-duration: 0.9s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }
    .load .two {
        animation-delay: 0.3s;
    }
    .load .three {
        animation-delay: 0.6s;

    }
    @keyframes up-and-down {
        to {
            opacity: 0.2;
            transform: translateY(-20px);
        }
    }
</style>
@endsection

@section('content')
<section class="hero-area bgimage" style="height: 500px;">
    <div class="bg_image_holder">
        <img src="{{ asset('images/home-bg.jpg') }}" alt="background-image">
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
                            <a class="btn btn--round btn--lg pl-3 pr-3" data-toggle="modal" data-target="#myModal2">Request emergency ambulance</a>
                        </div>
                        <div class="hero__btn-area">
                            <a class="btn btn--round btn--lg pl-3 pr-3" data-toggle="modal" data-target="#myModal3">Request emergency ambulance</a>
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
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body model-bgcolor">
                    <div class="dashboard_contents" style="padding: 30px;">
                        <div class="container">
                            @guest    
                            <form class="setting_form" method="POST" action="{{ url('add_order_guest') }}" enctype="multipart/form-data">
                            @endguest
                            @auth
                            <form class="setting_form" method="POST" action="{{ url('add_order_user') }}" enctype="multipart/form-data">
                            @endauth
                            @csrf
                                <div class="row" style="display: flex;justify-content: center;">
                                    <div class="model-bgcolor">
                                        <div class="information__set ">
                                            <div class="information_wrapper form--fields">
                                                @guest
                                                <!-- phone -->
                                                <div class="form-group">
                                                    <label for="phone">Phone
                                                        <sup>*</sup>
                                                    </label>
                                                    <input type="text" name="phone" id="phone" class="text_field @error('phone') validation @enderror" placeholder="Please,Enter Your Phone Number..." value="{{ old('phone') }}" style="border-radius: 12px;" >
                                                    @error('phone')
                                                        <span class="span-validation">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                @endguest
                                                <!-- blood type -->
                                                <div class="form-group">
                                                    <label for="blood">
                                                        The blood type of the affected person
                                                        <sup>*</sup>
                                                    </label>
                                                    <div class="select-wrap select-wrap2">
                                                        <select id="blood" class="text_field @error('blood_group') validation @enderror" name="blood_group" style="border-radius: 12px;">
                                                            <option value="DoNotKnow" {{ old('blood_group') == 'DoNotKnow' ? 'selected' : '' }}>Don't Know</option>
                                                            <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                                            <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                                                            <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                                            <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                                            <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                                            <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                                            <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                            <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                        </select>
                                                        <span class="lnr lnr-chevron-down"></span>
                                                    </div>
                                                    @error('blood_group')
                                                        <span class="span-validation">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!-- accident type -->
                                                <div class="form-group">
                                                    <label for="status_id">
                                                        The condition of the affected person
                                                        <sup>*</sup>
                                                    </label>
                                                    <select id="status_id" multiple="" class="text_field @error('status_id') validation @enderror" name="status_id[]" style="border-radius: 12px;">
                                                        @foreach ($statuses as $key=>$status )
                                                            <option value="{{ $status->id }}" {{ in_array($status->id, old('status_id', [])) ? 'selected' : '' }}>{{ $status->name }}</option>
                                                        @endforeach
                                                    </select>  
                                                    @error('status_id')
                                                        <span class="span-validation">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom_checkbox">
                                                        <input type="checkbox" id="allowLocation" name="allowLocation">
                                                        <label for="allowLocation">
                                                            <span class="shadow_checkbox"></span>
                                                            <span> Allow Access to Location</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="latitude" name="latitude">
                                                <input type="hidden" id="longitude" name="longitude">
    
                                                <div style="display: flex;justify-content: center;">
                                                    <button type="submit" class="btn btn--round btn--md">Send</button>
                                                </div>
                                            </div>
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
    <div class="modal" id="myModal3">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" style="text-align: center;">
                <div class="modal-header" style="height: 130px;padding: 30px 30px 0px 30px;">
                    <h3>Find the nearest hospital</h3>
                    <div class="load">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                </div>
                <!-- end /.modal-header -->
                <div class="modal-body" style="display: flex;flex-wrap: nowrap;flex-direction: row;justify-content: center;align-items: center;">
                    <button type="submit" class="btn btn--round btn-danger btn--default">Delete</button>
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>
<!-- end home --------------------------------------------------------------------->
@endsection

@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('allowLocation').addEventListener('change', function() {
            if (this.checked) {
                // If checkbox is checked, attempt to get user's location
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Success callback function
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    
                    // Set latitude and longitude values to hidden inputs or send them directly to the server
                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;
                }, function(error) {
                    // Error callback function
                    console.error('Error getting location:', error);
                });
            } else {
                // If checkbox is unchecked, clear the hidden inputs or any stored location data
                document.getElementById('latitude').value = '';
                document.getElementById('longitude').value = '';
            }
        });

        // Check if the checkbox is checked before submitting the form
        document.querySelector('.setting_form').addEventListener('submit', function(event) {
            // Prevent form submission if checkbox is not checked
            if (!document.getElementById('allowLocation').checked) {
                event.preventDefault();
                alert('Please allow access to location before submitting the form.');
            }
        });
    });
    function setModalSession(modal) {
        // تعيين قيمة الجلسة لاستدعاء المودال المناسب
        sessionStorage.setItem('modal', modal);
    }
    
    function openModal(modal) {
        var isValid = {{ $errors->any() ? 'false' : 'true' }};
        console.log(isValid);
        // var isValid = /* check form validity */;
        if (isValid) {
            document.getElementById('myModal2').click(); // Trigger modal3 button click
        } else {
            document.getElementById('myModal3').click(); // Trigger modal2 button click
        }
    }
</script>
@endsection   