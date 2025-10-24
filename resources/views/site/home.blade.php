@extends('site.layouts.master')
@section('title')
    {{ $config->meta_title ?? $config->web_title }}
@endsection
@section('description')
    {{ $config->web_des }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image ? $banners[0]->image->path : 'https://placehold.co/1920x717') }}
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
                    {{-- <div class="container-effect">
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
                    </div> --}}
                </div>
            @endforeach
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
                            loop: true,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: true
                            },
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
                                    slidesPerView: 4,
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

    @if ($smallBanners->count() > 0)
        <section class="section-index section_group_banner">
            <div class="container">
                <div class="grid">
                    <div class="col-left">
                        <div class="banner_1 banner-box">
                            <a href="/collections/all" title="Xem ngay">
                                <picture>
                                    <source media="(max-width: 480px)"
                                        srcset="{{ $smallBanners[0]->image ? $smallBanners[0]->image->path : 'https://placehold.co/480x240' }}">
                                    <img data-src="{{ $smallBanners[0]->image ? $smallBanners[0]->image->path : 'https://placehold.co/480x240' }}"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        alt="{{ $smallBanners[0]->title }}" loading="lazy"
                                        class="lazyload duration-300" />
                                </picture>
                                <div class="box-title">
                                    <h3>
                                        {{ $smallBanners[0]->title }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="grid-sub">
                            @foreach ($smallBanners as $key => $banner)
                                @if ($key != 0)
                                    <div class="banner_{{ $key + 1 }} banner-box">
                                        <a href="{{ $banner->link }}" title="{{ $banner->title }}">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                    srcset="{{ $banner->image ? $banner->image->path : 'https://placehold.co/480x240' }}">
                                                <img data-src="{{ $banner->image ? $banner->image->path : 'https://placehold.co/480x240' }}"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    alt="{{ $banner->title }}" loading="lazy"
                                                    class="lazyload duration-300" />
                                            </picture>
                                            <div class="box-title">
                                                <h3>
                                                    {{ $banner->title }}
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
                            // loop: true,
                            // autoplay: {
                            //     delay: 5000,
                            //     disableOnInteraction: true
                            // },
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

    @if ($reviews->count() > 0)
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
                                                alt="{{ $review->name }}" width="200" height="200"
                                                class="lazyload"
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
    @endif

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
@endsection
@push('script')
@endpush
