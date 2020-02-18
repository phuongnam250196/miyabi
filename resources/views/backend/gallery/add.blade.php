@extends('backend.layout')
@section('title', 'Add Gallery')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Thêm mới ảnh gallery</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Thêm mới ảnh gallery</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    @if(session('messages'))
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Important!</h4>
                            <p>{{session('messages')}}</p>
                        </div>
                    @endif
                    <div class="card mb-3">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <!-- <div class="modal-header">
                                <h5 class="modal-title">Add new slider image</h5>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            </div> -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" type="text" placeholder="Title image" value="{{ old('title') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label style="display: block">Image</label>
                                            <input id="img" type="file" name="link" class="form-control" style="display: none" onchange="changeImg(this)" value="{{old('link')}}">
                                            <img id="avatar" class="thumbnail" src="{{url('/uploads/new_seo-10-512.png')}}" width="250">
                                           @if($errors->has('link'))
                                              <p class="help text-danger">{{ $errors->first('link') }}</p>                                            
                                              @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label style="display: block;">Image room</label>
                                            <input id="img2" type="file" name="link_room" class="form-control" style="display: none" onchange="changeImg2(this)" value="{{old('link_room')}}">
                                            <img id="avatar2" class="thumbnail" src="{{url('/uploads/new_seo-10-512.png')}}" width="150">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary">Add image</button>
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
