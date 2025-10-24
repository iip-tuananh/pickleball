
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
    <link rel="preload" as='style' type="text/css" href="/site/css/index.scss.css?21758009149569">
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
    <link href="/site/css/index.scss.css?21758009149569" rel="stylesheet" type="text/css" media="all" />



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


    <style>
        /* Container */
        .sudes-header-cart{
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: inherit;
        }

        /* Trigger */
        .sudes-header-cart .frame-fix{
            display:flex; align-items:center; gap:8px; cursor:pointer; position:relative;
        }
        .sudes-header-cart .a-hea{ position:absolute; inset:0; }

        /* Icon + badge */
        .sudes-header-cart .box-icon{ width:28px; height:28px; display:grid; place-items:center; }
        .sudes-header-cart .svg-icon{ width:24px; height:24px; }
        .count_item{
            min-width:18px; height:18px; padding:0 5px; border-radius:9px;
            font-size:12px; line-height:18px; text-align:center; background:#e11; color:#fff;
        }

        /* Dropdown panel */
        .top-cart-content{
            position: absolute; right:0; top:100%;
            margin-top:10px; width:320px; pointer-events:none;
            opacity:0; transform: translateY(-6px);
            transition: opacity .18s ease, transform .18s ease, visibility 0s linear .2s;
            visibility:hidden; z-index:1000;
        }
        .sudes-header-cart:hover .top-cart-content,
        .sudes-header-cart.open .top-cart-content{
            pointer-events:auto; opacity:1; transform: translateY(0);
            visibility:visible; transition: opacity .18s ease, transform .18s ease;
        }

        /* Panel body */
        .cart-panel{
            background:#fff; border:1px solid #e6e8ec; border-radius:10px;
            box-shadow:0 12px 30px rgba(0,0,0,.12); overflow:hidden;
        }
        .cart-title{
            margin:0; padding:10px 12px; font-weight:700; border-bottom:1px solid #eef1f5;
        }

        /* Items */
        .mini-cart-item{
            display:grid; grid-template-columns:60px 1fr auto; gap:10px; align-items:center;
            padding:10px 24px; border-bottom:1px solid #f2f3f6;
        }
        .mini-cart-item:last-child{ border-bottom:none; }
        .mini-cart-item .thumb img{ width:60px; height:60px; object-fit:cover; border-radius:4px; }
        .mini-cart-item .meta{ display:flex; flex-direction:column; gap:6px; }
        .mini-cart-item .name{ color:#111; text-decoration:none; line-height:1.3; }
        .mini-cart-item .name:hover{ text-decoration:underline; }
        .mini-cart-item .price{ color:#c00; font-weight:700; }
        .mini-cart-item .remove{
            background:transparent; border:none; font-size:18px; line-height:1; color:#666; cursor:pointer;
        }
        .mini-cart-item .remove:hover{ color:#000; }

        /* Footer */
        .cart-footer{ padding:12px; border-top:1px solid #eef1f5; }
        .cart-footer .total{
            display:flex; align-items:center; justify-content:space-between; margin-bottom:10px;
        }
        .cart-footer .total span{ color:#333; }
        .cart-footer .total .total-price{ color:#c00; font-size:18px; }
        .cart-footer .btn-checkout{
            display:block; text-align:center; padding:10px 12px; background:#0b5; color:#fff;
            font-weight:700; border-radius:6px; text-decoration:none;
        }
        .cart-footer .btn-checkout:hover{ filter:brightness(0.95); }

        /* Small triangle pointer */
        .top-cart-content::before{
            content:""; position:absolute; right:14px; top:-8px; width:0; height:0;
            border-left:8px solid transparent; border-right:8px solid transparent; border-bottom:8px solid #fff;
            filter: drop-shadow(0 -1px 0 #e6e8ec);
        }

        /* Mobile: click to open */
        @media (hover:none){
            .sudes-header-cart .frame-fix{ cursor:default; }
        }

    </style>

