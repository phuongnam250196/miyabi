<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Miyabi Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Miyabi, Miyabi login" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link rel="stylesheet" href="{{asset('/pike/login')}}/css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('/pike/login')}}/css/font-awesome.css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
        <style type="text/css">
            .help {
                text-align: left;
                padding-left: 15px;
                font-size: 12px;
                color: darkred;
            }
            .alert {
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
                position: relative;
                padding: 5px;
                margin-bottom: 1rem;
                border: 1px solid transparent;
                border-radius: .25rem;
            }
        </style>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="center-container">
            <div class="header-w3l">
                <h1>Miyabi Login Form</h1>
            </div>
            <div class="main-content-agile">
                <div class="sub-main-w3">   
                    <div class="wthree-pro">
                        <h2>Login Quick</h2>
                        <!-- {{ Cookie::get('login_err') }} -->
                    </div>
                    @if(session('error'))
                        <p class="alert p_err">{{ session('error') }}</p>
                    @endif
                    <form action="#" method="post">
                        <div class="pom-agile">
                            <input placeholder="Username" name="username" class="user" type="text">
                            <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            @if($errors->has('username'))
                                <p class="help text-danger">{{ $errors->first('username') }}</p>
                            @endif
                        </div>
                        <div class="pom-agile">
                            <input  placeholder="password" name="password" class="pass" type="password">
                            <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                             @if($errors->has('password'))
                                <p class="help text-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div style="text-align:center;margin-left: 45px; margin-top: 20px;">
                            <div class="g-recaptcha" id="feedback-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY')  }}"></div>
                        </div>
                       <!--  @if($errors->has('g-recaptcha-response'))
                            <p class="help text-danger">{{ $errors->first('g-recaptcha-response') }}</p>
                        @endif -->
                        <div class="sub-w3l">
                            <!-- <h6><a href="#">Forgot Password?</a></h6> -->
                            <div class="right-w3l">
                                <input type="submit" value="Login">
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
                <style type="text/css">
                    .p_err {
                        border-radius: 15px;
                        margin-left: 10px;
                        margin-right: 10px;
                    }
                </style>
            </div>
            <div class="footer">
                <p>&copy; 2019 Miyabi Login Form. All rights reserved | Design by PhuongNam</p>
            </div>
        </div>
    </body>
</html>