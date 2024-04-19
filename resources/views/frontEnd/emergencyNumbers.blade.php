@extends('layout.masterFrontEnd')
@section('title')
Emergency Numbers
@endsection
@section('class_body')
class="preload home1 mutlti-vendor"
@endsection
@section('content')
<!-- start emergency numbers ------------------------------------------------------- -->
<div class="emergency-numbers">
    <h1 class="emergency-numbers-title">The most important emergency numbers</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4" style="margin-bottom: 30px;">
                <img src="{{ asset('images/number.jpg') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="emergency-numbers-content1">
                    <h4>Firefighting:</h4>
                    <p style=" margin-right: 5px;">To deal with fire incidents,</p>
                    <p style="color: #253e6f; font-weight: bold;">call 113</p>
                </div>
                <div class="emergency-numbers-content2">
                    <h4>Emergency Police:</h4>
                    <p style=" margin-right: 5px;">To report crimes or accidents,</p>
                    <p style="color: #253e6f; font-weight: bold;">call 112</p>
                </div>
                
                <div class="emergency-numbers-content3">
                    <h4>Catering complaints:</h4>
                    <p style=" margin-right: 5px;">To report catering problems,</p>
                    <p style="color: #253e6f; font-weight: bold;">call 119</p>
                </div>
                <div class="emergency-numbers-content4">
                    <h4>Ambulance:</h4>
                    <p style=" margin-right: 5px;">For urgent medical cases,</p>
                    <p style="color: #253e6f; font-weight: bold;">call 110</p>
                </div>
                <div class="emergency-numbers-content5">
                    <h4>Red Crescent Ambulance:</h4>
                    <p style="color: #253e6f; font-weight: bold;">Call 133</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end emergency numbers --------------------------------------------------------- -->
@endsection
