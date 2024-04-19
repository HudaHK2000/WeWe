@extends('layout.masterDashboard')

@section('title')
Hospital
@endsection

@section('dashboard_breadcrumb')
{{-- <a href="{{ url('hospital') }}">Hospitals</a> --}}
@endsection

@section('title_dashboard')
Hospital
@endsection

@section('class_body')
class="preload dashboard-edit"
@endsection

@section('content')
{{-- filtter  hospitals --}}
{{-- <div class="row mt-5">
    <div class="col-md-12">
        <div class="dashboard_title_area">
            <div class="dashboard__title">
                <h3>Hospitals Statements</h3>
                <div class="date_area">
                    <form action="#">
                        <div class="input_with_icon">
                            <input type="text" class="dattaPikkara" placeholder="From">
                            <span class="lnr lnr-calendar-full"></span>
                        </div>

                        <div class="input_with_icon">
                            <input type="text" class="dattaPikkara" placeholder="To">
                            <span class="lnr lnr-calendar-full"></span>
                        </div>
                        <div class="select-wrap">
                            <select name="transaction_type" id="#">
                                <option value="all">All Transaction</option>
                                <option value="sale">Sale</option>
                                <option value="sale">Purchase</option>
                                <option value="credited">Withdraw</option>
                            </select>
                            <span class="lnr lnr-chevron-down"></span>
                        </div>

                        <button type="submit" class="btn btn--sm btn--round btn--color1">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end /.col-md-12 -->
</div> --}}
{{-- end fillter hospital  --}}
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
{{--Start show hospitals  --}}
<div class="row">
    {{-- @foreach ($hospitals as $key=>$hospital ) --}}
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
                        <a href="{{ url("hospital/$hospital->id/edit") }}">
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
                        data-target="#myModal2{{ $hospital->id }}"
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

            <div class="product-desc">
                <h4 class="desc-h">{{ $hospital->name }}</h4>
                <p class="desc-p">
                </p>
                <div class="address-hospital"> 
                    <i class="fas fa-map-marked-alt" style="color: #0674ec"></i>
                    <span class="a">{{ $hospital->city->country->name }} - {{ $hospital->city->name }} , {{ $hospital->address }}</span>
                </div>

            </div>
            <!-- end /.product-desc -->
            <div class="product-purchase">
                <div class="price_love">
                    <span>
                        <a href='{{ url("hospital/showLocation/$hospital->id") }}'>Show GPS</a>
                    </span>
                </div>
            </div>
                <!-- end /.product-purchase -->

        </div>
            <!-- end /.single-product -->
    </div>
    <!-- end /.col-md-4 -->
    <div
    class="modal fade rating_modal item_remove_modal"
    id="myModal2{{ $hospital->id }}"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myModal2"
    >
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Are you sure to delete The {{ $hospital->name }}?</h3>
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
                    <form method="post" action='{{ url("hospital/$hospital->id") }}' style="display: inline;">
                        @method('delete')
                        @csrf
                        <button
                        type="submit"
                        {{-- btn btn--icon btn-md btn--round btn-success --}}
                        class="btn btn--round btn-danger btn-md"
                        >
                        Delete
                        </button>
                    </form>
                    <button class="btn btn--round btn--default modal_close" data-dismiss="modal">
                    Cancel
                    </button>
                </div>
                <!-- end /.modal-body -->
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</div>



{{--End show hospitals  --}}
@endsection