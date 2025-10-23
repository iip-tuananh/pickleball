@extends('site.layouts.master')
@section('title')
    {{ $blog_title }}
@endsection
@section('description')
    {{ strip_tags($blog->intro) }}
@endsection
@section('image')
    {{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}
@endsection

@section('css')
    <link href="/site/css/breadcrumb_style.scss.css?1743048451127" rel="stylesheet" type="text/css" media="all" />
    <link href="/site/css/blog_article_style.scss.css?1743048451127" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('site/css/sidebar_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
    <style>
        .text-limit-3-line {
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">
            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{route('front.home-page')}}" title="Trang chủ"><span>Trang chủ</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li>
                    <a href="{{route('front.list-blog', $category->slug)}}" title="{{ $category->name }}"><span>{{ $category->name }}</span></a>
                    <span class="mr_lr">
                        &nbsp;
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                            class="svg-inline--fa fa-chevron-right fa-w-10">
                            <path fill="currentColor"
                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                class=""></path>
                        </svg>
                        &nbsp;
                    </span>
                </li>
                <li><strong><span>{{ $blog_title }}</span></strong></li>
            </ul>
        </div>
    </section>
    <section class="blogpage">
        <div class="container layout-article">
            <div class="bg_blog">
                <article class="article-main">
                    <div class="row">
                        {{-- <div class="col-12">
                            <div class="article-image">
                                <img src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}"
                                    alt="{{ $blog->name }}">
                            </div>
                        </div> --}}
                        <div class="right-content col-lg-9 col-12">
                            <div class="article-details clearfix">
                                <h1 class="article-title">{{ $blog->name }}</h1>
                                <div class="posts">
                                    <div class="time-post f">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="svg-inline--fa fa-clock fa-w-16">
                                            <path fill="currentColor"
                                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                                class=""></path>
                                        </svg>
                                        {{ ucfirst(\Carbon\Carbon::parse($blog->time ?? $blog->created_at)
                                            ->locale('vi')
                                            ->translatedFormat('l, d/m/Y')) }}
                                    </div>
                                    <div class="time-post">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="svg-inline--fa fa-user fa-w-14">
                                            <path fill="currentColor"
                                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"
                                                class=""></path>
                                        </svg>
                                        <span>By Administrator</span>
                                    </div>
                                </div>
                                <div class="rte">
                                    {!! $blog->body !!}
                                </div>
                            </div>
                        </div>
                        <div class="blog_left_base col-lg-3 col-12">
                            @include('site.blogs.nav-blog', ['productCategories' => $productCategories])
                        </div>
                        <div class="blog_related col-12">
                            <div class="title">Bài viết liên quan</div>
                            <div class="row">
                                @foreach ($other_blogs as $other_blog)
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="item-blog">
                                        <div class="blog-content">
                                            <a class="block-thumb thumb" href="{{ route('front.detail-blog', $other_blog->slug) }}"
                                                title="{{ $other_blog->name }}">
                                                <img width="400" height="240" class="lazyload duration-300"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                    data-src="{{ $other_blog->image ? $other_blog->image->path : 'https://placehold.co/400x240' }}"
                                                    alt="{{ $other_blog->name }}">
                                                <div class="time-post">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-clock-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg>
                                                    {{ date('d/m/Y', strtotime($other_blog->time ?? $other_blog->created_at)) }}
                                                </div>
                                            </a>
                                            <div class="block-content">
                                                <h3>
                                                    <a href="{{ route('front.detail-blog', $other_blog->slug) }}"
                                                        title="{{ $other_blog->name }}"
                                                        class="line-clamp-2-new">{{ $other_blog->name }}</a>
                                                </h3>
                                                <p class="justify line-clamp line-clamp-3">{!! $other_blog->intro !!}</p>
                                            </div>
                                        </div>
                                        <a class="btn btn-light btn-view-more" href="{{ route('front.detail-blog', $other_blog->slug) }}"
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
                                @endforeach
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@push('script')
@endpush
