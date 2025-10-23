<div class="side-right-stick">
    <div class="aside-content aside-content-blog">
        <h2 class="title-head">
            <span>Danh mục tin tức</span>
        </h2>
        <nav class="nav-category">
            <ul class="nav navbar-pills">
                <li class="nav-item  relative">
                    <a title="Trang chủ" class="nav-link" href="{{ route('front.home-page') }}">Trang chủ</a>
                </li>
                <li class="nav-item  relative">
                    <a title="Sản phẩm" href="javascript:void(0)" class="nav-link pr-5">Sản
                        phẩm</a>
                    <i class="open_mnu down_icon"></i>
                    <ul class="menu_down" style="display:none;">
                        @foreach ($productCategories as $productCategory)
                            <li class="dropdown-submenu nav-item  relative">
                                <a title="{{ $productCategory->name }}" class="nav-link pr-5"
                                    href="{{ route('front.show-product-category', $productCategory->slug) }}">{{ $productCategory->name }}</a>
                                @if ($productCategory->childs->count() > 0)
                                    <i class="open_mnu down_icon"></i>
                                    <ul class="menu_down" style="display:none;">
                                        @foreach ($productCategory->childs as $child)
                                            <li class="dropdown-submenu nav-item  relative">
                                                <a title="{{ $child->name }}" class="nav-link pr-5"
                                                    href="{{ route('front.show-product-category', $child->slug) }}">{{ $child->name }}</a>
                                                @if ($child->childs->count() > 0)
                                                    <i class="open_mnu down_icon"></i>
                                                    <ul class="menu_down" style="display:none;">
                                                        @foreach ($child->childs as $child)
                                                            <li class="dropdown-submenu nav-item ">
                                                                <a title="{{ $child->name }}" class="nav-link pl-5"
                                                                    href="{{ route('front.show-product-category', $child->slug) }}">{{ $child->name }}</a>
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
                </li>
                <li class="nav-item  relative">
                    <a title="Giới thiệu" class="nav-link" href="{{ route('front.about-us') }}">Giới thiệu</a>
                </li>
                <li class="nav-item  relative">
                    <a title="Liên hệ" class="nav-link" href="{{ route('front.contact-us') }}">Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>
    <script>
        $(".aside-content-blog .nav-category .open_mnu").click(function() {
            $(this).toggleClass('cls_mn').next().slideToggle();
        });
    </script>
    <div class="blog_noibat">
        <h2 class="h2_sidebar_blog">
            <a href="javascript:void(0)" title="Tin tức nổi bật">Tin tức nổi bật</a>
        </h2>
        <div class="blog_content">
            @foreach ($newBlogs as $blog)
                <div class="item clearfix">
                    <div class="post-thumb">
                        <a class="image-blog scale_hover" href="{{ route('front.detail-blog', $blog->slug) }}"
                            title="{{ $blog->name }}">
                            <img class="img_blog lazyload"
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                data-src="{{ $blog->image ? $blog->image->path : 'https://placehold.co/600x400' }}"
                                alt="{{ $blog->name }}">
                        </a>
                    </div>
                    <div class="contentright">
                        <h3><a title="{{ $blog->name }}"
                                href="{{ route('front.detail-blog', $blog->slug) }}">{{ $blog->name }}</a></h3>
                        <p class="time-post">
                            <span>
                                {{ date('d/m/Y', strtotime($blog->time ?? $blog->created_at)) }}
                            </span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
