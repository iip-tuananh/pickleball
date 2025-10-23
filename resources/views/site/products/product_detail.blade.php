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
    <section class="product layout-product" ng-controller="productDetailPage">

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
                                                <div class="swatch clearfix"
                                                     data-option-index="{{ $keyAttr }}"
                                                     @if(!empty($attribute['id'])) data-attr-id="{{ $attribute['id'] }}" @endif>
                                                    <div class="header">
                                                        {{ $attribute['name'] }}:
                                                        <span class="value-roperties"></span>
                                                    </div>

                                                    @foreach($attribute['values'] as $keyVal => $val)
                                                        @php $vid = $val['id']; $vlabel = $val['value']; @endphp

                                                        <div class="swatch-element {{ $keyAttr }}-{{ $keyVal }} available"
                                                             data-id="{{ $vid }}" data-value="{{ $vlabel }}" title="{{ $vlabel }}">
                                                            <input id="swatch-{{ $keyAttr }}-{{ $keyVal }}"
                                                                   type="radio"
                                                                   name="option-{{ !empty($attribute['id']) ? $attribute['id'] : $keyAttr }}"
                                                                   value="{{ $vid }}" />
                                                            <label for="swatch-{{ $keyAttr }}-{{ $keyVal }}">{{ $vlabel }}</label>
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

                                                    <button type="button" ng-click="addToCart({{ $product->id }})"
                                                            class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                        <span class="txt-main">Thêm vào giỏ</span>
                                                    </button>
                                                    <button class="btn-buyNow btn" ng-click="buyNow({{ $product->id }})">
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

                                <li class="tab-link" data-tab="#tab-3">
                                    <h3>Review khách hàng</h3>
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
{{--                                   chính sách đổi trả--}}
                                </div>

                                <!-- ===== START: REVIEWS BLOCK ===== -->
                                <div id="tab-3" class="tab-content content_extab">
                                    <section class="reviews" aria-label="Đánh giá sản phẩm">
                                        <!-- Summary / Controls -->
                                        <div class="reviews__top">
                                            <div class="reviews__summary" aria-live="polite">
                                                <div class="summary__score">
                                                    <div class="score__value" id="avgScore">0.0</div>
                                                    <div class="score__stars" aria-hidden="true">
                                                        <div class="stars stars--lg">
                                                            <div class="stars__bg"></div>
                                                            <div class="stars__fg" id="avgStars"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="summary__meta">
                                                    <div><strong id="totalReviews">0</strong> đánh giá</div>
                                                    <div class="summary__hint">Xếp hạng trung bình</div>
                                                </div>
                                            </div>

                                            <div class="reviews__controls">
                                                <label class="control">
                                                    <span>Lọc theo sao:</span>
                                                    <select id="filterRating">
                                                        <option value="all">Tất cả</option>
                                                        <option value="5">5 sao</option>
                                                        <option value="4">4 sao</option>
                                                        <option value="3">3 sao</option>
                                                        <option value="2">2 sao</option>
                                                        <option value="1">1 sao</option>
                                                    </select>
                                                </label>

                                                <label class="control">
                                                    <span>Sắp xếp:</span>
                                                    <select id="sortBy">
                                                        <option value="newest">Mới nhất</option>
                                                        <option value="oldest">Cũ nhất</option>
                                                        <option value="highest">Sao cao → thấp</option>
                                                        <option value="lowest">Sao thấp → cao</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- List -->
                                        <div class="reviews__list" id="reviewsList" aria-live="polite"></div>

                                    </section>
                                </div>

                                <style>
                                    /* ===== REVIEWS BLOCK STYLES (scoped by #tab-3) ===== */
                                    #tab-3 { --brand: #1363df; --ink: #0b1221; --muted:#6b7280; --line:#e5e7eb; --bg:#ffffff; --card:#ffffff; --ring:#eef2ff; }
                                    #tab-3 .reviews { padding: 16px; background: var(--bg); border-radius: 14px; border:1px solid var(--line); }
                                    @media (min-width: 768px){ #tab-3 .reviews{ padding: 24px; } }

                                    #tab-3 .reviews__top{
                                        display:grid; gap:16px; align-items:center; margin-bottom:16px;
                                    }
                                    @media (min-width: 768px){
                                        #tab-3 .reviews__top{ grid-template-columns: 1fr auto; }
                                    }

                                    #tab-3 .reviews__summary{
                                        display:flex; align-items:center; gap:16px; background: var(--card);
                                        border:1px solid var(--line); border-radius: 14px; padding:12px 14px;
                                    }
                                    #tab-3 .summary__score{ display:flex; align-items:center; gap:12px; }
                                    #tab-3 .score__value{
                                        font-size: clamp(24px, 4vw, 36px); font-weight:800; color: var(--ink); line-height:1;
                                    }
                                    #tab-3 .summary__meta{ color: var(--muted); font-size:14px; }
                                    #tab-3 .summary__meta strong{ color: var(--ink); }

                                    #tab-3 .reviews__controls{
                                        display:flex; gap:10px; flex-wrap:wrap; justify-content:flex-start;
                                    }
                                    #tab-3 .control{ display:flex; align-items:center; gap:8px; font-size:14px; color:var(--muted); }
                                    #tab-3 .control select{
                                        appearance:none; -webkit-appearance:none; -moz-appearance:none;
                                        border:1px solid var(--line); background:#fff; border-radius:10px; padding:8px 12px; color:var(--ink);
                                        outline:none;
                                    }
                                    #tab-3 .control select:focus{ box-shadow: 0 0 0 4px var(--ring); border-color:#c7d2fe; }

                                    /* Stars (mask technique with two layers) */
                                    #tab-3 .stars{ --size:18px; position:relative; width: calc(var(--size) * 5); height: var(--size); display:inline-block; }
                                    #tab-3 .stars--lg{ --size:22px; }
                                    #tab-3 .stars__bg, #tab-3 .stars__fg{
                                        position:absolute; inset:0;
                                        -webkit-mask: url('data:image/svg+xml;utf8,\
<svg xmlns="http://www.w3.org/2000/svg" viewBox=\'0 0 110 20\'><g>\
<path d=\"M10 0l2.94 6.06L20 7.27l-5 4.88L16.18 20 10 16.9 3.82 20 5 12.15 0 7.27l7.06-1.21z\"/>\
<path d=\"M32 0l2.94 6.06L42 7.27l-5 4.88L38.18 20 32 16.9 25.82 20 27 12.15 22 7.27l7.06-1.21z\"/>\
<path d=\"M54 0l2.94 6.06L64 7.27l-5 4.88L60.18 20 54 16.9 47.82 20 49 12.15 44 7.27l7.06-1.21z\"/>\
<path d=\"M76 0l2.94 6.06L86 7.27l-5 4.88L82.18 20 76 16.9 69.82 20 71 12.15 66 7.27l7.06-1.21z\"/>\
<path d=\"M98 0l2.94 6.06L108 7.27l-5 4.88L104.18 20 98 16.9 91.82 20 93 12.15 88 7.27l7.06-1.21z\"/>\
</g></svg>') center/contain no-repeat;
                                        mask: url('data:image/svg+xml;utf8,\
<svg xmlns="http://www.w3.org/2000/svg" viewBox=\'0 0 110 20\'><g>\
<path d=\"M10 0l2.94 6.06L20 7.27l-5 4.88L16.18 20 10 16.9 3.82 20 5 12.15 0 7.27l7.06-1.21z\"/>\
<path d=\"M32 0l2.94 6.06L42 7.27l-5 4.88L38.18 20 32 16.9 25.82 20 27 12.15 22 7.27l7.06-1.21z\"/>\
<path d=\"M54 0l2.94 6.06L64 7.27l-5 4.88L60.18 20 54 16.9 47.82 20 49 12.15 44 7.27l7.06-1.21z\"/>\
<path d=\"M76 0l2.94 6.06L86 7.27l-5 4.88L82.18 20 76 16.9 69.82 20 71 12.15 66 7.27l7.06-1.21z\"/>\
<path d=\"M98 0l2.94 6.06L108 7.27l-5 4.88L104.18 20 98 16.9 91.82 20 93 12.15 88 7.27l7.06-1.21z\"/>\
</g></svg>') center/contain no-repeat;
                                    }
                                    /*#tab-3 .stars__bg{ background:#e5e7eb; }*/
                                    #tab-3 .stars__fg{ background: linear-gradient(90deg, #f59e0b, #f59e0b); width: 0%; overflow:hidden; }

                                    /* List grid */
                                    #tab-3 .reviews__list{ display:grid; gap:14px; }
                                    @media (min-width: 768px){
                                        #tab-3 .reviews__list{ grid-template-columns: 1fr 1fr; }
                                    }

                                    #tab-3 .review{
                                        display:flex; gap:12px; padding:14px; border:1px solid var(--line); border-radius:14px; background:#fff;
                                    }
                                    #tab-3 .review__avatar{
                                        width:48px; height:48px; border-radius:50%; overflow:hidden; flex:0 0 48px; border:1px solid var(--line);
                                    }
                                    #tab-3 .review__avatar img{ width:100%; height:100%; object-fit:cover; display:block; }

                                    #tab-3 .review__body{ flex:1 1 auto; min-width:0; }
                                    #tab-3 .review__head{ display:flex; align-items:center; justify-content:space-between; gap:8px; margin-bottom:6px; }
                                    #tab-3 .review__author{ font-weight:700; color:var(--ink); }
                                    #tab-3 .review__meta{ font-size:12px; color:var(--muted); margin-bottom:8px; }

                                    #tab-3 .review__stars .stars{ vertical-align:middle; }
                                    #tab-3 .review__content{ color:#1f2937; font-size:14px; line-height:1.6; }
                                    #tab-3 .review__content[data-clamped="true"]{ display:-webkit-box; -webkit-line-clamp:4; -webkit-box-orient:vertical; overflow:hidden; }
                                    #tab-3 .review__actions{ margin-top:8px; }
                                    #tab-3 .btn-link{
                                        background:transparent; border:none; padding:0; color:var(--brand); font-weight:600; cursor:pointer;
                                    }
                                    #tab-3 .btn-link:focus{ outline: none; box-shadow: 0 0 0 4px var(--ring); border-radius:6px; }

                                    /* Subtle card hover */
                                    #tab-3 .review{ transition: box-shadow .2s ease, transform .06s ease; }
                                    #tab-3 .review:hover{ box-shadow: 0 6px 18px rgba(17, 24, 39, .08); transform: translateY(-1px); }
                                </style>
                                <style>
                                    /* Stars: discrete per-review */
                                    #tab-3 .stars-inline{
                                        display:inline-flex; align-items:center; gap:2px;
                                    }
                                    #tab-3 .stars-inline svg{
                                        width:18px; height:18px; display:block;
                                    }
                                    #tab-3 .stars-inline .filled path{ fill:#f59e0b; }  /* sao tô */
                                    #tab-3 .stars-inline .empty  path{ fill:#e5e7eb; }  /* sao rỗng (nếu bạn muốn đủ 5) */
                                </style>

                                @php
                                    use Illuminate\Support\Str;
                                    use Carbon\Carbon;

                                    $reviewsJs = $reviews->map(function ($r) {
                                        // Avatar: ưu tiên avatar_url; nếu không, dùng Gravatar theo email; không có nữa thì null
                                        $gravatar = $r->user_email
                                            ? 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($r->user_email))) . '?s=96&d=identicon'
                                            : null;
                                        $avatar = $r->avatar_url ?: $gravatar;


                                        // Ngày tạo: ưu tiên created_at; fallback approve_date; nếu cả hai null thì null
                                        $createdIso = null;
                                        if (!empty($r->created_at)) {
                                            $createdIso = $r->created_at instanceof \Carbon\Carbon
                                                ? $r->created_at->toIso8601String()
                                                : Carbon::parse($r->created_at)->toIso8601String();
                                        } elseif (!empty($r->approve_date)) {
                                            $createdIso = Carbon::parse($r->approve_date)->toIso8601String();
                                        }

                                        return [
                                            'name'       => $r->user_name ?: 'Khách hàng ẩn danh',
                                            'role'       => $r->user_email,
                                            'rating'     => max(1, min(5, (int) $r->rating)), // ép về 1..5
                                            'content'    => (string) ($r->content ?? ''),
                                            'avatar'     => $avatar,
                                            'created_at' => $createdIso,
                                        ];
                                    })->values();
                                @endphp

                                <script>
                                    // Đổ JSON ra JS (giữ Unicode + dấu / cho gọn)
                                    window.REVIEWS = @json($reviewsJs, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
                                </script>

                                <script>
                                    /* ===== Simple demo data & rendering ===== */
                                    (() => {
                                        const data = Array.isArray(window.REVIEWS) ? window.REVIEWS : [];
                                        console.log(data)
                                        const reviewsList = document.getElementById("reviewsList");
                                        const avgScoreEl = document.getElementById("avgScore");
                                        const avgStarsEl = document.getElementById("avgStars");
                                        const totalReviewsEl = document.getElementById("totalReviews");
                                        const filterRating = document.getElementById("filterRating");
                                        const sortBy = document.getElementById("sortBy");

                                        function calcAvg(list){
                                            if(!list.length) return 0;
                                            const sum = list.reduce((s, r)=> s + (+r.rating||0), 0);
                                            return Math.round((sum / list.length) * 10) / 10;
                                        }

                                        function setStarsFill(container, score){
                                            // score in [0..5] -> width %
                                            const pct = Math.max(0, Math.min(5, score)) / 5 * 100;
                                            container.style.width = pct + "%";
                                        }

                                        function formatDate(iso){
                                            const d = new Date(iso);
                                            return d.toLocaleDateString("vi-VN", { day:"2-digit", month:"2-digit", year:"numeric" });
                                        }



    //                                     function renderCard(item){
    //                                         const wrap = document.createElement("article");
    //                                         wrap.className = "review";
    //                                         wrap.setAttribute("aria-label", `Đánh giá ${item.rating} sao bởi ${item.name}`);
    //
    //                                         const avatar = document.createElement("div");
    //                                         avatar.className = "review__avatar";
    //                                         avatar.innerHTML = `<img src="${item.avatar || ''}" alt="Ảnh đại diện của ${item.name}" onerror="this.style.display='none'">`;
    //
    //                                         const body = document.createElement("div");
    //                                         body.className = "review__body";
    //
    //                                         const head = document.createElement("div");
    //                                         head.className = "review__head";
    //
    //                                         const author = document.createElement("div");
    //                                         author.className = "review__author";
    //                                         author.textContent = item.name;
    //
    //                                         const starWrap = document.createElement("div");
    //                                         starWrap.className = "review__stars";
    //                                         starWrap.setAttribute("aria-label", `${item.rating} trên 5 sao`);
    //                                         starWrap.innerHTML = `
    //   <div class="stars">
    //     <div class="stars__bg"></div>
    //     <div class="stars__fg"></div>
    //   </div>
    // `;
    //
    //                                         head.appendChild(author);
    //                                         head.appendChild(starWrap);
    //
    //                                         const meta = document.createElement("div");
    //                                         meta.className = "review__meta";
    //                                         meta.textContent = `${item.role} • ${formatDate(item.created_at)}`;
    //
    //                                         const content = document.createElement("div");
    //                                         content.className = "review__content";
    //                                         content.dataset.clamped = "true";
    //                                         content.textContent = item.content;
    //
    //                                         const actions = document.createElement("div");
    //                                         actions.className = "review__actions";
    //                                         const btn = document.createElement("button");
    //                                         btn.type = "button";
    //                                         btn.className = "btn-link";
    //                                         btn.textContent = "Xem thêm";
    //                                         btn.addEventListener("click", () => {
    //                                             const isClamped = content.dataset.clamped === "true";
    //                                             content.dataset.clamped = isClamped ? "false" : "true";
    //                                             btn.textContent = isClamped ? "Thu gọn" : "Xem thêm";
    //                                         });
    //                                         actions.appendChild(btn);
    //
    //                                         body.appendChild(head);
    //                                         body.appendChild(meta);
    //                                         body.appendChild(content);
    //                                         body.appendChild(actions);
    //
    //                                         wrap.appendChild(avatar);
    //                                         wrap.appendChild(body);
    //
    //                                         // set stars
    //                                         setStarsFill(starWrap.querySelector(".stars__fg"), item.rating);
    //
    //                                         return wrap;
    //                                     }



                                        function createDiscreteStarsHTML(rating){
                                            const count = Math.max(0, Math.min(5, parseInt(rating,10) || 0));
                                            // Hiển thị đúng số sao = rating (3 -> 3 sao). Nếu muốn luôn 5 sao (3 tô, 2 rỗng) thì xem ghi chú bên dưới.
                                            let html = '<span class="stars-inline" aria-hidden="true">';
                                            const starSvg = (cls) => `
      <svg class="${cls}" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M10 1.5l2.47 5 5.53.8-4 3.9.94 5.5L10 14.9 5.06 16.7l.94-5.5-4-3.9 5.53-.8L10 1.5z"/>
      </svg>`;
                                            for(let i=0;i<count;i++) html += starSvg('filled');
                                            html += '</span>';
                                            return html;
                                        }

                                        function renderCard(item){
                                            const wrap = document.createElement("article");
                                            wrap.className = "review";
                                            wrap.setAttribute("aria-label", `Đánh giá ${item.rating} sao bởi ${item.name}`);

                                            const avatar = document.createElement("div");
                                            avatar.className = "review__avatar";
                                            avatar.innerHTML = `<img src="${item.avatar || ''}" alt="Ảnh đại diện của ${item.name}" onerror="this.style.display='none'">`;

                                            const body = document.createElement("div");
                                            body.className = "review__body";

                                            const head = document.createElement("div");
                                            head.className = "review__head";

                                            const author = document.createElement("div");
                                            author.className = "review__author";
                                            author.textContent = item.name;

                                            const starWrap = document.createElement("div");
                                            starWrap.className = "review__stars";
                                            starWrap.setAttribute("aria-label", `${item.rating} trên 5 sao`);
                                            // === DÙNG SAO RỜI ===
                                            starWrap.innerHTML = createDiscreteStarsHTML(item.rating);

                                            head.appendChild(author);
                                            head.appendChild(starWrap);

                                            const meta = document.createElement("div");
                                            meta.className = "review__meta";
                                            meta.textContent = `${item.role || ''} ${item.role ? ' • ' : ''}${formatDate(item.created_at)}`;

                                            const content = document.createElement("div");
                                            content.className = "review__content";
                                            content.dataset.clamped = "true";
                                            content.textContent = item.content;

                                            const actions = document.createElement("div");
                                            actions.className = "review__actions";
                                            const btn = document.createElement("button");
                                            btn.type = "button";
                                            btn.className = "btn-link";
                                            btn.textContent = "Xem thêm";
                                            btn.addEventListener("click", () => {
                                                const isClamped = content.dataset.clamped === "true";
                                                content.dataset.clamped = isClamped ? "false" : "true";
                                                btn.textContent = isClamped ? "Thu gọn" : "Xem thêm";
                                            });
                                            actions.appendChild(btn);

                                            body.appendChild(head);
                                            body.appendChild(meta);
                                            body.appendChild(content);
                                            body.appendChild(actions);

                                            wrap.appendChild(avatar);
                                            wrap.appendChild(body);

                                            return wrap;
                                        }


                                        function applyControls(list){
                                            let out = [...list];
                                            const f = filterRating.value;
                                            if(f !== "all"){ out = out.filter(r => +r.rating === +f); }

                                            const s = sortBy.value;
                                            if(s === "newest") out.sort((a,b)=> new Date(b.created_at) - new Date(a.created_at));
                                            if(s === "oldest") out.sort((a,b)=> new Date(a.created_at) - new Date(b.created_at));
                                            if(s === "highest") out.sort((a,b)=> b.rating - a.rating);
                                            if(s === "lowest") out.sort((a,b)=> a.rating - b.rating);

                                            return out;
                                        }

                                        function render(){
                                            const list = applyControls(data);
                                            reviewsList.innerHTML = "";
                                            list.forEach(item => reviewsList.appendChild(renderCard(item)));

                                            const avg = calcAvg(data);
                                            avgScoreEl.textContent = avg.toFixed(1);
                                            totalReviewsEl.textContent = data.length;
                                            setStarsFill(avgStarsEl, avg);
                                        }

                                        filterRating.addEventListener("change", render);
                                        sortBy.addEventListener("change", render);

                                        // initial render
                                        render();
                                    })();
                                </script>
                                <!-- ===== END: REVIEWS BLOCK ===== -->


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

                                @foreach($bestSellerProducts as $bestSellerProduct)
                                    <div class="product-view">
                                        <a class="image_thumb" href="{{ route('front.show-product-detail', $bestSellerProduct->slug) }}"
                                           title="Sandals leo n&#250;i d&#227; ngoại nam NH100">
                                            <img width="370" height="480" class="lazyload"
                                                 src="{{ $bestSellerProduct->image->path ?? '' }}"
                                                 data-src="{{ $bestSellerProduct->image->path ?? '' }}"
                                                 alt=" {{ $bestSellerProduct->name }}">
                                        </a>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="{{ route('front.show-product-detail', $bestSellerProduct->slug) }}"
                                                                        title=" {{ $bestSellerProduct->name }}">
                                                    {{ $bestSellerProduct->name }}
                                                </a></h3>
                                            <div class="price-box">


                                                <span class="price">{{ formatCurrency($bestSellerProduct->price) }}₫</span>
                                                @if($bestSellerProduct->base_price > 0)
                                                    <span class="compare-price">{{ formatCurrency($bestSellerProduct->base_price) }}₫</span>
                                                @endif


                                            </div>
                                        </div>
                                    </div>

                                @endforeach

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
        app.controller('productDetailPage', function ($rootScope, $scope, $interval, $timeout, cartItemSync) {
            $scope.addToCart = function (productId, qty = null) {
                if(qty) {
                    var currentVal = qty;
                } else {
                    var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                }

                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                // mảng value attributes khi click chọn
                var selectedValueIds = [];
                var selectedValueLabels = [];
                var missing = [];

                jQuery('.swatch').each(function () {
                    var $sw = jQuery(this);
                    var $checked = $sw.find('input[type=radio]:checked');

                    if ($checked.length) {
                        // id (vid)
                        var vid = parseInt($checked.val(), 10);
                        selectedValueIds.push(vid);

                        // label (vlabel)
                        // ưu tiên lấy từ .swatch-element đang selected
                        var $el = $checked.closest('.swatch-element');
                        var vlabel = ($el.data('value') || '').toString().trim();

                        // nếu vì lý do nào đó không có data-value, fallback sang text của <label>
                        if (!vlabel) {
                            vlabel = ($el.find('label').text() || '').trim();
                        }

                        selectedValueLabels.push(vlabel);
                    } else {
                        var name = $sw.find('.header').text().trim();
                        missing.push(name);
                    }
                });

                if (missing.length) {
                    alert('Vui lòng chọn: \n- ' + missing.join('\n- '));
                    return;
                }


                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        qty: currentVal,
                        attribute_value_ids: selectedValueIds,
                        attribute_value_labels: selectedValueLabels
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            toastr.success('Đã thêm sản phẩm vào giỏ hàng');

                        }
                    },
                    error: function () {
                        jQuery.toast('Thao tác thất bại !')
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.buyNow = function (productId) {
                var currentVal = parseInt(jQuery('input[name="quantity"]').val());
                url = "{{route('cart.add.item', ['productId' => 'productId'])}}";
                url = url.replace('productId', productId);

                // mảng value attributes khi click chọn
                var selectedValueIds = [];
                var selectedValueLabels = [];
                var missing = [];

                jQuery('.swatch').each(function () {
                    var $sw = jQuery(this);
                    var $checked = $sw.find('input[type=radio]:checked');

                    if ($checked.length) {
                        // id (vid)
                        var vid = parseInt($checked.val(), 10);
                        selectedValueIds.push(vid);

                        // label (vlabel)
                        // ưu tiên lấy từ .swatch-element đang selected
                        var $el = $checked.closest('.swatch-element');
                        var vlabel = ($el.data('value') || '').toString().trim();

                        // nếu vì lý do nào đó không có data-value, fallback sang text của <label>
                        if (!vlabel) {
                            vlabel = ($el.find('label').text() || '').trim();
                        }

                        selectedValueLabels.push(vlabel);
                    } else {
                        var name = $sw.find('.header').text().trim();
                        missing.push(name);
                    }
                });

                if (missing.length) {
                    alert('Vui lòng chọn: \n- ' + missing.join('\n- '));
                    return;
                }


                jQuery.ajax({
                    type: 'POST',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: {
                        qty: currentVal,
                        attribute_value_ids: selectedValueIds,
                        attribute_value_labels: selectedValueLabels
                    },
                    success: function (response) {
                        if (response.success) {
                            $interval.cancel($rootScope.promise);
                            $rootScope.promise = $interval(function () {
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            toastr.success('Đã thêm sản phẩm vào giỏ hàng');
                            window.location.href = "{{ route('cart.index') }}";
                        }
                    },
                    error: function () {
                        jQuery.toast('Thao tác thất bại !')
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }




        })
    </script>

    <script>
        document.addEventListener('click', function (e) {
            const el = e.target.closest('.swatch-element');
            if (!el) return;

            const swatch = el.closest('.swatch');
            if (!swatch) return;

            const input = el.querySelector('input[type="radio"]');
            const valueSpan = swatch.querySelector('.value-roperties');
            const currentSelected = swatch.querySelector('.swatch-element.selected');

            // Click lại để bỏ chọn
            if (el.classList.contains('selected')) {
                e.preventDefault();
                el.classList.remove('selected');
                if (input) input.checked = false;
                if (valueSpan) valueSpan.textContent = '';
                return;
            }

            // Bỏ chọn cũ
            if (currentSelected) {
                currentSelected.classList.remove('selected');
                const prevInput = currentSelected.querySelector('input[type="radio"]');
                if (prevInput) prevInput.checked = false;
            }

            // Chọn mới
            el.classList.add('selected');
            if (input) {
                input.checked = true;
                input.dispatchEvent(new Event('change', { bubbles: true }));
            }
            if (valueSpan) {
                // Hiển thị TEXT từ data-value (ví dụ "50x50 cm")
                valueSpan.textContent = el.dataset.value || '';
            }
        });

        // Khởi tạo nếu server có check sẵn
        window.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.swatch').forEach(function (swatch) {
                const checked = swatch.querySelector('input[type="radio"]:checked');
                const valueSpan = swatch.querySelector('.value-roperties');
                if (checked) {
                    const el = checked.closest('.swatch-element');
                    if (el) el.classList.add('selected');
                    if (valueSpan) valueSpan.textContent = el?.dataset?.value || '';
                } else if (valueSpan) {
                    valueSpan.textContent = '';
                }
            });
        });
    </script>





@endpush
