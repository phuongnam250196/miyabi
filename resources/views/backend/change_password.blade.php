@extends('backend.layout')
@section('title', 'Đổi mật khẩu')
@section('main')
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Change Password</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            @if(session('status') == 'success')
                <div class="alert alert-success">
                    {{ session('messages') }}
                </div>
            @endif
            @if(session('status') == 'fails')
                <div class="alert alert-danger">
                    {{ session('messages') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-cog"></i> Đổi mật khẩu</h3>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Mật khẩu hiện tại</label>
                                                    <input class="form-control" name="password_old" type="password" value="{{ old('password_old') }}" />
                                                    @if($errors->has('password_old'))
                                                        <p class="help text-danger">{{ $errors->first('password_old') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Mật khẩu mới</label>
                                                    <input class="form-control" name="password" type="password" value="{{ old('password') }}" />
                                                    @if($errors->has('password'))
                                                        <p class="help text-danger">{{ $errors->first('password') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Nhập lại mật khẩu mới </label>
                                                    <input class="form-control" name="password_reply" type="password" value="{{ old('password_reply') }}" />
                                                    @if($errors->has('password_reply'))
                                                        <p class="help text-danger">{{ $errors->first('password_reply') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary">Đổi mật khẩuu</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- END container-fluid -->
    </div>
@endsection