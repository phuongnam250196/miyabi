@extends('frontend.layout')
@section('title', 'Menu')
@section('url', url('/menu'))
@section('sitename', $_SERVER['REQUEST_URI'])
@section('content')
    <article>
        <!-- menu page -->
        <section id="menu_page">
            <div class="container">
                <div class="row menu_page_row">
                    <div class="col-12">
                        <div class="menu_page_div">
                            <div class="owl-carousel owl-theme owl-menu-page">
                                @if(!empty($menues))
                                    @foreach($menues as $menu)
                                        <div class="item">
                                            <img src="{{ $menu->link }}">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item">
                                        <img src="{{asset('miyabi')}}/images/menu1.png">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('miyabi')}}/images/menu2.png">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('miyabi')}}/images/menu3.png">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection

@section('page_js')
    <script type="text/javascript">
        $(document).ready(function() {
            
            $('.owl-menu-page').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 3,
                lazyload: true,
                nav: true,
      			navText: ["<img src='{{asset("miyabi")}}/images/prev.png'>","<img src='{{asset("miyabi")}}/images/next.png'>"],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1
                    },
                    300:{
                        items:2,
                    },
                    700:{
                        items:3,
                    }
                }
            });
        });
    </script>
@endsection

@section('page_css')
    <style type="text/css">
    	 body {
            background: transparent url('{{asset("miyabi")}}/images/bg_menu.png') no-repeat;
            height: 100%;
            width: 100%;
            background-position: center;
            background-size: cover;
        }
        .menu_page_div {
            padding-left: 30px;
            padding-right: 28px;
        }
        #menu_page .menu_page_row {
            position: relative;
        }
        #menu_page .menu_page_row::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            background: black;
            width: 100%;
            height: 100%;
            opacity: 0.8;
            z-index: -9999;
        }
        .owl-menu-page .owl-nav {
            display: block !important;
        }
        #menu_page .container .owl-menu-page .owl-nav .owl-prev {
            position: absolute;
            left: -50px;
            top: 40%;
        }
        #menu_page .container .owl-menu-page .owl-nav .owl-prev:focus, 
        #menu_page .container .owl-menu-page .owl-nav .owl-next:focus {
            box-shadow: none;
            outline: none;
        }
        #menu_page .container .owl-menu-page .owl-nav .owl-prev:hover,
        #menu_page .container .owl-menu-page .owl-nav .owl-next:hover {
            opacity: 0.5;
        }
        #menu_page .container .owl-menu-page .owl-nav .owl-next {
            position: absolute;
            right: -50px;
            top: 40%;
        }
	</style>
@endsection