@extends('backend.layout')
@section('title', 'Menu')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Menu</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Menu</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="pull-right">
                                <button id="modal_add" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_slide"><i class="fa fa-plus" aria-hidden="true"></i> Add Menu image</button>
                            </span>
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_slide" aria-hidden="true" id="modal_add_slide">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form>
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new Menu image</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input id="g_title" class="form-control" name="title" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label style="display: block">Ảnh nhỏ</label>
                                                            <input id="img" type="file" name="link" class="form-control" style="display: none" onchange="changeImg(this)" value="{{old('post_img')}}">
                                                            <img id="avatar" class="thumbnail" src="{{url('/uploads/new_seo-10-512.png')}}" width="150">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p id="btn_add_cate" class="btn btn-primary">Add image</p>
                                                <input type="text" id="g_id" value="" hidden>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h3><i class="fa fa-image"></i> All Menu ({{count($data)}} images)</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td style="width:20px">#</td>
                                        <td style="width:150px">Image</td>
                                        <td>Slide details</td>
                                        <td style="width:100px">Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as  $key=>$dat)
                                            <tr id="cate_tr_{{ $dat->id }}">
                                                <th>{{ $dat->id }}</th>
                                                <td>
                                                    <span style="float: left; margin-right:10px;">
                                                        <img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="{{ url('/'.$dat->link) }}" />
                                                    </span>
                                                </td>
                                                <td>
                                                    <h4>{{ $dat->title }}</h4>
                                                    <p>Link full: <a target="_blank" href="{{ url('/'.$dat->link) }}">{{ url('/'.$dat->link) }}</a></p>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm btn_edit mr-1" data-toggle="modal" data-target="#modal_add_slide" data-id="{{$dat->id}}" data-title="{{$dat->title}}" data-link="{{$dat->link}}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button id="post_del_{{$dat->id}}" data-id="{{$dat->id}}" class="btn btn-danger btn-sm posts_del" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $data->links() }}
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
    <style type="text/css">
        .table a {
            word-break: break-word;
        }
    </style>
    <script>
        $(document).ready(function() {
            var url = "{{url('/')}}";
            function addUpdateCateDB(type) {
               $('#btn_add_cate').click(function(event) {
                    $(this).unbind("click");
                   
                    var formData = new FormData();
                    formData.append('link', $('#img')[0].files[0]);
                    formData.append('type', type);
                    formData.append('id', $('#g_id').val());
                    formData.append('title', $('#g_title').val());
                    $.ajax({
                        type: "POST",
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        url: "{{url('/')}}/admin/menu/upload",
                        data: formData,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(data){
                            console.log(data);
                            if(data.status == 1) {
                                if(data.messages.code=='200') {
                                    
                                    var title = 
                                     '<tr id="cate_tr_'+data.data.id+'">'+
                                        '<th>'+ data.data.id +'</th>'+
                                        '<td>'+
                                            '<span style="float: left; margin-right:10px;">'+
                                                '<img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="'+ url + '/' + data.data.link+'" />'+
                                            '</span>'+
                                        '</td>'+
                                        '<td>'+
                                            '<h4>'+ data.data.title +'</h4>'+
                                            '<p>Link full: <a target="_blank" href="'+  url + '/' + data.data.link +'">'+  url + '/' + data.data.link +'</a></p>'+
                                        '</td>'+
                                        '<td>'+
                                            '<button class="btn btn-primary btn-sm btn_edit mr-1" data-toggle="modal" data-target="#modal_add_slide" data-id="'+ data.data.id +'" data-title="'+ data.data.title +'" data-link="'+ data.data.link +'"><i class="fa fa-pencil" aria-hidden="true"></i></button>'+
                                            '<button id="post_del_'+ data.data.id +'" data-id="'+ data.data.id +'" class="btn btn-danger btn-sm posts_del" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>'+
                                        '</td>'+
                                    '</tr>';
                                    $('tbody').prepend(title);
                                }
                            }
                            if(data.status == 2) {
                                if(data.messages.code=='200') {
                                    var title  =  '<tr id="cate_tr_'+data.data.id+'">'+
                                        '<th>'+ data.data.id +'</th>'+
                                        '<td>'+
                                            '<span style="float: left; margin-right:10px;">'+
                                                '<img alt="image" class="img-fluid" style="max-width:150px; height:auto;" src="'+ url + '/' + data.data.link+'" />'+
                                            '</span>'+
                                        '</td>'+
                                        '<td>'+
                                            '<h4>'+ data.data.title +'</h4>'+
                                            '<p>Link full: <a target="_blank" href="'+  url + '/' + data.data.link +'">'+  url + '/' + data.data.link +'</a></p>'+
                                        '</td>'+
                                        '<td>'+
                                            '<button class="btn btn-primary btn-sm btn_edit mr-1" data-toggle="modal" data-target="#modal_add_slide" data-id="'+ data.data.id +'" data-title="'+ data.data.title +'" data-link="'+ data.data.link +'"><i class="fa fa-pencil" aria-hidden="true"></i></button>'+
                                            '<button id="post_del_'+ data.data.id +'" data-id="'+ data.data.id +'" class="btn btn-danger btn-sm posts_del" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>'+
                                        '</td>'+
                                    '</tr>';
                                    $("#cate_tr_"+data.data.id).replaceWith(title);
                                }
                            }
                            $('.close').trigger('click');
                        },
                        error: function(err) {
                            console.log(err)
                        }
                    });
                    event.preventDefault();
                });
            }
            $('body').on('click', '#modal_add', function() {
                $('#modal_add_slide').find('.modal-title').text('Add image menu');
                $('#modal_add_slide').find('#btn_add_cate').text('Add');
                $('#g_title').val('');
                $('#img').val('');
                $('#avatar').attr('src', "{{url('/uploads/new_seo-10-512.png')}}");
                addUpdateCateDB('add');
            });
            $('body').on('click', '.btn_edit', function() {
                var link = url+'/'+$(this).data('link');
                $('#modal_add_slide').find('.modal-title').text('Update image menu');
                $('#modal_add_slide').find('#btn_add_cate').text('Update');
                $('#g_id').attr('value', $(this).data('id'));
                $('#g_title').val($(this).data('title'));
                $('#img').attr('value', $(this).data('link'));
                $('#avatar').attr('src', link);
                addUpdateCateDB('update');
            });
            $('body').on('click', '.posts_del', function() {
                var id = $(this).data('id');
                // console.log(id);
                swal({
                    title: "Are you sure?",
                    text: "Nếu xóa, Bạn sẽ không thể khôi phục dữ liệu này!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        // console.log(id);
                        $.ajax({
                            type: "POST",
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            url: '{{url("/")}}/admin/menu/del',
                            data: {
                                "id": id
                            },
                            success: function(){
                                $('#cate_tr_'+id).remove();
                                swal("Dữ liệu đã được xóa thành công", {
                                    icon: "success",
                                });
                            }
                        });

                    } else {
                        swal("Bạn đã hủy thao tác xóa");
                    }
                });
            });
        });
    </script>
@endsection
