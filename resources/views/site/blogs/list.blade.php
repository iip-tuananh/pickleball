@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
@endsection
@section('image')
    {{ url('' . $banners[0]->image->path) }}
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
                <li><strong><span>{{$cate_title}}</span></strong></li>
            </ul>
        </div>
    </section>
    <div class="blog_wrapper layout-blog">
        <div class="container">
            <div class="row">
                <div class="right-content col-lg-12 col-12">
                    <h1 class="title-page">{{$cate_title}}</h1>
                    <div class="row list-news">
                        @foreach ($blogs as $blog)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="item-blog">
                                <div class="blog-content">
                                    <a class="block-thumb thumb" href="{{ route('front.detail-blog', $blog->slug) }}"
                                        title="{{ $blog->name }}">
                                        <img width="400" height="240" class="lazyload duration-300"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                            data-src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/400x240' }}"
                                            alt="{{ $blog->name }}">
                                        <div class="time-post">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            </svg>
                                            {{ date('d/m/Y', strtotime($blog->time ?? $blog->created_at)) }}
                                        </div>
                                    </a>
                                    <div class="block-content">
                                        <h3>
                                            <a href="{{ route('front.detail-blog', $blog->slug) }}"
                                                title="{{ $blog->name }}"
                                                class="line-clamp-2-new">{{ $blog->name }}</a>
                                        </h3>
                                        <p class="justify line-clamp line-clamp-3">{!! $blog->intro !!}</p>
                                    </div>
                                </div>
                                <a class="btn btn-light btn-view-more"
                                    href="{{ route('front.detail-blog', $blog->slug) }}" title="Xem chi tiết">
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
                        <div class="pagi-div">
                            {{$blogs->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
