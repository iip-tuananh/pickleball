@extends('site.layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    {{ $short_des }}
@endsection
@section('css')
    <link href="/site/css/collection_style.scss.css?1758009149569" rel="stylesheet" type="text/css" media="all" />

    <style>
        .sort-cate-right {
            position: relative;
            width: 100%;
            max-width: 260px;
        }

        .sort-cate-right h3 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            cursor: pointer;
            user-select: none;
            padding: 8px 12px;
            border: 1px solid #e6e8ec;
            border-radius: 8px;
            background: #fff;
        }

        .sort-cate-right h3 svg.bi-caret-down-fill {
            transition: transform .2s ease;
        }

        .sort-cate-right ul {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            border: 1px solid #e6e8ec;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, .08);
            overflow: hidden;
            height: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-4px);
            transition: height .22s ease, opacity .18s ease, transform .18s ease, visibility 0s linear .22s;
            z-index: 30;
        }

        .sort-cate-right.open ul {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
            transition: height .22s ease, opacity .18s ease, transform .18s ease;
        }

        .sort-cate-right.open h3 svg.bi-caret-down-fill {
            transform: rotate(180deg);
        }

        .sort-cate-right ul li a {
            display: block;
            padding: 10px 12px;
            text-decoration: none;
            color: #222;
        }

        .sort-cate-right ul li a:hover {
            background: #f6f7f9;
        }

        .sort-cate-right ul li.active>a {
            font-weight: 700;
        }
    </style>
@endsection

