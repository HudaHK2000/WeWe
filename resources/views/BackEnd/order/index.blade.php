@extends('layout.masterDashboard')

@section('title')
Orders
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('order') }}">Orders</a>
@endsection

@section('title_dashboard')
Order
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
                                            <th>Blood Group</th>
                                            <th>The Condition</th>
                                            <th>Map</th>
                                            <th>Hospital</th>
                                            <th>Status</th>
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
                                            <td>
                                                {{ $order->hospitals->first()->hospital->name }}
                                            </td>
                                            <td>
                                                {{ $order->status }}
                                            </td>
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