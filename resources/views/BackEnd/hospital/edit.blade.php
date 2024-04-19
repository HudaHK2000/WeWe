@extends('layout.masterDashboard')

@section('title')
Hospital
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('hospital') }}">Hospitals</a>
@endsection

@section('title_dashboard')
Edit Hospital
@endsection

@section('class_body')
class="preload dashboard-setting"
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
@endsection

@section('content')
{{-- navication  --}}
@if (session()->has('success'))
<div class="alert alert-success" role="alert" style="background-color: white">
    <span class="alert_icon lnr lnr-checkmark-circle"></span>
    <strong>Well done!</strong> {{ session()->get('success') }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="lnr lnr-cross" aria-hidden="true"></span>
    </button>
</div>
@endif
{{-- update hospital  --}}
<form class="setting_form" method="POST" action='{{ url("hospital/{$hospital->id}") }}' enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="row">
        {{-- information --}}
        <div class="col-lg-6 col-md-12">
            <div class="information_module">
                <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                    <h4>Update Hospita
                        <span class="lnr lnr-chevron-down"></span>
                    </h4>
                </a>
                <div class="information__set toggle_module collapse show" id="collapse1">
                    <div class="information_wrapper form--fields">

                        <div class="form-group">
                            <label for="name">Hospital Name
                                <sup>*</sup>
                            </label>
                            <input 
                            name="name" type="text" id="name" 
                            class="text_field  @error('name') validation @enderror" 
                            placeholder="Hospital Name"
                            value="{{ $hospital->name }}">
                            @error('name')
                            <span class="span-validation">{{ $errors->first('name') }}</span>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="address">
                                Address
                                <sup>*</sup>
                            </label>
                            <textarea 
                            name="address" id="address" 
                            class="text_field @error('address') validation @enderror" 
                            placeholder="Address of the hospital">{{ $hospital->address }}</textarea>
                            @error('address')
                            <span class="span-validation">{{ $errors->first('address') }}</span>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCountry" style="display: block">
                                        Country
                                        <sup>*</sup>
                                    </label>
                                    <input 
                                    list="countries" name="country_id" id="inputCountry" 
                                    class="text_field @error('country_id') validation @enderror input-datalist" 
                                    value="{{ $hospital->city->country->name }}" autocomplete="off" placeholder="Choose Country">
                                    <datalist id="countries" class="text_field" >
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" data-country-id="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </datalist>
                                    @error('country_id')
                                    <span class="span-validation">{{ $errors->first('country_id') }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">
                                        City
                                        <sup>*</sup>
                                    </label>
                                    <select id="inputCity" class="text_field @error('city_id') validation @enderror" name="city_id">
                                        <option selected="" value="">select City</option>
                                        @foreach ($cities as $key=>$city )
                                            <option 
                                            @if ($hospital->city_id == $city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>  
                                    @error('city_id')
                                    <span class="span-validation">{{ $errors->first('city_id') }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="latitude">
                                        Latitude
                                        <sup>*</sup>
                                    </label>
                                    <input 
                                    name="latitude" type="text" id="latitude" 
                                    class="text_field @error('latitude') validation @enderror" 
                                    placeholder="Latitude coordinates of the hospital"
                                    value="{{ $hospital->latitude }}"
                                    >
                                    @error('latitude')
                                    <span class="span-validation">{{ $errors->first('latitude') }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="longitude">
                                        Longitude
                                        <sup>*</sup>
                                    </label>
                                    <input 
                                    name="longitude" type="text" id="longitude" 
                                    class="text_field @error('longitude') validation @enderror" 
                                    placeholder="longitude coordinates of the hospital"
                                    value="{{ $hospital->longitude }}"
                                    >
                                    @error('longitude')
                                    <span class="span-validation">{{ $errors->first('longitude') }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end /.information__set -->
            </div>
        </div>
        {{-- map  --}}
        <div class="col-lg-6 col-md-12">
            <div id="map" style="z-index: 0; height:620px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="dashboard_setting_btn">
                <button type="submit" class="btn btn--round btn--md" data-target="#myModal2" data-toggle="modal">Save modifications</button>
            </div>
        </div>
        <!-- end /.col-md-12 -->
    </div>
    <!-- end /.row -->
</form>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script>
    $(document).ready(function(){
        // احداثيات مدينة حلب
        var latitude = {{ $hospital->latitude }};
        var longitude = {{ $hospital->longitude }};
        // تحديد الإحداثيات لتكون مركز الخريطة على حلب
        var map = L.map('map').setView([latitude, longitude], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            minZoom: 1,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        
        var marker;
        marker = L.marker([latitude, longitude]).addTo(map);
        var latitudeInput = document.getElementById('latitude');
        var longitudeInput = document.getElementById('longitude');

        map.on('click', function(e) {
            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker(e.latlng).addTo(map);
            latitudeInput.value = e.latlng.lat; // تحديث قيمة حقل الإدخال بالإحداثيات
            longitudeInput.value = e.latlng.lng; // تحديث قيمة حقل الإدخال بالإحداثيات
            console.log("Latitude: " + e.latlng.lat + ", Longitude: " + e.latlng.lng);
        });
        $('#inputCountry').on('change', function(){
            var countryId;
            var selectedOption = $('datalist#countries option[value="' + $(this).val() + '"]');
            if (selectedOption.length > 0) {
                countryId = selectedOption.data('country-id');
                console.log(countryId);
            }
            if(countryId){
                $.ajax({
                    url: '/getCities/'+countryId, // استبدل هذا بالمسار الصحيح لطرح الطلب إلى الخادم
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        if(data.length > 0){ // تحقق من وجود بيانات
                            $('#inputCity').empty();
                            $.each(data, function(key, value){
                                $('#inputCity').append('<option value="'+value.id+'">'+value.name+'</option>');
                            });
                        }
                        else{
                            $('#inputCity').empty();
                            $('#inputCity').append('<option value="">No cities</option>');
                        }
                    }
                });
            } else {
                $('#inputCity').empty();
            }
        });
    });
</script>
@endsection