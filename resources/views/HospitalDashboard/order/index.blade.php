@extends('layout.masterDashboard')

@section('title')
Orders
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('order') }}">Orders</a>
@endsection

@section('title_dashboard')
Hospital Orders
@endsection

@section('class_body')
class="preload home3"
@endsection

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert" style="background-color: white">
    <span class="alert_icon lnr lnr-checkmark-circle"></span>
    <strong>Well done!</strong> {{ session()->get('success') }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="lnr lnr-cross" aria-hidden="true"></span>
    </button>
</div>
@endif
<section class="section--padding2 bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="modules__content">
                        <div class="withdraw_module withdraw_history">
                            <div class="withdraw_table_header">
                                <h3>Orders</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table withdraw__table" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Phone</th>
                                            <th>latitude</th>
                                            <th>longitude</th>
                                            <th>Blood Group</th>
                                            <th>Statuses</th>
                                            <th>Map</th>
                                            <th class="th-action">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($orders as $key => $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            @if ($order->user_id) 
                                                <td>{{ $order->user->phone }}</td>
                                            @elseif ($order->urgent_user_id)
                                                <td>{{ $order->urgentUser->phone }}</td>
                                            @endif
                                            <td>{{ $order->latitude }}</td>
                                            <td>{{ $order->longitude }}</td>
                                            <td>{{ $order->blood_group }}</td>
                                            <td>
                                                <ul style="text-align: start">
                                                    @foreach ($order->ordersStatuses as $orderStatus)
                                                    <li>
                                                        <i class="fas fa-briefcase-medical" style="color: #b2d5fa"></i>
                                                        {{ $orderStatus->status->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="paid">
                                                <span style="color: #0674ec">
                                                    <a href='{{ url("customer-location/$order->id") }}' >
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        Show Map
                                                    </a>
                                                </span>
                                                
                                            </td>
                                            <td class="td-icon">
                                                <a href="#" data-target="#agree{{ $order->id }}" data-toggle="modal" style="margin-right: 5px">
                                                    <i class="fa-solid fa-circle-check ok"></i>
                                                </a>
                                                <a href="#" data-target="#dis-agree{{ $order->id }}" data-toggle="modal">
                                                    <i class="fa-solid fa-trash del"></i>
                                                </a>
                                            </td>
                                            <!-- agree order start -->
                                            <div class="modal fade rating_modal item_remove_modal" id="agree{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal2">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Are you sure you want to agree order number {{ $order->id }}? </h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- end /.modal-header -->
                                            
                                                        <div class="modal-body">
                                                            <form method="post" action='{{ url("order/$order->id/agree") }}' style="display: inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn--round btn-success btn-md">agree</button>
                                                            </form>
                                                            <button class="btn btn--round btn-md modal_close" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <!-- end /.modal-body -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- agree order end -->
                                            <!-- dis agree order start -->
                                            <div class="modal fade rating_modal item_remove_modal" id="dis-agree{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal2">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Are you sure you want to dis agree the order number {{ $order->id }}?</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- end /.modal-header -->

                                                        <div class="modal-body">
                                                            <form method="post" action='{{ url("order/$order->id/dis-agree") }}' style="display: inline;">
                                                                @csrf
                                                                <button type="submit" class="btn btn--round btn-danger btn-md">dis agree</button>
                                                            </form>
                                                            <button class="btn btn--round btn-md modal_close" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <!-- end /.modal-body -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- dis agree order end -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection