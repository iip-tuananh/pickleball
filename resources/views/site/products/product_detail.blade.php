@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ strip_tags($product->intro) }}
@endsection
@section('image')
    {{ $product->image ? $product->image->path : $product->galleries[0]->image->path }}
@endsection

@section('css')
    <link href="/site/css/product_style.scss.css?1758009149569"
          rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
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


                <li>
                    <a class="changeurl" href="/chay-bo-di-bo" title="Chạy Bộ & Đi Bộ"><span>Chạy Bộ & Đi Bộ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                   data-icon="chevron-right" role="img"
                                                   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                   class="svg-inline--fa fa-chevron-right fa-w-10"><path
                                fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path></svg>&nbsp;</span>
                </li>

                <li><strong><span>SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam</span></strong>
                <li>

            </ul>
        </div>
    </section>
    <section class="product layout-product" >

        <div class="container">
            <div class="details-product">
                <div class="row margin-bottom-30">
                    <div class="col-lg-9 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 product-detail-left product-images">
                                <div class="product-image-block relative">

                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper" id="lightgallery">


                                            <a class="swiper-slide" data-hash="0"
                                               href="{{ $product->image->path ?? '' }}"
                                               title="Click để xem">


                                                <img class="product-frame duration-300 lazyload"
                                                     width=480
                                                     height=480
                                                     src="{{ $product->image->path ?? '' }}"
                                                     data-src="{{ $product->image->path ?? '' }}"
                                                     alt=""
                                                />


                                                <img height="370" width="480"
                                                     src="{{ $product->image->path ?? '' }}"
                                                     alt=""
                                                     data-image="{{ $product->image->path ?? '' }}"
                                                     class="img-responsive mx-auto d-block swiper-lazy"/>
                                            </a>

                                            @foreach($product->galleries as $keyGall => $gallery)
                                                <a class="swiper-slide" data-hash="{{ $keyGall + 1 }}"
                                                   href="{{ $gallery->image->path ?? '' }}"
                                                   title="Click để xem">


                                                    <img class="product-frame duration-300 lazyload"
                                                         width=480
                                                         height=480
                                                         src="{{ $gallery->image->path ?? '' }}"
                                                         data-src="{{ $gallery->image->path ?? '' }}"
                                                         alt=""
                                                    />


                                                    <img height="370" width="480"
                                                         src="{{ $product->image->path ?? '' }}"
                                                         alt=""
                                                         data-image="{{ $gallery->image->path ?? '' }}"
                                                         class="img-responsive mx-auto d-block swiper-lazy"/>
                                                </a>
                                            @endforeach


                                        </div>
                                    </div>

                                    <div class="swiper-container gallery-thumbs ">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" data-hash="0">
                                                <div class="p-100">
                                                    <img height="80" width="80"
                                                         src="{{ $product->image->path ?? '' }}"
                                                         alt=""
                                                         data-image="{{ $product->image->path ?? '' }}"
                                                         class="swiper-lazy"/>
                                                </div>
                                            </div>

                                            @foreach($product->galleries as $keyGall => $gallery)
                                                <div class="swiper-slide" data-hash="{{ $keyGall + 1 }}">
                                                    <div class="p-100">
                                                        <img height="80" width="80"
                                                             src="{{ $gallery->image->path ?? '' }}"
                                                             alt=""
                                                             data-image="{{ $gallery->image->path ?? '' }}"
                                                             class="swiper-lazy"/>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-next">
                                        </div>
                                        <div class="swiper-button-prev">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 details-pro">
                                <h1 class="title-product">{{ $product->name }}</h1>
                                <div class="product-top clearfix">
                                </div>
                                <div class="inventory_quantity">
								<span class="mb-break">
									<span class="stock-brand-title">Thương hiệu:</span>
									<span class="a-vendor">

										Đang cập nhật

									</span>
								</span>
                                    <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                                    <span class="mb-break">
									<span class="stock-brand-title">Tình trạng:</span>


									<span class="a-stock">
										Còn hàng
									</span>


								</span>
                                </div>

                                <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form"
                                      action="/cart/add" method="post" class="form-inline">

                                    @if($product->base_price > 0)
                                        <a class="block-flashsale" href="#!" title="Xem ngay">
                                            <div class="heading-flash">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                                                </svg>
                                                HOT SALE
                                            </div>
                                        </a>


                                        <div class="price-box clearfix">

									    <span class="special-price">
										<span class="price product-price">{{ formatCurrency($product->price) }}₫</span>
									    </span>
                                            <span class="old-price" itemprop="priceSpecification" itemscope=""
                                                  itemtype="http://schema.org/priceSpecification">
                                                <del class="price product-price-old">
                                                    {{ formatCurrency($product->base_price) }}₫
                                                </del>
									        </span>
                                            <span class="sale-off">-
                                                {{ $product->percent_discount }}%
                                            </span>

                                        </div>

                                    @else
                                        <div class="price-box clearfix">

									    <span class="special-price">
										<span class="price product-price">{{ formatCurrency($product->price) }}₫</span>
									    </span>
                                        </div>
                                    @endif


                                    <style>
                                        .swatch-element { display:inline-flex; align-items:center; gap:8px; margin:6px 8px 0 0; }
                                        .swatch-element input[type="radio"] { position:absolute; opacity:0; pointer-events:none; }
                                        .swatch-element label {
                                            display:inline-block; padding:6px 10px; border:1px solid #ccc; border-radius:6px; cursor:pointer; user-select:none;
                                        }
                                        .swatch-element.selected label { border-color:#0d6efd; box-shadow:0 0 0 2px rgba(13,110,253,.15) inset; }
                                        .swatch .header { margin-bottom:6px; font-weight:600; }
                                        .swatch .value-roperties { font-weight:700; margin-left:4px; }

                                    </style>
                                    <div class="form-product">

                                        <div class="select-swatch">


                                            @foreach($product->attributes as $keyAttr => $attribute)
                                                <div class="swatch clearfix" data-option-index="{{ $keyAttr }}">
                                                    <div class="header">
                                                        {{ $attribute['name'] }}:
                                                        <span class="value-roperties"></span>
                                                    </div>

                                                    @foreach($attribute['values'] as $keyVal => $val)
                                                        <div data-value="{{ $val }}"
                                                             title="{{ $val }}"
                                                             class="swatch-element {{ $keyAttr }}-{{ $keyVal }} available">

                                                            <!-- name CÙNG NHAU theo $keyAttr để radio trở thành 1 nhóm -->
                                                            <input id="swatch-{{ $keyAttr }}-{{ $keyVal }}"
                                                                   type="radio"
                                                                   name="option-{{ $keyAttr }}"
                                                                   value="{{ $val }}" />

                                                            <label for="swatch-{{ $keyAttr }}-{{ $keyVal }}">
                                                                {{ $val }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach





                                        </div>


                                        <div class="boz-form">
                                            <div class="flex-quantity">
                                                <div class="custom custom-btn-number show">


                                                    <span>Số lượng: </span>
                                                    <div class="input_number_product">
                                                        <button class="btn_num num_1 button button_qty"
                                                                onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
                                                                type="button">-
                                                        </button>
                                                        <input type="text" id="qtym" name="quantity" value="1"
                                                               maxlength="3" class="form-control prd_quantity"
                                                               onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                               onchange="if(this.value == 0)this.value=1;">
                                                        <button class="btn_num num_2 button button_qty"
                                                                onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                                type="button"><span>+</span></button>
                                                    </div>
                                                </div>
                                                <div class="btn-mua button_actions">

                                                    <button type="submit"
                                                            class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                        <span class="txt-main">Thêm vào giỏ</span>
                                                    </button>
                                                    <button class="btn-buyNow btn">
                                                        <span class="txt-main">Mua ngay</span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 product-col-right">
                        <div class="block-policy">

                            <div class="policy-item duration-300">
                                <span class="marker">1</span>
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/product_policy_1.svg?1758009149569"
                                         alt="Sudes Sport"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Cam kết chính hãng 100%
                                    </h3>
                                    <span>

								</span>

                                </div>
                            </div>

                            <div class="policy-item duration-300">
                                <span class="marker">2</span>
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/product_policy_2.svg?1758009149569"
                                         alt="Sudes Sport"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Bảo hành 12 tháng (<a href="#" title="click xem chi tiết ">click xem chi
                                            tiết</a>)
                                    </h3>
                                    <span>

								</span>

                                </div>
                            </div>

                            <div class="policy-item duration-300">
                                <span class="marker">3</span>
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/product_policy_3.svg?1758009149569"
                                         alt="Sudes Sport"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Đổi trả hàng trong 7 ngày (<a href="#" title="click xem chi tiết ">click xem chi
                                            tiết</a>)
                                    </h3>
                                    <span>

								</span>

                                </div>
                            </div>

                            <div class="policy-item duration-300">
                                <span class="marker">4</span>
                                <div class="icon aspect-1">
                                    <img width="50" height="50" class="lazyload"
                                         data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/product_policy_4.svg?1758009149569"
                                         alt="Sudes Sport"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                                </div>
                                <div class="info">
                                    <h3>
                                        Giao hàng nhanh toàn quốc
                                    </h3>
                                    <span>

								</span>

                                </div>
                            </div>
                        </div>
                        <div class="banner-product-box">
                            <a class="duration-300" href="/collections/all" title="Banner">
                                <img alt="Banner" class="lazyload" width="480" height="381"
                                     data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/product_banner.jpg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-xl-9 col-lg-8 col-12 product-review-details">

                        <div class="product-tab e-tabs not-dqtab">
                            <ul class="tabs tabs-title clearfix">

                                <li class="tab-link active" data-tab="#tab-1">
                                    <h3>Mô tả sản phẩm</h3>
                                </li>


                                <li class="tab-link" data-tab="#tab-2">
                                    <h3>Chính sách đổi trả</h3>
                                </li>


                            </ul>
                            <div class="tab-float">

                                <div id="tab-1" class="tab-content active content_extab">
                                    <div class="rte product_getcontent">
                                        <div id="content">
                                        {!! $product->body !!}



                                        </div>
                                    </div>
                                </div>


                                <div id="tab-2" class="tab-content content_extab">
                                    <div class="rte">

                                        + Sản phẩm lỗi, hỏng do quá trình sản xuất hoặc vận chuyện<br>
                                        + Nằm trong chính sách đổi trả sản phẩm của Sudes Sport<br>
                                        + Sản phẩm còn nguyên tem mác chưa qua sử dụng và chưa giặt là<br>
                                        + Thời gian đổi trả nhỏ hơn 15 ngày kể từ ngày nhận hàng<br>
                                        + Chi phí bảo hành về sản phẩm, vận chuyển khách hàng chịu chi phí <br>
                                        <b>Điều kiện đổi trả hàng</b><br>
                                        Điều kiện về thời gian đổi trả: trong vòng 01 ngày kể từ khi nhận được hàng và
                                        phải liên hệ gọi ngay cho chúng tôi theo số điện thoại trên để được xác nhận đổi
                                        trả hàng.<br>
                                        <b>Điều kiện đổi trả hàng:</b><br>
                                        - Sản phẩm gửi lại phải còn nguyên đai nguyên kiện<br>
                                        - Phiếu bảo hành (nếu có) và tem của công ty trên sản phẩm còn nguyên vẹn.<br>
                                        - Sản phẩm đổi/ trả phải còn đầy đủ hộp, giấy Hướng dẫn sử dụng và chưa qua sử
                                        dụng.<br>
                                        - Quý khách chịu chi phí vận chuyển, đóng gói, thu hộ tiền, chi phí liên lạc tối
                                        đa tương đương 20% giá trị đơn hàng.

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-12">


                        <div class="product-favi">
                            <a href="san-pham-noi-bat" title="Có thể bạn thích">
                                <div class="title-head">
                                    Có thể bạn thích
                                </div>
                            </a>
                            <div class="product-favi-content">


                                <div class="product-view">
                                    <a class="image_thumb" href="/sandals-leo-nui-da-ngoai-nam-nh100"
                                       title="Sandals leo n&#250;i d&#227; ngoại nam NH100">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p751995.jpg?v=1695555820190"
                                             alt="Sandals leo núi dã ngoại nam NH100">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/sandals-leo-nui-da-ngoai-nam-nh100"
                                                                    title="Sandals leo n&#250;i d&#227; ngoại nam NH100">Sandals
                                                leo n&#250;i d&#227; ngoại nam NH100</a></h3>
                                        <div class="price-box">


                                            <span class="price">545.000₫</span>

                                            <span class="compare-price">800.000₫</span>


                                        </div>
                                    </div>
                                </div>


                                <div class="product-view">
                                    <a class="image_thumb" href="/giay-chay-bo-run-active-grip-cho-nam"
                                       title="Gi&#224;y chạy bộ Run Active Grip cho nam">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2175064.jpg?v=1695555009510"
                                             alt="Giày chạy bộ Run Active Grip cho nam">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/giay-chay-bo-run-active-grip-cho-nam"
                                                                    title="Gi&#224;y chạy bộ Run Active Grip cho nam">Gi&#224;y
                                                chạy bộ Run Active Grip cho nam</a></h3>
                                        <div class="price-box">


                                            <span class="price">895.000₫</span>

                                            <span class="compare-price">1.000.000₫</span>


                                        </div>
                                    </div>
                                </div>


                                <div class="product-view">
                                    <a class="image_thumb" href="/tui-dung-giay-light-15-lit"
                                       title="T&#250;i đựng gi&#224;y Light 15 L&#237;t">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1595354.jpg?v=1694062347347"
                                             alt="Túi đựng giày Light 15 Lít">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/tui-dung-giay-light-15-lit"
                                                                    title="T&#250;i đựng gi&#224;y Light 15 L&#237;t">T&#250;i
                                                đựng gi&#224;y Light 15 L&#237;t</a></h3>
                                        <div class="price-box">


                                            <span class="price">69.000₫</span>

                                            <span class="compare-price">89.000₫</span>


                                        </div>
                                    </div>
                                </div>


                                <div class="product-view">
                                    <a class="image_thumb" href="/balo-da-ngoai-nh100-10l"
                                       title="Bal&#244; d&#227; ngoại NH100 10L">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1640075.jpg?v=1694061857890"
                                             alt="Balô dã ngoại NH100 10L">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/balo-da-ngoai-nh100-10l"
                                                                    title="Bal&#244; d&#227; ngoại NH100 10L">Bal&#244;
                                                d&#227; ngoại NH100 10L</a></h3>
                                        <div class="price-box">


                                            <span class="price">79.000₫</span>

                                            <span class="compare-price">99.000₫</span>


                                        </div>
                                    </div>
                                </div>


                                <div class="product-view">
                                    <a class="image_thumb" href="/binh-dung-nuoc-gallon-den"
                                       title="B&#236;nh đựng nước Gallon - Đen">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p1573979.jpg?v=1694061460337"
                                             alt="Bình đựng nước Gallon - Đen">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/binh-dung-nuoc-gallon-den"
                                                                    title="B&#236;nh đựng nước Gallon - Đen">B&#236;nh
                                                đựng nước Gallon - Đen</a></h3>
                                        <div class="price-box">


                                            275.000₫


                                        </div>
                                    </div>
                                </div>


                                <div class="product-view">
                                    <a class="image_thumb" href="/vest-chay-dia-hinh-5l"
                                       title="Vest chạy địa h&#236;nh 5L">
                                        <img width="370" height="480" class="lazyload"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="//bizweb.dktcdn.net/thumb/large/100/490/431/products/p2185161.jpg?v=1694061299987"
                                             alt="Vest chạy địa hình 5L">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/vest-chay-dia-hinh-5l"
                                                                    title="Vest chạy địa h&#236;nh 5L">Vest chạy địa h&#236;nh
                                                5L</a></h3>
                                        <div class="price-box">


                                            895.000₫


                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>


                    <div class="col-12 product-related product-swipers">
                        <div class="section-title side-left has-control">
                            <h2>
                                <a href="#!" title="Sản phẩm liên quan">
                                    Sản phẩm liên quan
                                </a>
                            </h2>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="swiper_product_related swiper-container">
                            <div class="swiper-wrapper">

                                @foreach($productsRelated as $productsRelate)
                                    <div class="swiper-slide">
                                        @include('site.products.product_item', ['product' => $productsRelate])
                                    </div>
                                @endforeach




                            </div>
                        </div>
                    </div>
                    <script>
                        var swiper_related = null;

                        function initSwiperRelated() {
                            swiper_related = new Swiper('.swiper_product_related', {
                                slidesPerView: 6,
                                spaceBetween: 20,
                                slidesPerGroup: 1,
                                navigation: {
                                    nextEl: '.product-related .swiper-button-next',
                                    prevEl: '.product-related .swiper-button-prev',
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
                                        slidesPerView: 4,
                                        spaceBetween: 20
                                    },
                                    1200: {
                                        slidesPerView: 6,
                                        spaceBetween: 20
                                    }
                                }
                            });
                        }

                        function destroySwiperRelated() {
                            if (swiper_related) {
                                swiper_related.destroy(true, true);
                                swiper_related = null;
                            }
                        }

                        function toggleSwiperRelated() {
                            if ($(window).width() <= 767 && swiper_related) {
                                destroySwiperRelated();
                            } else if ($(window).width() > 767 && !swiper_related) {
                                initSwiperRelated();
                            }
                        }

                        toggleSwiperRelated();
                        $(window).resize(toggleSwiperRelated);
                    </script>

                </div>
            </div>
        </div>
    </section>

    <div id="modal-size-product" class="modalsize-product" style="display:none;">
        <div class="modalsize-overlay fancybox-overlay fancybox-overlay-fixed"></div>
        <div class="modal-size-product">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="chosee_size">
                        <p class="title-size">
                            Bảng gợi ý kích cỡ
                        </p>
                    </div>
                    <div class="group-size group">
                        <select id="listsize">

                            <option value="Giày thể thao" data-link="huong-dan-chon-size-giay-the-thao" selected>Giày
                                thể thao
                            </option>


                            <option value="Áo" data-link="huong-dan-chon-size-ao">Áo</option>


                            <option value="Quần" data-link="huong-dan-chon-size-quan">Quần</option>


                            <option value="Váy" data-link="huong-dan-chon-size-vay">Váy</option>


                            <option value="Tất/vớ" data-link="huong-dan-chon-size-tat-vo">Tất/vớ</option>


                        </select>
                    </div>
                    <div class="pagebody">
                    </div>
                </div>
            </div>
            <a title="Close" class="modalsize-close close-window" href="javascript:;">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-times fa-w-10">
                    <path fill="currentColor"
                          d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                          class=""></path>
                </svg>
            </a>
        </div>
    </div>
    <script>
        $(document).on('click', '.modalsize-close, #modal-size-product .modalsize-overlay, .fancybox-overlay', function (e) {
            $("#modal-size-product").fadeOut(0);
            awe_hidePopup();
        });
        $(document).ready(function ($) {

            var modal = $('.modalsize-product');
            var btn = $('.size-button');
            var span = $('.modalsize-close');
            btn.click(function () {
                modal.show();
                $(document).ready(function ($) {
                    var optionSelected = $(".group-size select option:selected", this);
                    var dataLink = optionSelected.attr('data-link');
                    var url = dataLink + "?view=diachi";
                    $.ajax({
                        type: 'GET',
                        url: url,
                        beforeSend: function () {
                        },
                        success: function (data) {
                            var content = $(data).find('.content-page');
                            console.log("content: ", content);
                            $('.pagebody').html(content);
                        },
                        dataType: "html"
                    });
                    $('.group-size select').change(function () {
                        var optionSelected = $("option:selected", this);
                        var dataLink = optionSelected.attr('data-link');
                        var url = dataLink + "?view=diachi";
                        $.ajax({
                            type: 'GET',
                            url: url,
                            beforeSend: function () {
                            },
                            success: function (data) {
                                var content = $(data).find('.content-page');
                                console.log("content: ", content);
                                $('.pagebody').html(content);
                            },
                            dataType: "html"
                        });
                    });
                });
            });
            span.click(function () {
                modal.hide();
            });
            $(window).on('click', function (e) {
                if ($(e.target).is('.modal')) {
                    modal.hide();
                }
            });
        });

    </script>

    <script>



    </script>
    <script>

        var getLimit = 6;
        var alias = 'product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam';

        function activeTab(obj) {
            $('.product-tab ul li').removeClass('active');
            $(obj).addClass('active');
            var id = $(obj).attr('data-tab');
            $('.tab-content').removeClass('active');
            $(id).addClass('active');
        }


        $('.product-tab ul li').click(function () {
            activeTab(this);
            return false;
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 5,
            slidesPerView: 10,
            freeMode: true,
            lazy: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            hashNavigation: true,
            slideToClickedSlide: true,
            breakpoints: {
                260: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                300: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                500: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1199: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
            navigation: {
                nextEl: '.gallery-thumbs .swiper-button-next',
                prevEl: '.gallery-thumbs .swiper-button-prev',
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 0,
            effect: 'fade',
            lazy: true,
            hashNavigation: true,
            thumbs: {
                swiper: galleryThumbs
            }
        });
        var swiper = new Swiper('.product-relate-swiper', {
            slidesPerView: 4,
            loop: false,
            grabCursor: true,
            spaceBetween: 30,
            roundLengths: true,
            slideToClickedSlide: false,
            navigation: {
                nextEl: '.product-relate-swiper .swiper-button-next',
                prevEl: '.product-relate-swiper .swiper-button-prev',
            },
            autoplay: false,
            breakpoints: {
                260: {
                    slidesPerView: 'auto',
                    spaceBetween: 15
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                991: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
        $(document).ready(function () {
            $("#lightgallery").lightGallery({
                thumbnail: false
            });
            $("#videolary").lightGallery({
                thumbnail: false
            });
        });
        $('.btn-buyNow').on('click', function (event) {
            $.ajax({
                url: '/cart/add.js',
                type: "post",
                data: $("#add-to-cart-form").serialize(),
                datatype: "json",
                success: function (data) {
                    window.location.href = "/checkout";
                },
                error: function () {
                }
            });
            event.preventDefault();
        });
        $('.btn--view-more').on('click', function (e) {
            e.preventDefault();
            var $this = $(this);
            $this.parents('.product-review-details').find('.product-review-content').toggleClass('expanded');
            $('html, body').animate({scrollTop: $('.product-review-details').offset().top - 110}, 'slow');
            $(this).toggleClass('active');
            return false;
        });
        $(document).ready(function ($) {
            var product = {
                "id": 32459051,
                "name": "SẢN PHẨM KALENJI Giày chạy bộ JOGFLOW 500.1 cho nam",
                "alias": "product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam",
                "vendor": null,
                "type": "Giày thể thao",
                "content": "<table>\n<tbody>\n<tr>\n\t<th>GIỚI TÍNH</th>\n\t<td>NAM</td>\n</tr>\n<tr>\n\t<th>ĐỊA ĐIỂM TẬP LUYỆN</th>\n\t<td>Ngoài trời</td>\n</tr>\n<tr>\n\t<th>KIỂU CHẠY</th>\n\t<td>Bình thường</td>\n</tr>\n<tr>\n\t<th>KIỂU CỐ ĐỊNH</th>\n\t<td>Thắt dây</td>\n</tr>\n<tr>\n\t<th>LOẠI BỀ MẶT</th>\n\t<td>Đường trường, Đường mòn</td>\n</tr>\n<tr>\n\t<th>CHIỀU CAO GIÀY</th>\n\t<td>Giày cổ vừa</td>\n</tr>\n<tr>\n\t<th>LOẠI LỚP LÓT</th>\n\t<td>Nhẹ/ Không viền</td>\n</tr>\n<tr>\n\t<th>CHẤT LIỆU CHÍNH</th>\n\t<td>Tổng hợp</td>\n</tr>\n<tr>\n\t<th>KIỂU GIÀY</th>\n\t<td>Giảm chấn và thoải mái</td>\n</tr>\n<tr>\n\t<th>CHỐNG THẤM NƯỚC</th>\n\t<td>Không chống thấm nước</td>\n</tr>\n<tr>\n\t<th>CHIỀU RỘNG BÀN CHÂN</th>\n\t<td>Trung bình</td>\n</tr>\n<tr>\n\t<th>ĐỘ DROP</th>\n\t<td>4 mm</td>\n</tr>\n<tr>\n\t<th>THÁO RỜI ĐƯỢC</th>\n\t<td>Không tháo rời</td>\n</tr>\n<tr>\n\t<th>LÓT GIÀY THÁO RỜI</th>\n\t<td>Lót giày tháo rời</td>\n</tr>\n<tr>\n\t<th>TẦN SUẤT CHẠY BỘ</th>\n\t<td>10 km/tuần, 20 km/tuần</td>\n</tr>\n<tr>\n\t<th>CÔNG NGHỆ ĐẾ NGOÀI</th>\n\t<td>Citycontact</td>\n</tr>\n<tr>\n\t<th>MÙA SỬ DỤNG</th>\n\t<td>Quanh năm</td>\n</tr>\n<tr>\n\t<th>ĐẾ NGOÀI KHÔNG ĐỂ LẠI DẤU</th>\n\t<td>Không để lại dấu giày</td>\n</tr>\n<tr>\n\t<th>MỘT TRONG NHỮNG NGHIÊN CỨU LỚN NHẤT TRÊN THẾ GIỚI.</th>\n\t<td>Các nhà nghiên cứu từ khắp nơi trên thế giới đã nghiên cứu về độ giảm chấn của giày trong nhiều năm, nhưng không biết liệu thực sự có mối liên hệ giữa đặc tính giảm chấn của giày và khả năng chấn thương hay không. Vào năm 2018, Decathlon quyết định thực hiện nghiên cứu với 848 người tham gia và 27,761 buổi chạy, hợp tác cùng LIH (xem Viện Y tế Luxembourg).</td>\n</tr>\n<tr>\n\t<th>MỤC ĐÍCH CỦA NGHIÊN CỨU</th>\n\t<td>Để xác nhận mối liên hệ giữa độ giảm chấn và chấn thương. Trong nghiên cứu này, người ta đã thử nghiệm hai điều kiện giảm chấn: Giày mềm (61 N/mm) so với giày cứng (95 N/mm). Kết quả của nghiên cứu này thể hiện rõ: số người chạy bộ bị chấn thương ít hơn 25% khi mang giày mềm. Độ giảm chấn mềm của dòng sản phẩm giày chạy bộ FLOW được tạo ra dựa trên cơ sở nghiên cứu này, tập trung vào chỉ số ưu tiên độ giảm chấn mềm.</td>\n</tr>\n<tr>\n\t<th>ĐỘ DROP CỦA GIÀY CHẠY BỘ JOGFLOW 500.1</th>\n\t<td>\"Độ drop\" là độ chênh lệch chiều cao giữa gót giày và mũi giày. Không giống như độ drop 10 mm, thương hiệu giày chạy bộ KALENJI đã quyết định áp dụng độ drop là 4 mm cho mẫu Jogflow 500.1. Mục tiêu? Khuyến khích người chạy bộ dùng mũi giày tiếp xúc với sàn để giúp họ có sải bước tự nhiên hơn và giảm rủi ro chấn thương.</td>\n</tr>\n<tr>\n\t<th>BẢO HÀNH</th>\n\t<td>2</td>\n</tr>\n<tr>\n\t<th>THÀNH PHẦN</th>\n\t<td>Phần đế ngoài: 30.0% Cao su – Tổng hợp, 70.0% Ethylen-vinyl acetat,Thân trên: 95.0% Polyester (PES) – Tái chế, 5.0% Polyurethan nhiệt dẻo (TPU),Lớp lót: 100.0% Polyester (PES) – Tái chế</td>\n</tr>\n</tbody></table>\n<h5>Khuyến mãi:</h5>\n<p>Chương trình mua nhiều giá tốt. Áp dụng từ&nbsp;<strong>07.09 - 11.09:</strong><br />\n+ Mua 2 sản phẩm giảm <strong>10%</strong><br />\n+ Mua 3 sản phẩm giảm <strong>15%</strong><br />\n+&nbsp;Áp dụng mã EXTRA40 để giảm <strong>40,000đ</strong>&nbsp;cho đơn hàng từ 850,000 VND!</p>",
                "summary": null,
                "template_layout": "product",
                "available": true,
                "tags": ["item_100"],
                "price": 0.0000,
                "price_min": 0.0000,
                "price_max": 969000.0000,
                "price_varies": true,
                "compare_at_price": 1200000.0000,
                "compare_at_price_min": 1200000.0000,
                "compare_at_price_max": 1200000.0000,
                "compare_at_price_varies": false,
                "variants": [{
                    "id": 97230668,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 36",
                    "options": ["Xanh", "36"],
                    "option1": "Xanh",
                    "option2": "36",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 86,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230669,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 37",
                    "options": ["Xanh", "37"],
                    "option1": "Xanh",
                    "option2": "37",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 70,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230670,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 38",
                    "options": ["Xanh", "38"],
                    "option1": "Xanh",
                    "option2": "38",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 79,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230671,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 39",
                    "options": ["Xanh", "39"],
                    "option1": "Xanh",
                    "option2": "39",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 70,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230672,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 40",
                    "options": ["Xanh", "40"],
                    "option1": "Xanh",
                    "option2": "40",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 60,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230673,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xanh / 41",
                    "options": ["Xanh", "41"],
                    "option1": "Xanh",
                    "option2": "41",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 55,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}
                }, {
                    "id": 97230674,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 36",
                    "options": ["Xám", "36"],
                    "option1": "Xám",
                    "option2": "36",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 59,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230675,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 37",
                    "options": ["Xám", "37"],
                    "option1": "Xám",
                    "option2": "37",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230676,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 38",
                    "options": ["Xám", "38"],
                    "option1": "Xám",
                    "option2": "38",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 10,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230677,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 39",
                    "options": ["Xám", "39"],
                    "option1": "Xám",
                    "option2": "39",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230678,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 40",
                    "options": ["Xám", "40"],
                    "option1": "Xám",
                    "option2": "40",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230679,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Xám / 41",
                    "options": ["Xám", "41"],
                    "option1": "Xám",
                    "option2": "41",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}
                }, {
                    "id": 97230680,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 36",
                    "options": ["Trắng", "36"],
                    "option1": "Trắng",
                    "option2": "36",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 40,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230681,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 37",
                    "options": ["Trắng", "37"],
                    "option1": "Trắng",
                    "option2": "37",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 60,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230682,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 38",
                    "options": ["Trắng", "38"],
                    "option1": "Trắng",
                    "option2": "38",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 100,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230683,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 39",
                    "options": ["Trắng", "39"],
                    "option1": "Trắng",
                    "option2": "39",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 500,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230684,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 40",
                    "options": ["Trắng", "40"],
                    "option1": "Trắng",
                    "option2": "40",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 47,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230685,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Trắng / 41",
                    "options": ["Trắng", "41"],
                    "option1": "Trắng",
                    "option2": "41",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 33,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}
                }, {
                    "id": 97230686,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 36",
                    "options": ["Đen", "36"],
                    "option1": "Đen",
                    "option2": "36",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 54,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }, {
                    "id": 97230687,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 37",
                    "options": ["Đen", "37"],
                    "option1": "Đen",
                    "option2": "37",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 24,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }, {
                    "id": 97230688,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 38",
                    "options": ["Đen", "38"],
                    "option1": "Đen",
                    "option2": "38",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 56,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }, {
                    "id": 97230689,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 39",
                    "options": ["Đen", "39"],
                    "option1": "Đen",
                    "option2": "39",
                    "option3": null,
                    "available": false,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 0,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }, {
                    "id": 97230690,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 40",
                    "options": ["Đen", "40"],
                    "option1": "Đen",
                    "option2": "40",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 969000.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 234,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }, {
                    "id": 97230691,
                    "barcode": null,
                    "sku": null,
                    "unit": null,
                    "title": "Đen / 41",
                    "options": ["Đen", "41"],
                    "option1": "Đen",
                    "option2": "41",
                    "option3": null,
                    "available": true,
                    "taxable": false,
                    "price": 0.0000,
                    "compare_at_price": 1200000.0000,
                    "inventory_management": "bizweb",
                    "inventory_policy": "deny",
                    "inventory_quantity": 123,
                    "weight_unit": "g",
                    "weight": 0,
                    "requires_shipping": true,
                    "image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}
                }],
                "featured_image": {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"},
                "images": [{"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153206.jpg?v=1693669155603"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153171.jpg?v=1693669157717"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153177.jpg?v=1693669159167"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2153194.jpg?v=1693669160303"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2155258.jpg?v=1693669160967"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2195544.jpg?v=1693669161660"}, {"src": "https://bizweb.dktcdn.net/100/490/431/products/p2196379.jpg?v=1693669162397"}],
                "options": ["Màu sắc", "Kích thước"],
                "created_on": "2023-09-02T22:39:14",
                "modified_on": "2025-05-16T10:31:23",
                "published_on": "2023-09-02T22:39:00"
            };
            var alias_pro = 'product-videovideo-san-pham-kalenji-giay-chay-bo-jogflow-500-1-cho-nam';
            var array_list = [product];
            var list_viewed_pro_old = localStorage.getItem('last_viewed_products');
            var last_viewed_pro_new = "";
            if (list_viewed_pro_old == null || list_viewed_pro_old == '')
                last_viewed_pro_new = array_list;
            else {
                var list_viewed_pro_old = JSON.parse(localStorage.last_viewed_products);
                list_viewed_pro_old.splice(10, 1);
                for (i = 0; i < list_viewed_pro_old.length; i++) {
                    if (list_viewed_pro_old[i].alias == alias_pro) {
                        list_viewed_pro_old.splice(i, 1);
                        break;
                    }
                }
                list_viewed_pro_old.unshift(array_list[0]);
                last_viewed_pro_new = list_viewed_pro_old;
            }
            localStorage.setItem('last_viewed_products', JSON.stringify(last_viewed_pro_new));
        });
    </script>
    <div id="js-global-alert" class="alert alert-success" role="alert">
        <button type="button" class="close"><span aria-hidden="true"><span aria-hidden="true">&times;</span></span>
        </button>
        <h5 class="alert-heading"></h5>
        <p class="alert-content"></p>
    </div>

    <link href="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/bpr-products-module.css?1758009149569"
          rel="stylesheet" type="text/css" media="all"/>
    <div class="sapo-product-reviews-module"></div>
@endsection

@push('script')



    <script>
        document.addEventListener('click', function (e) {
            const el = e.target.closest('.swatch-element');
            if (!el) return;

            const swatch = el.closest('.swatch');
            if (!swatch) return;

            const input = el.querySelector('input[type="radio"]');
            const valueSpan = swatch.querySelector('.value-roperties');
            const currentSelected = swatch.querySelector('.swatch-element.selected');

            // Nếu đang chọn rồi và người dùng click lại -> BỎ CHỌN
            if (el.classList.contains('selected')) {
                e.preventDefault(); // chặn radio tự toggle lại
                el.classList.remove('selected');
                if (input) input.checked = false;
                if (valueSpan) valueSpan.textContent = '';
                return;
            }

            // Chọn mới: bỏ chọn cái cũ trong cùng .swatch
            if (currentSelected) {
                currentSelected.classList.remove('selected');
                const prevInput = currentSelected.querySelector('input[type="radio"]');
                if (prevInput) prevInput.checked = false;
            }

            el.classList.add('selected');
            if (input) {
                input.checked = true;
                // phát sự kiện change nếu bạn cần lắng nghe nơi khác
                input.dispatchEvent(new Event('change', { bubbles: true }));
            }

            if (valueSpan) {
                valueSpan.textContent = el.dataset.value || (input ? input.value : '');
                console.log( valueSpan)
            }
        });

        // Khởi tạo trạng thái khi trang load (nếu có radio được check sẵn từ server)
        window.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.swatch').forEach(function (swatch) {
                const checked = swatch.querySelector('input[type="radio"]:checked');
                const valueSpan = swatch.querySelector('.value-roperties');
                if (checked) {
                    const el = checked.closest('.swatch-element');
                    if (el) el.classList.add('selected');
                    if (valueSpan) valueSpan.textContent = checked.value;
                } else if (valueSpan) {
                    valueSpan.textContent = '';
                }
            });
        });
    </script>

@endpush
