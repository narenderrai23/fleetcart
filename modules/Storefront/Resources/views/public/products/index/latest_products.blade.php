@if ($latestProducts->isNotEmpty())
    <div class="vertical-products">
        <div class="vertical-products-header">
            <h4 class="section-title">{{ trans('storefront::products.latest_products') }}</h4>
        </div>

        <div class="vertical-products-slider swiper" x-ref="latestProducts">
            <div x-cloak class="swiper-wrapper">
                @foreach ($latestProducts->chunk(5) as $latestProductChunks)
                    <div class="swiper-slide">
                        <div class="vertical-products-slide">
                            @foreach ($latestProductChunks as $latestProduct)
                                <div x-data="ProductCard({{ json_encode($latestProduct) }})">
                                    <div :href="productUrl" class="vertical-product-card">
                                        <a :href="productUrl" class="product-image">
                                            <img
                                                :src="baseImage"
                                                :class="{ 'image-placeholder': !hasBaseImage }"
                                                :alt="productName"
                                            />

                                            <div class="product-image-layer"></div>
                                        </a>

                                        <div class="product-info">
                                            <a :href="productUrl" class="product-name">
                                                <h6 x-text="productName"></h6>
                                            </a>

                                            <div class="product-price" x-html="productPrice"></div>

                                            @include('storefront::public.partials.product_rating')
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
@endif