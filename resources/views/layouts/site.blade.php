<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="أولُ مبادرةٍ عربيةٍ لتبسيطِ العلوم الجيولوجيَّة
هدفنا هو إثراء المحتوى العربي العلمي في تخصص علوم الأرض والجيولوجيا، ومن هذا المنطلق أطلقنا عنان المبادرة لتكون رائدة في تبسيط علوم الأرض والجيولوجيا لغير المتخصصين. لنتمكن من تحقيق رغبة التعلُّم الكامنة في الإنسان فطرياً، وإشباع الفراغ المعرفي لديه، قادرين بذلك على بلوغ آفاق سامية، ولتلينَ لنا الصخور عِشقاً">
    <meta name="keywords" content="geophilia">
    <!-- ========== Page Title ========== -->
    <title>Geophilia</title>

    <!-- ========== Favicon Icon ========== -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/dashboard/images/logo/geologo.jpg') }}">

    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon-set.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet"> --}}


    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap" rel="stylesheet"> --}}

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;600&display=swap"
        rel="stylesheet"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body id="bg">

    @include('frontend.inc.header')


    @yield('content')


    @include('frontend.inc.footer')
    {{-- <style>
        .block_whatsapp {
            position: fixed;
            right: 2.5em;
            z-index: 99999999;
            bottom: 10px;
        }

        </p><p>.btn_whatsapp {
            background: 0 0;
            box-shadow: 0 0 0;
            border: 0;
            position: relative;
        }

        </p><p>.btn_whatsapp img {
            width: 50px;
            margin: 5px 10px;
        }

    </style>
    <div class="block_whatsapp hidden-xs">
        <a href="http://wa.me/+201014575188" target="_blank" class="btn_whatsapp" data-toggle="popover" title=""><br>
            <img class="lazy loaded" data-src="https://www.trips-4u.net/uploads/StaticWords/1554309146whatsapp.png"
                src="{{ asset('assets/frontend/images/whatsapp.png') }}" width="60px" height="60px"
                data-was-processed="true"><br>
        </a>
    </div> --}}


    {{-- <!-- Messenger المكون الإضافي "دردشة" Code -->
    <div id="fb-root"></div>

    <!-- Your المكون الإضافي "دردشة" code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "192003441191167");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> --}}





    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>



    <!-- GetButton.io widget -->
    {{-- <script type="text/javascript">
        (function() {
            var options = {
                facebook: "192003441191167", // Facebook page ID
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script> --}}
    <!-- /GetButton.io widget -->
</body>

</html>
