@extends('HospitalDashboard.masterHospitalDashboard')
@section('title')
Car
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('car') }}">Cars</a>
@endsection

@section('title_dashboard')
Car
@endsection

@section('class_body')
class="preload dashboard-edit"
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

<div class="row">
    @foreach ($cars as $key=>$car )
    <!-- start .col-md-4 -->
    <div class="col-lg-4 col-md-6">
        <!-- start .single-product -->
        <div class="product product--card">
            <div class="product__thumbnail">
                <div class="prod_option">
                    <a
                        href="#"
                        id="drop2"
                        class="dropdown-trigger"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="true"
                    >
                        <span class="lnr lnr-cog setting-icon"></span>
                    </a>

                    <div class="options dropdown-menu" aria-labelledby="drop2">
                        <ul>
                            <li>
                                <a href="{{ url("car/$car->id/edit") }}">
                                <span class="lnr lnr-pencil"></span>
                                Edit</a
                                >
                            </li>
                            {{-- <li>
                                <a href="#"> <span class="lnr lnr-eye"></span>Hide</a>
                            </li> --}}
                            <li>
                                <a
                                href="#"
                                data-toggle="modal"
                                data-target="#myModal2{{ $car->id }}"
                                class="delete"
                                >
                                <span class="lnr lnr-trash"></span>
                                Delete
                                </a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end /.product__thumbnail -->

            <div class="product-desc" style="height: 200px">
                <h4 class="desc-h">Car's number {{ $car->car_number }}</h4>
                <p class="desc-p" style="text-align: center">
                    for <br>
                    <i class="fa-regular fa-hospital " style="color: #0674ec"></i>
                    <b>{{ $car->hospital->name }}</b>
                </p>
            </div>
        </div>
            <!-- end /.single-product -->
    </div>
    <!-- end /.col-md-4 -->
    <div
    class="modal fade rating_modal item_remove_modal"
    id="myModal2{{ $car->id }}"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModal2"
    >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Are you sure to delete The {{ $car->car_number }} Cars?</h3>
                    <p>You will not be able to recover this file!</p>
                    <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- end /.modal-header -->
                <div class="modal-body">
                    <form method="post" action='{{ url("car/$car->id") }}' style="display: inline;">
                        @method('delete')
                        @csrf
                        <button
                        type="submit"
                        class="btn btn--round btn-danger btn-md"
                        >
                        Delete
                        </button>
                    </form>
                    <button class="btn btn--round btn-md modal_close" data-dismiss="modal">
                    Cancel
                    </button>
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- add car --}}



@endsection
