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
@endsection
@push('script')
@endpush
