<!DOCTYPE html>
<html lang="th">
<!-- class="nav-opened"-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <link rel="icon" href="{{ asset('frontend/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico')}}" type="image/x-icon" />

    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('frontend/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/swiper.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/global.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/lang.css')}}" rel="stylesheet">
    <style>
        .logo-small {
            width: 80%;
            margin-top: 3vh;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        @media screen and (max-width: 600px) {
            .logo-small {
                width: 100%;
            }
        }
    </style>


</head>
<body>
    <div class="preload"></div>
    <div class="cookie-popup">
        <div class="th"><br/> ???????????????????????????????????????????????????????????????????????????????????? <br> ???????????????????????????????????????????????????????????????????????????????????????????????????
            <br> ?????????????????????????????????????????????????????????????????????????????? <br> ???????????????????????????????????????????????????????????????
            <a href="policy.html" style="color:#fff;">??????????????????</a>
        </div>
        <div class="en">
            We use cookies on <br> our website to enhance <br> user experience. For mor <br> information you can read<br> our policy <a href="policy" style="color:#fff;">here</a>
        </div>
        <div class="cookie-popup-actions">
            <a href="pdpa.html" target="_blank">
                <button><span class="en">Policy</span><span class="th">??????????????????</span></button>
            </a>
            <button class="accept-button"><span class="en">Accept Cookies</span><span class="th">??????????????????</span></button>
        </div>

    </div>
    <div class="page p-0">

    @include('frontend.body.home_header')
    @include('frontend.body.home_nav_slide')

    <div id="fullpage" class="fullpage">
    @yield('content')

    @include('frontend.body.footer')
    </div>
    <!--fullpage -->
</div>
<!--page-->

<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/ie11CustomProperties.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>
<script src="{{asset('frontend/js/swiper.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>

<script src="{{asset('frontend/js/skrollr.min.js')}}"></script>
<script>
        $(window).on("load", function() {
            skrollr.init({
                smoothScrolling: true,
                smoothScrollingDuration: 400,
                mobileDeceleration: 0,
                forceHeight: false,
                mobileCheck: function() {
                    return false;
                }
            });
        });

        $(document).ready(function() {
            $("a.scrollLink").click(function(event) {
                event.preventDefault();
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top
                }, 500);
            });
        });




        /* common fuctions */
        function el(selector) {
            return document.querySelector(selector)
        }

        function els(selector) {
            return document.querySelectorAll(selector)
        }

        function on(selector, event, action) {
            els(selector).forEach(e => e.addEventListener(event, action))
        }

        function cookie(name) {
            let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name + '='))
            return c ? c.split('=')[1] : false;
        }


        /* popup button hanler */
        on('.cookie-popup button', 'click', () => {
            el('.cookie-popup').classList.add('cookie-popup--accepted');
            document.cookie = `cookie-accepted=true`
        });

        /* popup init hanler */
        if (cookie('cookie-accepted') !== "true") {
            el('.cookie-popup').classList.add('cookie-popup--not-accepted');
        }



        /* page buttons handlers */

        function _reset() {
            document.cookie = 'cookie-accepted=false';
            document.location.reload();
        }

        function _switchMode(cssClass) {
            el('.cookie-popup').classList.toggle(cssClass);
        }


        
    </script>
           
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
