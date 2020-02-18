<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Miyabi Admin</title>
    <meta name="description" content="Trang quảng trị miyabi admin">
    <meta name="author" content="Phương Nam">
    <link rel="shortcut icon" href="{{asset('miyabi')}}/images/logo.png">
    <link href="{{url('/pike')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/pike')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/pike')}}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" />
    <link href="{{url('/pike')}}/assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="{{url('/pike')}}/assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <script src="{{url('/pike')}}/assets/js/modernizr.min.js"></script>
    <script src="{{url('/pike')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('/pike')}}/assets/js/moment.min.js"></script>
    <script src="{{url('/pike')}}/assets/js/popper.min.js"></script>
    <script src="{{url('/pike')}}/assets/js/bootstrap.min.js"></script>
    <style type="text/css">
        .form-control {
            outline: none !important;
            box-shadow: none !important;
            border-radius: 0;
        }
        .headerbar .headerbar-left {
            background: black;
        }
        .navbar-custom {
            background: black;
        }
    </style>
</head>

<body class="adminbody">
    <div id="main">
        <div class="headerbar">
            <div class="headerbar-left">
                <a href="{{url('/admin')}}" class="logo"><img alt="Logo" src="{{asset('miyabi')}}/images/logo.png" /> <span>Admin</span></a>
            </div>
            <nav class="navbar-custom">
                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-fw fa-question-circle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                            <!-- <div class="dropdown-item noti-title">
                                <h5><small>Help and Support</small></h5>
                            </div> -->
                            <!-- <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Do you want custom development to integrate this theme?</b>
                                    <span>Contact Us</span>
                                </p>
                            </a>
                            <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">
                                <p class="notify-details ml-0">
                                    <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                    <span>Try Pike Admin PRO</span>
                                </p>
                            </a> -->
                            <!-- <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                <i class="fa fa-link"></i> Visit Pike Admin Website
                            </a> -->
                        </div>
                    </li>
                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('/pike')}}/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                            </div>
                            <!-- item-->
                            <a href="{{ url('admin/profile') }}" class="dropdown-item notify-item">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>
                            <a href="{{ url('admin/change-password') }}" class="dropdown-item notify-item">
                                <i class="fa fa-cog"></i> <span>Change Pass</span>
                            </a>
                            <!-- item-->
                            <a href="{{ url('admin/logout') }}" class="dropdown-item notify-item">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Navigation -->
        <!-- Left Sidebar -->
        <div class="left main-sidebar">
            <div class="sidebar-inner leftscroll">
                <div id="sidebar-menu">
                    <ul>
                        <li class="submenu">
                            <a class="@if(Request::is('admin')) active @endif" href="{{ url('admin') }}"><i class="fa fa-fw fa-bars"></i><span> Trang chủ </span> </a>
                        </li>
                        <li class="submenu">
                            <a class="@if(Request::is('admin/slider') || Request::is('admin/slider/*')) active @endif" href="{{ url('admin/slider') }}"><i class="fa fa-image bigfonts"></i><span> Quản lý slidershow </span> </a>
                        </li>
                        <li class="submenu">
                            <a class="@if(Request::is('admin/gallery') || Request::is('admin/gallery/*')) active @endif" href="{{ url('admin/gallery') }}"><i class="fa fa-qrcode bigfonts"></i><span> Quản lý gallery </span> </a>
                        </li>
                        <li class="submenu">
                            <a class="@if(Request::is('admin/menu') || Request::is('admin/menu/*')) active @endif" href="{{ url('admin/menu') }}"><i class="fa fa-puzzle-piece bigfonts"></i><span> Quản lý menu </span> </a>
                        </li>
                        <li class="submenu">
                            <a class="@if(Request::is('admin/contact') || Request::is('admin/contact/*')) active @endif" href="{{ url('admin/contact') }}"><i class="fa fa-sign-language bigfonts"></i><span> Thông tin liên hệ</span> </a>
                        </li>
                        <li class="submenu">
                            <a class="@if(Request::is('admin/code') || Request::is('admin/code/*')) active @endif" href="{{ url('admin/code') }}"><i class="fa fa-code bigfonts"></i><span> Tích hợp code</span> </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="content-page">
            <!-- Start content -->

            @yield('main')

            <!-- END content -->
        </div>
        <!-- END content-page -->
        <footer class="footer">
            <span class="text-right">
                Copyright <a target="_blank" href="#">Your Website</a>
            </span>
            <span class="float-right">
                Powered by <b>Miyabi</b></a>
            </span>
        </footer>
    </div>
    <!-- END main -->

    <script src="{{url('/pike')}}/assets/js/detect.js"></script>
    <script src="{{url('/pike')}}/assets/js/fastclick.js"></script>
    <script src="{{url('/pike')}}/assets/js/jquery.blockUI.js"></script>
    <script src="{{url('/pike')}}/assets/js/jquery.nicescroll.js"></script>
    <!-- App js -->
    <script src="{{url('/pike')}}/assets/js/pikeadmin.js"></script>
    <!-- BEGIN Java Script for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <!-- Counter-Up-->
    <script src="{{url('/pike')}}/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{url('/pike')}}/assets/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="{{url('/pike')}}/assets/js/sweetalert.min.js"></script>
    <script src="{{url('/pike')}}/assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>
    <script>
    $(document).ready(function() {
        // data-tables
        $('#example1').DataTable();

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
    </script>
    <script>
        // js chon anh
        function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function changeImg2(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#avatar2').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
            $('#avt').click(function(){
                $('#img').click();
            });
            $('#avatar2').click(function(){
                $('#img2').click();
            });
        });
    </script>
</body>

</html>
