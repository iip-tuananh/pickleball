@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $short_des }}
@endsection
@section('css')
    <link href="/site/css/collection_style.scss.css?1758009149569"
          rel="stylesheet" type="text/css" media="all"/>

@endsection

@section('content')
    <div class="layout-collection">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                       data-icon="chevron-right" role="img"
                                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                       class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                    fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path></svg>&nbsp;</span>
                    </li>


                    <li><strong><span> {{ $category->name }}</span></strong></li>


                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-title">
                    <h1>{{ $category->name }}</h1>
                </div>

                <div class="col-12 col-banner">

                    @if(@$category->image)
                    <a href="#" title="click xem ngay" class="duration-300 has-aspect-1">
                        <picture>
                            <source
                                media="(max-width: 480px)"
                                srcset="{{ $category->image->path ?? '' }}">
                            <img alt="Banner top" width="1900" height="300" class="lazyload"
                                 data-src="{{ $category->image->path ?? '' }}"
                                 src="{{ $category->image->path ?? '' }}">
                        </picture>
                    </a>
                        @endif


                </div>

                <aside class="dqdt-sidebar left-content col-lg-3 col-12">
                    <div class="close-filters" title="Đóng bộ lọc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </div>
                    <div class="section-box-bg">
                        <div class="filter-content">
                            <div class="aside-title">
                                <h2 class="title-head">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"></path>
                                    </svg>
                                    Bộ lọc sản phẩm
                                </h2>
                            </div>
                            <div class="filter-container">
                                <div class="filter-container__selected-filter " style="display: none;">
                                    <div class="filter-container__selected-filter-header clearfix">
                                        <span class="filter-container__selected-filter-header-title"><i
                                                class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                           class="filter-container__clear-all">Bỏ chọn hết <i class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="10"
                                                     height="10" x="0" y="0" viewBox="0 0 365.696 365.696"
                                                     style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                     class=""><g>
                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                              d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                              fill="#ffffff" data-original="#000000" style=""
                                                              class=""></path>
                                                    </g></svg>
                                            </i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <ul></ul>
                                    </div>
                                </div>
                                <!-- Lọc giá -->

                                <aside class="aside-item filter-price">
                                    <div class="aside-title">
                                        <h2><span>Chọn mức giá</span></h2>
                                    </div>
                                    <div class="aside-content filter-group content_price">
                                        <ul>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label data-filter="2-000-000d" for="filter-duoi-2-000-000d">
								<input type="checkbox" id="filter-duoi-2-000-000d" data-group="Khoảng giá"
                                       data-field="price_min" data-text="Dưới 2.000.000đ" value="(<2000000)"
                                       data-operator="OR">
								<i class="fa"></i>
								Dưới 2 triệu
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label data-filter="6-000-000d" for="filter-2-000-000d-6-000-000d">
								<input type="checkbox" id="filter-2-000-000d-6-000-000d" data-group="Khoảng giá"
                                       data-field="price_min" data-text="2.000.000đ - 6.000.000đ"
                                       value="(>=2000000 AND <=6000000)" data-operator="OR">
								<i class="fa"></i>
								Từ 2 triệu - 6 triệu
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label data-filter="15-000-000d" for="filter-6-000-000d-15-000-000d">
								<input type="checkbox" id="filter-6-000-000d-15-000-000d" data-group="Khoảng giá"
                                       data-field="price_min" data-text="6.000.000đ - 15.000.000đ"
                                       value="(>=6000000 AND <=15000000)" data-operator="OR">
								<i class="fa"></i>
								Từ 6 triệu - 15 triệu
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label data-filter="20-000-000d" for="filter-15-000-000d-20-000-000d">
								<input type="checkbox" id="filter-15-000-000d-20-000-000d" data-group="Khoảng giá"
                                       data-field="price_min" data-text="15.000.000đ - 20.000.000đ"
                                       value="(>=15000000 AND <=20000000)" data-operator="OR">
								<i class="fa"></i>
								Từ 15 triệu - 20 triệu
							</label>
						</span>
                                            </li>
                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label data-filter="20-000-000d" for="filter-tren20-000-000d">
								<input type="checkbox" id="filter-tren20-000-000d" data-group="Khoảng giá"
                                       data-field="price_min" data-text="Trên 20.000.000đ" value="(>20000000)"
                                       data-operator="OR">
								<i class="fa"></i>
								Trên 20 triệu
							</label>
						</span>
                                            </li>


                                        </ul>
                                    </div>
                                </aside>

                                <!-- End Lọc giá -->

                                <!-- Lọc Loại -->
                                <aside class="aside-item aside-itemxx filter-type">
                                    <div class="aside-title">
                                        <h2 class="title-filter title-head margin-top-0"><span>Loại sản phẩm</span></h2>
                                    </div>
                                    <div class="aside-content filter-group">
                                        <ul>
                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-giay-the-thao">
								<input type="checkbox" id="filter-giay-the-thao" data-group="PRODUCT_TYPE"
                                       data-field="product_type.filter_key" data-text=""
                                       value="(&#34;Giày thể thao&#34;)" data-operator="OR">
								<i class="fa"></i>
								Giày thể thao
							</label>
						</span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                                <!-- End Lọc Loại -->

                                <!-- Lọc Thương hiệu -->


                                <aside class="aside-item filter-vendor f-left">
                                    <div class="aside-title">
                                        <h2 class="title-filter title-head margin-top-0"><span>Thương hiệu</span></h2>
                                    </div>
                                    <div class="aside-content margin-top-0 filter-group">
                                        <ul>


                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-newfeel">
								<input type="checkbox" id="filter-newfeel" data-group="Hãng" data-field="vendor"
                                       data-text="NEWFEEL" value="(NEWFEEL)" data-operator="OR">
								<i class="fa"></i>
								NEWFEEL
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-quechua">
								<input type="checkbox" id="filter-quechua" data-group="Hãng" data-field="vendor"
                                       data-text="QUECHUA" value="(QUECHUA)" data-operator="OR">
								<i class="fa"></i>
								QUECHUA
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-kalenji">
								<input type="checkbox" id="filter-kalenji" data-group="Hãng" data-field="vendor"
                                       data-text="KALENJI" value="(KALENJI)" data-operator="OR">
								<i class="fa"></i>
								KALENJI
							</label>
						</span>
                                            </li>


                                        </ul>
                                    </div>
                                </aside>


                                <!-- End Lọc Thương hiệu -->

                                <!-- Lọc tag 1 -->

                                <aside class="aside-item filter-tag">
                                    <div class="aside-title">
                                        <h2 class="title-head margin-top-0">
                                            <span>Màu sắc</span>
                                        </h2>
                                    </div>
                                    <div class="aside-content filter-group">
                                        <ul>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-vang">
								<input type="checkbox" id="filter-vang" data-group="tag2" data-field="tags"
                                       data-text="Vàng" value="(Vàng)" data-operator="OR">
								<i class="fa"></i>
								Vàng
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-tim">
								<input type="checkbox" id="filter-tim" data-group="tag2" data-field="tags"
                                       data-text="Tím" value="(Tím)" data-operator="OR">
								<i class="fa"></i>
								Tím
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-do">
								<input type="checkbox" id="filter-do" data-group="tag2" data-field="tags" data-text="Đỏ"
                                       value="(Đỏ)" data-operator="OR">
								<i class="fa"></i>
								Đỏ
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-xanh">
								<input type="checkbox" id="filter-xanh" data-group="tag2" data-field="tags"
                                       data-text="Xanh" value="(Xanh)" data-operator="OR">
								<i class="fa"></i>
								Xanh
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-hong">
								<input type="checkbox" id="filter-hong" data-group="tag2" data-field="tags"
                                       data-text="Hồng" value="(Hồng)" data-operator="OR">
								<i class="fa"></i>
								Hồng
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-cam">
								<input type="checkbox" id="filter-cam" data-group="tag2" data-field="tags"
                                       data-text="Cam" value="(Cam)" data-operator="OR">
								<i class="fa"></i>
								Cam
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-trang">
								<input type="checkbox" id="filter-trang" data-group="tag2" data-field="tags"
                                       data-text="Trắng" value="(Trắng)" data-operator="OR">
								<i class="fa"></i>
								Trắng
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-den">
								<input type="checkbox" id="filter-den" data-group="tag2" data-field="tags"
                                       data-text="Đen" value="(Đen)" data-operator="OR">
								<i class="fa"></i>
								Đen
							</label>
						</span>
                                            </li>

                                        </ul>
                                    </div>
                                </aside>

                                <!-- End lọc tag 1 -->

                                <!-- Lọc tag 2 -->

                                <aside class="aside-item filter-tag">
                                    <div class="aside-title">
                                        <h2 class="title-head margin-top-0">
                                            <span>Giới tính</span>
                                        </h2>
                                    </div>
                                    <div class="aside-content filter-group">
                                        <ul>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-nam">
								<input type="checkbox" id="filter-nam" data-group="tag2" data-field="tags"
                                       data-text="Nam" value="(Nam)" data-operator="OR">
								<i class="fa"></i>
								Nam
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-nu">
								<input type="checkbox" id="filter-nu" data-group="tag2" data-field="tags" data-text="Nữ"
                                       value="(Nữ)" data-operator="OR">
								<i class="fa"></i>
								Nữ
							</label>
						</span>
                                            </li>


                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-unisex">
								<input type="checkbox" id="filter-unisex" data-group="tag2" data-field="tags"
                                       data-text="Unisex" value="(Unisex)" data-operator="OR">
								<i class="fa"></i>
								Unisex
							</label>
						</span>
                                            </li>

                                        </ul>
                                    </div>
                                </aside>

                                <!-- End lọc tag 2 -->

                                <!-- Lọc tag 3 -->


                            </div>
                        </div>
                    </div>
                </aside>
                <div class="block-collection col-lg-9 col-12">

                    <div class="col-list-cate">


                        <div class="tab_ul">
                            <div class="grad-left">
                                <a href="javascript:;" class="prev button" title="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                         class="bi bi-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="grad-right">
                                <a href="javascript:;" class="next button" title="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                         class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function ($) {
                                var tabUlParent = $('.block-collection .tab_ul');
                                var tabUl = $('.block-collection .tab_ul .menu-list');
                                var prevBtn = $(".block-collection .tab_ul .prev");
                                var nextBtn = $(".block-collection .tab_ul .next");

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

                                prevBtn.click(function () {
                                    var leftPos = tabUl.scrollLeft();
                                    tabUl.animate({scrollLeft: leftPos - 345}, 300);
                                });

                                nextBtn.click(function () {
                                    var leftPos = tabUl.scrollLeft();
                                    tabUl.animate({scrollLeft: leftPos + 150}, 300);
                                });

                                function scrollToActiveCategory() {
                                    var activeCategory = tabUl.find('.cate-item.active');
                                    if (activeCategory.length > 0) {
                                        var leftPos = activeCategory.position().left;
                                        tabUl.animate({scrollLeft: leftPos}, 0);
                                    }
                                }

                                checkOverflow();
                                scrollToActiveCategory();
                                $(window).on('resize', function () {
                                    checkOverflow();
                                });
                            });
                        </script>

                    </div>

                    <div class="category-products products-view-grid list_hover_pro">
                        <div class="filter-containers">

                            <div class="list-cate-area">
                            </div>

                            <div class="sort-cate">

                                <div class="sudes-filter">
                                    <a class="btn btn-outline btn-filter" title="Bộ lọc">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                        </svg>
                                        Bộ lọc
                                        <span class="count-filter-val"></span>
                                    </a>
                                </div>

                                <div class="sort-cate-right">
                                    <h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                                            <path
                                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                                        </svg>
                                        Sắp xếp theo
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-caret-down-fill duration-300"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
                                        </svg>
                                    </h3>

                                    <ul>
                                        <li class="btn-quick-sort default active">
                                            <a href="javascript:;" title="Mặc định"><i></i>Mặc
                                                định</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-asc">
                                            <a href="javascript:;" title="Tên A-Z"><i></i>Tên
                                                A-Z</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-desc">
                                            <a href="javascript:;"
                                               title="Tên Z-A"><i></i>Tên Z-A</a>
                                        </li>
                                        <li class="btn-quick-sort position-desc">
                                            <a href="javascript:;"
                                               title="Hàng mới"><i></i>Hàng mới</a>
                                        </li>
                                        <li class="btn-quick-sort price-asc">
                                            <a href="javascript:;"
                                               title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                        </li>
                                        <li class="btn-quick-sort price-desc">
                                            <a href="javascript:;"
                                               title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <script>
                                function countFilterItem() {
                                    var countFilter = $('.filter-container__selected-filter-list ul li').length;
                                    $(".count-filter-val").text(countFilter);
                                }

                                countFilterItem();
                            </script>
                        </div>


                        <div class="products-view products-view-grid list_hover_pro">
                            <div class="row">


                                @foreach($products as $product)
                                    <div class="col-6 col-md-3 col-lg-4 col-xl-3">
                                        @include('site.products.product_item', ['product' => $product])
                                    </div>
                                @endforeach




                            </div>
                        </div>
                        <div class="pagenav">

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var colName = "Chạy Bộ & Đi Bộ";

        var colId = 3186002;

        var selectedViewData = "data";
    </script>
    <div id="js-global-alert" class="alert alert-success" role="alert">
        <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
        </button>
        <h5 class="alert-heading"></h5>
        <p class="alert-content"></p>
    </div>
