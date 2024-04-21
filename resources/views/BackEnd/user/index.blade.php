@extends('layout.masterDashboard')

@section('title')
User
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('user') }}">Users</a>
@endsection

@section('title_dashboard')
User
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
                                <h3>All Users</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table withdraw__table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Is Admin</th>
                                            <th class="th-action">Block</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $key=>$user )
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            @if ( $user->is_admin == '1')
                                                <td class="pending admin-btn" data-route='{{url("user-admin/$user->id")}}'>
                                                    <span>yes</span>
                                                </td>
                                            @else 
                                                <td class="paid admin-btn" data-route='{{url("user-admin/$user->id")}}'>
                                                    <span>no</span>
                                                </td>
                                            @endif
                                            
                                            <td class="td-icon" >
                                                <a href="#" data-target="#delete{{ $user->id }}" data-toggle="modal">
                                                    <i class="fa-solid fa-trash del"></i>
                                                </a>
                                            </td>
                                            <!-- delete massage start -->
                                            <div class="modal fade rating_modal item_remove_modal" id="delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal2">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Are you sure you want to block the user {{ $user->name }}?</h3>
                                                            <p>Blockinging this user will restrict their access to the site.</p>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <!-- end /.modal-header -->
                                            
                                                        <div class="modal-body">
                                                            <form method="post" action='{{ url("user/$user->id/block") }}' style="display: inline;">
                                                                {{-- {{method_field('PATCH')}} --}}
                                                                @csrf
                                                                <button type="submit" class="btn btn--round btn-danger btn-md">Block</button>
                                                            </form>
                                                            <button class="btn btn--round btn-md modal_close" data-dismiss="modal">Cancel</button>
                                                        </div>
                                                        <!-- end /.modal-body -->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- delete massage end -->
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
@section('script')
    <script>
        $('.admin-btn').click(function () {
            var _this = $(this);
            var urluser = _this.data('route');
            $.ajax({
                url: urluser,
                type: "put",
                data: {
                    "_token": "{{csrf_token()}}",
                },
                dataType: "json",
                success: function (response) {
                    if (response == 1) {
                        _this.addClass('pending').removeClass('paid').html('<span>yes</span>');
                    } else {
                        _this.addClass('paid').removeClass('pending').html('<span>no</span>');
                    }
                }
            });
        });
    </script>
    
@endsection