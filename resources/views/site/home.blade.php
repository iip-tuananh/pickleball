@extends('site.layouts.master')
@section('title')
    {{ $config->meta_title ?? $config->web_title }}
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
@endsection
@section('css')
@endsection
@section('content')
    <h1 class="d-none">{{ $config->web_des }}</h1>
    <div class="section_slider swiper-container">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="swiper-slide  has-effect">
                    <picture>
                        <source media="(min-width: 1200px)"
                            srcset="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x717' }}">
                        <source media="(min-width: 992px)"
                            srcset="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x717' }}">
                        <source media="(min-width: 569px)"
                            srcset="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x717' }}">
                        <source media="(max-width: 480px)"
                            srcset="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x717' }}">
                        <img width="1920" height="717"
                            src="{{ $banner->image ? $banner->image->path : 'https://placehold.co/1920x717' }}"
                            alt="{{ $banner->title }}" class="img-responsive center-block" loading="lazy" />
                    </picture>
                    <div class="container-effect">
                        <div class="title-2">
                            {{ $banner->title }}
                        </div>
                        <div class="title-3">
                            {!! $banner->intro !!}
                        </div>
                        <a href="{{ $banner->link }}" title="Xem chi tiết" class="btn btn-primary">
                            <span>Xem chi tiết</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    <script>
        $(document).ready(function() {
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
                    @foreach ($productCategories as $category)
                        <div class="swiper-slide">
                            <a href="{{ route('front.show-product-category', $category->slug) }}"
                                title="{{ $category->name }}" class="cate-item">
                                <div class="bg-thumb">
                                    <div class="thumb">
                                        <img data-src="{{ $category->image ? $category->image->path : 'https://placehold.co/200x200' }}"
                                            alt="{{ $category->name }}" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            loading="lazy" />
                                    </div>
                                </div>
                                <div class="cate-content">
                                    <h3 class="line-clamp-2-new">
                                        {{ $category->name }}
                                    </h3>
                                    <div class="status">
                                        <span class="view-more">Xem chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
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
        });
    </script>
    @if ($categorySpecialFlashsale)
        <section class="section-index section_product section_flash_sale">
            <div class="bg-section">
                <div class="container">
                    <div class="row">
                        <div class="block-countdown col-sm-12 col-xs-12 col-lg-3 col-xl-2">
                            <div class="section-title side-left has-control">
                                <h2>
                                    <a href="{{ route('front.show-product-category', $categorySpecialFlashsale->slug) }}"
                                        title="{{ $categorySpecialFlashsale->name }}">
                                        {{ $categorySpecialFlashsale->name }}
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
                                        data-date="{{ date('m-d-Y-H-i-s', strtotime($categorySpecialFlashsale->end_date)) }}">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('front.show-product-category', $categorySpecialFlashsale->slug) }}"
                                title="Xem tất cả" class="btn btn-primary hidden-sm">
                                <span>Xem tất cả</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="block-product-list col-sm-12 col-xs-12 col-lg-9 col-xl-10">
                            <div class="swiper_sale swiper-container">
                                <div class="swiper-wrapper load-after" data-section="section_flash_sale">
                                    @foreach ($categorySpecialFlashsale->products as $product)
                                        <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                            {{-- <div class="item_product_main">
                                    </div> --}}
                                            @include('site.products.product_item', ['product' => $product])
                                        </div>
                                    @endforeach
                                </div>
                                <div class="view-more clearfix">
                                    <a href="{{ route('front.show-product-category', $categorySpecialFlashsale->slug) }}"
                                        title="Xem tất cả" class="btn btn-primary">
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
    @endif
    {{-- <section class="section-index section_product_tab">
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
    </script> --}}

    @if ($smallBanners->count() > 0)
    <section class="section-index section_group_banner">
        <div class="container">
            <div class="grid">
                <div class="col-left">
                    <div class="banner_1 banner-box">
                        <a href="/collections/all" title="Xem ngay">
                            <picture>
                                <source media="(max-width: 480px)"
                                        srcset="{{$smallBanners[0]->image ? $smallBanners[0]->image->path : 'https://placehold.co/480x240'}}">
                                <img data-src="{{$smallBanners[0]->image ? $smallBanners[0]->image->path : 'https://placehold.co/480x240'}}"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                     alt="{{$smallBanners[0]->title}}" loading="lazy" class="lazyload duration-300" />
                            </picture>
                            <div class="box-title">
                                <h3>
                                    {{$smallBanners[0]->title}}
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="grid-sub">
                        @foreach ($smallBanners as $key => $banner)
                        @if ($key != 0)
                        <div class="banner_{{$key + 1}} banner-box">
                            <a href="{{$banner->link}}" title="{{$banner->title}}">
                                <picture>
                                    <source media="(max-width: 480px)"
                                            srcset="{{$banner->image ? $banner->image->path : 'https://placehold.co/480x240'}}">
                                    <img data-src="{{$banner->image ? $banner->image->path : 'https://placehold.co/480x240'}}"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         alt="{{$banner->title}}" loading="lazy" class="lazyload duration-300" />
                                </picture>
                                <div class="box-title">
                                    <h3>
                                        {{$banner->title}}
                                    </h3>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @foreach ($categorySpecial as $category)
        <section class="section-index section_product section_product_1">
            <div class="container">
                <div class="row">
                    <div class="block-title col-sm-12 col-xs-12 col-lg-3 col-xl-2">
                        <div class="section-title side-left has-control">
                            <h2>
                                <a href="{{ route('front.show-product-category', $category->slug) }}"
                                    title="{{ $category->name }}">
                                    {{ $category->name }}
                                </a>
                            </h2>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <a href="{{ route('front.show-product-category', $category->slug) }}" title="Xem tất cả"
                            class="btn btn-primary hidden-sm">
                            <span>Xem tất cả</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="block-product-list col-sm-12 col-xs-12 col-lg-9 col-xl-10">
                        <div class="swiper_pro_1 swiper_pro swiper-container">
                            <div class="swiper-wrapper load-after" data-section="section_product_1">
                                @foreach ($category->products as $product)
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-6 col-xs-12 swiper-slide item_null">
                                        @include('site.products.product_item', ['product' => $product])
                                    </div>
                                @endforeach
                            </div>
                            <div class="view-more clearfix">
                                <a href="{{ route('front.show-product-category', $category->slug) }}" title="Xem tất cả"
                                    class="btn btn-primary">
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
        @if ($category->banner)
            <section class="section-index section_big_banner">
                <div class="container">
                    <a href="{{ route('front.show-product-category', $category->slug) }}" title="{{ $category->name }}"
                        class="big-banner">
                        <picture>
                            <source media="(max-width: 480px)"
                                srcset="{{ $category->banner ? $category->banner->path : 'https://placehold.co/1780x385' }}">
                            <img data-src="{{ $category->banner ? $category->banner->path : 'https://placehold.co/1780x385' }}"
                                alt="{{ $category->name }}" width="1780" height="385" class="lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                        </picture>
                    </a>
                </div>
            </section>
        @endif
    @endforeach

    <section class="section-index section_feedback">
        <div class="bg-section">
            <div class="container">
                <div class="section-title side-left has-control">
                    <h2>
                        Khách hàng nói về chúng tôi
                    </h2>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper_feedback swiper-container control-top">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                            <div class=" swiper-slide">
                                <div class="feedback-item">
                                    <div class="avatar">
                                        <img data-src="{{ $review->image ? $review->image->path : 'https://placehold.co/200x200' }}"
                                            alt="{{ $review->name }}" width="200" height="200" class="lazyload"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                                    </div>
                                    <div class="block-content">
                                        <b>
                                            {{ $review->name }}
                                        </b>
                                        <span>
                                            {{ $review->position }}
                                        </span>
                                        <div class="feedback-content">
                                            {{ $review->message }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
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
        });
    </script>
    @foreach ($categorySpecialPost as $category)
        <section class="section-index section_blog">
            <div class="container">
                <div class="section-title side-left has-control">
                    <h2>
                        <a href="{{ route('front.list-blog', $category->slug) }}" title="{{ $category->name }}">
                            {{ $category->name }}
                        </a>
                    </h2>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="blog_swiper swiper-container control-top">
                    <div class="swiper-wrapper">
                        @foreach ($category->posts as $post)
                            <div class="swiper-slide">
                                <div class="item-blog">
                                    <div class="blog-content">
                                        <a class="block-thumb thumb" href="{{ route('front.detail-blog', $post->slug) }}"
                                            title="{{ $post->name }}">
                                            <img width="400" height="240" class="lazyload duration-300"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                data-src="{{ $post->image ? $post->image->path : 'https://placehold.co/400x240' }}"
                                                alt="{{ $post->name }}">
                                            <div class="time-post">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                </svg>
                                                {{ date('d/m/Y', strtotime($post->time ?? $post->created_at)) }}
                                            </div>
                                        </a>
                                        <div class="block-content">
                                            <h3>
                                                <a href="{{ route('front.detail-blog', $post->slug) }}"
                                                    title="{{ $post->name }}"
                                                    class="line-clamp-2-new">{{ $post->name }}</a>
                                            </h3>
                                            <p class="justify line-clamp line-clamp-3">{!! $post->intro !!}</p>
                                        </div>
                                    </div>
                                    <a class="btn btn-light btn-view-more"
                                        href="{{ route('front.detail-blog', $post->slug) }}" title="Xem chi tiết">
                                        Xem chi tiết
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
    <script>
        $(document).ready(function() {
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
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <a href="{{ $partner->link }}" title="{{ $partner->name }}" class="brand-item">
                                <img data-src="{{ $partner->image ? $partner->image->path : 'https://placehold.co/225x113' }}"
                                    alt="{{ $partner->name }}" width="225" height="113" class="lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
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
        });
    </script>
@endsection
@push('script')
@endpush
