<!DOCTYPE html>
<html lang="vi">

<head>
    @include('site.partials.head')
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
</head>

<body>
    <div class="opacity_menu"></div>
    <header class="header">
        <div class="topbar">
            <div class="container">
                <div class="header-promo">
                    <ul class="ul-default promo-list js-promo">
                        <li class="promo-item  see-block">
                            <a class="duration-300 line-clamp-2-new" href="#"
                                title="[05.09 - 01.10] Càng mua càng giảm, mua 2 giảm 6%, mua 3 giảm 10%">[05.09 -
                                01.10] Càng mua càng giảm, mua 2 giảm <span>6%</span>, mua 3 giảm <span>10%</span></a>
                        </li>
                        <li class="promo-item  see-none">
                            <a class="duration-300 line-clamp-2-new" href="#"
                                title="Khuyến mãi 11/11 Single Day 2023 KHÔNG THỂ BỎ LỠ!!!!">Khuyến mãi <span>11/11
                                    Single Day 2023</span> KHÔNG THỂ BỎ LỠ!!!!</a>
                        </li>
                        <li class="promo-item  see-none">
                            <a class="duration-300 line-clamp-2-new" href="#"
                                title="Ưu đãi độc quyền. Giảm 30 - 50% cho những ai có ngày sinh trùng với Black Friday.">Ưu
                                đãi độc quyền. <span>Giảm 30 - 50%</span> cho những ai có ngày sinh trùng với Black
                                Friday.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="box-hearder">
                    <div class="row align-items-center">
                        <div class="header-logo">
                            <div class="menu-icon" aria-label="Menu" id="btn-menu-mobile" title="Menu">
                                <div class="icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <span class="title">Menu</span>
                            </div>
                            <a href="/" class="logo-wrapper" title="Sudes Sport">
                                <img width="250" height="43"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                    data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/logo.png?1758009149569"
                                    alt="Sudes Sport" class="lazyload">
                            </a>
                        </div>
                        <div class="header-mid">
                            <div class="list-top-item header_tim_kiem">
                                <form action="/search" method="get"
                                    class="header-search-form input-group search-bar" role="search">
                                    <input name="query" required
                                        class="input-group-field auto-search search-auto form-control"
                                        placeholder="Tìm sản phẩm..." autocomplete="off" type="text">
                                    <input type="hidden" name="type" value="product">
                                    <button type="submit" class="btn icon-fallback-text duration-300"
                                        aria-label="Tìm kiếm" title="Tìm kiếm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                    <div class="search-suggest">
                                        <div class="search-recent d-none">
                                            <div class="search-title">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    <path
                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                                </svg>
                                                Tìm kiếm gần đây
                                            </div>
                                            <div class="search-list">
                                            </div>
                                        </div>
                                        <div class="item-suggest">
                                            <div class="search-title">
                                                <svg height="20" viewBox="0 0 512 512" width="20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g data-name="Layer 2">
                                                        <g id="trend_up">
                                                            <path id="background"
                                                                d="m256 31a225.07 225.07 0 0 1 87.57 432.33 225.07 225.07 0 0 1 -175.14-414.66 223.45 223.45 0 0 1 87.57-17.67m0-31c-141.38 0-256 114.62-256 256s114.62 256 256 256 256-114.62 256-256-114.62-256-256-256z" />
                                                            <path
                                                                d="m133.35 334.73a18.11 18.11 0 0 1 -8-1.9c-6.59-3.23-10.36-10.21-9.17-17a22.45 22.45 0 0 1 5.4-11.46c27.31-27.74 54.67-55 75.46-75.63a18 18 0 0 1 12.75-5.63c4.83 0 9.49 2.1 13.47 6.08l47 47 64-64h-6.46c-8.21 0-19.46-.1-25.91-.16-10.16-.08-17.28-7.16-17.33-17.22a17.52 17.52 0 0 1 4.84-12.53 17.19 17.19 0 0 1 12.31-4.88c13-.05 26-.07 38.52-.07 13.05 0 26.06 0 38.67.07 9.73 0 16.84 7 16.9 16.56.18 26.67.17 53 0 78.22-.06 9.58-7.33 16.54-17.28 16.54h-.2c-9.88-.09-16.89-7.06-17.05-16.94-.12-7.75-.1-15.63-.07-23.24q0-5 0-10v-2c-.25.22-.48.44-.7.66q-32.46 32.6-64.89 65.22l-9 9c-5.4 5.43-10.45 8.07-15.44 8.07s-9.9-2.58-15.16-7.88l-46.26-46.25-3.75 3.81c-4 4-7.82 7.76-11.52 11.48l-17.38 17.49c-10 10.08-20.34 20.51-30.55 30.73a18.58 18.58 0 0 1 -13.2 5.86z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                Đề xuất phổ biến
                                            </div>
                                            <div class="search-list">
                                                <a href="/search?q=Giày%20chạy" class="search-item"
                                                    title="Tìm kiếm Giày chạy">
                                                    Giày chạy
                                                </a>
                                                <a href="/search?q=Áo%20chạy%20bộ" class="search-item"
                                                    title="Tìm kiếm Áo chạy bộ">
                                                    Áo chạy bộ
                                                </a>
                                                <a href="/search?q=Áo%20chống%20nắng" class="search-item"
                                                    title="Tìm kiếm Áo chống nắng">
                                                    Áo chống nắng
                                                </a>
                                                <a href="/search?q=Tất/vớ" class="search-item"
                                                    title="Tìm kiếm Tất/vớ">
                                                    Tất/vớ
                                                </a>
                                                <a href="/search?q=Nón%20leo%20núi" class="search-item"
                                                    title="Tìm kiếm Nón leo núi">
                                                    Nón leo núi
                                                </a>
                                                <a href="/search?q=Bóng%20rổ" class="search-item"
                                                    title="Tìm kiếm Bóng rổ">
                                                    Bóng rổ
                                                </a>
                                            </div>
                                        </div>
                                        <div class="list-search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="sudes-header-hotline">
                                <div class="frame-fix">
                                    <a title="Điện thoại: 1900 6750" href="tel:19006750"></a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path
                                            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                    </svg>
                                    <div class="text-box">
                                        <span class="acc-text-small">Hotline hỗ trợ:</span>
                                        <span class="acc-text">1900 6750</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sudes-header-stores hidden-xs">
                                <div class="frame-fix">
                                    <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng"></a>
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 22.52L26 21.174V2H2V25.79L9.095 24.425C9.03237 24.2921 8.99993 24.1469 9 24V16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15H18C18.2652 15 18.5196 15.1054 18.7071 15.2929C18.8946 15.4804 19 15.7348 19 16V22.52ZM17 22.905V17H11V24C11 24.02 11 24.04 10.998 24.059L17 22.905ZM1 0H27C27.2652 0 27.5196 0.105357 27.7071 0.292893C27.8946 0.48043 28 0.734784 28 1V22C28 22.2324 27.919 22.4576 27.771 22.6368C27.623 22.816 27.4172 22.9381 27.189 22.982L1.189 27.982C1.04431 28.0098 0.89526 28.0054 0.752502 27.9689C0.609744 27.9324 0.476808 27.8649 0.363202 27.7711C0.249597 27.6772 0.158129 27.5595 0.0953412 27.4262C0.0325533 27.2929 -3.37575e-06 27.1473 2.62534e-10 27V1C2.62534e-10 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM6 7.998V4H22V7.998H6Z"
                                            fill="black" />
                                    </svg>
                                    <div class="text-box">
                                        <span class="acc-text-small">Hệ thống cửa hàng</span>
                                        <span class="acc-text">7 cửa hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sudes-header-account header-action_account">
                                <div class="frame-fix">
                                    <a href="javascript:;" class="header-account" aria-label="Tài khoản"
                                        title="Tài khoản"></a>
                                    <svg aria-hidden="true" class="svg-icon tool-icon" viewBox="0 0 32 32">
                                        <path
                                            d="M7.164 29.986a1 1 0 01-1.148-1.165l2-11A1 1 0 019 17h14a1 1 0 01.97.757l2 8a1 1 0 01-.806 1.23l-18 3zm1.074-2.206l15.53-2.588L22.218 19H9.835l-1.597 8.78zM16 15c-3.314 0-6-2.91-6-6.5S12.686 2 16 2s6 2.91 6 6.5-2.686 6.5-6 6.5zm0-2c2.172 0 4-1.98 4-4.5S18.172 4 16 4c-2.172 0-4 1.98-4 4.5s1.828 4.5 4 4.5z">
                                        </path>
                                    </svg>
                                    <div class="text-box">
                                        <span class="acc-text-small hidden-xs">Thông tin</span>
                                        <span class="acc-text">
                                            Tài khoản
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-down-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <ul>
                                    <li class="li-account">
                                        <a rel="nofollow" href="/account/login" title="Đăng nhập">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box-arrow-in-right"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                                <path fill-rule="evenodd"
                                                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg>
                                            Đăng nhập
                                        </a>
                                    </li>
                                    <li class="li-account">
                                        <a rel="nofollow" href="/account/register" title="Đăng ký">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                                                <path
                                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                                <path fill-rule="evenodd"
                                                    d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                            </svg>
                                            Đăng ký
                                        </a>
                                    </li>
                                    <li class="li-account">
                                        <a rel="nofollow" href="/danh-sach-yeu-thich" title="Danh sách yêu thích">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                            </svg>
                                            Danh sách yêu thích (<span class="js-wishlist-count">0</span>)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sudes-header-cart header-action_cart">
                                <div class="frame-fix">
                                    <a class="a-hea" href="/cart" aria-label="Giỏ hàng" title="Giỏ hàng"></a>
                                    <span class="box-icon">
                                        <svg aria-hidden="true" class="svg-icon " viewBox="0 0 32 32">
                                            <path
                                                d="M7.873 6.008A1.01 1.01 0 018 6h21a1 1 0 011 1v11a1 1 0 01-.836.986l-18 3a1 1 0 01-1.128-.72L5.318 4.281l-2.002.668a1 1 0 01-.632-1.898l3-1a1 1 0 011.28.681l.91 3.276zM8.427 8l3.296 11.864L28 17.153V8H8.427zM16 29a3 3 0 110-6 3 3 0 010 6zm9 0a3 3 0 110-6 3 3 0 010 6zm0-2a1 1 0 100-2 1 1 0 000 2zm-9 0a1 1 0 100-2 1 1 0 000 2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="count_item count_item_pr"></span>
                                    <span class="item-title hidden-xs">Giỏ hàng</span>
                                </div>
                                <div class="top-cart-content">
                                    <div class="CartHeaderContainer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="navigation-horizontal">
                <div class="title">
                    Danh mục
                    <div class="close-menu" title="Đóng">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-menu" data-section="header_nav">
                    <script type="text/x-custom-template" data-template="header_nav">
                     <ul id="nav-col" class="nav-col">




                     	<li class="nav-item has-childs  ">
                     		<a href="/mon-the-thao" class="nav-link" title="Môn Thể Thao">

                     			<div class="group-category-image">
                     				<img class="img-fluid lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/sports.png?v=1693640338110" alt="Môn Thể Thao" />
                     			</div>

                     			Môn Thể Thao
                     			<i class="open_mnu down_icon"></i>
                     		</a>

                     		<ul class="dropdown-menu">


                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/the-thao-duoi-nuoc" title="Thể Thao Dưới Nước">
                     					Thể Thao Dưới Nước
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/boi-loi" title="Bơi Lội">Bơi Lội</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/luot-song-luot-van-nam" title="Lướt Sóng & Lướt Ván Nằm">Lướt Sóng & Lướt Ván Nằm</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/lan-ong-tho-lan-tu-do" title="Lặn Ống Thở & Lặn Tự Do">Lặn Ống Thở & Lặn Tự Do</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/kayak-sup" title="Kayak & SUP">Kayak & SUP</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/cheo-thuyen" title="Chèo Thuyền">Chèo Thuyền</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/lan-binh-duong-khi" title="Lặn Bình Dưỡng Khí">Lặn Bình Dưỡng Khí</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/the-thao-duoi-nuoc" title="Xem tất cả Thể Thao Dưới Nước">
                     							Xem tất cả <b>Thể Thao Dưới Nước »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/the-thao-ngoai-troi" title="Thể Thao Ngoài Trời">
                     					Thể Thao Ngoài Trời
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/cam-trai" title="Cắm Trại">Cắm Trại</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/hiking-trekking" title="Hiking & Trekking">Hiking & Trekking</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/leo-nui-nhan-tao" title="Leo Núi Nhân Tạo">Leo Núi Nhân Tạo</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-sat-thien-nhien" title="Quan Sát Thiên Nhiên">Quan Sát Thiên Nhiên</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tha-dieu" title="Thả Diều">Thả Diều</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/cau-ca" title="Câu Cá">Câu Cá</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/the-thao-ngoai-troi" title="Xem tất cả Thể Thao Ngoài Trời">
                     							Xem tất cả <b>Thể Thao Ngoài Trời »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/chay-bo-di-bo" title="Chạy Bộ & Đi Bộ">
                     					Chạy Bộ & Đi Bộ
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/chay-bo" title="Chạy Bộ">Chạy Bộ</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/chay-dia-hinh" title="Chạy Địa Hình">Chạy Địa Hình</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/di-bo" title="Đi Bộ">Đi Bộ</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/triathlon" title="Triathlon">Triathlon</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/chay-bo-di-bo" title="Xem tất cả Chạy Bộ & Đi Bộ">
                     							Xem tất cả <b>Chạy Bộ & Đi Bộ »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/cac-mon-fitness" title="Các Môn Fitness">
                     					Các Môn Fitness
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tap-gym-workout" title="Tập Gym/Workout">Tập Gym/Workout</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tap-the-hinh-cross-training" title="Tập Thể Hình & Cross Training">Tập Thể Hình & Cross Training</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/yoga-pilates" title="Yoga & Pilates">Yoga & Pilates</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/boxing-vo-thuat" title="Boxing & Võ Thuật">Boxing & Võ Thuật</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/the-duc-tre-em" title="Thể Dục Trẻ Em">Thể Dục Trẻ Em</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ba-le-nhay" title="Ba-lê & Nhảy">Ba-lê & Nhảy</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/cac-mon-fitness" title="Xem tất cả Các Môn Fitness">
                     							Xem tất cả <b>Các Môn Fitness »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/dap-xe-truot-van" title="Đạp Xe & Trượt Ván">
                     					Đạp Xe & Trượt Ván
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dap-xe" title="Đạp Xe">Đạp Xe</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/patin-scooter-truot-van" title="Patin - Scooter - Trượt Ván">Patin - Scooter - Trượt Ván</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/dap-xe-truot-van" title="Xem tất cả Đạp Xe & Trượt Ván">
                     							Xem tất cả <b>Đạp Xe & Trượt Ván »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/the-thao-muc-tieu" title="Thể Thao Mục Tiêu">
                     					Thể Thao Mục Tiêu
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/golf" title="Golf">Golf</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ban-cung-giai-tri" title="Bắn Cung Giải Trí">Bắn Cung Giải Trí</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/nem-phi-tieu" title="Ném Phi Tiêu">Ném Phi Tiêu</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dia-nem-boomerang" title="Đĩa Ném & Boomerang">Đĩa Ném & Boomerang</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bi-sat" title="Bi Sắt">Bi Sắt</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/the-thao-muc-tieu" title="Xem tất cả Thể Thao Mục Tiêu">
                     							Xem tất cả <b>Thể Thao Mục Tiêu »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/the-thao-dong-doi" title="Thể Thao Đồng Đội">
                     					Thể Thao Đồng Đội
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-da-futsal" title="Bóng Đá & Futsal">Bóng Đá & Futsal</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-ro" title="Bóng Rổ">Bóng Rổ</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-chuyen" title="Bóng chuyền">Bóng chuyền</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-bau-duc" title="Bóng Bầu Dục">Bóng Bầu Dục</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-chay" title="Bóng Chày">Bóng Chày</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-nem" title="Bóng Ném">Bóng Ném</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/the-thao-dong-doi" title="Xem tất cả Thể Thao Đồng Đội">
                     							Xem tất cả <b>Thể Thao Đồng Đội »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/cac-mon-dung-vot" title="Các Môn Dùng Vợt">
                     					Các Môn Dùng Vợt
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/cau-long" title="Cầu Lông">Cầu Lông</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tennis" title="Tennis">Tennis</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bong-ban" title="Bóng Bàn">Bóng Bàn</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tennis-bai-bien" title="Tennis Bãi Biển">Tennis Bãi Biển</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/cac-mon-dung-vot" title="Xem tất cả Các Môn Dùng Vợt">
                     							Xem tất cả <b>Các Môn Dùng Vợt »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/san-pham-ho-tro" title="Sản Phẩm Hỗ Trợ">
                     					Sản Phẩm Hỗ Trợ
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/san-pham-thuc-uong-dinh-duong" title="Sản Phẩm & Thức Uống Dinh Dưỡng">Sản Phẩm & Thức Uống Dinh Dưỡng</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/massage-the-thao-foam-roller" title="Massage Thể Thao & Foam Roller">Massage Thể Thao & Foam Roller</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bang-ho-tro-the-thao" title="Băng hỗ trợ thể thao">Băng hỗ trợ thể thao</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/san-pham-ho-tro" title="Xem tất cả Sản Phẩm Hỗ Trợ">
                     							Xem tất cả <b>Sản Phẩm Hỗ Trợ »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>


                     			<li class="nav-item-lv2 link-parent">
                     				<a href="/mon-the-thao" title="Xem tất cả Môn Thể Thao">
                     					Xem tất cả <b>Môn Thể Thao »</b>
                     				</a>
                     			</li>
                     		</ul>
                     	</li>




                     	<li class="nav-item has-childs  ">
                     		<a href="/nam" class="nav-link" title="Nam">

                     			<div class="group-category-image">
                     				<img class="img-fluid lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/soccer-player.png?v=1693643500123" alt="Nam" />
                     			</div>

                     			Nam
                     			<i class="open_mnu down_icon"></i>
                     		</a>

                     		<ul class="dropdown-menu">


                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/giay-dep-nam" title="Giày Dép">
                     					Giày Dép
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/giay-the-thao-nam" title="Giày Thể Thao Nam">Giày Thể Thao Nam</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/xang-dan-dep-nam" title="Xăng-đan & Dép">Xăng-đan & Dép</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tat-nam" title="Tất">Tất</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/giay-dep-nam" title="Xem tất cả Giày Dép">
                     							Xem tất cả <b>Giày Dép »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/ao-nam" title="Áo">
                     					Áo
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-thun-ao-khong-tay-nam" title="Áo Thun & Áo Không Tay">Áo Thun & Áo Không Tay</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-polo-nam" title="Áo Polo">Áo Polo</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-khoac-nam" title="Áo Khoác">Áo Khoác</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-ni-hoodie-nam" title="Áo Nỉ & Hoodie">Áo Nỉ & Hoodie</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-mac-trong-nam" title="Áo Mặc Trong">Áo Mặc Trong</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/ao-nam" title="Xem tất cả Áo">
                     							Xem tất cả <b>Áo »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/quan-nam" title="Quần">
                     					Quần
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-short-nam" title="Quần Short">Quần Short</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-dai-nam" title="Quần Dài">Quần Dài</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-bo-nam" title="Quần Bó">Quần Bó</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-lot-nam" title="Quần Lót">Quần Lót</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/quan-nam" title="Xem tất cả Quần">
                     							Xem tất cả <b>Quần »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/do-boi-nam" title="Đồ Bơi">
                     					Đồ Bơi
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-boi-nam" title="Quần Bơi">Quần Bơi</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-boi-chong-nang-nam" title="Áo Bơi Chống Nắng">Áo Bơi Chống Nắng</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-di-bien-nam" title="Quần Đi Biển">Quần Đi Biển</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/wetsuit-nam" title="Wetsuit">Wetsuit</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/do-boi-nam" title="Xem tất cả Đồ Bơi">
                     							Xem tất cả <b>Đồ Bơi »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>


                     			<li class="nav-item-lv2 link-parent">
                     				<a href="/nam" title="Xem tất cả Nam">
                     					Xem tất cả <b>Nam »</b>
                     				</a>
                     			</li>
                     		</ul>
                     	</li>




                     	<li class="nav-item has-childs  ">
                     		<a href="/nu" class="nav-link" title="Nữ">

                     			<div class="group-category-image">
                     				<img class="img-fluid lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/playing.png?v=1693643512323" alt="Nữ" />
                     			</div>

                     			Nữ
                     			<i class="open_mnu down_icon"></i>
                     		</a>

                     		<ul class="dropdown-menu">


                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/giay-dep-nu" title="Giày Dép">
                     					Giày Dép
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/giay-the-thao-nu" title="Giày Thể Thao">Giày Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/xang-dan-dep-nu" title="Xăng-đan & Dép">Xăng-đan & Dép</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tat-nu" title="Tất">Tất</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/giay-dep-nu" title="Xem tất cả Giày Dép">
                     							Xem tất cả <b>Giày Dép »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/ao-nu" title="Áo">
                     					Áo
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-thun-ao-khong-tay-nu" title="Áo Thun & Áo Không Tay">Áo Thun & Áo Không Tay</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-polo-nu" title="Áo Polo">Áo Polo</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-khoac-nu" title="Áo Khoác">Áo Khoác</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-ni-hoodie-nu" title="Áo Nỉ & Hoodie">Áo Nỉ & Hoodie</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/ao-nu" title="Xem tất cả Áo">
                     							Xem tất cả <b>Áo »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/quan-nu" title="Quần">
                     					Quần
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-short-vay-nu" title="Quần Short & Váy">Quần Short & Váy</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-bo-legging-nu" title="Quần Bó & Legging">Quần Bó & Legging</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-dai-nu" title="Quần Dài">Quần Dài</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/quan-nu" title="Xem tất cả Quần">
                     							Xem tất cả <b>Quần »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/do-lot-nu" title="Đồ Lót">
                     					Đồ Lót
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-bra-quan-lot-the-thao" title="Áo Bra & Quần Lót Thể Thao">Áo Bra & Quần Lót Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/do-lot-nu" title="Xem tất cả Đồ Lót">
                     							Xem tất cả <b>Đồ Lót »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/do-boi-nu" title="Đồ Bơi">
                     					Đồ Bơi
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/do-boi-lien-manh" title="Đồ Bơi Liền Mảnh">Đồ Bơi Liền Mảnh</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bikini" title="Bikini">Bikini</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-boi-chong-nang-nu" title="Áo Bơi Chống Nắng">Áo Bơi Chống Nắng</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-di-bien-nu" title="Quần Đi Biển">Quần Đi Biển</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/wetsuit-nu" title="Wetsuit">Wetsuit</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/do-boi-nu" title="Xem tất cả Đồ Bơi">
                     							Xem tất cả <b>Đồ Bơi »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>


                     			<li class="nav-item-lv2 link-parent">
                     				<a href="/nu" title="Xem tất cả Nữ">
                     					Xem tất cả <b>Nữ »</b>
                     				</a>
                     			</li>
                     		</ul>
                     	</li>




                     	<li class="nav-item has-childs  ">
                     		<a href="/tre-em" class="nav-link" title="Trẻ Em">

                     			<div class="group-category-image">
                     				<img class="img-fluid lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/games.png?v=1693643587037" alt="Trẻ Em" />
                     			</div>

                     			Trẻ Em
                     			<i class="open_mnu down_icon"></i>
                     		</a>

                     		<ul class="dropdown-menu">


                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/giay-dep-tre-em" title="Giày Dép">
                     					Giày Dép
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/giay-the-thao-tre-em" title="Giày Thể Thao">Giày Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/xang-dan-dep-tre-em" title="Xăng-đan & Dép">Xăng-đan & Dép</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tat-tre-em" title="Tất">Tất</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/giay-dep-tre-em" title="Xem tất cả Giày Dép">
                     							Xem tất cả <b>Giày Dép »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/ao-tre-em" title="Áo">
                     					Áo
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-thun-ao-khong-tay-tre-em" title="Áo Thun & Áo Không Tay">Áo Thun & Áo Không Tay</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-khoac-tre-em" title="Áo Khoác">Áo Khoác</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-ni-hoodie-tre-em" title="Áo Nỉ & Hoodie">Áo Nỉ & Hoodie</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/ao-bra-the-thao-tre-em" title="Áo Bra Thể Thao">Áo Bra Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/ao-tre-em" title="Xem tất cả Áo">
                     							Xem tất cả <b>Áo »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/quan-tre-em" title="Quần">
                     					Quần
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-short-vay-tre-em" title="Quần Short & Váy">Quần Short & Váy</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-dai-tre-em" title="Quần Dài">Quần Dài</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-bo-leggings-tre-em" title="Quần Bó & Leggings">Quần Bó & Leggings</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-lot-tre-em" title="Quần Lót">Quần Lót</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/quan-tre-em" title="Xem tất cả Quần">
                     							Xem tất cả <b>Quần »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/do-boi-tre-em" title="Đồ Bơi">
                     					Đồ Bơi
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/quan-ao-boi" title="Quần Áo Bơi">Quần Áo Bơi</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/do-boi-chong-nang-tre-em" title="Đồ Bơi Chống Nắng">Đồ Bơi Chống Nắng</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/do-boi-tre-em" title="Xem tất cả Đồ Bơi">
                     							Xem tất cả <b>Đồ Bơi »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/trang-bi-the-thao" title="Trang Bị Thể Thao">
                     					Trang Bị Thể Thao
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/xe-dap" title="Xe Đạp">Xe Đạp</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/scooter" title="Scooter">Scooter</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/giay-patin" title="Giày Patin">Giày Patin</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/van-truot" title="Ván Trượt">Ván Trượt</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/vot-cau-long-vot-tennis" title="Vợt Cầu Lông, Vợt Tennis">Vợt Cầu Lông, Vợt Tennis</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dung-cu-phat-trien-van-dong" title="Dụng Cụ Phát Triển Vận Động">Dụng Cụ Phát Triển Vận Động</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/trang-bi-the-thao" title="Xem tất cả Trang Bị Thể Thao">
                     							Xem tất cả <b>Trang Bị Thể Thao »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>


                     			<li class="nav-item-lv2 link-parent">
                     				<a href="/tre-em" title="Xem tất cả Trẻ Em">
                     					Xem tất cả <b>Trẻ Em »</b>
                     				</a>
                     			</li>
                     		</ul>
                     	</li>




                     	<li class="nav-item has-childs   hover-left">
                     		<a href="/phu-kien" class="nav-link" title="Phụ Kiện">

                     			<div class="group-category-image">
                     				<img class="img-fluid lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/fitness-tracker.png?v=1693643743327" alt="Phụ Kiện" />
                     			</div>

                     			Phụ Kiện
                     			<i class="open_mnu down_icon"></i>
                     		</a>

                     		<ul class="dropdown-menu">


                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/balo-tui" title="Balo & Túi">
                     					Balo & Túi
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/balo" title="Balo">Balo</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tui-the-thao" title="Túi Thể Thao">Túi Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tui-dung-vot" title="Túi Đựng Vợt">Túi Đựng Vợt</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tui-chong-nuoc" title="Túi Chống Nước">Túi Chống Nước</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tui-dung-giay" title="Túi Đựng Giày">Túi Đựng Giày</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tui-du-lich" title="Túi Du Lịch">Túi Du Lịch</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/balo-tui" title="Xem tất cả Balo & Túi">
                     							Xem tất cả <b>Balo & Túi »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/dinh-duong-cap-nuoc" title="Dinh Dưỡng & Cấp Nước">
                     					Dinh Dưỡng & Cấp Nước
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/binh-nuoc-hop-thuc-pham" title="Bình Nước & Hộp Thực Phẩm">Bình Nước & Hộp Thực Phẩm</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/thanh-nang-luong" title="Thanh Năng Lượng">Thanh Năng Lượng</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/dinh-duong-cap-nuoc" title="Xem tất cả Dinh Dưỡng & Cấp Nước">
                     							Xem tất cả <b>Dinh Dưỡng & Cấp Nước »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/phu-kien-dien-tu" title="Phụ Kiện Điện Tử">
                     					Phụ Kiện Điện Tử
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dong-ho-the-thao" title="Đồng Hồ Thể Thao">Đồng Hồ Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/den-doi-dau-den-pin" title="Đèn Đội Đầu & Đèn Pin">Đèn Đội Đầu & Đèn Pin</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/tai-nghe-the-thao" title="Tai Nghe Thể Thao">Tai Nghe Thể Thao</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/can-suc-khoe" title="Cân Sức Khỏe">Cân Sức Khỏe</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/pin-sac-du-phong" title="Pin & Sạc Dự Phòng">Pin & Sạc Dự Phòng</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/phu-kien-dien-tu" title="Xem tất cả Phụ Kiện Điện Tử">
                     							Xem tất cả <b>Phụ Kiện Điện Tử »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="dropdown-submenu nav-item-lv2 has-childs2">
                     				<a class="nav-link" href="/bang-ho-tro-dung-cu-massage" title="Băng Hỗ Trợ & Dụng Cụ Massage">
                     					Băng Hỗ Trợ & Dụng Cụ Massage
                     					<i class="open_mnu down_icon"></i>
                     				</a>
                     				<ul class="dropdown-menu">

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/bang-bao-ve" title="Băng Bảo Vệ">Băng Bảo Vệ</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dung-cu-massage" title="Dụng Cụ Massage">Dụng Cụ Massage</a>
                     					</li>

                     					<li class="nav-item-lv3">
                     						<a class="nav-link" href="/dung-cu-phuc-hoi" title="Dụng Cụ Phục Hồi">Dụng Cụ Phục Hồi</a>
                     					</li>

                     					<li class="nav-item-lv3 link-parent">
                     						<a href="/bang-ho-tro-dung-cu-massage" title="Xem tất cả Băng Hỗ Trợ & Dụng Cụ Massage">
                     							Xem tất cả <b>Băng Hỗ Trợ & Dụng Cụ Massage »</b>
                     						</a>
                     					</li>
                     				</ul>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/kinh-mat" title="Kính Mát">Kính Mát</a>
                     			</li>


                     			<li class="nav-item-lv2 link-parent">
                     				<a href="/phu-kien" title="Xem tất cả Phụ Kiện">
                     					Xem tất cả <b>Phụ Kiện »</b>
                     				</a>
                     			</li>
                     		</ul>
                     	</li>


                     </ul>



                     <ul id="nav" class="nav">



                     	<li class="nav-item ">
                     		<a class="nav-link" href="/gioi-thieu" title="Về Sudes Sport">
                     			Về Sudes Sport
                     		</a>
                     	</li>



                     	<li class="nav-item has-childs  ">
                     		<a href="/chinh-sach-mua-hang" class="nav-link" title="Chính sách mua hàng">
                     			Chính sách mua hàng
                     			<i class="open_mnu down_icon"></i>
                     		</a>
                     		<ul class="dropdown-menu">


                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/chinh-sach-mua-hang" title="Chính sách mua hàng">Chính sách mua hàng</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/chinh-sach-doi-tra" title="Chính sách đổi trả">Chính sách đổi trả</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                     			</li>


                     		</ul>
                     	</li>



                     	<li class="nav-item has-childs  ">
                     		<a href="/huong-dan-mua-hang" class="nav-link" title="Hướng dẫn mua hàng">
                     			Hướng dẫn mua hàng
                     			<i class="open_mnu down_icon"></i>
                     		</a>
                     		<ul class="dropdown-menu">


                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/huong-dan-doi-tra" title="Hướng dẫn đổi trả">Hướng dẫn đổi trả</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/huong-dan-chuyen-khoan" title="Hướng dẫn chuyển khoản">Hướng dẫn chuyển khoản</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/huong-dan-tra-gop" title="Hướng dẫn trả góp">Hướng dẫn trả góp</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/huong-dan-hoan-hang" title="Hướng dẫn hoàn hàng">Hướng dẫn hoàn hàng</a>
                     			</li>


                     		</ul>
                     	</li>



                     	<li class="nav-item has-childs  ">
                     		<a href="javascript:;" class="nav-link" title="Tin tức">
                     			Tin tức
                     			<i class="open_mnu down_icon"></i>
                     		</a>
                     		<ul class="dropdown-menu">


                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/tin-tuc" title="Tin tức thể thao">Tin tức thể thao</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/kien-thuc-the-thao" title="Kiến thức thể thao">Kiến thức thể thao</a>
                     			</li>



                     			<li class="nav-item-lv2">
                     				<a class="nav-link" href="/kinh-nghiem-the-thao" title="Kinh nghiệm thể thao">Kinh nghiệm thể thao</a>
                     			</li>


                     		</ul>
                     	</li>



                     	<li class="nav-item ">
                     		<a class="nav-link" href="/lien-he" title="Liên hệ chúng tôi">
                     			Liên hệ chúng tôi
                     		</a>
                     	</li>


                     </ul>


                  </script>
                </div>
                <div class="footer-menu">
                    <div class="sudes-header-hotline">
                        <div class="frame-fix">
                            <a title="Điện thoại: 1900 6750" href="tel:19006750"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                            <div class="text-box">
                                <span class="acc-text-small">Hotline hỗ trợ:</span>
                                <span class="acc-text">1900 6750</span>
                            </div>
                        </div>
                    </div>
                    <div class="sudes-header-stores">
                        <div class="frame-fix">
                            <a href="/he-thong-cua-hang" title="Hệ thống cửa hàng"></a>
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 22.52L26 21.174V2H2V25.79L9.095 24.425C9.03237 24.2921 8.99993 24.1469 9 24V16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15H18C18.2652 15 18.5196 15.1054 18.7071 15.2929C18.8946 15.4804 19 15.7348 19 16V22.52ZM17 22.905V17H11V24C11 24.02 11 24.04 10.998 24.059L17 22.905ZM1 0H27C27.2652 0 27.5196 0.105357 27.7071 0.292893C27.8946 0.48043 28 0.734784 28 1V22C28 22.2324 27.919 22.4576 27.771 22.6368C27.623 22.816 27.4172 22.9381 27.189 22.982L1.189 27.982C1.04431 28.0098 0.89526 28.0054 0.752502 27.9689C0.609744 27.9324 0.476808 27.8649 0.363202 27.7711C0.249597 27.6772 0.158129 27.5595 0.0953412 27.4262C0.0325533 27.2929 -3.37575e-06 27.1473 2.62534e-10 27V1C2.62534e-10 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM6 7.998V4H22V7.998H6Z"
                                    fill="black" />
                            </svg>
                            <div class="text-box">
                                <span class="acc-text-small">Hệ thống cửa hàng</span>
                                <span class="acc-text">7 cửa hàng</span>
                            </div>
                        </div>
                    </div>
                    <div class="sudes-header-iwish">
                        <div class="frame-fix">
                            <a href="/danh-sach-yeu-thich" title="Danh sách yêu thích"></a>
                            <svg viewBox="0 -28 512.001 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0" />
                            </svg>
                            <div class="text-box">
                                <span class="acc-text-small">Danh sách yêu thích</span>
                                <span class="acc-text"><span class="js-wishlist-count">0</span> sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-nav-overflow"></div>
    </header>
    <script>
        var resizeTimer = false,
            resizeWindow = $(window).prop("innerWidth");
        var parentHeight = $('header.header').outerHeight();
        var $header = $('header.header');
        var offset_sticky_header = $header.outerHeight();
        var offset_sticky_down = 0;
        $header.css('min-height', parentHeight);
        $(window).on("resize", function() {
            if (resizeTimer) {
                clearTimeout(resizeTimer)
            }
            resizeTimer = setTimeout(function() {
                var newWidth = $(window).prop("innerWidth");
                if (resizeWindow != newWidth) {
                    $header.removeClass('hSticky');
                    $header.css('min-height', '');
                    headerHeight = $('header.header').outerHeight();
                    $('header.header').css('min-height', headerHeight);
                    resizeWindow = newWidth
                }
            }, 200);
        });
        setTimeout(function() {
            $header.removeClass('hSticky');
            $header.css('min-height', '');
            headerHeight = $('header.header').outerHeight();
            $('header.header').css('min-height', headerHeight);
            jQuery(window).scroll(function() {
                /* scroll header */
                if (jQuery(window).scrollTop() > offset_sticky_header && jQuery(window).scrollTop() >
                    offset_sticky_down) {

                    $header.addClass('hSticky');
                }
                if (jQuery(window).scrollTop() <= offset_sticky_down && jQuery(window).scrollTop() <=
                    offset_sticky_header) {
                    $header.removeClass('hSticky');
                }
                offset_sticky_down = jQuery(window).scrollTop();
            });
        }, 300);
    </script>
    <div class="bodywrap">
        <h1 class="d-none">Sudes Sport - Sudes Sport - Chuyên kinh doanh các sản phẩm giày dép phụ kiện thể thao, thời
            trang thể thao chính hãng.</h1>
        <div class="section_slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide  has-effect">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_1.jpg?1758009149569">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_1.jpg?1758009149569">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_1.jpg?1758009149569">
                        <source media="(max-width: 480px)"
                            srcset="//bizweb.dktcdn.net/thumb/grande/100/490/431/themes/927074/assets/slider_1.jpg?1758009149569">
                        <img width="1920" height="717"
                            src="//bizweb.dktcdn.net/thumb/grande/100/490/431/themes/927074/assets/slider_1.jpg?1758009149569"
                            alt="Slider 1" class="img-responsive center-block" />
                    </picture>
                    <div class="container-effect">
                        <div class="title-1">
                            Flash Sale
                        </div>
                        <div class="title-2">
                            Mua đôi giảm bội
                        </div>
                        <div class="title-3">
                            Áp dụng cho nhiều sản phẩm
                        </div>
                        <a href="/collections/all" title="Xem chi tiết" class="btn btn-primary">
                            <span>Xem chi tiết</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide  has-effect">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_2.jpg?1758009149569">
                        <source media="(min-width: 992px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_2.jpg?1758009149569">
                        <source media="(min-width: 569px)"
                            srcset="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/slider_2.jpg?1758009149569">
                        <source media="(max-width: 480px)"
                            srcset="//bizweb.dktcdn.net/thumb/grande/100/490/431/themes/927074/assets/slider_2.jpg?1758009149569">
                        <img width="1920" height="717"
                            src="//bizweb.dktcdn.net/thumb/grande/100/490/431/themes/927074/assets/slider_2.jpg?1758009149569"
                            alt="Slider 2" class="img-responsive center-block" />
                    </picture>
                    <div class="container-effect">
                        <div class="title-1">
                            Hot deal
                        </div>
                        <div class="title-2">
                            Càng mua càng giảm
                        </div>
                        <div class="title-3">
                            Thời gian: 01/10 - 15/10
                        </div>
                        <a href="/collections/all" title="Xem chi tiết" class="btn btn-primary">
                            <span>Xem chi tiết</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
        <script>
            var swiper_slider = new Swiper('.section_slider', {
                speed: 1000,
                effect: 'fade',
                spaceBetween: 0,
                grabCursor: true,
                navigation: {
                    nextEl: '.section_slider .swiper-button-next',
                    prevEl: '.section_slider .swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: true
                },
                pagination: {
                    el: '.section_slider .swiper-pagination',
                    clickable: true,
                }
            });
        </script>
        <section class="section-index section_category">
            <div class="container">
                <div class="section-title side-left has-control">
                    <h2>
                    </h2>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper_category swiper-container control-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="/chay-bo" title="Chạy bộ" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_1.png?1758009149569"
                                            alt="Chạy bộ" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Chạy bộ
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">9 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/tennis" title="Tennis" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_2.png?1758009149569"
                                            alt="Tennis" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Tennis
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">11 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/hiking-trekking" title="Hiking & Trekking" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_3.png?1758009149569"
                                            alt="Hiking & Trekking" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Hiking & Trekking
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">7 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/di-bo" title="Đi bộ" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_4.png?1758009149569"
                                            alt="Đi bộ" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Đi bộ
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">7 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/dap-xe" title="Đạp Xe" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_5.png?1758009149569"
                                            alt="Đạp Xe" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Đạp Xe
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">8 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/bong-da-futsal" title="Bóng Đá & Futsal" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_6.png?1758009149569"
                                            alt="Bóng Đá & Futsal" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Bóng Đá & Futsal
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">11 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/bong-ban" title="Bóng bàn" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_7.png?1758009149569"
                                            alt="Bóng bàn" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Bóng bàn
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">11 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/cau-long" title="Cầu lông" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_8.png?1758009149569"
                                            alt="Cầu lông" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Cầu lông
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">11 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/bong-ro" title="Bóng rổ" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_9.png?1758009149569"
                                            alt="Bóng rổ" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Bóng rổ
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">11 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/boi-loi" title="Bơi lội" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_10.png?1758009149569"
                                            alt="Bơi lội" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Bơi lội
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">9 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/chay-dia-hinh" title="Chạy địa hình" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_11.png?1758009149569"
                                            alt="Chạy địa hình" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Chạy địa hình
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">7 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/cam-trai" title="Cắm trại" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/image_cate_12.png?1758009149569"
                                            alt="Cắm trại" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        Cắm trại
                                    </h3>
                                    <div class="status">
                                        <span class="total-product">7 sản phẩm</span>
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper_category = null;

            function initSwiperCategory() {
                swiper_category = new Swiper('.swiper_category', {
                    slidesPerView: 8,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    navigation: {
                        nextEl: '.section_category .swiper-button-next',
                        prevEl: '.section_category .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        768: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 5,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 8,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperCategory() {
                if (swiper_category) {
                    swiper_category.destroy(true, true);
                    swiper_category = null;
                }
            }

            function toggleSwiperCategory() {
                if ($(window).width() <= 767 && swiper_category) {
                    destroySwiperCategory();
                } else if ($(window).width() > 767 && !swiper_category) {
                    initSwiperCategory();
                }
            }
            toggleSwiperCategory();
            $(window).on('resize', function() {
                toggleSwiperCategory();
            });
        </script>
        <section class="section-index section_product section_flash_sale">
            <div class="bg-section">
                <div class="container">
                    <div class="row">
                        <div class="block-countdown col-sm-12 col-xs-12 col-lg-3 col-xl-2">
                            <div class="section-title side-left has-control">
                                <h2>
                                    <a href="san-pham-khuyen-mai" title="'Bão deal' giảm giá">
                                        'Bão deal' giảm giá
                                    </a>
                                </h2>
                            </div>
                            <div class="nav-slider">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="countdown-container">
                                <div class="count-down">
                                    <span class="title-count-down">Chương trình sẽ kết thúc sau:</span>
                                    <div class="timer-view" data-countdown="countdown"
                                        data-date="12-25-2026-09-15-45"></div>
                                </div>
                            </div>
                            <a href="san-pham-khuyen-mai" title="Xem tất cả" class="btn btn-primary hidden-sm">
                                <span>Xem tất cả</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="block-product-list col-sm-12 col-xs-12 col-lg-9 col-xl-10">
                            <div class="swiper_sale swiper-container">
                                <div class="swiper-wrapper load-after" data-section="section_flash_sale">
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        <div class="item_product_main">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        <div class="item_product_main">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        <div class="item_product_main">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        <div class="item_product_main">
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        <div class="item_product_main">
                                        </div>
                                    </div>
                                    <script type="text/x-custom-template" data-template="section_flash_sale">
                                 <div class="swiper-slide">
                                 	<div class="item_product_main">

                                 <form action="/cart/add" method="post" class="variants product-action product-flash-sale item-product-main duration-300" data-cart-form data-id="product-actions-32459187" enctype="multipart/form-data">
                                 <span class="flash-sale">Giảm
                                 19%
                                 </span>
                                 <div class="product-thumbnail">
                                 <a class="image_thumb scale_hover" href="/san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam-2" title="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam 2">












                                 <img class="product-frame duration-300 lazyload"
                                 width=480
                                 height=480
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_3.png?1758009149569" alt=""
                                 />



                                 <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153177-a6046d5b-6f38-4b10-8384-198e73995c0a.jpg?v=1693677894677" alt="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam 2">
                                 </a>
                                 <div class="action-button">

                                 <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam-2" tabindex="0" title="Thêm vào yêu thích">
                                 <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                                 </a>

                                 </div>
                                 </div>
                                 <div class="product-swatches">


























                                 <div class="swatches clearfix">







                                 <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153206-29707430-823a-4953-a110-d76779a25e57.jpg?v=1693677894677">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153206-29707430-823a-4953-a110-d76779a25e57.jpg?v=1693677894677" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  xam" title="Xám" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153194-ff20224d-5e74-477d-80b5-9da8e0f44ae0.jpg?v=1693677888377">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153194-ff20224d-5e74-477d-80b5-9da8e0f44ae0.jpg?v=1693677888377" style="background:#615a5a; background: linear-gradient(135deg, #615a5a 50%, #615a5a 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  trang" title="Trắng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153171-1a772a34-0e30-40cf-b77c-361b6428fec9.jpg?v=1693677894677">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153171-1a772a34-0e30-40cf-b77c-361b6428fec9.jpg?v=1693677894677" style="background:#ffffff; background: linear-gradient(135deg, #ffffff 50%, #ffffff 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  den" title="Đen" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153177-a6046d5b-6f38-4b10-8384-198e73995c0a.jpg?v=1693677894677">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153177-a6046d5b-6f38-4b10-8384-198e73995c0a.jpg?v=1693677894677" style="background:#000000; background: linear-gradient(135deg, #000000 50%, #000000 50%); ">
                                 </label>

                                 </div>


















                                 </div>


                                 </div>
                                 <div class="product-info">
                                 <h3 class="product-name line-clamp-2-new">
                                 <a href="/san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam-2" title="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam 2">SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam 2</a>
                                 </h3>
                                 </div>
                                 <div class="product-bottom">
                                 <div class="product-price-cart">
                                 <div class="price-box">
                                 <span class="price">969.000₫</span>
                                 <span class="compare-price">1.200.000₫</span>

                                 </div>
                                 </div>
                                 <div class="button-product">
                                 <input class="hidden" type="hidden" name="variantId" value="97230946" />
                                 <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                 <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                 <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                 </svg>
                                 <span>Tùy chọn</span>
                                 </button>
                                 </div>

                                 <div class="productcount">


                                 <div class="countitem visible">
                                 <div class="countdown" style="width:26%
                                 ;"></div>
                                 </div>
                                 <span class="a-center">Đã bán <b>34 sản phẩm</b></span>


                                 </div>

                                 </div>
                                 </form>
                                 	</div>
                                 </div>

                                 <div class="swiper-slide">
                                 	<div class="item_product_main">

                                 <form action="/cart/add" method="post" class="variants product-action product-flash-sale item-product-main duration-300" data-cart-form data-id="product-actions-32459051" enctype="multipart/form-data">
                                 <span class="flash-sale">Giảm
                                 19%
                                 </span>
                                 <div class="product-thumbnail">
                                 <a class="image_thumb scale_hover" href="/product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam" title="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam">












                                 <img class="product-frame duration-300 lazyload"
                                 width=480
                                 height=480
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_3.png?1758009149569" alt=""
                                 />



                                 <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153206.jpg?v=1693669155603" alt="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam">
                                 </a>
                                 <div class="action-button">

                                 <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                                 <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                                 </a>

                                 </div>
                                 </div>
                                 <div class="product-swatches">


























                                 <div class="swatches clearfix">







                                 <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153206.jpg?v=1693669155603">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  xam" title="Xám" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153194.jpg?v=1693669160303">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303" style="background:#615a5a; background: linear-gradient(135deg, #615a5a 50%, #615a5a 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  trang" title="Trắng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153171.jpg?v=1693669157717">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717" style="background:#ffffff; background: linear-gradient(135deg, #ffffff 50%, #ffffff 50%); ">
                                 </label>

                                 </div>






















                                 <div class="swatch-elementes colors  den" title="Đen" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153177.jpg?v=1693669159167">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167" style="background:#000000; background: linear-gradient(135deg, #000000 50%, #000000 50%); ">
                                 </label>

                                 </div>


















                                 </div>


                                 </div>
                                 <div class="product-info">
                                 <h3 class="product-name line-clamp-2-new">
                                 <a href="/product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam" title="SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam">SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam</a>
                                 </h3>
                                 </div>
                                 <div class="product-bottom">
                                 <div class="product-price-cart">
                                 <div class="price-box">
                                 <span class="price">969.000₫</span>
                                 <span class="compare-price">1.200.000₫</span>

                                 </div>
                                 </div>
                                 <div class="button-product">
                                 <input class="hidden" type="hidden" name="variantId" value="97230668" />
                                 <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                 <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                 <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                 </svg>
                                 <span>Tùy chọn</span>
                                 </button>
                                 </div>

                                 <div class="productcount">


                                 <div class="countitem visible">
                                 <div class="countdown" style="width:14%
                                 ;"></div>
                                 </div>
                                 <span class="a-center">Đã bán <b>14 sản phẩm</b></span>


                                 </div>

                                 </div>
                                 </form>
                                 	</div>
                                 </div>

                                 <div class="swiper-slide">
                                 	<div class="item_product_main">

                                 <form action="/cart/add" method="post" class="variants product-action product-flash-sale item-product-main duration-300" data-cart-form data-id="product-actions-32488836" enctype="multipart/form-data">
                                 <span class="flash-sale">Giảm
                                 33%
                                 </span>
                                 <div class="product-thumbnail">
                                 <a class="image_thumb scale_hover" href="/gia-y-di-bo-the-duc-pw-100-cho-tre-em" title="Giày đi bộ thể dục PW 100 cho trẻ em">






                                 <img class="product-frame duration-300 lazyload"
                                 width=480
                                 height=480
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_1.png?1758009149569" alt=""
                                 />



                                 <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1260878.jpg?v=1694009415403" alt="Giày đi bộ thể dục PW 100 cho trẻ em">
                                 </a>
                                 <div class="action-button">

                                 <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="gia-y-di-bo-the-duc-pw-100-cho-tre-em" tabindex="0" title="Thêm vào yêu thích">
                                 <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                                 </a>

                                 </div>
                                 </div>
                                 <div class="product-swatches">


























                                 <div class="swatches clearfix">







                                 <div class="swatch-elementes colors  trang-den" title="Trắng đen" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1260938.jpg?v=1694009416240">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1260938.jpg?v=1694009416240" style="background:#ffffff; background: linear-gradient(135deg, #ffffff 50%, #000000 50%); ">
                                 </label>

                                 </div>
















                                 <div class="swatch-elementes colors  xam-hong" title="Xám hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1260878.jpg?v=1694009415403">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1260878.jpg?v=1694009415403" style="background:#9d9d9d; background: linear-gradient(135deg, #9d9d9d 50%, #ff00a3 50%); ">
                                 </label>

                                 </div>












                                 </div>


                                 </div>
                                 <div class="product-info">
                                 <h3 class="product-name line-clamp-2-new">
                                 <a href="/gia-y-di-bo-the-duc-pw-100-cho-tre-em" title="Giày đi bộ thể dục PW 100 cho trẻ em">Giày đi bộ thể dục PW 100 cho trẻ em</a>
                                 </h3>
                                 </div>
                                 <div class="product-bottom">
                                 <div class="product-price-cart">
                                 <div class="price-box">
                                 <span class="price">199.000₫</span>
                                 <span class="compare-price">299.000₫</span>

                                 </div>
                                 </div>
                                 <div class="button-product">
                                 <input class="hidden" type="hidden" name="variantId" value="97386655" />
                                 <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="gia-y-di-bo-the-duc-pw-100-cho-tre-em">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                 <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                 <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                 </svg>
                                 <span>Tùy chọn</span>
                                 </button>
                                 </div>

                                 <div class="productcount">


                                 <div class="countitem visible">
                                 <div class="countdown" style="width:57%
                                 ;"></div>
                                 </div>
                                 <span class="a-center">Đã bán <b>131 sản phẩm</b></span>


                                 </div>

                                 </div>
                                 </form>
                                 	</div>
                                 </div>

                                 <div class="swiper-slide">
                                 	<div class="item_product_main">

                                 <form action="/cart/add" method="post" class="variants product-action product-flash-sale item-product-main duration-300" data-cart-form data-id="product-actions-32492630" enctype="multipart/form-data">
                                 <span class="flash-sale">Giảm
                                 20%
                                 </span>
                                 <div class="product-thumbnail">
                                 <a class="image_thumb scale_hover" href="/balo-da-ngoai-nh100-10l" title="Balô dã ngoại NH100 10L">



































































                                 <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1640075.jpg?v=1694061857890" alt="Balô dã ngoại NH100 10L">
                                 </a>
                                 <div class="action-button">

                                 <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="balo-da-ngoai-nh100-10l" tabindex="0" title="Thêm vào yêu thích">
                                 <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                                 </a>

                                 </div>
                                 </div>
                                 <div class="product-swatches">






















                                 <div class="swatches clearfix">







                                 <div class="swatch-elementes colors  tim" title="Tím" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1640075.jpg?v=1694061857890">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1640075.jpg?v=1694061857890" style="background:#a600a0; background: linear-gradient(135deg, #a600a0 50%, #a600a0 50%); ">
                                 </label>

                                 </div>







                                 <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1805392.jpg?v=1694061860030">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1805392.jpg?v=1694061860030" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                                 </label>

                                 </div>



                                 </div>


                                 </div>
                                 <div class="product-info">
                                 <h3 class="product-name line-clamp-2-new">
                                 <a href="/balo-da-ngoai-nh100-10l" title="Balô dã ngoại NH100 10L">Balô dã ngoại NH100 10L</a>
                                 </h3>
                                 </div>
                                 <div class="product-bottom">
                                 <div class="product-price-cart">
                                 <div class="price-box">
                                 <span class="price">79.000₫</span>
                                 <span class="compare-price">99.000₫</span>

                                 </div>
                                 </div>
                                 <div class="button-product">
                                 <input class="hidden" type="hidden" name="variantId" value="97441743" />
                                 <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="balo-da-ngoai-nh100-10l">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                 <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                 <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                 </svg>
                                 <span>Tùy chọn</span>
                                 </button>
                                 </div>

                                 <div class="productcount">


                                 <div class="countitem visible">
                                 <div class="countdown" style="width:66%
                                 ;"></div>
                                 </div>
                                 <span class="a-center">Đã bán <b>152 sản phẩm</b></span>


                                 </div>

                                 </div>
                                 </form>
                                 	</div>
                                 </div>

                                 <div class="swiper-slide">
                                 	<div class="item_product_main">

                                 <form action="/cart/add" method="post" class="variants product-action product-flash-sale item-product-main duration-300" data-cart-form data-id="product-actions-32492783" enctype="multipart/form-data">
                                 <span class="flash-sale">Giảm
                                 13%
                                 </span>
                                 <div class="product-thumbnail">
                                 <a class="image_thumb scale_hover" href="/bong-tap-gym-resist-60-cm-cho-tre-em" title="Bóng tập Gym Resist 60 cm cho trẻ em">



































































                                 <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p937759.jpg?v=1694062567387" alt="Bóng tập Gym Resist 60 cm cho trẻ em">
                                 </a>
                                 <div class="action-button">

                                 <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="bong-tap-gym-resist-60-cm-cho-tre-em" tabindex="0" title="Thêm vào yêu thích">
                                 <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                                 </a>

                                 </div>
                                 </div>
                                 <div class="product-swatches">






















                                 <div class="swatches clearfix">







                                 <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p937765.jpg?v=1694062568270">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p937765.jpg?v=1694062568270" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                                 </label>

                                 </div>







                                 <div class="swatch-elementes colors  xanh-duong" title="Xanh dương" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p937759.jpg?v=1694062567387">


















































































































































































































                                 <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p937759.jpg?v=1694062567387" style="background:#64d0ff; background: linear-gradient(135deg, #64d0ff 50%, #64d0ff 50%); ">
                                 </label>

                                 </div>



                                 </div>


                                 </div>
                                 <div class="product-info">
                                 <h3 class="product-name line-clamp-2-new">
                                 <a href="/bong-tap-gym-resist-60-cm-cho-tre-em" title="Bóng tập Gym Resist 60 cm cho trẻ em">Bóng tập Gym Resist 60 cm cho trẻ em</a>
                                 </h3>
                                 </div>
                                 <div class="product-bottom">
                                 <div class="product-price-cart">
                                 <div class="price-box">
                                 <span class="price">345.000₫</span>
                                 <span class="compare-price">395.000₫</span>

                                 </div>
                                 </div>
                                 <div class="button-product">
                                 <input class="hidden" type="hidden" name="variantId" value="97446254" />
                                 <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="bong-tap-gym-resist-60-cm-cho-tre-em">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                 <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                 <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                 </svg>
                                 <span>Tùy chọn</span>
                                 </button>
                                 </div>

                                 <div class="productcount">


                                 <div class="countitem visible">
                                 <div class="countdown" style="width:46%
                                 ;"></div>
                                 </div>
                                 <span class="a-center">Đã bán <b>69 sản phẩm</b></span>


                                 </div>

                                 </div>
                                 </form>
                                 	</div>
                                 </div>

                              </script>
                                </div>
                                <div class="view-more clearfix">
                                    <a href="san-pham-khuyen-mai" title="Xem tất cả" class="btn btn-primary">
                                        <span>Xem tất cả</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperSale() {
                    var swiper_sale = null;

                    function initSwiperSale() {
                        swiper_sale = new Swiper('.swiper_sale', {
                            slidesPerView: 5,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            navigation: {
                                nextEl: '.section_flash_sale .swiper-button-next',
                                prevEl: '.section_flash_sale .swiper-button-prev',
                            },
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 4.5,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperSale() {
                        if (swiper_sale) {
                            swiper_sale.destroy(true, true);
                            swiper_sale = null;
                        }
                    }

                    function toggleSwiperPro1() {
                        if ($(window).width() <= 767 && swiper_sale) {
                            destroySwiperSale();
                        } else if ($(window).width() > 767 && !swiper_sale) {
                            initSwiperSale();
                        }
                    }
                    toggleSwiperPro1();
                    $(window).resize(toggleSwiperPro1);
                }
                lazyBlockProduct('section_flash_sale', '0px 0px -250px 0px', runSwiperSale);
            });

            (function($) {
                "user strict";
                $.fn.Dqdt_CountDown = function(options) {
                    return this.each(function() {
                        new $.Dqdt_CountDown(this, options);
                    });
                }
                $.Dqdt_CountDown = function(obj, options) {
                    this.options = $.extend({
                        autoStart: true,
                        LeadingZero: true,
                        DisplayFormat: "<div><span>%%D%%</span> Days</div><div><span>%%H%%</span> Hours</div><div><span>%%M%%</span> Mins</div><div><span>%%S%%</span> Secs</div>",
                        FinishMessage: "Háº¿t háº¡n",
                        CountActive: true,
                        TargetDate: null
                    }, options || {});
                    if (this.options.TargetDate == null || this.options.TargetDate == '') {
                        return;
                    }
                    this.timer = null;
                    this.element = obj;
                    this.CountStepper = -1;
                    this.CountStepper = Math.ceil(this.CountStepper);
                    this.SetTimeOutPeriod = (Math.abs(this.CountStepper) - 1) * 1000 + 990;
                    var dthen = new Date(this.options.TargetDate);
                    var dnow = new Date();
                    if (this.CountStepper > 0) {
                        ddiff = new Date(dnow - dthen);
                    } else {
                        ddiff = new Date(dthen - dnow);
                    }
                    gsecs = Math.floor(ddiff.valueOf() / 1000);
                    this.CountBack(gsecs, this);
                };
                $.Dqdt_CountDown.fn = $.Dqdt_CountDown.prototype;
                $.Dqdt_CountDown.fn.extend = $.Dqdt_CountDown.extend = $.extend;
                $.Dqdt_CountDown.fn.extend({
                    calculateDate: function(secs, num1, num2) {
                        var s = ((Math.floor(secs / num1)) % num2).toString();
                        if (this.options.LeadingZero && s.length < 2) {
                            s = "0" + s;
                        }
                        return "<b>" + s + "</b>";
                    },
                    CountBack: function(secs, self) {
                        if (secs < 0) {
                            self.element.innerHTML = '<div class="lof-labelexpired"> ' + self.options
                                .FinishMessage + "</div>";
                            $(".title-count-down").hide();
                            return;
                        }
                        clearInterval(self.timer);
                        DisplayStr = self.options.DisplayFormat.replace(/%%D%%/g, self.calculateDate(secs,
                            86400, 100000));
                        DisplayStr = DisplayStr.replace(/%%H%%/g, self.calculateDate(secs, 3600, 24));
                        DisplayStr = DisplayStr.replace(/%%M%%/g, self.calculateDate(secs, 60, 60));
                        DisplayStr = DisplayStr.replace(/%%S%%/g, self.calculateDate(secs, 1, 60));
                        self.element.innerHTML = DisplayStr;
                        if (self.options.CountActive) {
                            self.timer = null;
                            self.timer = setTimeout(function() {
                                self.CountBack((secs + self.CountStepper), self);
                            }, (self.SetTimeOutPeriod));
                        }
                    }
                });
                $(document).ready(function() {
                    $('[data-countdown="countdown"]').each(function(index, el) {
                        var $this = $(this);
                        var $date = $this.data('date').split("-");
                        $this.Dqdt_CountDown({
                            TargetDate: $date[0] + "/" + $date[1] + "/" + $date[2] + " " + $date[
                                3] + ":" + $date[4] + ":" + $date[5],
                            DisplayFormat: "<div class=\"block-timer\"><div>%%D%%</div><span>Ngày</span></div><div class=\"block-timer\"><div>%%H%%</div><span>Giờ</span></div><div class=\"block-timer\"><div>%%M%%</div><span>Phút</span></div><div class=\"block-timer\"><div>%%S%%</div><span>Giây</span></div>",
                            FinishMessage: "Chương trình đã hết hạn"
                        });
                    });
                });
            })(jQuery);
        </script>
        <section class="section-index section_product_tab">
            <div class="container">
                <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section-2="ajax-tab-1">
                    <div class="section-title side-left">
                        <h2>
                            Top sản phẩm bán chạy
                        </h2>
                        <div class="tab_big ">
                            <div class="tab_ul">
                                <ul class="tabs tabs-title tab-pc tabtitle2 ajax clearfix">
                                    <li class="tab-link tab_cate has-content" data-tab="tab1-1"
                                        data-url="/the-thao-duoi-nuoc">
                                        <span>Thể Thao Dưới Nước</span>
                                    </li>
                                    <li class="tab-link tab_cate " data-tab="tab1-2" data-url="/the-thao-ngoai-troi">
                                        <span>Thể Thao Ngoài Trời</span>
                                    </li>
                                    <li class="tab-link tab_cate " data-tab="tab1-3" data-url="/chay-bo-di-bo">
                                        <span>Chạy Bộ & Đi Bộ</span>
                                    </li>
                                    <li class="tab-link tab_cate " data-tab="tab1-4" data-url="/cac-mon-fitness">
                                        <span>Các Môn Fitness</span>
                                    </li>
                                    <li class="tab-link tab_cate " data-tab="tab1-5" data-url="/dap-xe-truot-van">
                                        <span>Đạp Xe & Trượt Ván</span>
                                    </li>
                                    <li class="tab-link tab_cate " data-tab="tab1-6" data-url="/the-thao-muc-tieu">
                                        <span>Thể Thao Mục Tiêu</span>
                                    </li>
                                </ul>
                                <div class="grad-left">
                                    <a href="javascript:;" class="prev button" title="prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="grad-right">
                                    <a href="javascript:;" class="next button" title="next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-products">
                        <div class="tab1-1 tab-content current">
                            <div class="row load-after" data-section="section_product_tab">
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12 item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <script type="text/x-custom-template" data-template="section_product_tab">
                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32743238" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              31%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/qua-bong-ro-bt100-co-7-cho-nam-tu-13-tuoi-tro-len" title="Quả bóng rổ BT100 cỡ 7 cho nam từ 13 tuổi trở lên">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2154429.jpg?v=1695554309717" alt="Quả bóng rổ BT100 cỡ 7 cho nam từ 13 tuổi trở lên">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="qua-bong-ro-bt100-co-7-cho-nam-tu-13-tuoi-tro-len" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">

                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/qua-bong-ro-bt100-co-7-cho-nam-tu-13-tuoi-tro-len" title="Quả bóng rổ BT100 cỡ 7 cho nam từ 13 tuổi trở lên">Quả bóng rổ BT100 cỡ 7 cho nam từ 13 tuổi trở lên</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">345.000₫</span>
                              <span class="compare-price">500.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input type="hidden" name="variantId" value="98502578" />
                              <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ hàng">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                              <span>Thêm vào giỏ</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32666194" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/quan-short-boi-100-cho-nam" title="Quần short bơi 100 cho nam">













                              <img class="product-frame duration-300 lazyload"
                              width=480
                              height=480
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                              data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_2.png?1758009149569" alt=""
                              />



                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132063.jpg?v=1695321051287" alt="Quần short bơi 100 cho nam">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="quan-short-boi-100-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  do" title="Đỏ" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132031.jpg?v=1695321053520">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2132031.jpg?v=1695321053520" style="background:#f20808; background: linear-gradient(135deg, #f20808 50%, #f20808 50%); ">
                              </label>

                              </div>






















                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1744568.jpg?v=1695321052833">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1744568.jpg?v=1695321052833" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>






















                              <div class="swatch-elementes colors  xanh-la" title="Xanh lá" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2383413.jpg?v=1695321052107">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2383413.jpg?v=1695321052107" style="background:#63d100; background: linear-gradient(135deg, #63d100 50%, #63d100 50%); ">
                              </label>

                              </div>


















                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/quan-short-boi-100-cho-nam" title="Quần short bơi 100 cho nam">Quần short bơi 100 cho nam</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">145.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="98304249" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="quan-short-boi-100-cho-nam">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32493125" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/ao-khoac-ni-leo-nui-mh520-cho-nu" title="Áo khoác nỉ leo núi MH520 cho nữ">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714553.jpg?v=1694064432850" alt="Áo khoác nỉ leo núi MH520 cho nữ">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="ao-khoac-ni-leo-nui-mh520-cho-nu" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714553.jpg?v=1694064432850">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1714553.jpg?v=1694064432850" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  xanh-duong" title="Xanh dương" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714537.jpg?v=1694064436833">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1714537.jpg?v=1694064436833" style="background:#64d0ff; background: linear-gradient(135deg, #64d0ff 50%, #64d0ff 50%); ">
                              </label>

                              </div>















                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/ao-khoac-ni-leo-nui-mh520-cho-nu" title="Áo khoác nỉ leo núi MH520 cho nữ">Áo khoác nỉ leo núi MH520 cho nữ</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">175.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97449301" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="ao-khoac-ni-leo-nui-mh520-cho-nu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492726" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              22%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/tui-dung-giay-light-15-lit" title="Túi đựng giày Light 15 Lít">










                              <img class="product-frame duration-300 lazyload"
                              width=480
                              height=480
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                              data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_1.png?1758009149569" alt=""
                              />



                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1595354.jpg?v=1694062347347" alt="Túi đựng giày Light 15 Lít">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="tui-dung-giay-light-15-lit" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">

                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/tui-dung-giay-light-15-lit" title="Túi đựng giày Light 15 Lít">Túi đựng giày Light 15 Lít</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">69.000₫</span>
                              <span class="compare-price">89.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input type="hidden" name="variantId" value="97443737" />
                              <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ hàng">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                              <span>Thêm vào giỏ</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492680" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              19%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/balo-leo-nui-da-ngoa-i-arpenaz-7l-cho-tre-em" title="Balô leo núi dã ngoại Arpenaz 7L cho trẻ em">






















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p708204.jpg?v=1694062061407" alt="Balô leo núi dã ngoại Arpenaz 7L cho trẻ em">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="balo-leo-nui-da-ngoa-i-arpenaz-7l-cho-tre-em" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">






















                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  cam-xanh" title="Cam xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p754568.jpg?v=1694062062503">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p754568.jpg?v=1694062062503" style="background:#ffa00d; background: linear-gradient(135deg, #ffa00d 50%, #16c0fd 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2241421.jpg?v=1694062064783">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2241421.jpg?v=1694062064783" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                              </label>

                              </div>



                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/balo-leo-nui-da-ngoa-i-arpenaz-7l-cho-tre-em" title="Balô leo núi dã ngoại Arpenaz 7L cho trẻ em">Balô leo núi dã ngoại Arpenaz 7L cho trẻ em</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">125.000₫</span>
                              <span class="compare-price">155.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97441817" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="balo-leo-nui-da-ngoa-i-arpenaz-7l-cho-tre-em">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492630" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              20%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/balo-da-ngoai-nh100-10l" title="Balô dã ngoại NH100 10L">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1640075.jpg?v=1694061857890" alt="Balô dã ngoại NH100 10L">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="balo-da-ngoai-nh100-10l" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">






















                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  tim" title="Tím" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1640075.jpg?v=1694061857890">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1640075.jpg?v=1694061857890" style="background:#a600a0; background: linear-gradient(135deg, #a600a0 50%, #a600a0 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1805392.jpg?v=1694061860030">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1805392.jpg?v=1694061860030" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>



                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/balo-da-ngoai-nh100-10l" title="Balô dã ngoại NH100 10L">Balô dã ngoại NH100 10L</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">79.000₫</span>
                              <span class="compare-price">99.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97441743" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="balo-da-ngoai-nh100-10l">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492553" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/binh-dung-nuoc-gallon-den" title="Bình đựng nước Gallon - Đen">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1573979.jpg?v=1694061460337" alt="Bình đựng nước Gallon - Đen">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="binh-dung-nuoc-gallon-den" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">

                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/binh-dung-nuoc-gallon-den" title="Bình đựng nước Gallon - Đen">Bình đựng nước Gallon - Đen</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">275.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input type="hidden" name="variantId" value="97441629" />
                              <button class="btn-cart btn-views add_to_cart " title="Thêm vào giỏ hàng">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                              <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                              <span>Thêm vào giỏ</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492239" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" title="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">


                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1587811.jpg?v=1694060212260" alt="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">

                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" title="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">Liên hệ</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <button class="btn-cart btn-views disable" title="Xem chi tiết" type="button" onclick="window.location.href='/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau'" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
                              <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                              <span>Xem chi tiết</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490761" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/a-o-polo-ngan-tay-vai-luoi-cuo-i-ngu-a-500-cho-nu" title="Áo polo ngắn tay vải lưới cưỡi ngựa 500 cho nữ">






















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1739565.jpg?v=1694053514723" alt="Áo polo ngắn tay vải lưới cưỡi ngựa 500 cho nữ">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="a-o-polo-ngan-tay-vai-luoi-cuo-i-ngu-a-500-cho-nu" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/a-o-polo-ngan-tay-vai-luoi-cuo-i-ngu-a-500-cho-nu" title="Áo polo ngắn tay vải lưới cưỡi ngựa 500 cho nữ">Áo polo ngắn tay vải lưới cưỡi ngựa 500 cho nữ</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">445.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97389902" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="a-o-polo-ngan-tay-vai-luoi-cuo-i-ngu-a-500-cho-nu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490538" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/kinh-boi-trong-kinh-trong-suot-xbase" title="Kính bơi tròng kính trong suốt Xbase">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1337776.jpg?v=1694052531737" alt="Kính bơi tròng kính trong suốt Xbase">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="kinh-boi-trong-kinh-trong-suot-xbase" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1337776.jpg?v=1694052531737">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1337776.jpg?v=1694052531737" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>













                              <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2189864.jpg?v=1694052537500">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2189864.jpg?v=1694052537500" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                              </label>

                              </div>









                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/kinh-boi-trong-kinh-trong-suot-xbase" title="Kính bơi tròng kính trong suốt Xbase">Kính bơi tròng kính trong suốt Xbase</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">125.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97389378" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="kinh-boi-trong-kinh-trong-suot-xbase">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490483" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/mu-boi-luoi" title="Mũ bơi lưới">









                              <img class="product-frame duration-300 lazyload"
                              width=480
                              height=480
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                              data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_1.png?1758009149569" alt=""
                              />



                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p722232.jpg?v=1694052182360" alt="Mũ bơi lưới">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="mu-boi-luoi" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">






















                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p722232.jpg?v=1694052182360">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p722232.jpg?v=1694052182360" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  den" title="Đen" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p154771.jpg?v=1694052184543">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p154771.jpg?v=1694052184543" style="background:#000000; background: linear-gradient(135deg, #000000 50%, #000000 50%); ">
                              </label>

                              </div>



                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/mu-boi-luoi" title="Mũ bơi lưới">Mũ bơi lưới</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">49.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97389220" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="mu-boi-luoi">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490455" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/quan-short-boi-100-cho-nam-hoa-tiet-la-cay" title="Quần short bơi 100 cho nam - Họa tiết lá cây">



















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132064.jpg?v=1694051951010" alt="Quần short bơi 100 cho nam - Họa tiết lá cây">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="quan-short-boi-100-cho-nam-hoa-tiet-la-cay" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/quan-short-boi-100-cho-nam-hoa-tiet-la-cay" title="Quần short bơi 100 cho nam - Họa tiết lá cây">Quần short bơi 100 cho nam - Họa tiết lá cây</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">495.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97389166" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="quan-short-boi-100-cho-nam-hoa-tiet-la-cay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                           </script>
                            </div>
                            <div class="view-more">
                                <a href="/the-thao-duoi-nuoc" title="Xem tất cả" class="btn btn-primary">
                                    <span>Xem tất cả </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="tab1-2 tab-content">
                        </div>
                        <div class="tab1-3 tab-content">
                        </div>
                        <div class="tab1-4 tab-content">
                        </div>
                        <div class="tab1-5 tab-content">
                        </div>
                        <div class="tab1-6 tab-content">
                        </div>
                        <div class="tab1-7 tab-content">
                        </div>
                        <div class="tab1-8 tab-content">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                lazyBlockProduct('section_product_tab', '0px 0px -250px 0px');

                var tabUlParent = $('.section_product_tab .tab_ul');
                var tabUl = $('.section_product_tab .tab_ul ul');
                var prevBtn = $(".section_product_tab .tab_ul .prev");
                var nextBtn = $(".section_product_tab .tab_ul .next");

                function checkOverflow() {
                    if (tabUl.get(0).scrollWidth > tabUl.get(0).clientWidth) {
                        tabUlParent.addClass('has-nav')
                        prevBtn.show();
                        nextBtn.show();
                    } else {
                        tabUlParent.removeClass('has-nav')
                        prevBtn.hide();
                        nextBtn.hide();
                    }
                }

                prevBtn.click(function() {
                    var leftPos = tabUl.scrollLeft();
                    tabUl.animate({
                        scrollLeft: leftPos - 345
                    }, 500);
                });

                nextBtn.click(function() {
                    var leftPos = tabUl.scrollLeft();
                    tabUl.animate({
                        scrollLeft: leftPos + 150
                    }, 500);
                });

                checkOverflow();
                $(window).resize(checkOverflow);

            });
        </script>
        <section class="section-index section_group_banner">
            <div class="container">
                <div class="grid">
                    <div class="col-left">
                        <div class="banner_1 banner-box">
                            <a href="/collections/all" title="Xem ngay">
                                <picture>
                                    <source media="(max-width: 480px)"
                                        srcset="//bizweb.dktcdn.net/thumb/large/100/490/431/themes/927074/assets/section_gbanner_1.jpg?1758009149569">
                                    <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/section_gbanner_1.jpg?1758009149569"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        alt="NEW ARRIVALS" loading="lazy" class="lazyload duration-300" />
                                </picture>
                                <div class="box-title">
                                    <h3>
                                        NEW ARRIVALS
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="grid-sub">
                            <div class="banner_2 banner-box">
                                <a href="/collections/all" title="Xem ngay">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/large/100/490/431/themes/927074/assets/section_gbanner_2.jpg?1758009149569">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/section_gbanner_2.jpg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            alt="NOW TRENDING" loading="lazy" class="lazyload duration-300" />
                                    </picture>
                                    <div class="box-title">
                                        <h3>
                                            NOW TRENDING
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="banner_3 banner-box">
                                <a href="/collections/all" title="Xem ngay">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/medium/100/490/431/themes/927074/assets/section_gbanner_3.jpg?1758009149569">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/section_gbanner_3.jpg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            alt="NOW TRENDING" loading="lazy" class="lazyload duration-300" />
                                    </picture>
                                    <div class="box-title">
                                        <h3>
                                            CAMPAIGNS
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="banner_4 banner-box">
                                <a href="/collections/all" title="Xem ngay">
                                    <picture>
                                        <source media="(max-width: 480px)"
                                            srcset="//bizweb.dktcdn.net/thumb/medium/100/490/431/themes/927074/assets/section_gbanner_4.jpg?1758009149569">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/section_gbanner_4.jpg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            alt="NOW TRENDING" loading="lazy" class="lazyload duration-300" />
                                    </picture>
                                    <div class="box-title">
                                        <h3>
                                            LOOKBOOK
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-index section_product section_product_1">
            <div class="container">
                <div class="row">
                    <div class="block-title col-sm-12 col-xs-12 col-lg-3 col-xl-2">
                        <div class="section-title side-left has-control">
                            <h2>
                                <a href="nam" title="Thể thao cho nam">
                                    Thể thao cho nam
                                </a>
                            </h2>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a href="nam" title="Xem tất cả" class="btn btn-primary hidden-sm">
                            <span>Xem tất cả</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="block-product-list col-sm-12 col-xs-12 col-lg-9 col-xl-10">
                        <div class="swiper_pro_1 swiper_pro swiper-container">
                            <div class="swiper-wrapper load-after" data-section="section_product_1">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <script type="text/x-custom-template" data-template="section_product_1">
                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32666194" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/quan-short-boi-100-cho-nam" title="Quần short bơi 100 cho nam">













                              <img class="product-frame duration-300 lazyload"
                              width=480
                              height=480
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                              data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_2.png?1758009149569" alt=""
                              />



                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132063.jpg?v=1695321051287" alt="Quần short bơi 100 cho nam">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="quan-short-boi-100-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  do" title="Đỏ" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132031.jpg?v=1695321053520">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2132031.jpg?v=1695321053520" style="background:#f20808; background: linear-gradient(135deg, #f20808 50%, #f20808 50%); ">
                              </label>

                              </div>






















                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1744568.jpg?v=1695321052833">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1744568.jpg?v=1695321052833" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>






















                              <div class="swatch-elementes colors  xanh-la" title="Xanh lá" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2383413.jpg?v=1695321052107">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2383413.jpg?v=1695321052107" style="background:#63d100; background: linear-gradient(135deg, #63d100 50%, #63d100 50%); ">
                              </label>

                              </div>


















                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/quan-short-boi-100-cho-nam" title="Quần short bơi 100 cho nam">Quần short bơi 100 cho nam</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">145.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="98304249" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="quan-short-boi-100-cho-nam">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492307" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              12%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/giay-chay-bo-jogflow-500-1-cho-nam" title="Giày chạy bộ JOGFLOW 500.1 cho nam">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153171-5c5c3c0e-8280-4e5c-99d9-7187c77e5424.jpg?v=1694060565647" alt="Giày chạy bộ JOGFLOW 500.1 cho nam">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="giay-chay-bo-jogflow-500-1-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  trang" title="Trắng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153171-5c5c3c0e-8280-4e5c-99d9-7187c77e5424.jpg?v=1694060565647">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153171-5c5c3c0e-8280-4e5c-99d9-7187c77e5424.jpg?v=1694060565647" style="background:#ffffff; background: linear-gradient(135deg, #ffffff 50%, #ffffff 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2153206-3c28f1b9-adfb-489c-bbc3-1a5e8c31fbc5.jpg?v=1694060569330">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2153206-3c28f1b9-adfb-489c-bbc3-1a5e8c31fbc5.jpg?v=1694060569330" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>

































                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/giay-chay-bo-jogflow-500-1-cho-nam" title="Giày chạy bộ JOGFLOW 500.1 cho nam">Giày chạy bộ JOGFLOW 500.1 cho nam</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">969.000₫</span>
                              <span class="compare-price">1.095.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97441184" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="giay-chay-bo-jogflow-500-1-cho-nam">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490936" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/giay-chay-bo-run-active-cho-nam" title="Giày chạy bộ RUN ACTIVE cho nam">

























                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2155510.jpg?v=1694054425827" alt="Giày chạy bộ RUN ACTIVE cho nam">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="giay-chay-bo-run-active-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  den-cam" title="Đen cam" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2155510.jpg?v=1694054425827">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2155510.jpg?v=1694054425827" style="background:#000000; background: linear-gradient(135deg, #000000 50%, #ffa80a 50%); ">
                              </label>

                              </div>






















                              <div class="swatch-elementes colors  xanh" title="Xanh" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2155551.jpg?v=1694054432003">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p2155551.jpg?v=1694054432003" style="background:#024779; background: linear-gradient(135deg, #024779 50%, #024779 50%); ">
                              </label>

                              </div>


















                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/giay-chay-bo-run-active-cho-nam" title="Giày chạy bộ RUN ACTIVE cho nam">Giày chạy bộ RUN ACTIVE cho nam</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">795.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97390205" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="giay-chay-bo-run-active-cho-nam">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490455" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/quan-short-boi-100-cho-nam-hoa-tiet-la-cay" title="Quần short bơi 100 cho nam - Họa tiết lá cây">



















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2132064.jpg?v=1694051951010" alt="Quần short bơi 100 cho nam - Họa tiết lá cây">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="quan-short-boi-100-cho-nam-hoa-tiet-la-cay" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/quan-short-boi-100-cho-nam-hoa-tiet-la-cay" title="Quần short bơi 100 cho nam - Họa tiết lá cây">Quần short bơi 100 cho nam - Họa tiết lá cây</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">495.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97389166" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="quan-short-boi-100-cho-nam-hoa-tiet-la-cay">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32490362" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              10%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/a-o-thun-nga-n-tay-leo-nu-i-da-ngoa-i-techfresh-50-cho-nam" title="Áo thun ngắn tay leo núi dã ngoại TechFRESH 50 cho nam">



















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p431620.jpg?v=1694051065360" alt="Áo thun ngắn tay leo núi dã ngoại TechFRESH 50 cho nam">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="a-o-thun-nga-n-tay-leo-nu-i-da-ngoa-i-techfresh-50-cho-nam" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/a-o-thun-nga-n-tay-leo-nu-i-da-ngoa-i-techfresh-50-cho-nam" title="Áo thun ngắn tay leo núi dã ngoại TechFRESH 50 cho nam">Áo thun ngắn tay leo núi dã ngoại TechFRESH 50 cho nam</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">175.000₫</span>
                              <span class="compare-price">195.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97388988" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="a-o-thun-nga-n-tay-leo-nu-i-da-ngoa-i-techfresh-50-cho-nam">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                           </script>
                            </div>
                            <div class="view-more clearfix">
                                <a href="nam" title="Xem tất cả" class="btn btn-primary">
                                    <span>Xem tất cả</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperPro1() {
                    var swiper_pro_1 = null;

                    function initSwiperPro1() {
                        swiper_pro_1 = new Swiper('.swiper_pro_1', {
                            slidesPerView: 5,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            navigation: {
                                nextEl: '.section_product_1 .swiper-button-next',
                                prevEl: '.section_product_1 .swiper-button-prev',
                            },
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 4.5,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperPro1() {
                        if (swiper_pro_1) {
                            swiper_pro_1.destroy(true, true);
                            swiper_pro_1 = null;
                        }
                    }

                    function toggleSwiperPro1() {
                        if ($(window).width() <= 767 && swiper_pro_1) {
                            destroySwiperPro1();
                        } else if ($(window).width() > 767 && !swiper_pro_1) {
                            initSwiperPro1();
                        }
                    }
                    toggleSwiperPro1();
                    $(window).resize(toggleSwiperPro1);
                }
                lazyBlockProduct('section_product_1', '0px 0px -250px 0px', runSwiperPro1);
            });
        </script>
        <section class="section-index section_big_banner">
            <div class="container">
                <a href="/collections/all" title="Banner big" class="big-banner">
                    <picture>
                        <source media="(max-width: 480px)"
                            srcset="//bizweb.dktcdn.net/thumb/large/100/490/431/themes/927074/assets/section_big_banner_mb.jpg?1758009149569">
                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/section_big_banner.jpg?1758009149569"
                            alt="Banner big" width="1780" height="385" class="lazyload"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                    </picture>
                </a>
            </div>
        </section>
        <section class="section-index section_product section_product_2">
            <div class="container">
                <div class="row">
                    <div class="block-title col-sm-12 col-xs-12 col-lg-3 col-xl-2">
                        <div class="section-title side-left has-control">
                            <h2>
                                <a href="nu" title="Thể thao cho nữ">
                                    Thể thao cho nữ
                                </a>
                            </h2>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a href="nu" title="Xem tất cả" class="btn btn-primary hidden-sm">
                            <span>Xem tất cả</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="block-product-list col-sm-12 col-xs-12 col-lg-9 col-xl-10">
                        <div class="swiper_pro_2 swiper_pro swiper-container">
                            <div class="swiper-wrapper load-after" data-section="section_product_2">
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                    <div class="item_product_main">
                                    </div>
                                </div>
                                <script type="text/x-custom-template" data-template="section_product_2">
                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32493146" enctype="multipart/form-data">
                              <span class="flash-sale">Giảm
                              19%
                              </span>

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/vay-cau-long-530-cho-nu" title="Váy cầu lông 530 cho nữ">













                              <img class="product-frame duration-300 lazyload"
                              width=480
                              height=480
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                              data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/frame_2.png?1758009149569" alt=""
                              />



                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/vay-cau-long-530-cho-nu-trang.jpg?v=1694064596997" alt="Váy cầu lông 530 cho nữ">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="vay-cau-long-530-cho-nu" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/vay-cau-long-530-cho-nu" title="Váy cầu lông 530 cho nữ">Váy cầu lông 530 cho nữ</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">125.000₫</span>
                              <span class="compare-price">155.000₫</span>

                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97449329" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="vay-cau-long-530-cho-nu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32493125" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/ao-khoac-ni-leo-nui-mh520-cho-nu" title="Áo khoác nỉ leo núi MH520 cho nữ">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714553.jpg?v=1694064432850" alt="Áo khoác nỉ leo núi MH520 cho nữ">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="ao-khoac-ni-leo-nui-mh520-cho-nu" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">


























                              <div class="swatches clearfix">







                              <div class="swatch-elementes colors  hong" title="Hồng" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714553.jpg?v=1694064432850">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1714553.jpg?v=1694064432850" style="background:#fb779c; background: linear-gradient(135deg, #fb779c 50%, #fb779c 50%); ">
                              </label>

                              </div>







                              <div class="swatch-elementes colors  xanh-duong" title="Xanh dương" data-image="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1714537.jpg?v=1694064436833">


















































































































































































































                              <label data-image="https://bizweb.dktcdn.net/100/490/431/products/p1714537.jpg?v=1694064436833" style="background:#64d0ff; background: linear-gradient(135deg, #64d0ff 50%, #64d0ff 50%); ">
                              </label>

                              </div>















                              </div>


                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/ao-khoac-ni-leo-nui-mh520-cho-nu" title="Áo khoác nỉ leo núi MH520 cho nữ">Áo khoác nỉ leo núi MH520 cho nữ</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">175.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97449301" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="ao-khoac-ni-leo-nui-mh520-cho-nu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492239" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" title="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">


                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1587811.jpg?v=1694060212260" alt="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">

                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau" title="ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU">ÁO THUN POLO NGẮN TAY CHƠI GOLF TRONG THỜI TIẾT ẤM ÁP CHO NỮ MÀU HỒNG DÂU</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">Liên hệ</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <button class="btn-cart btn-views disable" title="Xem chi tiết" type="button" onclick="window.location.href='/ao-thun-polo-ngan-tay-choi-golf-trong-thoi-tiet-am-ap-cho-nu-mau-hong-dau'" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
                              <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
                              <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg>
                              <span>Xem chi tiết</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32492199" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/giay-di-bo-cho-nu-soft-140-2" title="Giày đi bộ cho nữ Soft 140.2">



































































                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2155703.jpg?v=1694060043997" alt="Giày đi bộ cho nữ Soft 140.2">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="giay-di-bo-cho-nu-soft-140-2" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/giay-di-bo-cho-nu-soft-140-2" title="Giày đi bộ cho nữ Soft 140.2">Giày đi bộ cho nữ Soft 140.2</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">425.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97440945" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="giay-di-bo-cho-nu-soft-140-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                              <div class="swiper-slide">
                              	<div class="item_product_main">

                              <form action="/cart/add" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32491187" enctype="multipart/form-data">

                              <div class="product-thumbnail">
                              <a class="image_thumb scale_hover" href="/ao-polo-khong-tay-ultralight-cho-nu" title="Áo polo không tay ultralight cho nữ">



















                              <img class="lazyload duration-300 image1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1826351.jpg?v=1694055383973" alt="Áo polo không tay ultralight cho nữ">
                              </a>
                              <div class="action-button">

                              <a href="javascript:void(0)" class="setWishlist btn-views btn-circle" data-wish="ao-polo-khong-tay-ultralight-cho-nu" tabindex="0" title="Thêm vào yêu thích">
                              <img width="25" height="25" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/heart.png?1758009149569" alt="Thêm vào yêu thích"/>
                              </a>

                              </div>
                              </div>
                              <div class="product-swatches">














                              </div>
                              <div class="product-info">
                              <h3 class="product-name line-clamp-2-new">
                              <a href="/ao-polo-khong-tay-ultralight-cho-nu" title="Áo polo không tay ultralight cho nữ">Áo polo không tay ultralight cho nữ</a>
                              </h3>
                              </div>
                              <div class="product-bottom">
                              <div class="product-price-cart">
                              <div class="price-box">
                              <span class="price">345.000₫</span>
                              </div>
                              </div>
                              <div class="button-product">
                              <input class="hidden" type="hidden" name="variantId" value="97390660" />
                              <button class="btn-cart btn-views quick-view-option btn" title="Tùy chọn" type="button" data-handle="ao-polo-khong-tay-ultralight-cho-nu">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                              </svg>
                              <span>Tùy chọn</span>
                              </button>
                              </div>
                              </div>
                              </form>
                              	</div>
                              </div>

                           </script>
                            </div>
                            <div class="view-more clearfix">
                                <a href="nu" title="Xem tất cả" class="btn btn-primary">
                                    <span>Xem tất cả</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function($) {
                function runSwiperPro2() {
                    var swiper_pro_2 = null;

                    function initSwiperPro2() {
                        swiper_pro_2 = new Swiper('.swiper_pro_2', {
                            slidesPerView: 5,
                            spaceBetween: 20,
                            slidesPerGroup: 1,
                            navigation: {
                                nextEl: '.section_product_2 .swiper-button-next',
                                prevEl: '.section_product_2 .swiper-button-prev',
                            },
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                992: {
                                    slidesPerView: 4,
                                    spaceBetween: 20
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 20
                                },
                                1200: {
                                    slidesPerView: 4.5,
                                    spaceBetween: 20
                                }
                            }
                        });
                    }

                    function destroySwiperPro2() {
                        if (swiper_pro_2) {
                            swiper_pro_2.destroy(true, true);
                            swiper_pro_2 = null;
                        }
                    }

                    function toggleSwiperPro2() {
                        if ($(window).width() <= 767 && swiper_pro_2) {
                            destroySwiperPro2();
                        } else if ($(window).width() > 767 && !swiper_pro_2) {
                            initSwiperPro2();
                        }
                    }
                    toggleSwiperPro2();
                    $(window).resize(toggleSwiperPro2);
                }
                lazyBlockProduct('section_product_2', '0px 0px -250px 0px', runSwiperPro2);
            });
        </script>
        <section class="section-index section_feedback">
            <div class="bg-section">
                <div class="container">
                    <div class="section-title side-left has-control">
                        <h2>
                            Khách hàng nói về chúng tôi
                        </h2>
                        <div class="desc">
                            Hơn +50,000 khách hàng đang sử dụng cảm nhận như thế nào về Sudes Sport - Thời trang, phụ
                            kiện thể thao.
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper_feedback swiper-container control-top">
                        <div class="swiper-wrapper">
                            <div class=" swiper-slide">
                                <div class="feedback-item">
                                    <div class="avatar">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/feedback_1_avatar.jpg?1758009149569"
                                            alt="Anh. Minh Nhật" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="block-content">
                                        <b>
                                            Anh. Minh Nhật
                                        </b>
                                        <span>
                                            Developer
                                        </span>
                                        <div class="feedback-content">
                                            "Tôi đã lựa chọn Sudes Sport để dành tặng cho người yêu của mình những món
                                            quà thật ý nghĩa.
                                            Tôi rất hài lòng với dịch vụ chuyên nghiệp, chất lượng sản phẩm cũng như sự
                                            tận tình của Sudes Sport.
                                            Chắc chắn rằng tôi sẽ quay lại nhiều lần nữa."
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide">
                                <div class="feedback-item">
                                    <div class="avatar">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/feedback_2_avatar.jpg?1758009149569"
                                            alt="Anh. Huỳnh Tuyến" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="block-content">
                                        <b>
                                            Anh. Huỳnh Tuyến
                                        </b>
                                        <span>
                                            Customer Service
                                        </span>
                                        <div class="feedback-content">
                                            "Rất thích đồ của Sudes Sport, trước toàn ra mua trực tiếp, lần này đặt hàng
                                            online, được 2 hôm là có hàng, chuẩn mẫu mã, ship nhanh và chất lượng bền
                                            tốt nữa. Tôi sẽ quay lại mua nữa."
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide">
                                <div class="feedback-item">
                                    <div class="avatar">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/feedback_3_avatar.jpg?1758009149569"
                                            alt="Chị. Hồng Liêm" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="block-content">
                                        <b>
                                            Chị. Hồng Liêm
                                        </b>
                                        <span>
                                            Maketing Manager
                                        </span>
                                        <div class="feedback-content">
                                            Biết đến Sudes Sport khi định sắm một số đồ dùng camping sau mùa dịch. Hàng
                                            hóa bao la tha hồ cho các bạn lựa khi đến đây, đi cả buổi xem cũng chưa hết.
                                            Giá cả theo mình là rẻ chứ không mắc đâu. Mua online hay offline cũng được.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide">
                                <div class="feedback-item">
                                    <div class="avatar">
                                        <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/feedback_4_avatar.jpg?1758009149569"
                                            alt="Chị. Như Thảo" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="block-content">
                                        <b>
                                            Chị. Như Thảo
                                        </b>
                                        <span>
                                            Accountant
                                        </span>
                                        <div class="feedback-content">
                                            "Tôi đã lựa chọn Sudes Sport để dành tặng cho người yêu của mình những món
                                            quà thật ý nghĩa.
                                            Tôi rất hài lòng với dịch vụ chuyên nghiệp, chất lượng sản phẩm cũng như sự
                                            tận tình của Sudes Sport.
                                            Chắc chắn rằng tôi sẽ quay lại nhiều lần nữa."
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper_feedback = null;

            function initSwiperFeedback() {
                swiper_feedback = new Swiper('.swiper_feedback', {
                    slidesPerView: 3,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    grabCursor: true,
                    navigation: {
                        nextEl: '.section_feedback .swiper-button-next',
                        prevEl: '.section_feedback .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1.5,
                            spaceBetween: 14
                        },
                        768: {
                            slidesPerView: 1.5,
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 1.5,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 1.5,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        1500: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperFeedback() {
                if (swiper_feedback) {
                    swiper_feedback.destroy(true, true);
                    swiper_feedback = null;
                }
            }

            function toggleSwiperFeedback() {
                if ($(window).width() <= 767 && swiper_feedback) {
                    destroySwiperFeedback();
                } else if ($(window).width() > 767 && !swiper_feedback) {
                    initSwiperFeedback();
                }
            }
            toggleSwiperFeedback();
            $(window).on('resize', function() {
                toggleSwiperFeedback();
            });
        </script>
        <section class="section-index section_blog">
            <div class="container">
                <div class="section-title side-left has-control">
                    <h2>
                        <a href="tin-tuc" title="Tin tức mới nhất">
                            Tin tức mới nhất</a>
                    </h2>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="blog_swiper swiper-container control-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item-blog">
                                <div class="blog-content">
                                    <a class="block-thumb thumb"
                                        href="/cach-chon-kinh-boi-can-cho-nguoi-can-thi-chuan-nhat"
                                        title="Cách chọn kính bơi cận cho người cận thị chuẩn nhất">
                                        <img width="400" height="240" class="lazyload duration-300"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="//bizweb.dktcdn.net/thumb/grande/100/490/431/articles/20210115-t6blthizlgdkc2aqyj3lxhw.jpg?v=1696174036037"
                                            alt="Cách chọn kính bơi cận cho người cận thị chuẩn nhất">
                                        <div class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                            06/09/2023
                                        </div>
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="/cach-chon-kinh-boi-can-cho-nguoi-can-thi-chuan-nhat"
                                                title="Cách chọn kính bơi cận cho người cận thị chuẩn nhất"
                                                class="line-clamp-2-new">Cách chọn kính bơi cận cho người cận thị chuẩn
                                                nhất</a>
                                        </h3>
                                        <p class="justify line-clamp line-clamp-3">Việc lựa chọn kính bơi phù hợp không
                                            hề dễ dàng, nhất là đối với những người cận thị hoặc viễn thị. Nhưng đừng
                                            lo, đã có Sudes Sp[ort ở đây làm “quân sư” cho bạn! Cùng tham khảo
                                            ngay&nbsp;cách chọn kính bơi cận&nbsp;chuẩn nhất dưới đây!
                                            &nbsp;
                                            Người cận thị có nên đeo kính bơi cận khi đi bơi?
                                            Kính bơi cận là loại kính bơi đặc biệt được thiết kế dành riêng cho những
                                            người có vấn đề về thị lực, giúp điều chỉnh thị lực cho người dùng khi bơi,
                                            từ đó giúp họ nhìn rõ và thoải mái hơn trong nước.
                                            Nếu bạn có vấn đề về thị lực và muốn tham gia hoạt động bơi lội một cách
                                            thoải mái và an toàn, kính bơi cận sẽ là một lựa chọn tốt giúp bạn tận hưởng
                                            niềm vui của bơi lội mà không cần phải lo lắng về mắt.
                                            Cách chọn kính bơi cận phù hợp
                                            Dựa vào loại kính bơi cận
                                            Trước tiên, hãy bắt đầu với 2 mẫu kính bơi có độ.
                                            Kính bơi chia độ sẵn
                                            Kính bơi chia độ sẵn là loại kính được thiết kế với số đo cụ thể. Có nhiều
                                            độ kính đa dạng, phù hợp với nhiều mức độ thị lực.
                                            Thông thường tại Decathlon, kính bơi cận được sản xuất với độ cận từ 2 đến 6
                                            độ, và mỗi nấc tăng 1 độ. Điều này đồng nghĩa với việc có nhiều loại kính
                                            cận để lựa chọn, bao gồm kính bơi cận 2 độ, 3.0 độ, 4.0 độ, 5.0 độ, 6.0 độ.
                                            Khi chọn kính bơi cận, hãy chọn một&nbsp;mức độ cận nhỏ hơn hoặc bằng độ cận
                                            thật của mắt. Ví dụ, nếu bạn cận khoảng 3.5 độ, bạn có thể chọn kính bơi cận
                                            2.0 độ hoặc 3.0 độ. Trong trường hợp mắt bị cận không đều, 2 mắt chênh lệch
                                            độ cận từ 1 độ trở lên, Decathlon khuyên bạn nên đặt mua kính bơi riêng để
                                            đảm bảo tầm nhìn tối ưu.
                                            ƯU ĐIỂM CỦA KÍNH CHIA ĐỘ SẴN
                                            Kính bơi chia độ sẵn có giá thành rẻ hơn nhiều so với kính bơi tùy chỉnh,
                                            bởi loại kính này không đòi hỏi phải điều chỉnh hay đi kèm phụ kiện mà vẫn
                                            có thể sử dụng được! Nếu bạn đang tìm kiếm mẫu kính ở mức giá phải chăng, có
                                            thể sử dụng cho các môn thể thao khác ngoài bơi lội như lặn ống thở, thì
                                            kính bơi chia độ sẵn chính là một lựa chọn hoàn hảo.
                                            HẠN CHẾ CỦA KÍNH CHIA ĐỘ SẴN
                                            Điểm trừ duy nhất là sản phẩm không phù hợp với mắt kính đa tròng hoặc hai
                                            tròng.
                                            Kính bơi cận tùy chỉnh
                                            Nói một cách đơn giản, kính bơi chia độ sẵn là loại kính được thiết kế với
                                            số đo cụ thể. Có nhiều độ kính đa dạng, phù hợp với nhiều mức độ thị lực.
                                            ƯU ĐIỂM CỦA KÍNH BƠI TÙY CHỈNH
                                            Loại kính này đảm bảo độ của kính thích hợp cho mắt của bạn, điều mà không
                                            mẫu kính bơi thường nào khác sánh bằng. Kính bơi tùy chỉnh mang lại tầm nhìn
                                            rộng hơn so với kính bơi thông thường, từ đó giúp nhìn xa, đồng thời đảm bảo
                                            khả năng quan sát tốt khi bơi dưới đáy hồ.
                                            HẠN CHẾ CỦA KÍNH BƠI TÙY CHỈNH
                                            Mất thời gian để chọn mẫu phù hợp, từ đó có thể gây bất tiện khi cần gấp.
                                            Loại kính này có giá khá cao, tùy thuộc vào loại tròng (kim loại hay bán
                                            trong suốt) cũng như hình dạng và kích thước của tròng kính.
                                            Dựa vào các đặc tính cần thiết cho kính bơi có độ
                                            Sau khi lựa chọn loại kính bơi phù hợp, giờ là lúc bạn cần cân nhắc các đặc
                                            tính cụ thể như:
                                            1. Tròng kính polycarbonate 1.59 Index
                                            Tròng kính Polycarbonate 1.59 Index là sản phẩm chất lượng cao, mang chỉ số
                                            khúc xạ cao hơn so với tròng kính Polycarbonate 1.50 Index.
                                            Mẫu tròng kính này chống va đập và trầy xước tốt hơn so với tròng kính 1.50,
                                            là sự lựa chọn hoàn hảo cho các cuộc thi bơi lội như Thế vận hội Olympic hay
                                            các Giải Vô địch Thế giới.
                                            Tròng kính nhẹ, được làm từ vật liệu polycarbonate, có thể đeo lâu mà không
                                            gây mỏi mắt!
                                            2. Tròng kính phân cực
                                            Tròng kính phân cực giúp hạn chế ánh sáng chói từ mặt trời và tia phản xạ
                                            trên các bề mặt phản chiếu. Nhờ đó, kính bơi phân cực giúp bạn cải thiện tầm
                                            nhìn tốt so với kính thông thường. Tuy nhiên, sản phẩm này không giúp bảo vệ
                                            mắt hoàn toàn khỏi bức xạ tia UV.
                                            3. Tròng kính chống tia UV
                                            Tiếp xúc với ánh nắng mặt trời là điều không thể tránh khỏi khi đi bơi. Tuy
                                            nhiên, trong ánh nắng mặt trời có tia...
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-light btn-view-more"
                                    href="/cach-chon-kinh-boi-can-cho-nguoi-can-thi-chuan-nhat" title="Xem chi tiết">
                                    Xem chi tiết
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-blog">
                                <div class="blog-content">
                                    <a class="block-thumb thumb" href="/cach-boi-sai-danh-cho-nguoi-moi"
                                        title="Cách Bơi Sải Dành Cho Người Mới">
                                        <img width="400" height="240" class="lazyload duration-300"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="//bizweb.dktcdn.net/thumb/grande/100/490/431/articles/bia-02fb1f82-8834-4ec0-878f-7f01da07844f.jpg?v=1696174067360"
                                            alt="Cách Bơi Sải Dành Cho Người Mới">
                                        <div class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                            06/09/2023
                                        </div>
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="/cach-boi-sai-danh-cho-nguoi-moi"
                                                title="Cách Bơi Sải Dành Cho Người Mới"
                                                class="line-clamp-2-new">Cách Bơi Sải Dành Cho Người Mới</a>
                                        </h3>
                                        <p class="justify line-clamp line-clamp-3">Bơi sải hay bơi trườn sấp là một
                                            phong cách bơi mang lại nhiều lợi ích cho sức khỏe và thể lực. Học bơi sải
                                            đòi hỏi sự tập trung và kiên nhẫn. Bài viết này sẽ cung cấp cho bạn một
                                            hướng dẫn chi tiết về cách học bơi sải hiệu quả để đạt được mục tiêu cá nhân
                                            trong thời gian ngắn nhất.
                                            Bơi sải có tác dụng gì?
                                            Bơi sải là một hoạt động thể dục toàn diện, giúp cải thiện sức khỏe tim
                                            mạch, tăng cường sức bền và làm việc cho toàn bộ cơ thể. Ngoài ra, bơi sải
                                            còn giúp tăng cường khả năng hô hấp, cải thiện tư thế và cân bằng, và là một
                                            phương pháp giảm căng thẳng hiệu quả.
                                            Kỹ thuật bơi sải cơ bản
                                            Các bước tập kỹ thuật tay khi bơi sải
                                            Kỹ thuật tay khi bơi sải là một yếu tố quan trọng để đạt được hiệu suất tốt
                                            và giảm thiểu mệt mỏi trong quá trình bơi sải. Dưới đây là một số chu trình
                                            của kỹ thuật tay khi bơi sải:
                                            Tì nước:&nbsp;Ngón tay khép sát nhau, bàn tay phẳng và cổ tay gập nhẹ.
                                            Kéo nước:&nbsp;Lòng bàn tay hướng ra sau, ngón tay sát nhau chuyển động
                                            trong phạm vi mặt phẳng cơ thể. Bàn tay phẳng và cổ tay hơi gập. Khuỷu tay
                                            nâng cao và gập, ngón cái ở vị trí cao nhất.
                                            Đẩy nước:&nbsp;Cánh tay gập ở khuỷu tay, bàn tay hướng về sau. Đẩy cánh tay
                                            ra ngoài và lên trên cho đến khi gần chạm hông. Khi kết thúc pha này, cánh
                                            tay sẽ duỗi hoàn toàn.
                                            Vung tay khỏi nước: Bàn tay sát hông hoặc mặt trên đùi, thả lỏng. Lòng bàn
                                            tay xoay vào trong và bàn tay hơi nghiêng lên trên. Lần lượt nhấc khuỷu tay
                                            sau đó đến bàn tay ra khỏi mặt nước. Thân người xoay nhẹ góc 45 độ, nhấc vai
                                            hoàn toàn ra khỏi nước.
                                            Vào nước:&nbsp;Đầu ngón tay chạm mặt nước, cánh tay duỗi thẳng, khuỷu tay
                                            gập vào cao 1 chút so với cổ tay. Bàn tay phẳng, lòng bàn tay hướng xuống
                                            dưới.
                                            Kỹ thuật tay kết hợp thở khi bơi sải
                                            1. Tập kỹ thuật tay trên cạn
                                            Tập trên cạn sẽ giúp bạn quen với động tác mới nhanh hơn, giúp việc học bơi
                                            sải nhanh chóng và dễ dàng hơn khi xuống nước. Đối với kỹ thuật tay thường
                                            phức tạp hơn, bạn nên tập từng tay rồi sau đó phối hợp lại:
                                            Cho tay phải:
                                            Đứng thẳng, bước chân trái về phía trước
                                            Đặt tay trái lên chân trái
                                            Bắt đầu quạt tay bằng tay phải
                                            Cho tay trái: đổi chân và thực hiện tương tự tay phải. Khi đã thuần thục,
                                            bạn có thể kết hợp hai tay cùng lúc.
                                            2. Tập kỹ thuật tay dưới nước
                                            Chọn vùng nước ngang ngực để dễ dàng tập luyện
                                            Khom người và tiến hành quạt tay như đã tập trên cạn
                                            Lưu ý: Khi đưa cánh tay vươn ra khỏi nước, hãy đảm bảo tay của bạn nằm trong
                                            một đường thẳng, vuông góc với mặt nước. Tránh nhấc quá cao tay để tiết kiệm
                                            năng lượng và giảm lực cản.
                                            Các bước tập kỹ thuật chân khi bơi sải:&nbsp;
                                            Trong bơi sải, ta sử dụng kỹ thuật bơi sải theo lối “flutter kick”. Nghĩa là
                                            đánh bàn chân lên và xuống liên tục một cách nhanh chóng và nhịp nhàng. Kỹ
                                            thuật chân khi bơi sải đóng vai trò quan trọng trong việc tạo lực đẩy và duy
                                            trì sự cân bằng trong nước. Dưới đây là một số hướng dẫn về kỹ thuật chân
                                            khi bơi sải:
                                            1. Tập chân trên cạn
                                            Tìm một mặt phẳng đủ rộng để luyện tập
                                            Nằm sấp, hai tay và chân duỗi thẳng về trước và sau
                                            Nhấc hai chân lên và xuống sao cho bắt đầu quen và thuần thục
                                            2. Tập chân dưới nước
                                            Hai tay bám vào thành bể bơi hoặc phao ván, hai chân duỗi thẳng.
                                            Lần lượt nâng hai chân lên và xuống nhịp nhàng
                                            Lưu ý: Giữ đầu gối thẳng và bụng nằm ngang. Đảm bảo chuyển động của chân
                                            không quá lớn hay quá nhỏ, lòng bàn chân của bạn duỗi thẳng và hướng về phía
                                            sau.
                                            3. Luyện tập và cải thiện
                                            Sau khi đã quen, bạn có thể tập cải thiện chân đạp bằng bài tập bơi dọc
                                            thành bể:
                                            Bạn có thể bắt đầu bằng cách đạp chân vào thành hồ lấy đà.
                                            Hai tay và chân duỗi thẳng và lướt đi trên nước
                                            Bắt đầu đạp chân để bơi dọc thành bể
                                            Tập luyện cho đến khi thuần thục
                                            Cách thở khi bơi sải
                                            Cách thở khi bơi sải là một yếu tố quan trọng để duy trì sự cung cấp oxy cho
                                            cơ thể và giữ cho quá trình bơi liên tục và hiệu quả. Trước khi tập, bạn sẽ
                                            cần phải xác định bên thuận...
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-light btn-view-more" href="/cach-boi-sai-danh-cho-nguoi-moi"
                                    title="Xem chi tiết">
                                    Xem chi tiết
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-blog">
                                <div class="blog-content">
                                    <a class="block-thumb thumb"
                                        href="/4-vat-dung-can-thiet-cho-chuyen-di-du-lich-mua-mua"
                                        title="4 Vật Dụng Cần Thiết Cho Chuyến Đi Du Lịch Mùa Mưa">
                                        <img width="400" height="240" class="lazyload duration-300"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="//bizweb.dktcdn.net/thumb/grande/100/490/431/articles/bia-5752ed0a-db76-4e96-a1e9-029e9602be2f.jpg?v=1696174024777"
                                            alt="4 Vật Dụng Cần Thiết Cho Chuyến Đi Du Lịch Mùa Mưa">
                                        <div class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                            06/09/2023
                                        </div>
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="/4-vat-dung-can-thiet-cho-chuyen-di-du-lich-mua-mua"
                                                title="4 Vật Dụng Cần Thiết Cho Chuyến Đi Du Lịch Mùa Mưa"
                                                class="line-clamp-2-new">4 Vật Dụng Cần Thiết Cho Chuyến Đi Du Lịch
                                                Mùa Mưa</a>
                                        </h3>
                                        <p class="justify line-clamp line-clamp-3">Với thời tiết thất thường ở Việt
                                            Nam, thời tiết trong chuyến đi luôn là nỗi lo ngại. Đặc biệt khi đi leo núi,
                                            đi&nbsp;du lịch mùa mưa.
                                            Nếu bạn vẫn còn băn khoăn mang gì khi đi du lịch mùa mưa thì đừng lo lắng.
                                            Những cơn mưa bất chợt sẽ chỉ còn là câu chuyện của dĩ vãng với&nbsp;4 vật
                                            dụng du lịch mùa mưa&nbsp;nhỏ gọn và tiện lợi sau đây.
                                            1. Áo khoác chống thấm nước hoặc áo mưa
                                            Các mẫu áo khoác chống thấm nước, áo mưa vào áo mưa poncho tại Decathlon vô
                                            cùng đa dạng. Vì vậy mà bạn có thể sẽ băn khoăn không biết mẫu nào phù hợp
                                            nhất với nhu cầu của bản thân. Đừng lo, đã có Decathlon ở đây để giải đáp
                                            thắc mắc của bạn!
                                            Có 2 yếu tố cần cân nhắc khi chọn lựa áo khoác chống thấm hay áo mưa du lịch
                                            mùa ẩm ướt:
                                            Áo khoác có khóa kéo nửa người hay khóa kéo toàn bộ:
                                            Áo khoác khóa kéo nửa người có giá cả phải chăng nhất trong các dòng áo
                                            khoác. Mẫu áo này tương tự dáng áo poncho nhưng chỉ kéo khóa một nửa.
                                            Áo khoác khóa kéo toàn bộ giúp mặc và cởi nhanh hơn so với mẫu áo khoác
                                            trên.
                                            2. Quần chống thấm nước
                                            Quần chống thấm nước mặc ngoài&nbsp;vừa có giá cả phải chăng vừa dễ sử dụng
                                            Với thiết kế dáng suông và thắt lưng có dây rút, khóa kéo ở mắt cá chân,
                                            quần rất dễ mặc và dễ cởi. Chỉ cần&nbsp;mặc chồng ngoài trang phục, quần
                                            luôn giữ bạn khô ráo và không lo bị ướt!
                                            Quần có chỉ số&nbsp;chống thấm nước 2000mm, có thể mặc cùng áo khoác chống
                                            thấm nước như&nbsp;bộ quần áo mưa hoàn hảo.
                                            Mẫu quần mặc ngoài này&nbsp;siêu nhẹ và nhỏ gọn, xứng đáng là một món đồ
                                            không thể thiếu khi trời mưa.
                                            3. Bọc ba lô chống thấm nước
                                            Với áo khoác và quần mặc ngoài, bạn đã có thể bảo vệ cơ thể khỏi trời mưa.
                                            Giờ thì đến balô của bạn với sản phẩm&nbsp;bọc balo chống thấm nước.
                                            Bọc balo là món đồ không thể thiếu cho những chuyến hiking và đạp xe vào mùa
                                            mưa!
                                            Sản phẩm mang màu sáng, có nhiều size cho các balo có thể tích từ 20 – 100L,
                                            không chỉ tiện dụng mà còn mang tính thẩm mỹ cao.&nbsp;Bọc balo chống thấm
                                            nước&nbsp;siêu nhẹ và nhỏ gọn, dễ dàng gấp gọn để bỏ tu· và mang theo mọi
                                            lúc mọi nơi!
                                            4. Áo mưa kiểu poncho
                                            Áo poncho chống thấm nước&nbsp;là món đồ đi mưa cực kì phù hợp cho chuyến du
                                            lịch ngày mưa! Sản phẩm không chỉ bảo vệ cơ thể mà còn giúp che chắn balo
                                            trong những cơn mưa rào nhẹ.
                                            Điểm cộng lớn nhất là áo poncho rất nhẹ, giúp mặc nhanh khi trời bất chợt đổ
                                            mưa.
                                            Kết luận
                                            Trên đây là những vật dụng đi&nbsp;du lịch mùa mưa&nbsp;nhẹ nhàng và nhỏ gọn
                                            để bảo vệ bạn khỏi những cơn mưa rào bất chợt! Đừng chần chừ “rinh” ngay
                                            những&nbsp;phụ kiện mùa mưa&nbsp;tiện dụng này. Chúng sẽ không làm bạn thất
                                            vọng!
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-light btn-view-more"
                                    href="/4-vat-dung-can-thiet-cho-chuyen-di-du-lich-mua-mua" title="Xem chi tiết">
                                    Xem chi tiết
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-blog">
                                <div class="blog-content">
                                    <a class="block-thumb thumb"
                                        href="/top-10-nhung-dia-diem-leo-nui-o-viet-nam-cho-nguoi-moi"
                                        title="Top 10 Những Địa Điểm Leo Núi Ở Việt Nam Cho Người Mới">
                                        <img width="400" height="240" class="lazyload duration-300"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="//bizweb.dktcdn.net/thumb/grande/100/490/431/articles/bia-13eeb5b1-1710-42d3-ab2b-c1f2c401531e.jpg?v=1696174014043"
                                            alt="Top 10 Những Địa Điểm Leo Núi Ở Việt Nam Cho Người Mới">
                                        <div class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                            06/09/2023
                                        </div>
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="/top-10-nhung-dia-diem-leo-nui-o-viet-nam-cho-nguoi-moi"
                                                title="Top 10 Những Địa Điểm Leo Núi Ở Việt Nam Cho Người Mới"
                                                class="line-clamp-2-new">Top 10 Những Địa Điểm Leo Núi Ở Việt Nam Cho
                                                Người Mới</a>
                                        </h3>
                                        <p class="justify line-clamp line-clamp-3">Với những dãy núi hùng vĩ và cánh
                                            rừng xanh bát ngát, Việt Nam đã trở thành một điểm đến lý tưởng cho người
                                            yêu thử thách và khám phá trong và ngoài nước. Cùng chúng tôi&nbsp;điểm
                                            qua&nbsp;những địa điểm leo núi ở Việt Nam&nbsp;đẹp nhất nhé!
                                            Địa điểm leo núi gần Sài Gòn
                                            1. Núi Bà Đen, Tây Ninh
                                            &nbsp;
                                            Sở hữu độ cao lên đến 986m (theo&nbsp;Wikipedia), núi Bà Đen được mệnh danh
                                            là “Nóc Nhà Đông Nam Bộ”. Đây là một trong những địa điểm leo núi ở Việt Nam
                                            cực hot với đa dạng hoạt động trekking, leo núi, cắm trại năng động.
                                            Ít người biết rằng núi Bà Đen có đến tận bảy cung đường trekking khác nhau.
                                            Đó bao gồm đường chùa, đường cột điện, đường ống nước, đường Ma Thiên Lãnh,
                                            đường núi Phụng, đường đá trắng và đường HCM.
                                            Hướng dẫn đường đi
                                            Nếu bạn mới bắt đầu leo núi ở núi Bà Đen, hãy chọn các cung đường phổ biến
                                            như dưới đây:
                                            Đường chùa: Đường này nằm ở phía sau lưng chùa Bà và được coi là đường ngắn
                                            nhưng dốc nhất để lên núi Bà Đen. Đường đi trải qua khu rừng thưa với những
                                            đá lớn và dốc, nên cần cẩn thận. Đường chùa mang đến không gian xanh mát và
                                            thơ mộng, là lựa chọn lý tưởng cho việc chụp ảnh.
                                            Đường cột điện: Đây là một trong những cung đường phổ biến nhất và được các
                                            phượt thủ yêu thích. Đường đi qua vườn xoài và vườn chuối, rất mát mẻ. Có
                                            mũi tên và các cột điện được đánh số thứ tự dẫn lên đỉnh núi, giúp người leo
                                            tránh lạc đường. Đường cột điện bắt đầu từ đài Liệt Sĩ và đòi hỏi thể lực.
                                            Bạn có thể nghỉ ngơi và ngắm cảnh ở các mốc 55 và 65.
                                            Các cung đường khác: Đường HCM và đường đá trắng có độ khó cao nhất, thường
                                            mất khoảng 2 ngày để hoàn thành và đòi hỏi sự chuẩn bị kỹ lưỡng. Đường ống
                                            nước, đường Ma Thiên Lãnh và đường núi Phụng cũng có độ khó và dễ lạc đường.
                                            Rất quan trọng để có hướng dẫn viên địa phương am hiểu về trekking và leo
                                            núi ở khu vực này.
                                            Các cung đường này mang đến những trải nghiệm khác nhau cho những người muốn
                                            khám phá núi Bà Đen.
                                            2. Núi Dinh, Vũng Tàu
                                            &nbsp;
                                            Nằm ở huyện Tân Thành, cách trung tâm thành phố Vũng Tàu khoảng 35km và xa
                                            khỏi sự ồn ào và đông đúc của Sài Gòn tầm 80 cây số, địa điểm này có một độ
                                            cao 500m. Quãng đường đến đây không quá xa, do đó nó luôn được những người
                                            đi phượt ưu ái vào mỗi cuối tuần hoặc trong các dịp lễ ngắn/ dài ngày. Đường
                                            lên đỉnh có trải nhựa đường, phù hợp cho người mới tìm hiểu về leo núi.
                                            Hướng dẫn đường đi&nbsp;
                                            Có nhiều cung đường để bạn lựa chọn tùy theo trình độ và khả năng của bạn.
                                            Có những cung đường mòn cho người mới chỉ từ 3-5km hoặc thậm chí lên đến
                                            13km cho dân leo núi lâu năm yêu thích thử thách.
                                            3. Núi Chứa Chan, Đồng Nai
                                            Đây là một địa điểm leo núi gần Sài Gòn, cách TP.HCM chỉ 100km. Núi Chứa
                                            Chan còn có tên gọi khác là Núi Gia Lào. Với độ cao 837m so với mực nước
                                            biển, núi Chứa Chan được mệnh danh là “Nóc nhà Đồng Nai”, cao thứ nhì trong
                                            khu vực Đông Nam Bộ chỉ sau Núi Bà Đen.
                                            Thời gian đẹp nhất để leo núi Chứa Chan là từ tháng 10 đến tháng 4 khi thời
                                            tiết khô ráo.
                                            4. Núi Tà Cú, Bình Thuận
                                            Núi Tà Cú nằm tại thị trấn Thuận Nam, huyện Hàm Thuận Nam, tỉnh Bình Thuận.
                                            Ngọn núi này tọa lạc ngay ven quốc lộ 1A, giúp việc di chuyển trở nên thuận
                                            tiện. Bạn chỉ cần đi khoảng 28km từ trung tâm thành phố Phan Thiết là đến
                                            nơi. Với độ cao 649m, Núi Tà Cú trước đây là một ngọn núi lửa. Hiện nay, nó
                                            đã được chuyển đổi thành một khu vực rừng bảo tồn thiên nhiên quốc gia, nổi
                                            tiếng với hệ động vật và thảm thực vật đa dạng và phong phú, với nhiều loài
                                            có trong sách đỏ.
                                            Không chỉ có cảnh sắc thiên nhiên hùng vĩ, núi Tà Cú còn mang vẻ đẹp ngàn
                                            năm của quần thể 3 ngôi chùa lớn: Linh Sơn Trường Thọ, Chùa Tổ và Chùa Long
                                            Đoàn. Vì vậy, hàng năm vào các dịp lễ lớn, lượng du khách kéo về đây rất
                                            đông đảo.
                                            Hướng dẫn đường đi
                                            Để lên núi Tà Cú, bạn sẽ phải vượt hơn 1000 bậc thang với quãng đường 3km để
                                            lên đến nơi. Ngoài ra, ở đây...
                                        </p>
                                    </div>
                                </div>
                                <a class="btn btn-light btn-view-more"
                                    href="/top-10-nhung-dia-diem-leo-nui-o-viet-nam-cho-nguoi-moi"
                                    title="Xem chi tiết">
                                    Xem chi tiết
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper_blog = null;

            function initSwiperBlog() {
                swiper_blog = new Swiper('.blog_swiper', {
                    slidesPerView: 4,
                    grabCursor: true,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    navigation: {
                        nextEl: '.section_blog .swiper-button-next',
                        prevEl: '.section_blog .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        991: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperBlog() {
                console.log('is_destroy');
                if (swiper_blog) {
                    swiper_blog.destroy(true, true);
                    swiper_blog = null;
                }
            }

            function toggleSwiperBlog() {
                if ($(window).width() <= 767 && swiper_blog) {
                    destroySwiperBlog();
                } else if ($(window).width() > 767 && !swiper_blog) {
                    initSwiperBlog();
                }
            }
            toggleSwiperBlog();
            $(window).on('resize', function() {
                toggleSwiperBlog();
            });
        </script>
        <section class="section-index section_brands">
            <div class="container">
                <div class="section-title side-left has-control">
                    <h2>
                        Thương hiệu nổi bật
                    </h2>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper_brands swiper-container control-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" title="Brand 1" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_1.png?1758009149569"
                                    alt="Brand 1" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" title="Brand 2" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_2.png?1758009149569"
                                    alt="Brand 2" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" title="Brand 3" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_3.png?1758009149569"
                                    alt="Brand 3" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" title="Brand 4" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_4.png?1758009149569"
                                    alt="Brand 4" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" title="Brand 5" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_5.png?1758009149569"
                                    alt="Brand 5" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" title="Brand 6" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_6.png?1758009149569"
                                    alt="Brand 6" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/collections/all" title="Brand 7" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_7.png?1758009149569"
                                    alt="Brand 7" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/collections/all" title="Brand 8" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_8.png?1758009149569"
                                    alt="Brand 8" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/collections/all" title="Brand 9" class="brand-item">
                                <img data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/img_brand_9.png?1758009149569"
                                    alt="Brand 9" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            var swiper_brand = null;

            function initSwiperBrand() {
                swiper_brand = new Swiper('.swiper_brands', {
                    slidesPerView: 8,
                    spaceBetween: 20,
                    watchOverflow: true,
                    slidesPerGroup: 1,
                    navigation: {
                        nextEl: '.section_brands .swiper-button-next',
                        prevEl: '.section_brands .swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        768: {
                            slidesPerView: 5,
                            spaceBetween: 14
                        },
                        992: {
                            slidesPerView: 5,
                            spaceBetween: 20
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 20
                        },
                        1200: {
                            slidesPerView: 8,
                            spaceBetween: 20
                        }
                    }
                });
            }

            function destroySwiperBrand() {
                if (swiper_brand) {
                    swiper_brand.destroy(true, true);
                    swiper_brand = null;
                }
            }

            function toggleSwiperBrand() {
                if ($(window).width() <= 767 && swiper_brand) {
                    destroySwiperBrand();
                } else if ($(window).width() > 767 && !swiper_brand) {
                    initSwiperBrand();
                }
            }
            toggleSwiperBrand();
            $(window).on('resize', function() {
                toggleSwiperBrand();
            });
        </script>
        <div id="js-global-alert" class="alert alert-success" role="alert">
            <button type="button" class="close"><span aria-hidden="true"><span
                        aria-hidden="true">&times;</span></span></button>
            <h5 class="alert-heading"></h5>
            <p class="alert-content"></p>
        </div>
        <footer class="footer">
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="fot-col col-xs-12 col-md-6 col-lg-6 col-xl-3 footer-info">
                            <div class="logo-footer">
                                <a href="/" title="SUDES SPORT">
                                    <img width="300" height="51"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/logo_footer.png?1758009149569"
                                        alt="Sudes Sport" class="lazyload">
                                </a>
                            </div>
                            <div class="des_foo">
                                Sudes Sport - Nhà bán lẻ & phân phối thương hiệu các mặt hàng về thể thao như giày chạy
                                bộ, đồ bơi, kính bơi, giày thể thao, đồ tập gym,... với chất lượng hàng đầu tại Việt
                                Nam.
                            </div>
                            <div class="social-footer">
                                <div class="social">
                                    <a href="https://facebook.com/" target="_blank" aria-label="Facebook"
                                        title="Theo dõi Sudes Sport trên Facebook">
                                        <img class="lazyload" width=35 height=35 alt="Facebook"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/facebook_2.svg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"
                                        title="Theo dõi Sudes Sport trên Instagram">
                                        <img class="lazyload" width=35 height=35 alt="Instagram"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/instagram_1.svg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                    <a href="https://shopee.vn/" target="_blank" aria-label="Shopee"
                                        title="Theo dõi Sudes Sport trên Shopee">
                                        <img class="lazyload" width=35 height=35 alt="Shopee"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/shopee.svg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                    <a href="https://www.lazada.vn/" target="_blank" aria-label="Lazada"
                                        title="Theo dõi Sudes Sport trên Lazada">
                                        <img class="lazyload" width=35 height=35 alt="Lazada"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/lazada.svg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                    <a href="https://www.tiktok.com/vi-VN" target="_blank" aria-label="Tiktok"
                                        title="Theo dõi Sudes Sport trên Tiktok">
                                        <img class="lazyload" width=35 height=35 alt="Tiktok"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/tiktok.svg?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="fot-col col-xs-12 col-md-6 col-lg-6 col-xl-3 footer-contact">
                            <h4 class="title-menu">
                                Liên hệ
                            </h4>
                            <div class="list-menu toggle-mn">
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Địa chỉ: </b>
                                        Số 70 Lữ Gia, Phường 15, Quận 11, TP. Hồ Chí Minh
                                    </span>
                                </div>
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Điện thoại: </b>
                                        <a title="1900 6750" href="tel:19006750">
                                            1900 6750
                                        </a>
                                    </span>
                                </div>
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Zalo: </b>
                                        <a title="036 1234 567" href="https://zalo.me/0361234567">
                                            036 1234 567
                                        </a>
                                    </span>
                                </div>
                                <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Email: </b>
                                        <a title="support@sapo.vn"
                                            href="/cdn-cgi/l/email-protection#57242227273825231724362738792139">
                                            <span class="__cf_email__"
                                                data-cfemail="9eedebeeeef1eceadeedffeef1b0e8f0">[email&#160;protected]</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <a class="btn btn-primary btn-stores" href="/he-thong-cua-hang"
                                title="Chuỗi cửa hàng Sudes Sport">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                    <path
                                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                </svg>
                                <span>Chuỗi cửa hàng Sudes Sport</span>
                            </a>
                        </div>
                        <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                            <h4 class="title-menu clicked">
                                Chính sách
                            </h4>
                            <ul class="list-menu toggle-mn hidden-mob">
                                <li class="li_menu">
                                    <a href="/chinh-sach-mua-hang" title="Chính sách mua hàng">Chính sách mua
                                        hàng</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/chinh-sach-thanh-toan" title="Chính sách thanh toán">Chính sách thanh
                                        toán</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/chinh-sach-van-chuyen" title="Chính sách vận chuyển">Chính sách vận
                                        chuyển</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/chinh-sach-bao-mat" title="Chính sách bảo mật">Chính sách bảo mật</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/cam-ket-cua-hang" title="Cam kết cửa hàng">Cam kết cửa hàng</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/chinh-sach-thanh-vien" title="Chính sách thành viên">Chính sách thành
                                        viên</a>
                                </li>
                            </ul>
                        </div>
                        <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                            <h4 class="title-menu clicked">
                                Hướng dẫn
                            </h4>
                            <ul class="list-menu toggle-mn hidden-mob list-social">
                                <li class="li_menu">
                                    <a href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/huong-dan-doi-tra" title="Hướng dẫn đổi trả">Hướng dẫn đổi trả</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/huong-dan-chuyen-khoan" title="Hướng dẫn chuyển khoản">Hướng dẫn
                                        chuyển khoản</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/huong-dan-tra-gop" title="Hướng dẫn trả góp">Hướng dẫn trả góp</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/huong-dan-hoan-hang" title="Hướng dẫn hoàn hàng">Hướng dẫn hoàn
                                        hàng</a>
                                </li>
                                <li class="li_menu">
                                    <a href="/kiem-tra-don-hang" title="Kiểm tra đơn hàng">Kiểm tra đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                            <h4 class="title-menu">
                                Hỗ trợ thanh toán
                            </h4>
                            <div class="block-payment">
                                <div class="payment-footer list-menu">
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="MoMo"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_1.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="Zalo Pay"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_2.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="VnPay"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_3.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="Moca"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_4.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="Visa"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_5.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="payment-item">
                                        <img class="lazyload" width=126 height=58 alt="ATM"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_6.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                </div>
                            </div>
                            <div class="block-certifi">
                                <h4 class="title-menu">
                                    Được chứng nhận bởi
                                </h4>
                                <div class="certifi-footer">
                                    <a href="#" title="Chứng nhận 1" target="_blank">
                                        <img width=335 height=108 class="lazyload" alt="Chứng nhận 1"
                                            data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/certifi_1.png?1758009149569"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-footer-bottom copyright clearfix">
                <div class="container">
                    <div class="row tablet">
                        <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                            <span class="wsp">
                                <span class="mobile">© Bản quyền thuộc về <b>Sudes Team</b>
                                    <span class="dash"> | </span>
                                </span>
                                <span class="opacity1">Cung cấp bởi</span>
                                <a href="https://www.sapo.vn/?utm_campaign=cpn:kho_theme-plm:footer&utm_source=Tu_nhien&utm_medium=referral&utm_content=fm:text_link-km:-sz:&utm_term=&campaign=kho_theme-sapo"
                                    rel="nofollow" title="Sapo" target="_blank">Sapo</a>
                            </span>
                        </div>
                    </div>
                    <div class="footer-widget">
                        <a href="#" class="backtop" title="Lên đầu trang">
                            <i class="icon-up">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                </svg>
                            </i>
                        </a>
                        <div class="main-widget">
                            <div class="def-content unsee element">
                                <div class="def-header">
                                    Liên hệ với chúng tôi
                                    <div class="close-icon" title="Đóng">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="item phone">
                                    <a href="tel:19006750">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                                </path>
                                            </svg>
                                        </span>
                                        <div class="detail">
                                            <b class="arcu-item-title">
                                                Hotline:
                                            </b>
                                            <span class="arcu-item-subtitle">
                                                19006750
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item zalo">
                                    <a target="_blank" href="https://zalo.me/0123456789">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                viewBox="0 0 614.501 613.667" xml:space="preserve">
                                                <path fill="currentColor"
                                                    d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z">
                                                </path>
                                                <path fill="currentColor"
                                                    d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z">
                                                </path>
                                                <path fill="currentColor"
                                                    d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z">
                                                </path>
                                            </svg>
                                        </span>
                                        <div class="detail">
                                            <b class="arcu-item-title">
                                                Zalo chat:
                                            </b>
                                            <span class="arcu-item-subtitle">
                                                Tài khoản Zalo: 0123 456 789
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item mess">
                                    <a target="_blank" href="https://m.me/sapowebvietnam">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                                            </svg>
                                        </span>
                                        <div class="detail">
                                            <b class="arcu-item-title">
                                                Messenger:
                                            </b>
                                            <span class="arcu-item-subtitle">
                                                m.me/sapowebvietnam
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="item map">
                                    <a target="_blank" href="/he-thong-cua-hang">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                                <path fill-rule="evenodd"
                                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                                            </svg>
                                        </span>
                                        <div class="detail">
                                            <b class="arcu-item-title">
                                                Hệ thống cửa hàng:
                                            </b>
                                            <span class="arcu-item-subtitle">
                                                Xem địa chỉ cửa hàng
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="out-circle">
                                <div class="main-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g transform="translate(-825 -308)">
                                            <g>
                                                <path transform="translate(825 308)" fill="#FFFFFF"
                                                    d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <p>
                                        Hỗ trợ
                                    </p>
                                </div>
                                <div class="close-icon unsee element">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(function() {
                                $('.close-icon').click(function(event) {
                                    $('.element').toggleClass('unsee');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <link rel="preload" as="style"
        href="/site/css/ajaxcart.scss.css?1758009149569" type="text/css">
    <link href="/site/css/ajaxcart.scss.css?1758009149569"
        rel="stylesheet" type="text/css" media="all" />
    <div class="backdrop__body-backdrop___1rvky"></div>
    <script type="text/javascript">
        window.theme = window.theme || {};
        var wW = $(window).width();
        var timeout;

        $('.img_hover_cart').click(function() {
            $('.cart-sidebar, .backdrop__body-backdrop___1rvky').addClass('active');
        });

        $(document).on('click', '.backdrop__body-backdrop___1rvky, .cart_btn-close', function() {
            $('.backdrop__body-backdrop___1rvky, .cart-sidebar, #popup-cart-desktop, .popup-cart-mobile')
                .removeClass('active');
            return false;
        })
    </script>
    <div id="popup-cart-desktop" class="popup-cart">
        <div class="header-popcart">
            <div class="top-cart-header">
                <span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="check-circle"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="svg-inline--fa fa-check-circle fa-w-16">
                        <path fill="currentColor"
                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"
                            class=""></path>
                    </svg>
                    Bạn đã thêm [<a class="cart-popup-name" href="#"></a>] vào giỏ hàng
                </span>
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng">
                Giỏ hàng của bạn hiện có <span class="count_item_pr"></span> sản phẩm
            </a>
            <div class="box-free-ship">
                <div class="progress js-free-shipping" data-value="800000">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <span class="free-shipping-content js-free-shipping-text"></span>
                </div>
            </div>
            <a title="Đóng" class="cart_btn-close" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="512" height="512" x="0" y="0" viewBox="0 0 365.696 365.696"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <path xmlns="http://www.w3.org/2000/svg"
                            d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                            fill="#ffffff" data-original="#000000" style="" class="" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="cartPopupContainer">
        </div>
    </div>
    <div id="popup-cart-mobile" class="popup-cart-mobile">
        <div class="header-popcart">
            <div class="top-cart-header">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="682.66669pt"
                        viewBox="-21 -21 682.66669 682.66669" width="682.66669pt">
                        <path
                            d="m322.820312 387.933594 279.949219-307.273438 36.957031 33.671875-314.339843 345.023438-171.363281-162.902344 34.453124-36.238281zm297.492188-178.867188-38.988281 42.929688c5.660156 21.734375 8.675781 44.523437 8.675781 68.003906 0 148.875-121.125 270-270 270s-270-121.125-270-270 121.125-270 270-270c68.96875 0 131.96875 26.007812 179.746094 68.710938l33.707031-37.113282c-58.761719-52.738281-133.886719-81.597656-213.453125-81.597656-85.472656 0-165.835938 33.285156-226.273438 93.726562-60.441406 60.4375-93.726562 140.800782-93.726562 226.273438s33.285156 165.835938 93.726562 226.273438c60.4375 60.441406 140.800782 93.726562 226.273438 93.726562s165.835938-33.285156 226.273438-93.726562c60.441406-60.4375 93.726562-140.800782 93.726562-226.273438 0-38.46875-6.761719-75.890625-19.6875-110.933594zm0 0" />
                    </svg>
                    Mua hàng thành công
                </span>
            </div>
            <div class="media-content bodycart-mobile">
            </div>
            <a class="noti-cart-count" href="/cart" title="Giỏ hàng"> Giỏ hàng của bạn hiện có <span
                    class="count_item_pr"></span> sản phẩm </a>
            <div class="box-free-ship">
                <div class="progress js-free-shipping" data-value="800000">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <span class="free-shipping-content js-free-shipping-text"></span>
                </div>
            </div>
            <a title="Đóng" class="cart_btn-close iconclose" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                    style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z" />
                        </g>
                    </g>
                </svg>
            </a>
            <div class="bottom-action">
                <div class="cart_btn-close tocontinued">
                    Tiếp tục mua hàng
                </div>
                <a href="/checkout" class="checkout" title="Thanh toán ngay">
                    Thanh toán ngay
                </a>
            </div>
        </div>
    </div>
    <div id="quick-view-product" class="quickview-product" style="display:none;">
        <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="quick-view-product"></div>
        <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
                <div class="row">
                    <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-5">
                        <div class="image-block large-image col_large_default">
                            <span class="view_full_size">
                                <a class="img-product" title="Ảnh sản phẩm" href="javascript:;">
                                    <img src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/logo.png?1758009149569"
                                        id="product-featured-image-quickview"
                                        class="img-responsive product-featured-image-quickview" alt="quickview" />
                                </a>
                            </span>
                            <div class="loading-imgquickview" style="display:none;"></div>
                        </div>
                        <div class="more-view-wrapper clearfix">
                            <div class="thumbs_quickview owl_nav_custome1 swiper-container"
                                id="thumbs_list_quickview">
                                <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq swiper-wrapper"
                                    id="thumblist_quickview"></ul>
                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-7 details-pro style_product style_border">
                        <div class="box-product-info">
                            <div class="group-info-pro">
                                <div class="head-qv group-status">
                                    <h3 class="qwp-name title-product">abc</h3>
                                    <div class="vend-qv group-status">
                                        <div class="left_vend">
                                            <div class="first_status ">Thương hiệu:
                                                <span class="vendor_ status_name"></span>
                                            </div>
                                            <span class="line_tt">|</span>
                                            <div class="top_sku first_status">Mã sản phẩm:
                                                <span class="sku_ status_name"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quickview-info">
                                    <span class="prices price-box">
                                        <span class="price product-price"></span>
                                        <del class="old-price"></del>
                                    </span>
                                </div>
                            </div>
                            <div class="product-description product-summary">
                                <div class="rte">
                                </div>
                            </div>
                            <form action="/cart/add" method="post" enctype="multipart/form-data"
                                class="quick_option variants form-ajaxtocart form-product">
                                <span class="price-product-detail d-none" style="opacity: 0;">
                                    <span class=""></span>
                                </span>
                                <select name='variantId' class="d-none" style="display:none"></select>
                                <div class="form_product_content">
                                    <div class="count_btn_style quantity_wanted_p">
                                        <div class=" soluong1 clearfix">
                                            <div class="input_number_product">
                                                <a class="btn_num num_1 button button_qty" href="javascript:;"
                                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">-</a>
                                                <input type="text" id="quantity-detail" name="quantity"
                                                    value="1" maxlength="2"
                                                    class="form-control prd_quantity"
                                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                    onchange="if(this.value == 0)this.value=1;">
                                                <a class="btn_num num_2 button button_qty" href="javascript:;"
                                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">+</a>
                                            </div>
                                        </div>
                                        <div class="button_actions clearfix">
                                            <button type="submit"
                                                class="btn_cool btn btn-primary btn_base fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart add_to_cart_detail">
                                                <span class="btn-content text_1">Thêm vào giỏ hàng</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a title="Đóng" class="quickview-close close-window" href="javascript:;">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                    class="svg-inline--fa fa-times fa-w-10">
                    <path fill="currentColor"
                        d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                        class=""></path>
                </svg>
            </a>
        </div>
    </div>
    <link rel="preload" as="script" href="/site/js/quickview.js?1758009149569" />
    <script type="text/javascript" defer src="/site/js/quickview.js?1758009149569"></script>
    <link rel="preload" as="script" href="/site/js/main.js?1758009149569" />
    <script src="/site/js/main.js?1758009149569" type="text/javascript"></script>
    <script src="/site/js/index.js?1758009149569" type="text/javascript"></script>
    <link rel="preload" as="script" href="/site/js/picbox.js?1758009149569" />
    <link rel="preload" as='style' type="text/css" href="/site/css/picbox.scss.css?1758009149569">
    <link href="/site/css/picbox.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />
    <script src="/site/js/picbox.js?1758009149569" type="text/javascript"></script>
    <div id="modal-banner" class="modal-banner" style="display:none;" data-delay="5000">
        <div class="modalbanner-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="modal-banner-promo">
            <div class="modal-body">
                <form>
                    <a href="/collections/all" title="Banner promotion" class="banner-promotion"
                        data-section="banner_popup">
                        <script type="text/x-custom-template" data-template="banner_popup">
                        <img width="600" height="548" alt="Banner promotion" src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/popup_banner.png?1758009149569" />
                     </script>
                    </a>
                    <div class="check-close">
                        <input type="checkbox" id="check-close-banner" name="vehicle1" value="Bike">
                        <label for="check-close-banner">Không hiện lại thông báo nữa</label>
                    </div>
                    <a title="Đóng" class="modalbanner-close close-window" href="javascript:;">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-times fa-w-10">
                            <path fill="currentColor"
                                d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                class=""></path>
                        </svg>
                    </a>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function($) {
            var modalPopup = $('.modal-banner');
            var close = $('.modalbanner-close');
            var checkBox = $('#check-close-banner');
            var banner = $('#modal-banner .banner-promotion');

            $(document).on('click', '#modal-banner .modalbanner-overlay, .fancybox-overlay', function(e) {
                hidePopup();
                if (checkBox.prop('checked')) {
                    var currentDate = new Date();
                    var expiryTime = new Date(currentDate.getTime() + 8 * 60 * 60 * 1000);
                    expiryTime = expiryTime.toLocaleString("en-US", {
                        timeZone: "Asia/Ho_Chi_Minh"
                    });
                    document.cookie = "popupClosed=true; expires=" + expiryTime + "; path=/";
                }
            });

            close.click(function() {
                hidePopup();
                if (checkBox.prop('checked')) {
                    var currentDate = new Date();
                    var expiryTime = new Date(currentDate.getTime() + 8 * 60 * 60 * 1000);
                    expiryTime = expiryTime.toLocaleString("en-US", {
                        timeZone: "Asia/Ho_Chi_Minh"
                    });
                    document.cookie = "popupClosed=true; expires=" + expiryTime + "; path=/";
                }
            });
            banner.click(function() {
                var currentDate = new Date();
                var expiryTime = new Date(currentDate.getTime() + 8 * 60 * 60 * 1000);
                expiryTime = expiryTime.toLocaleString("en-US", {
                    timeZone: "Asia/Ho_Chi_Minh"
                });
                document.cookie = "popupClosed=true; expires=" + expiryTime + "; path=/";
            });

            function hidePopup() {
                modalPopup.hide();
            }

            function isPopupClosed() {
                return document.cookie.indexOf("popupClosed") >= 0;
            }

            if (!isPopupClosed()) {
                var delayTime = $('#modal-banner').data('delay') || 3000;
                setTimeout(function() {
                    var section = $('#modal-banner .banner-promotion');
                    var template = $('script[data-template="banner_popup"]').html();
                    if (template) {
                        $('.banner-promotion[data-section="banner_popup"]').html(template);
                        var banner = $('#modal-banner .banner-promotion');
                        banner.click(function() {
                            var currentDate = new Date();
                            var expiryTime = new Date(currentDate.getTime() + 8 * 60 * 60 * 1000);
                            expiryTime = expiryTime.toLocaleString("en-US", {
                                timeZone: "Asia/Ho_Chi_Minh"
                            });
                            document.cookie = "popupClosed=true; expires=" + expiryTime +
                            "; path=/";
                        });
                    }
                    modalPopup.show();
                }, delayTime);
            }
        });
    </script>
    <div id="list-favorite" class="d-none">
        <div class="list-favorite-right container" data-type="wishlist">
            <div class="list-favorite-main">
                <div class="list-favorite-list row">
                </div>
            </div>
        </div>
    </div>
    <script>
        var favoriSudes = {};
        favoriSudes.General = {
            init: function() {
                favoriSudes.Wishlist.init();
            },
        }
        favoriSudes.Wishlist = {
            init: function() {
                this.setWishlistProductLoop();
                favoriSudes.Wishlist.wishlistProduct();
            },
            setWishlistProductLoop: function() {
                $('body').on('click', '.remove-wishlist', function(e) {
                    favoriSudes.Wishlist.removeWishlist($(this).attr('data-wish'));
                    theme.alert.new('Xóa khỏi danh sách yêu thích',
                        'Sản phẩm của bạn đã xóa khỏi sách yêu thích thành công.', 3000, 'alert-primary'
                        );
                })
                $('body').on('click', '.setWishlist', function(e) {
                    e.preventDefault();
                    if ($(this).hasClass('active')) {
                        favoriSudes.Wishlist.removeWishlist($(this).attr('data-wish'));
                        theme.alert.new('Xóa khỏi danh sách yêu thích',
                            'Sản phẩm của bạn đã xóa khỏi sách yêu thích thành công.', 3000,
                            'alert-primary');
                    } else {
                        theme.alert.new('Thêm vào danh sách yêu thích',
                            'Sản phẩm của bạn đã thêm vào danh sách yêu thích thành công.', 3000,
                            'alert-success');
                        var phand = [];
                        var handle = $(this).attr('data-wish');
                        if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                            var las = Cookies.getJSON('sudes_wishlist_products');
                            if ($.inArray(handle, las) === -1) {
                                phand = [handle];
                                for (var i = 0; i < las.length; i++) {
                                    phand.push(las[i]);
                                    if (phand.length > 100) {
                                        break;
                                    }
                                }
                                Cookies.set('sudes_wishlist_products', phand, {
                                    expires: 15,
                                    sameSite: 'None',
                                    secure: true
                                });
                            }
                        } else {
                            phand = [handle];
                            Cookies.set('sudes_wishlist_products', phand, {
                                expires: 15,
                                sameSite: 'None',
                                secure: true
                            });
                        }
                        favoriSudes.Wishlist.wishlistProduct();
                    }
                })
            },
            wishlistProduct: function() {
                if ($('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').length > 0) {
                    if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                        $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').html('')
                        var last_wishlist_pro_array = Cookies.getJSON('sudes_wishlist_products');
                        favoriSudes.Wishlist.activityWishlist();
                        var recentview_promises = [];
                        for (var i = 0; i < 100; i++) {
                            if (typeof last_wishlist_pro_array[i] == 'string') {
                                var promise = new Promise(function(resolve, reject) {
                                    $.ajax({
                                        url: '/products/' + last_wishlist_pro_array[i] +
                                            '?view=favorite',
                                        async: false,
                                        success: function(product) {
                                            resolve({
                                                error: false,
                                                data: product
                                            });
                                        },
                                        error: function(err) {
                                            if (err.status === 404) {
                                                try {
                                                    var u = ((this.url.split('?'))[0]).replace(
                                                        '/products/', '');
                                                    resolve({
                                                        error: true,
                                                        handle: u
                                                    });
                                                } catch (e) {
                                                    resolve({
                                                        error: false,
                                                        data: ''
                                                    })
                                                }
                                            } else {
                                                resolve({
                                                    error: false,
                                                    data: ''
                                                });
                                            }
                                            favoriSudes.Wishlist.removeWishlist(
                                                last_wishlist_pro_array[i])
                                        }
                                    })
                                });
                                recentview_promises.push(promise);
                            }
                        }
                        Promise.all(recentview_promises).then(function(values) {
                            if (values.length > 0) {
                                var x = [];
                                setTimeout(function() {
                                    $('.js-wishlist-count').html(values.length)
                                }, 500)
                                $.each(values, function(i, v) {
                                    if (v.error) {
                                        x.push(v.handle);
                                    } else {

                                        awe_lazyloadImage();
                                    }
                                });
                                if (x.length > 0) {
                                    var new_last_viewed_pro_array = [];
                                    $.each(last_wishlist_pro_array, function(i, v) {
                                        if ($.inArray(v, x) === -1) {
                                            new_last_viewed_pro_array.push(v);
                                        }
                                    })
                                    if (new_last_viewed_pro_array.length > 0) {
                                        Cookies.set('last_viewed_products', new_last_viewed_pro_array, {
                                            expires: 180,
                                            sameSite: 'None',
                                            secure: true
                                        });
                                    }
                                }
                            } else {
                                $('.js-wishlist-count').html('0')
                                $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list')
                                    .append(
                                        '<div class="list-favorite-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào!</div></div>'
                                        )
                            }
                        });
                    } else {
                        $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').append(
                            '<div class="list-favorite-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào! </div></div>'
                            )
                    }
                } else {
                    $('#list-favorite .list-favorite-right[data-type="wishlist"] .list-favorite-list').append(
                        '<div class="list-favorite-right-main-top-error col-lg-12 col-md-12 col-sm-12 col-12"><div class="alert alert-warning">Bạn chưa có sản phẩm yêu thích nào! </div></div>'
                        )
                }
            },
            activityWishlist: function() {
                var last_wishlist_pro_array = Cookies.getJSON('sudes_wishlist_products');
                $.each(last_wishlist_pro_array, function(i, v) {
                    $('.setWishlist[data-wish="' + v + '"]').html(
                        '<img class="img-unlike" width="25" height="25" src="https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heartadd.png?1650269474235" alt="Bỏ yêu thích">Bỏ yêu thích</div>'
                        ).addClass('active').attr('title', 'Bỏ yêu thích');
                })
            },
            removeWishlist: function(handle) {
                var phand = [];

                $('a[data-wish="' + handle + '"]').html(
                    '<img width="25" height="25" src="https://bizweb.dktcdn.net/100/451/884/themes/857425/assets/heart.png?1650269474235" alt="Thêm vào yêu thích">Thêm vào yêu thích</div>'
                    ).removeClass('active').attr('title', 'Thêm vào yêu thích');
                if (document.cookie.indexOf('sudes_wishlist_products') !== -1) {
                    var las = Cookies.getJSON('sudes_wishlist_products');
                    var flagIndex = $.inArray(handle, las);
                    las.splice(flagIndex, 1)
                    Cookies.set('sudes_wishlist_products', las, {
                        expires: 15,
                        sameSite: 'None',
                        secure: true
                    });
                } else {
                    phand = [handle];
                    Cookies.set('sudes_wishlist_products', phand, {
                        expires: 15,
                        sameSite: 'None',
                        secure: true
                    });
                }
                favoriSudes.Wishlist.wishlistProduct(3, 5);
            }
        }
        favoriSudes.Wishlist.init();
    </script>
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    <div class="popup-sapo active">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
            </svg>
        </div>
        <div class="content">
            <div class="title">
                Có thể tích hợp thêm các ứng dụng
            </div>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                    <a href="https://apps.sapo.vn/danh-gia-san-pham-v2" target="_blank"
                        title="Đánh giá sản phẩm">Đánh giá sản phẩm</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                    <a href="https://apps.sapo.vn/mua-x-tang-y-v2" target="_blank" title="Mua X tặng Y">Mua X tặng
                        Y</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                    <a href="https://apps.sapo.vn/quan-ly-affiliate-v2" target="_blank"
                        title="Ứng dụng Affiliate">Ứng dụng Affiliate</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                    <a href="https://apps.sapo.vn/ae-da-ngon-ngu" target="_blank" title="Đa ngôn ngữ">Đa ngôn
                        ngữ</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                    </svg>
                    <a href="#" target="_blank" title="Livechat Facebook">Livechat Facebook</a>
                </li>
            </ul>
            <div class="ghichu">
                Lưu ý với các ứng dụng trả phí bạn cần cài đặt và mua ứng dụng này trên App store Sapo để sử dụng ngay
            </div>
            <a title="Đóng" class="close-popup-sapo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z">
                            </path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <script>
        $('.popup-sapo .icon').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
        $('.close-popup-sapo').click(function() {
            $(".popup-sapo").toggleClass("active");
        });
    </script>
    <div class="popup-ngonngu">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-globe2" viewBox="0 0 16 16">
                <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z" />
            </svg>
        </div>
        <ul class="language">
            <li>
                <a href="#"><img
                        src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/vn.png?1699256128806"
                        alt="Tiếng Việt">
                    <span>Tiếng Việt</span>
                </a>
            </li>
            <li>
                <a href="#"><img
                        src="//bizweb.dktcdn.net/100/496/044/themes/927290/assets/en.png?1699256128806"
                        alt="Tiếng Anh">
                    <span>English</span>
                </a>
            </li>
        </ul>
    </div>
    <a target="_blank" class="livechat-mes" href="https://m.me/sapo.vn">
        <img src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/messenger.svg?1758009149569" alt="Messenger">
    </a>
</body>

</html>