@endsection

@push('script')
    <script>
        app.controller('ProductCategoryController', function($scope, $http) {
            $scope.category = @json($category ?? null);
            $scope.filter_sort = 'asc';
            $scope.filterSort = function(sort) {
                $scope.filter_sort = sort;
                $scope.filter();
            }
            $scope.filter_tag = [];
            $scope.onChangeFilter = function(id) {
                if ($scope.filter_tag.includes(id)) {
                    $scope.filter_tag = $scope.filter_tag.filter(function(item) {
                        return item !== id;
                    });
                } else {
                    $scope.filter_tag.push(id);
                }
                $scope.filter();
            }

            $scope.filter = function() {
                $.ajax({
                    url: '{{ route('front.filter-product') }}',
                    type: 'GET',
                    data: {
                        sort: $scope.filter_sort,
                        category: $scope.category.id,
                        cate_slug: $scope.category.slug,
                        tag: $scope.filter_tag,
                    },
                    success: function(response) {
                        $('#product-list').html(response.html);
                    },
                    error: function(response) {
                        console.log(response);
                    },
                    complete: function() {}
                });
            }

            $scope.filterCategory = function(slug) {
                url = '{{ route('front.show-product-category', ['categorySlug' => ':categorySlug']) }}'
                    .replace(
                        ':categorySlug', slug);
                window.location.href = url;
            }
        });
    </script>
@endpush
