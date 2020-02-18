    <header id="header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-3 header-col">
                    <a class="header-link-img" href="{{ url('/') }}"><img src="{{asset('miyabi')}}/images/logo.png"></a>
                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="header-address">
                            Hotline/電話番号: {{ showInfoWeb()->phone }}（日本人対応） - <br>Address/住所: {{ strip_tags(showInfoWeb()->address) }}
                        </div>
                        <div class="header-share">
                            <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/fb.png"></a>
                            <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/cam.png"></a>
                            <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/twiter.png"></a>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-md navbar-dark">
                        <!-- Brand -->
                        <!--  <a class="navbar-brand" href="#">
					  	<img src="images/logo.png">
					  </a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                @if(Request::is('/'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">ABOUT US <br>ご紹介</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#price-system">PRICE SYSTEM <br>システム</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/menu') }}">MENU <br>メニュー</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservation">RESERVATION <br>テーブル予約</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/gallery') }}">GALLERY <br>写真</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#maps">ACCESS <br>アクセス</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/#about')}}">ABOUT US <br>ご紹介</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/#price-system')}}">PRICE SYSTEM <br>システム</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/menu') }}">MENU <br>メニュー</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/#reservation')}}">RESERVATION <br>テーブル予約</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/#photo-library')}}">GALLERY <br>写真</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/#maps')}}">ACCESS <br>アクセス</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>