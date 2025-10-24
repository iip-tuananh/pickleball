<div class="item_product_main">
    <form class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-32743251"
        enctype="multipart/form-data">
        @if ($product->base_price > 0)
            <span class="flash-sale">Giảm {{ $product->percent_discount }}%
            </span>
        @endif
        <div class="product-thumbnail">
            <a class="image_thumb scale_hover" href="{{ route('front.show-product-detail', $product->slug) }}"
                title="{{ $product->name }}">
                <img class="duration-300 image1" src="{{ $product->image ? $product->image->path : 'https://placehold.co/480x480' }}" alt="{{ $product->name }}" loading="lazy">
            </a>
        </div>
        <div class="product-swatches">
        </div>
        <div class="product-info">
            <h3 class="product-name line-clamp-2-new">
                <a href="{{ route('front.show-product-detail', $product->slug) }}"
                    title="{{ $product->name }}">{{ $product->name }}</a>
            </h3>
        </div>
        <div class="product-bottom">
            <div class="product-price-cart">
                <div class="price-box">

                    <span class="price">{{ formatCurrency($product->price) }}₫</span>
                    @if ($product->base_price > 0)
                        <span class="compare-price">{{ formatCurrency($product->base_price) }}₫</span>
                    @endif
                </div>
            </div>
            <div class="button-product">
                <a href="{{ route('front.show-product-detail', $product->slug) }}">
                    <button class="btn-cart btn-views btn" title="Xem chi tiết" type="button">
                        <span>Xem chi tiết</span>
                    </button>
                </a>

            </div>
        </div>
    </form>
</div>
