@extends('layout.masterDashboard')

@section('title')
Hospital
@endsection

@section('title_dashboard')
Add Hospital
@endsection

@section('class_body')
class="preload dashboard-setting"
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
{{-- add hospital  --}}
<form class="setting_form" method="POST" action="{{ url('hospital') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="information_module">
                <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                    <h4>Add Hospita
                        <span class="lnr lnr-chevron-down"></span>
                    </h4>
                </a>
                <div class="information__set toggle_module collapse" id="collapse1">
                    <div class="information_wrapper form--fields">

                        <div class="form-group">
                            <label for="name">Hospital Name
                            </label>
                            <input 
                            name="name" type="text" id="name" 
                            class="text_field  @error('name') validation @enderror" 
                            placeholder="Hospital Name"
                            value="{{ old('name') }}">
                            @error('name')
                            <span class="span-validation">{{ $errors->first('name') }}</span>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea 
                            name="address" id="address" 
                            class="text_field @error('address') validation @enderror" 
                            placeholder="Address of the hospital">{{ old('address') }}</textarea>
                            @error('address')
                            <span class="span-validation">{{ $errors->first('address') }}</span>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputCountry" style="display: block">Country
                                    </label>
                                    <input 
                                    list="countries" name="country_id" id="inputCountry" 
                                    class="text_field @error('country_id') validation @enderror input-datalist" 
                                    value="{{ old('country_id') }}" autocomplete="off" placeholder="Choose Country">
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
                                    <label for="city">City
                                    </label>
                                    <select id="inputCity" class="text_field @error('city_id') validation @enderror" name="city_id">
                                        <option selected="" value="">select City</option>
                                        @foreach ($cities as $key=>$city )
                                            <option @if(old('city_id')== $city->id) selected @endif value="{{$city->id}}">{{$city->name}}</option>
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
                                    <label for="latitude">Latitude
                                    </label>
                                    <input 
                                    name="latitude" type="text" id="latitude" 
                                    class="text_field @error('latitude') validation @enderror" 
                                    placeholder="Latitude coordinates of the hospital"
                                    value="{{ old('latitude') }}"
                                    >
                                    @error('latitude')
                                    <span class="span-validation">{{ $errors->first('latitude') }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="longitude">Longitude
                                    </label>
                                    <input 
                                    name="longitude" type="text" id="longitude" 
                                    class="text_field @error('longitude') validation @enderror" 
                                    placeholder="longitude coordinates of the hospital"
                                    value="{{ old('longitude') }}"
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
        <div class="col-md-12">
            <div class="dashboard_setting_btn">
                <button type="submit" class="btn btn--round btn--md" data-target="#myModal2" data-toggle="modal">Add Hospital</button>
            </div>
        </div>
        <!-- end /.col-md-12 -->
    </div>
    <!-- end /.row -->
</form>
@endsection
@section('script')
<script>
    $(document).ready(function(){
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