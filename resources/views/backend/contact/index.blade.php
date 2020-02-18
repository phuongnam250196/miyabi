@extends('backend.layout')
@section('title', 'Add contact')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Contact</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">contact</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    @if(session('status') == 'success')
                        <div class="alert alert-success">
                            {{ session('messages') }}
                        </div>
                    @endif
                    <div class="card mb-3">
                        <form method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" type="text" placeholder="Phone" value="{{ !empty($data->phone) ? $data->phone : old('phone') }}" />
                                            @if($errors->has('phone'))
                                                <p class="help text-danger">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" placeholder="Email" value="{{ !empty($data->email) ? $data->email : old('email') }}" />
                                            @if($errors->has('email'))
                                                <p class="help text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <!-- <input class="form-control" name="address" type="text" placeholder="Address" value="{{ !empty($data->address) ? $data->address : old('address') }}" /> -->
                                            <textarea class="form-control" name="address" type="text" placeholder="Address">{{ !empty($data->address) ? $data->address : old('address') }}</textarea>
                                            @if($errors->has('address'))
                                                <p class="help text-danger">{{ $errors->first('address') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                                {{csrf_field()}}
                            </div>
                        </form>
                    </div><!-- end card-->
                </div>

            </div>
        </div>
        <!-- END container-fluid -->
    </div>
    
@endsection
