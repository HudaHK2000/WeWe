@extends('layout.masterFrontEnd')
@section('title')
Contact Us
@endsection
@section('class_body')
class="preload home1 mutlti-vendor"
@endsection
@section('content')
<!-- start contact us ------------------------------------------------------------------- -->
<div class="contact-sec" style="background-color: #bae5f8;">
    <div class="contact-text">
        <p>Share us your opinion:</p>
    </div>

    <div class="row">
        <div class="col-lg-5 col-md-12" style="display: flex;align-items: center;justify-content: center;">
            <img src="{{ asset('images/contact.jpg') }}" class="mx-auto d-block" alt="..." style="width: 100%;">
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="filling-sec">
                <div class="col-md-8 offset-md-2">
                    <div class="contact_form--wrapper">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="font-size: 20px;font-weight: bold; color: #253e6f;padding: 3px;">Enter your name:</div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="font-size: 20px;font-weight: bold; color: #253e6f;padding: 3px;">Enter your email:</div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: 20px;font-weight: bold; color: #253e6f;padding: 3px;">Message type:</div>
                            <div class="select-wrap select-wrap2" style="margin-bottom: 20px;" >
                                <select name="country" id="country1" class="text_field" style="background-color: white;">
                                    <option value="">To thank</option> 
                                    <option value="bangladesh">Complaint</option>
                                    <option value="india">Suggestion</option>
                                </select>
                                <span class="lnr lnr-chevron-down"></span>
                            </div>
                            <div style="font-size: 20px;font-weight: bold; color: #253e6f;padding: 3px;">Message:</div>
                            <textarea cols="30" rows="5" placeholder="Yout text here"></textarea>
                            <div class="sub_btn">
                                <button type="button" class="btn btn--round btn--default" style="margin-top: 20px;">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact us ------------------------------------------------------------------- -->
@endsection
