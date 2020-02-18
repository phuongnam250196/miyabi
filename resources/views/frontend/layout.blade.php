<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Miyabi</title>
    <meta name="description" content="日本食レストランや日系ホテルが立ち並ぶハノイのリンラン通りにあります。きらびやかな新築物件の店内に入ると日本語が話せる若いベトナム人女性があなたをお出迎えしてくれます！">
    <meta name="keywords" content="Miyabi, ABOUT US/ご紹介, MIYABIのご紹介, PRICE SYSTEM/システム, RESERVATION/テーブル予約, PHOTO LIBRARY/写真, ACCESS MAP/アクセス">
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="@yield('title') - Miyabi" />
    <meta property="og:description" content="日本食レストランや日系ホテルが立ち並ぶハノイのリンラン通りにあります。きらびやかな新築物件の店内に入ると日本語が話せる若いベトナム人女性があなたをお出迎えしてくれます！" />
    <meta property="og:image" content="{{asset('miyabi')}}/images/logo.png" />
    <meta property="og:site_name" content="@yield('sitename')" />
    <meta property="og:url" content="@yield('url')" />
    <link rel="icon" href="{{asset('miyabi')}}/images/logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    
    @include('frontend.core_css')

    @section("page_css") @show

    @if(!empty(showInfoWeb()->gg_id))
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ showInfoWeb()->gg_id }}');</script>
        <!-- End Google Tag Manager -->
    @endif

    @if(!empty(showInfoWeb()->fb_id))
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return; n = f.fbq = function () {
                    n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                n.queue = []; t = b.createElement(e); t.async = !0;
                t.src = v; s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            } (window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ showInfoWeb()->fb_id }}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id={{ showInfoWeb()->fb_id }}&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    @endif
</head>

<body>

    @if(!empty(showInfoWeb()->add_code))
        {!! json_decode(showInfoWeb()->add_code) !!}
    @endif
    
    @include('frontend.header')

    @section("content") @show
    
    @include('frontend.footer')
    
    @include('frontend.core_js')

    @section("page_js") @show

    @if(!empty(showInfoWeb()->gg_id))
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ showInfoWeb()->gg_id }}"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    @endif
    
    <script type="text/javascript">
        $(document).ready(function() {
          var scrollTop = $(".scrollTop");
          $(window).scroll(function() {
            var topPos = $(this).scrollTop();
            if (topPos > 100) {
              $(scrollTop).css("opacity", "1");

            } else {
              $(scrollTop).css("opacity", "0");
            }

          }); // scroll END
          //Click event to scroll to top
          $(scrollTop).click(function() {
            $('html, body').animate({
              scrollTop: 0
            }, 800);
            return false;

          }); // click() scroll top EMD

        }); // ready() END
    </script>
    <style type="text/css">
        .scrollTop {
          position: fixed;
          right: 15px;
          bottom: 15px;
          opacity: 0;
          transition: all 0.4s ease-in-out 0s;
          z-index: 9999;
        }

        .scrollTop:hover {
          cursor: pointer;
        }
    </style>
    <div id="stop" class="scrollTop">
        <span><img src="{{url('/miyabi')}}/images/top.jpg"></span>
    </div>
</body>

</html>