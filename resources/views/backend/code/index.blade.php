@extends('backend.layout')
@section('title', 'Add code')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Code</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Code</li>
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
                                            <label>Fanpage ID</label>
                                            <input class="form-control" name="fb_id" type="text" placeholder="1233213213" value="{{ !empty($data->fb_id) ? $data->fb_id : old('fb_id') }}" />
                                            @if($errors->has('fb_id'))
                                                <p class="help text-danger">{{ $errors->first('title') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Google ID</label>
                                            <input class="form-control" name="gg_id" type="text" placeholder="GTM-KPX25GD" value="{{ !empty($data->gg_id) ? $data->gg_id : old('gg_id') }}" />
                                            @if($errors->has('gg_id'))
                                                <p class="help text-danger">{{ $errors->first('gg_id') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Code (<small>Nếu đã chèn facebook id, google id thì ko thêm code ở đây</small>)</label>
                                            <textarea rows="10" class="form-control" name="add_code">{!! !empty($data->add_code) ? json_decode($data->add_code) : old('add_code') !!}</textarea>
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
