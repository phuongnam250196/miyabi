@extends('backend.layout')
@section('title', 'Trang chủ')
@section('main')
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-default">
                        <i class="fa fa-file-text-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Sliders</h6>
                        <h1 class="m-b-20 text-white counter">{{ count($sliders) }}</h1>
                        <span class="text-white">{{ count($sliders) }} New Orders</span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-warning">
                        <i class="fa fa-bar-chart float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Galley</h6>
                        <h1 class="m-b-20 text-white counter">{{ count($galleries) }}</h1>
                        <span class="text-white">{{ count($galleries) }} new</span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-danger">
                        <i class="fa fa-bell-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Menu</h6>
                        <h1 class="m-b-20 text-white counter">{{ count($menues) }}</h1>
                        <span class="text-white">{{ count($menues) }} New</span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-info">
                        <i class="fa fa-user-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Users</h6>
                        <h1 class="m-b-20 text-white counter">1</h1>
                        <span class="text-white">1 New Users</span>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-line-chart"></i> miyabi管理ページへようこそ</h3>
                            
                        </div>
                        <div class="card-body">
                            良い一日を
                        </div>
                        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
                    </div><!-- end card-->
                </div>
            </div>
        </div>
    </div>
@endsection