@section('content')
    <div class="layout-collection" ng-controller="ProductCategoryController">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/" title="Trang chủ"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
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
                    @if (@$category->image)
                        <a href="#" title="click xem ngay" class="duration-300 has-aspect-1">
                            <picture>
                                <source media="(max-width: 480px)" srcset="{{ $category->image->path ?? '' }}">
                                <img alt="Banner top" width="1900" height="300" class="lazyload"
                                    data-src="{{ $category->image->path ?? '' }}" src="{{ $category->image->path ?? '' }}">
                            </picture>
                        </a>
                    @endif
                </div>

                <aside class="dqdt-sidebar left-content col-lg-3 col-12">
                    <div class="close-filters" title="Đóng bộ lọc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </div>
                    <div class="section-box-bg">
                        <div class="filter-content">
                            <div class="aside-title">
                                <h2 class="title-head">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z">
                                        </path>
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
                                                    class="">
                                                    <g>
                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                            d="m243.1875 182.859375 113.132812-113.132813c12.5-12.5 12.5-32.765624 0-45.246093l-15.082031-15.082031c-12.503906-12.503907-32.769531-12.503907-45.25 0l-113.128906 113.128906-113.132813-113.152344c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503907-12.5 32.769531 0 45.25l113.152344 113.152344-113.128906 113.128906c-12.503907 12.503907-12.503907 32.769531 0 45.25l15.082031 15.082031c12.5 12.5 32.765625 12.5 45.246093 0l113.132813-113.132812 113.128906 113.132812c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082031c12.5-12.503906 12.5-32.769531 0-45.25zm0 0"
                                                            fill="#ffffff" data-original="#000000" style=""
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                            </i></a>
                                    </div>
                                    <div class="filter-container__selected-filter-list">
                                        <ul></ul>
                                    </div>
                                </div>
                                <!-- Lọc  -->
                                @foreach ($attributes as $attribute)
                                    @if ($attribute->tags->count() > 0)
                                        <aside class="aside-item filter-price">
                                            <div class="aside-title">
                                                <h2><span>{{ $attribute->name }}</span></h2>
                                            </div>
                                            <div class="aside-content filter-group content_price">
                                                <ul>

                                                    @foreach ($attribute->tags as $tag)
                                                        <li class="filter-item filter-item--check-box filter-item--green">
                                                            <span>
                                                                <label for="filter-{{ $tag->code }}">
                                                                    <input type="checkbox" id="filter-{{ $tag->code }}"
                                                                        ng-click="onChangeFilter({{ $tag->id }})"
                                                                        data-group="tag2" data-field="tags"
                                                                        data-text="{{ $tag->name }}"
                                                                        value="({{ $tag->code }})" data-operator="OR">
                                                                    <i class="fa"></i>
                                                                    {{ $tag->name }}
                                                                </label>
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </aside>
                                    @endif
                                @endforeach
                                <!-- End Lọc -->
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="block-collection col-lg-9 col-12">

                    <div class="col-list-cate">


                        <div class="tab_ul">
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
                                                d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                        </svg>
                                        Bộ lọc
                                        <span class="count-filter-val"></span>
                                    </a>
                                </div>

                                <div class="sort-cate-right">
                                    @php
                                        $sort = request('sort', 'date_desc');
                                        $options = [
                                            'date_desc' => ['label' => 'Mặc định', 'title' => 'Mặc định'],
                                            'name_asc' => ['label' => 'A &rarr; Z', 'title' => 'Tên A → Z'],
                                            'name_desc' => ['label' => 'Z &rarr; A', 'title' => 'Tên Z → A'],
                                            'price_asc' => [
                                                'label' => 'Giá thấp đến cao',
                                                'title' => 'Giá thấp đến cao',
                                            ],
                                            'price_desc' => [
                                                'label' => 'Giá cao xuống thấp',
                                                'title' => 'Giá cao xuống thấp',
                                            ],
                                        ];
                                        $currentLabel = $options[$sort]['label'] ?? 'Mặc định';
                                    @endphp

                                    <h3>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z" />
                                            <path
                                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                        </svg>
                                        Sắp xếp theo
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-caret-down-fill duration-300"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z">
                                            </path>
                                        </svg>
                                    </h3>

                                    <ul>
                                        <li class="btn-quick-sort {{ $sort == 'date_desc' ? 'active' : '' }} ">
                                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'date_desc', 'page' => 1]) }}"
                                                title="Mặc định"><i></i>Mặc
                                                định</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-asc  {{ $sort == 'name_asc' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_asc', 'page' => 1]) }}"
                                                title="Tên A-Z"><i></i>Tên
                                                A-Z</a>
                                        </li>
                                        <li class="btn-quick-sort alpha-desc {{ $sort == 'name_desc' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'name_desc', 'page' => 1]) }}"
                                                title="Tên Z-A"><i></i>Tên Z-A</a>
                                        </li>

                                        <li class="btn-quick-sort price-asc {{ $sort == 'price_asc' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_asc', 'page' => 1]) }}"
                                                title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                        </li>
                                        <li class="btn-quick-sort price-desc {{ $sort == 'price_desc' ? 'active' : '' }}">
                                            <a href="{{ request()->fullUrlWithQuery(['sort' => 'price_desc', 'page' => 1]) }}"
                                                title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="category-products" id="product-list">
                            <div class="products-view products-view-grid list_hover_pro">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-6 col-xl-3 col-lg-3 col-md-3">
                                            @include('site.products.product_item', [
                                                'product' => $product,
                                            ])
                                        </div>
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <nav class="clearfix relative nav_pagi w_100 ">
                                        {{ $products->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                console.log(id);
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
    <script>
        (function() {
            const box = document.querySelector('.sort-cate-right');
            if (!box) return;

            const trigger = box.querySelector('h3');
            const list = box.querySelector('ul');

            function openMenu() {
                box.classList.add('open');
                // set height đúng bằng nội dung để transition mượt
                list.style.height = list.scrollHeight + 'px';
            }

            function closeMenu() {
                // set height về 0 để animate đóng
                list.style.height = '0px';
                // sau khi đóng xong mới ẩn class open
                list.addEventListener('transitionend', function te(e) {
                    if (e.propertyName === 'height') {
                        box.classList.remove('open');
                        list.removeEventListener('transitionend', te);
                    }
                });
            }

            function toggleMenu() {
                if (box.classList.contains('open')) closeMenu();
                else openMenu();
            }

            // Click vào tiêu đề để mở/đóng
            trigger.addEventListener('click', toggleMenu);

            // Click ra ngoài thì đóng
            document.addEventListener('click', function(e) {
                if (!box.contains(e.target) && box.classList.contains('open')) closeMenu();
            });

            // ESC để đóng
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && box.classList.contains('open')) closeMenu();
            });

            // Nếu cần: chọn item rồi tự đóng menu
            list.addEventListener('click', function(e) {
                const a = e.target.closest('a');
                if (!a) return;
                // set active
                list.querySelectorAll('li').forEach(li => li.classList.remove('active'));
                const li = a.closest('li');
                if (li) li.classList.add('active');
                // đóng menu
                closeMenu();
            });

            // Nếu layout thay đổi (responsive, font load...), cập nhật height khi đang mở
            const ro = new ResizeObserver(() => {
                if (box.classList.contains('open')) {
                    list.style.height = list.scrollHeight + 'px';
                }
            });
            ro.observe(list);
        })();
    </script>
@endpush
