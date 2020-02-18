    <footer>
        <section>
            <div class="box-footer">
                <div class="container">
                    <div class="row box-footer-row">
                        <div class="col-12 box-footer-col">
                            <ul class="nav justify-content-center align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link">Time/営業時間: 19:30〜</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Hotline/電話番号: {{ showInfoWeb()->phone }}（日本人対応）</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Address/住所: {!! showInfoWeb()->address !!} </a>
                                </li>
                            </ul>
                            <div class="text-center box-logo-footer">
                                <a href="#"><img src="{{asset('miyabi')}}/images/logo_footer.png"></a>
                            </div>
                            <div class="text-center box-share">
                                <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/fb.png"></a>
                                <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/cam.png"></a>
                                <a href="https://www.facebook.com/Miyabi-Bar-105775114225548/" target="_blank"><img src="{{asset('miyabi')}}/images/twiter.png"></a>
                            </div>
                            <div class="text-center box-copyright">
                                <p>© 2019 All Rights Reserved. <a href="{{ url('/') }}">MIYABI</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>