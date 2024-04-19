@extends('layout.masterDashboard')

@section('title')
Famous Status
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('status') }}">Statuses</a>
@endsection

@section('title_dashboard')
  Add Famous Status
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
{{--  Add FamouseStatuse --}}

<form  class="setting_form" method="POST" action="{{ url('status') }}" enctype="multipart/form-data">
    @csrf
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
              Famouse Statuse
              <span class="lnr lnr-chevron-down"></span>
            </h4>
          </a>

          <div
            class="information__set toggle_module collapse show"
            id="collapse2"
          >
            <div class="information_wrapper form--fields">
              <div class="form-group">
                <label for="name"
                  >Name
                  <sup>*</sup>
                </label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="text_field @error('name') validation @enderror"
                  placeholder="Name..."
                  value="{{ old('name') }}"
                />
                @error('name')
                  <span class="span-validation">{{ $errors->first('name') }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="authbio"
                  >Description
                  <sup>*</sup>
                </label>
                <textarea
                  id="authbio"
                  class="text_field @error('description') validation @enderror"
                  placeholder="Description of status..."
                  name="description"
                  >{{ old('description') }}</textarea>
                @error('description')
                  <span class="span-validation">{{ $errors->first('description') }}</span>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="dashboard_setting_btn">
          <button type="submit" class="btn btn--round btn--md">
            Add Status
          </button>
        </div>
      </div>
      <!-- end /.col-md-12 -->
    </div>
    <!-- end /.row -->
</form>

@endsection











