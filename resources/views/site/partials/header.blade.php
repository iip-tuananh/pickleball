<header class="header" ng-controller="headerPartial" ng-cloak>

    <div class="topbar">
        <div class="container">
            <div class="header-promo">
                <ul class="ul-default promo-list js-promo">
                    @foreach (explode("\n", $config->text_top_header) as $key => $text)
                        @if ($key == 0)
                            <li class="promo-item  see-block">
                                <a class="duration-300 line-clamp-2-new" href="#"
                                    title="{{ $text }}">{{ $text }}</a>
                            </li>
                        @else
                            <li class="promo-item  see-none">
                                <a class="duration-300 line-clamp-2-new" href="#"
                                    title="{{ $text }}">{{ $text }}</a>
                            </li>
                        @endif
                    @endforeach
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
                        <a href="{{ route('front.home-page') }}" class="logo-wrapper" title="{{ $config->web_title }}">
                            <img width="250" height="43"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ $config->image ? $config->image->path : 'https://placehold.co/250x43' }}"
                                alt="{{ $config->web_title }}" class="lazyload">
                        </a>
                    </div>
                    <div class="header-mid">
                        <div class="list-top-item header_tim_kiem">
                            <form action="{{ route('front.search') }}" method="get"
                                class="header-search-form input-group search-bar" role="search">
                                <input name="keyword" required
                                    class="input-group-field auto-search search-auto form-control"
                                    placeholder="Tìm sản phẩm..." autocomplete="off" type="text">
                                <button type="submit" class="btn icon-fallback-text duration-300" aria-label="Tìm kiếm"
                                    title="Tìm kiếm">
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
                                            <a href="/search?q=Tất/vớ" class="search-item" title="Tìm kiếm Tất/vớ">
                                                Tất/vớ
                                            </a>
                                            <a href="/search?q=Nón%20leo%20núi" class="search-item"
                                                title="Tìm kiếm Nón leo núi">
                                                Nón leo núi
                                            </a>
                                            <a href="/search?q=Bóng%20rổ" class="search-item" title="Tìm kiếm Bóng rổ">
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
                                <a title="Điện thoại: {{ $config->hotline }}"
                                    href="tel:{{ str_replace(' ', '', $config->hotline) }}"></a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                                <div class="text-box">
                                    <span class="acc-text-small">Hotline hỗ trợ:</span>
                                    <span class="acc-text">{{ $config->hotline }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="sudes-header-stores hidden-xs">
                            <div class="frame-fix">
                                <a href="{{ route('front.showroom') }}" title="Hệ thống sân pickleball"></a>
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 22.52L26 21.174V2H2V25.79L9.095 24.425C9.03237 24.2921 8.99993 24.1469 9 24V16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15H18C18.2652 15 18.5196 15.1054 18.7071 15.2929C18.8946 15.4804 19 15.7348 19 16V22.52ZM17 22.905V17H11V24C11 24.02 11 24.04 10.998 24.059L17 22.905ZM1 0H27C27.2652 0 27.5196 0.105357 27.7071 0.292893C27.8946 0.48043 28 0.734784 28 1V22C28 22.2324 27.919 22.4576 27.771 22.6368C27.623 22.816 27.4172 22.9381 27.189 22.982L1.189 27.982C1.04431 28.0098 0.89526 28.0054 0.752502 27.9689C0.609744 27.9324 0.476808 27.8649 0.363202 27.7711C0.249597 27.6772 0.158129 27.5595 0.0953412 27.4262C0.0325533 27.2929 -3.37575e-06 27.1473 2.62534e-10 27V1C2.62534e-10 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM6 7.998V4H22V7.998H6Z"
                                        fill="black" />
                                </svg>
                                <div class="text-box">
                                    <span class="acc-text-small">Hệ thống sân</span>
                                    <span class="acc-text">Pickleball</span>
                                </div>
                            </div>
                        </div>

                        {{--                        <div class="sudes-header-account header-action_account"> --}}
                        {{--                            <div class="frame-fix"> --}}
                        {{--                                <a href="javascript:;" class="header-account" aria-label="Tài khoản" --}}
                        {{--                                   title="Tài khoản"></a> --}}
                        {{--                                <svg aria-hidden="true" class="svg-icon tool-icon" viewBox="0 0 32 32"> --}}
                        {{--                                    <path --}}
                        {{--                                        d="M7.164 29.986a1 1 0 01-1.148-1.165l2-11A1 1 0 019 17h14a1 1 0 01.97.757l2 8a1 1 0 01-.806 1.23l-18 3zm1.074-2.206l15.53-2.588L22.218 19H9.835l-1.597 8.78zM16 15c-3.314 0-6-2.91-6-6.5S12.686 2 16 2s6 2.91 6 6.5-2.686 6.5-6 6.5zm0-2c2.172 0 4-1.98 4-4.5S18.172 4 16 4c-2.172 0-4 1.98-4 4.5s1.828 4.5 4 4.5z"> --}}
                        {{--                                    </path> --}}
                        {{--                                </svg> --}}
                        {{--                                <div class="text-box"> --}}
                        {{--                                    <span class="acc-text-small hidden-xs">Thông tin</span> --}}
                        {{--                                    <span class="acc-text"> --}}
                        {{--                                            Tài khoản --}}
                        {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" --}}
                        {{--                                                 fill="currentColor" class="bi bi-caret-down-fill" --}}
                        {{--                                                 viewBox="0 0 16 16"> --}}
                        {{--                                                <path --}}
                        {{--                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" /> --}}
                        {{--                                            </svg> --}}
                        {{--                                        </span> --}}
                        {{--                                </div> --}}
                        {{--                            </div> --}}
                        {{--                            <ul> --}}
                        {{--                                <li class="li-account"> --}}
                        {{--                                    <a rel="nofollow" href="/account/login" title="Đăng nhập"> --}}
                        {{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" --}}
                        {{--                                             fill="currentColor" class="bi bi-box-arrow-in-right" --}}
                        {{--                                             viewBox="0 0 16 16"> --}}
                        {{--                                            <path fill-rule="evenodd" --}}
                        {{--                                                  d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" /> --}}
                        {{--                                            <path fill-rule="evenodd" --}}
                        {{--                                                  d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" /> --}}
                        {{--                                        </svg> --}}
                        {{--                                        Đăng nhập --}}
                        {{--                                    </a> --}}
                        {{--                                </li> --}}
                        {{--                                <li class="li-account"> --}}
                        {{--                                    <a rel="nofollow" href="/account/register" title="Đăng ký"> --}}
                        {{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" --}}
                        {{--                                             fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"> --}}
                        {{--                                            <path --}}
                        {{--                                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" /> --}}
                        {{--                                            <path fill-rule="evenodd" --}}
                        {{--                                                  d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" /> --}}
                        {{--                                        </svg> --}}
                        {{--                                        Đăng ký --}}
                        {{--                                    </a> --}}
                        {{--                                </li> --}}
                        {{--                                <li class="li-account"> --}}
                        {{--                                    <a rel="nofollow" href="/danh-sach-yeu-thich" title="Danh sách yêu thích"> --}}
                        {{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" --}}
                        {{--                                             fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"> --}}
                        {{--                                            <path --}}
                        {{--                                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" /> --}}
                        {{--                                        </svg> --}}
                        {{--                                        Danh sách yêu thích (<span class="js-wishlist-count">0</span>) --}}
                        {{--                                    </a> --}}
                        {{--                                </li> --}}
                        {{--                            </ul> --}}
                        {{--                        </div> --}}

                        <div class="sudes-header-cart header-action_cart" id="headerMiniCart">
                            <div class="frame-fix">
                                <a class="a-hea" href="/cart" aria-label="Giỏ hàng" title="Giỏ hàng"></a>
                                <span class="box-icon" aria-hidden="true">
                                    <svg class="svg-icon" viewBox="0 0 32 32">
                                        <path
                                            d="M7.873 6.008A1.01 1.01 0 018 6h21a1 1 0 011 1v11a1 1 0 01-.836.986l-18 3a1 1 0 01-1.128-.72L5.318 4.281l-2.002.668a1 1 0 01-.632-1.898l3-1a1 1 0 011.28.681l.91 3.276zM8.427 8l3.296 11.864L28 17.153V8H8.427zM16 29a3 3 0 110-6 3 3 0 010 6zm9 0a3 3 0 110-6 3 3 0 010 6zm0-2a1 1 0 100-2 1 1 0 000 2zm-9 0a1 1 0 100-2 1 1 0 000 2z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="count_item count_item_pr" id="miniCartCount" ng-if="cart.count > 0" ><% cart.count %></span>
                                <span class="item-title hidden-xs">Giỏ hàng</span>
                            </div>

                            <div class="top-cart-content" role="dialog" aria-label="Giỏ hàng mini">
                                <div class="cart-panel">
                                    <h4 class="cart-title">GIỎ HÀNG</h4>

                                    <div class="CartHeaderContainer">
                                        <!-- Item (demo) -->
                                        <div class="mini-cart-item" ng-repeat="item in cart.items">
                                            <a class="thumb" href="/san-pham/<% item.attributes.slug %>.html">
                                                <img ng-src="<% item.attributes.image %>" alt="<% item.name %>">
                                            </a>
                                            <div class="meta">
                                                <a class="name"
                                                    href="/san-pham/<% item.attributes.slug %>.html"><% item.name %> x
                                                    <% item.quantity %></a>
                                                <span> <% item.attributes.attributes %> </span>
                                                <div class="price"><% item.price | number %>đ</div>
                                            </div>
                                            <button class="remove" aria-label="Xoá" ng-click="removeItem(item.id)">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <!-- /Item -->
                                    </div>

                                    <div class="cart-footer">
                                        <div class="total">
                                            <span>Tổng tiền:</span>
                                            <strong class="total-price"
                                                id="miniCartTotal"><% cart.total | number %>đ</strong>
                                        </div>
                                        <a class="btn-checkout" href="{{ route('cart.index') }}">Xem giỏ hàng</a>
                                    </div>
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
                <ul id="nav-col" class="nav-col">
                    @foreach ($productCategories as $category)
                        <li class="nav-item has-childs  ">
                            <a href="{{ route('front.show-product-category', $category->slug) }}" class="nav-link"
                                title="{{ $category->name }}">
                                <div class="group-category-image">
                                    <img class="img-fluid lazyload"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                        data-src="//bizweb.dktcdn.net/thumb/small/100/490/431/collections/sports.png?v=1693640338110"
                                        alt="{{ $category->name }}" />
                                </div>
                                {{ $category->name }}
                                @if ($category->childs->count())
                                    <i class="open_mnu down_icon"></i>
                                @endif
                            </a>
                            @if ($category->childs->count())
                                <ul class="dropdown-menu">
                                    @foreach ($category->childs as $child)
                                        <li class="dropdown-submenu nav-item-lv2 has-childs2">
                                            <a class="nav-link"
                                                href="{{ route('front.show-product-category', $child->slug) }}"
                                                title="{{ $child->name }}">
                                                {{ $child->name }}
                                                @if ($child->childs->count())
                                                    <i class="open_mnu down_icon"></i>
                                                @endif
                                            </a>
                                            @if ($child->childs->count())
                                                <ul class="dropdown-menu">
                                                    @foreach ($child->childs as $chi)
                                                        <li class="nav-item-lv3">
                                                            <a class="nav-link"
                                                                href="{{ route('front.show-product-category', $chi->slug) }}"
                                                                title="{{ $chi->name }}">{{ $chi->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>
                    @endforeach
                </ul>
                <ul id="nav" class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('front.about-us') }}" title="Về Sudes Sport">
                            Về {{ $config->web_title }}
                        </a>
                    </li>

                    <li class="nav-item has-childs  ">
                        <a href="javascript:void(0);" class="nav-link" title="Chính sách">
                            Chính sách
                            <i class="open_mnu down_icon"></i>
                        </a>
                        <ul class="dropdown-menu">

                            @foreach ($policies as $policy)
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="{{ route('front.policy-detail', $policy->slug) }}"
                                        title="{{ $policy->title }}">{{ $policy->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    {{-- <li class="nav-item has-childs  ">
                        <a href="/huong-dan-mua-hang" class="nav-link" title="Hướng dẫn mua hàng">
                            Hướng dẫn mua hàng
                            <i class="open_mnu down_icon"></i>
                        </a>
                        <ul class="dropdown-menu">


                            <li class="nav-item-lv2">
                                <a class="nav-link" href="/huong-dan-mua-hang" title="Hướng dẫn mua hàng">Hướng dẫn
                                    mua hàng</a>
                            </li>



                            <li class="nav-item-lv2">
                                <a class="nav-link" href="/huong-dan-doi-tra" title="Hướng dẫn đổi trả">Hướng dẫn đổi
                                    trả</a>
                            </li>



                            <li class="nav-item-lv2">
                                <a class="nav-link" href="/huong-dan-chuyen-khoan"
                                    title="Hướng dẫn chuyển khoản">Hướng dẫn chuyển khoản</a>
                            </li>



                            <li class="nav-item-lv2">
                                <a class="nav-link" href="/huong-dan-tra-gop" title="Hướng dẫn trả góp">Hướng dẫn trả
                                    góp</a>
                            </li>



                            <li class="nav-item-lv2">
                                <a class="nav-link" href="/huong-dan-hoan-hang" title="Hướng dẫn hoàn hàng">Hướng dẫn
                                    hoàn hàng</a>
                            </li>


                        </ul>
                    </li> --}}

                    <li class="nav-item has-childs  ">
                        <a href="javascript:;" class="nav-link" title="Tin tức">
                            Tin tức
                            <i class="open_mnu down_icon"></i>
                        </a>
                        <ul class="dropdown-menu">

                            @foreach ($postCategories as $postCategory)
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="{{ route('front.list-blog', $postCategory->slug) }}"
                                        title="{{ $postCategory->name }}">{{ $postCategory->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('front.contact-us') }}" title="Liên hệ chúng tôi">
                            Liên hệ chúng tôi
                        </a>
                    </li>


                </ul>
            </div>
            <div class="footer-menu">
                <div class="sudes-header-hotline">
                    <div class="frame-fix">
                        <a title="Điện thoại: {{ $config->hotline }}"
                            href="tel:{{ str_replace(' ', '', $config->hotline) }}"></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <div class="text-box">
                            <span class="acc-text-small">Hotline hỗ trợ:</span>
                            <span class="acc-text">{{ $config->hotline }}</span>
                        </div>
                    </div>
                </div>
                <div class="sudes-header-stores">
                    <div class="frame-fix">
                        <a href="{{ route('front.showroom') }}" title="Hệ thống sân pickleball"></a>
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 22.52L26 21.174V2H2V25.79L9.095 24.425C9.03237 24.2921 8.99993 24.1469 9 24V16C9 15.7348 9.10536 15.4804 9.29289 15.2929C9.48043 15.1054 9.73478 15 10 15H18C18.2652 15 18.5196 15.1054 18.7071 15.2929C18.8946 15.4804 19 15.7348 19 16V22.52ZM17 22.905V17H11V24C11 24.02 11 24.04 10.998 24.059L17 22.905ZM1 0H27C27.2652 0 27.5196 0.105357 27.7071 0.292893C27.8946 0.48043 28 0.734784 28 1V22C28 22.2324 27.919 22.4576 27.771 22.6368C27.623 22.816 27.4172 22.9381 27.189 22.982L1.189 27.982C1.04431 28.0098 0.89526 28.0054 0.752502 27.9689C0.609744 27.9324 0.476808 27.8649 0.363202 27.7711C0.249597 27.6772 0.158129 27.5595 0.0953412 27.4262C0.0325533 27.2929 -3.37575e-06 27.1473 2.62534e-10 27V1C2.62534e-10 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM6 7.998V4H22V7.998H6Z"
                                fill="black" />
                        </svg>
                        <div class="text-box">
                            <span class="acc-text-small">Hệ thống sân</span>
                            <span class="acc-text">Pickleball</span>
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
