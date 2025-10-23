@extends('site.layouts.master')
@section('title')
    Giỏ hàng
@endsection

@section('css')
    <link href="/site/css/cartpage.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />
    <style>
        .cart-table{
            border:1px solid #e6e8ec; border-radius:8px; overflow:hidden; background:#fff;
            font-size:14px; color:#222;
        }
        .cart-head, .cart-row{
            display:grid; grid-template-columns: 1fr 160px 160px 180px; align-items:center;
        }
        .cart-head{
            background:#f0f1f3; font-weight:700; text-transform:uppercase; color:#2b2f33;
        }
        .cart-head > div, .cart-row > div{ padding:12px 14px; }
        .cart-row{ border-top:1px solid #eef1f5; }

        .cart-row .info{ display:flex; gap:12px; align-items:center; }
        .cart-row .thumb img{ width:72px; height:72px; object-fit:cover; border-radius:4px; border:1px solid #eee; }
        .cart-row .meta{ display:flex; flex-direction:column; gap:6px; }
        .cart-row .name{ text-decoration:none; color:#111; font-weight:600; line-height:1.3; }
        .cart-row .name:hover{ text-decoration:underline; }
        .cart-row .remove{
            background:none; border:none; color:#888; text-decoration:underline; padding:0; text-align:left; cursor:pointer;
        }
        .cart-row .remove:hover{ color:#c00; }

        .cart-row .unit, .cart-row .sub{ color:#c00; font-weight:700; text-align:right; }

        .qty{
            display:flex; align-items:center; gap:6px; justify-content:center;
        }
        .btn-qty{
            width:32px; height:32px; border:1px solid #d7d9de; background:#fff; border-radius:4px; cursor:pointer;
            font-size:18px; line-height:1;
        }
        .inp-qty{
            padding: 0 !important;
            width:56px; height:32px; border:1px solid #d7d9de; border-radius:4px; text-align:center;
        }

        .cart-foot{
            display:flex; justify-content:space-between; align-items:center; padding:12px 14px; border-top:1px solid #eef1f5;
        }
        .cart-foot .total{ display:flex; align-items:center; gap:8px; }
        .cart-foot #cartGrand{ color:#c00; font-size:18px; }

        /* Responsive */
        @media (max-width: 992px){
            .cart-head{ display:none; }
            .cart-row{
                grid-template-columns: 1fr 1fr; grid-template-areas:
      "info info"
      "unit qty"
      "sub  sub";
                row-gap: 8px;
            }
            .cart-row .info{ grid-area: info; }
            .cart-row .unit{ grid-area: unit; text-align:left; }
            .cart-row .qty { grid-area: qty; justify-content:flex-end; }
            .cart-row .sub { grid-area: sub; text-align:right; }
            .cart-row .unit::before,
            .cart-row .qty::before,
            .cart-row .sub::before{
                content: attr(data-label) ": "; font-weight:600; color:#666; margin-right:6px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb" >
                <li class="home">
                    <a  href="/" title="Trang chủ"><span >Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>&nbsp;</span>
                </li>

                <li><strong ><span>Giỏ hàng</span></strong></li>

            </ul>
        </div>
    </section>


    <section class="main-cart-page main-container col1-layout" ng-controller="CartController">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside">
                <div class="header-cart">
                    <div class="title-block-page">
                        <h1 class="title_cart">
                            <span>Giỏ hàng của bạn</span>
                        </h1>
                    </div>
                </div>
                <div class="row" ng-if="checkCart">
                    <div class="col-xl-9 col-lg-7 col-12 col-cart-left">

                        <div class="cart-table" id="cartTable">
                            <div class="cart-head">
                                <div class="c1">THÔNG TIN SẢN PHẨM</div>
                                <div class="c2">ĐƠN GIÁ</div>
                                <div class="c3">SỐ LƯỢNG</div>
                                <div class="c4">THÀNH TIỀN</div>
                            </div>

                            <div class="cart-body">

                                <!-- Item 1 (demo) -->
                                <div class="cart-row" ng-repeat="item in items">
                                    <div class="c1 info">
                                        <a class="thumb" href="#"><img ng-src="<% item.attributes.image %>" alt="<% item.name %>"></a>
                                        <div class="meta">
                                            <a class="name" href="#"><% item.name %></a>
                                            <span><% item.attributes.attributes %></span>
                                            <button class="remove" type="button" aria-label="Xóa sản phẩm" ng-click="removeItem(item.id)">Xóa</button>
                                        </div>
                                    </div>
                                    <div class="c2 unit" data-label="Đơn giá"><% item.price | number %>₫</div>
                                    <div class="c3 qty" data-label="Số lượng">
                                        <button class="btn-qty minus" type="button" aria-label="Giảm" ng-click="decrementQuantity(item); changeQty(item.quantity, item)">−</button>
                                        <input class="inp-qty" type="number" min="1" step="1" inputmode="numeric" ng-model="item.quantity" readonly=""/>
                                        <button class="btn-qty plus" type="button" aria-label="Tăng" ng-click="incrementQuantity(item); changeQty(item.quantity, item)">+</button>
                                    </div>
                                    <div class="c4 sub" data-label="Thành tiền"><% (item.price * item.quantity) | number %>₫</div>
                                </div>



                            </div>

                            <div class="cart-foot">
                                <div class="note"></div>
                                <div class="total">
                                    <span>Tổng tiền:</span>
                                    <strong id="cartGrand"><% total | number%>₫</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-5 col-12 col-cart-right">
                        <div class="ajaxcart__footer">
                            <div class="checkout-header">
                                Thông tin đơn hàng
                            </div>
                            <div class="checkout-body">
                                <div class="summary-total">

                                    <div class="content-items">
                                        <div class="item-content-left">Tổng tiền</div>
                                        <div class="item-content-right"><span class="total-price"><% total | number%>₫</span></div>
                                    </div>

                                </div>
                                <div class="summary-action">
                                    <div class="content-items">
                                        <span class="item-content-left"> Giảm giá </span>
                                        <span class="item-content-right"> Áp dụng tại trang thanh toán </span>
                                    </div>
                                    <div class="content-items">
                                        <span class="item-content-left">Phí vận chuyển</span>
                                        <span class="item-content-right">Được tính tại trang thanh toán</span>
                                    </div>
                                </div>






                                <div class="summary-button">
                                    <div class="cart__btn-proceed-checkout-dt">
                                        <a href="{{ route('cart.checkout') }}">
                                            <button type="button" class="button btn btn-default cart__btn-proceed-checkout" id="btn-proceed-checkout" title="Thanh toán">Thanh toán</button>
                                        </a>
                                    </div>
                                    <a class="return_buy" title="Tiếp tục mua hàng" href="{{ route('front.home-page') }}">Tiếp tục mua hàng</a>
                                </div>
                            </div>

                        </div>

{{--                        <div class="cart-payment">--}}
{{--                            <span class="title">Hỗ trợ thanh toán với</span>--}}
{{--                            <div class="payment-footer">--}}





{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="MoMo" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_1.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}






{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="Zalo Pay" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_2.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}






{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="VnPay" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_3.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}






{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="Moca" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_4.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}






{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="Visa" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_5.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}






{{--                                <div class="payment-item">--}}
{{--                                    <img class="lazyload" width=126 height=58 alt="ATM" data-src="//bizweb.dktcdn.net/100/490/431/themes/927074/assets/payment_6.png?1758009149569" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                        </div>--}}

                    </div>
                </div>

                <div class="row" ng-if="! checkCart">
                    <p>Chưa có sản phẩm nào trong giỏ hàng của bạn !</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')

    <script>
        app.controller('CartController', function ($rootScope, $scope, $sce, $interval, cartItemSync) {
            $scope.items = @json($cartCollection);
            $scope.total = "{{$total_price}}";
            $scope.total_qty = "{{$total_qty}}";

            $scope.checkCart = true;

            jQuery(document).ready(function () {
                if ($scope.total_qty == 0) {
                    $scope.checkCart = false;
                    $scope.$applyAsync();
                }
            })

            $scope.incrementQuantity = function (product) {
                product.quantity = Math.min(product.quantity + 1, 9999);
            };

            $scope.decrementQuantity = function (product) {
                product.quantity = Math.max(product.quantity - 1, 0);
            };


            $scope.changeQty = function (qty, item) {
                updateCart(qty, item)
            }

            function updateCart(qty, item) {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{route('cart.update.item')}}",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        product_id: item.id,
                        qty: qty
                    },
                    beforeSend: function() {
                        jQuery('.loading-spin').show();
                        // showOverlay();
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;

                            if (response.count == 0) {
                                $scope.checkCart = false;
                            }

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function(){
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        jQuery('.loading-spin').hide();
                        // hideOverlay();
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.removeItem = function (product_id) {
                jQuery.ajax({
                    type: 'GET',
                    url: "{{route('cart.remove.item')}}",
                    data: {
                        product_id: product_id
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;

                            if (response.count == 0) {
                                $scope.checkCart = false;
                            }

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function(){
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);


                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }

            function showOverlay() {
                var overlay = document.getElementById('overlay');
                overlay.style.display = 'flex';
            }

            function hideOverlay() {
                var overlay = document.getElementById('overlay');
                overlay.style.display = 'none';
            }
        })
    </script>





@endpush
