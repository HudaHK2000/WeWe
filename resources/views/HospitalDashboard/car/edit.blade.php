@extends('HospitalDashboard.masterHospitalDashboard')
@section('title')
Car
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('car') }}">Cars</a>
@endsection

@section('title_dashboard')
Edit Car
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
{{-- add car --}}

<form  class="setting_form" method="POST" action='{{ url("car/{$car->id}") }}' enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="row">
      <div class="col-lg-12">
        <div class="information_module">
          <a
            class="toggle_title"
            href="#collapse2"
            role="button"
            data-toggle="collapse"
            aria-expanded="false"
            aria-controls="collapse1"
          >
            <h4>
              Add Cars
              <span class="lnr lnr-chevron-down"></span>
            </h4>
          </a>

          <div
            class="information__set toggle_module collapse show" id="collapse2">
            <div class="information_wrapper form--fields">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="car_number"
                      >Car Number
                      <sup>*</sup>
                    </label>
                    <input
                      type="text"
                      id="car_number"
                      class="text_field @error('car_number') validation @enderror"
                      placeholder="Car Number..."
                      name="car_number"
                      value="{{ $car->car_number }}"
                    />
                    @error('car_number')
                      <span class="span-validation">{{ $errors->first('car_number') }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="hospital_id">Choose the hospital to which the car belongs
                          <sup>*</sup>
                      </label>
                      <select id="hospital_id" class="text_field @error('hospital_id') validation @enderror" name="hospital_id">
                          <option selected="" value="">select Hospital:</option>
                          @foreach ($hospitals as $key=>$hospital )
                              <option 
                              @if ($car->hospital_id == $hospital->id) selected @endif value="{{$hospital->id}}">{{$hospital->name}}</option>
                          @endforeach
                      </select>  
                      @error('hospital_id')
                      <span class="span-validation">{{ $errors->first('hospital_id') }}</span>
                      @enderror
                  </div>
                </div>
              </div>            
            </div>
          </div>
          <!-- end /.information__set -->
        </div>
        <!-- end /.information_module -->
      </div>
      <!-- end /.col-md-6 -->

      <div class="col-md-12">
        <div class="dashboard_setting_btn">
          <button type="submit" class="btn btn--round btn--md">
            Save Change
          </button>
        </div>
      </div>
      <!-- end /.col-md-12 -->
    </div>
    <!-- end /.row -->
</form>

@endsection
