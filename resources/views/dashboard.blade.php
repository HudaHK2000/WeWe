@extends('layout.masterDashboard')
@section('title')
Dashboard
@endsection

@section('class_body')
class="preload home3"
@endsection

@section('dashboard_breadcrumb')
<a href="{{ url('dashboard') }}">Dashboard</a>
@endsection

@section('css')
<style>
    .back {
        background-color: #eff1f5;
        padding-top: 50px;
        padding-bottom: 15px;
    }
</style>
@endsection

@section('content')
<!--================================START COLOR DIV=================================-->

<div class="back">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12"></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-3">
                      <div class="statement_info_card">
                        <div class="info_wrap">
                            <span class="fa-regular fa-hospital  icon mcolorbg1"></span>
                            <div class="info">
                                <p>7</p>
                                <span>Hospitals</span>
                          </div>
                        </div>
                        <!-- end /.info_wrap -->
                      </div>
                      <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
          
                    <div class="col-lg-3 col-md-3">
                      <div class="statement_info_card">
                        <div class="info_wrap">
                            <span class="fa-solid fa-truck-medical icon mcolorbg2"></span>
                            <div class="info">
                                <p>10</p>
                                <span>cars</span>
                            </div>
                        </div>
                        <!-- end /.info_wrap -->
                      </div>
                      <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
          
                    <div class="col-lg-3 col-md-3">
                      <div class="statement_info_card">
                        <div class="info_wrap">
                          <span class="fas fa-briefcase-medical icon mcolorbg3"></span>
                          <div class="info">
                            <p>10</p>
                            <span>Orders</span>
                          </div>
                        </div>
                        <!-- end /.info_wrap -->
                      </div>
                      <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
          
                    <div class="col-lg-3 col-md-3">
                      <div class="statement_info_card">
                        <div class="info_wrap">
                          <span class="fa-solid fa-user icon mcolorbg4"></span>
                          <div class="info">
                            <p>20</p>
                            <span>Users</span>
                          </div>
                        </div>
                        <!-- end /.info_wrap -->
                      </div>
                      <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
                  </div>
                </div>
</div>
<!--================================END COLOR DIV=================================-->
@endsection