
    <meta charset="UTF-8"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="#"/>

    <script>(function (html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- This site is optimized with the Yoast SEO plugin v21.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="@yield('title')" />
    <meta name="robots" content="noodp,index,follow" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="@yield('description')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="{{ url()->current() }}" />
    <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="598" />
    <meta property="og:image:height" content="333" />
    <meta property="og:image:alt" content="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <!-- Fav Icon -->
    <link rel="icon" href="{{$config->favicon->path ?? ''}}" type="image/x-icon">
    <!-- / Yoast SEO plugin. -->


    <link rel="preload" as="script" href="/site/js/jquery.js?1758009149569" />
    <script src="/site/js/jquery.js?1758009149569" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/js/swiper.js?1758009149569" />
    <script src="/site/js/swiper.js?1758009149569" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/js/lazy.js?1758009149569" />
    <script src="/site/js/lazy.js?1758009149569" type="text/javascript"></script>
    <link rel="preload" as='style' type="text/css" href="/site/css/fonts.scss.css?1758009149569">
    <link rel="preload" as='style' type="text/css" href="/site/css/main.scss.css?1758009149569">
    <link rel="preload" as='style' type="text/css" href="/site/css/index.scss.css?1758009149569">
    <link rel="preload" as='style' type="text/css" href="/site/css/bootstrap-4-3-min.css?1758009149569">
    <link rel="preload" as='style' type="text/css" href="/site/css/quickviews_popup_cart.scss.css?1758009149569">
    <style>
        :root {
            --mainColor: #002d3a;
            --subColor: #a2ff00;
            --bodyColor: #ffffff;
            --textColor: #333333;
            --hoverColor: #77e322;
            --price: #c30000;
        }
    </style>
    <link href="/site/css/fonts.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/site/css/bootstrap-4-3-min.css?1758009149569">
    <link href="/site/css/main.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/css/index.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />



    <link href="/site/css/breadcrumb_style.scss.css?1758009149569"
          rel="stylesheet" type="text/css" media="all"/>

    <link href="/site/css/quickviews_popup_cart.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />
    <script>
        (function() {
            function asyncLoad() {
                var urls = [];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                false);
        })();
    </script>
    <script>
        $(document).ready(function($) {
            awe_lazyloadImage();
        });

        function awe_lazyloadImage() {
            var ll = new LazyLoad({
                elements_selector: ".lazyload",
                load_delay: 100,
                threshold: 0
            });
        }
        window.awe_lazyloadImage = awe_lazyloadImage;
    </script>

