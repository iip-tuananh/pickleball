<!DOCTYPE html>
<html lang="vi">

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body ng-app="App">
    <div class="opacity_menu"></div>

    @include('site.partials.header')

    <div class="bodywrap">
        @yield('content')
        @include('site.partials.footer')
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
    <div id="popupCartModal" class="modal fade" role="dialog">
    </div>
    {{-- <div class="popup-ngonngu">
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
    </div> --}}
    <a target="_blank" class="livechat-mes" href="https://m.me/sapo.vn">
        <img src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/messenger.svg?1758009149569" alt="Messenger">
    </a>

    @include('site.partials.angular_mix')


    @stack('script')

</body>

</html>
