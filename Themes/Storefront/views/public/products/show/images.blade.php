<div class="product-image-gallery">
    <div class="base-image-wrap">
        <div class="base-image">
            @if (! $product->base_image->exists)
                <div class="base-image-inner">
                    <div class="base-image-slide" data-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}">
                        <img class="blur-up lazyload"
                             data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                             src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                             alt="Image placeholder" class="image-placeholder">

                        <div class="btn-gallery-trigger">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                    </div>
                </div>
            @else
                <div class="base-image-inner">
                    <div class="base-image-slide" data-image="{{ $product->base_image->path }}">
                        <img class="blur-up lazyload"
                             data-src="{{ $product->base_image->path }}"
                             src="{{ $product->base_image->path }}" alt="Product image">

                        <div class="btn-gallery-trigger">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </div>
                    </div>
                </div>
            @endif

            @foreach ($product->additional_images as $additionalImage)
                @if (! $additionalImage->exists)
                    <div class="base-image-inner">
                        <div class="base-image-slide" data-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}">
                            <img class="blur-up lazyload"
                                 data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                                 src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                                 alt="Image placeholder" class="image-placeholder">

                            <div class="btn-gallery-trigger">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="base-image-inner">
                        <div class="base-image-slide" data-image="{{ $additionalImage->path }}">
                            <img class="blur-up lazyload"
                                 data-src="{{ $additionalImage->path }}"
                                 src="{{ $additionalImage->path }}" alt="Product image">

                            <div class="btn-gallery-trigger">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="additional-image-wrap">
        @if (! $product->base_image->exists)
            <div class="additional-image">
                <img class="blur-up lazyload"
                     data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                     src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                     alt="Image placeholder"
                     class="image-placeholder">
            </div>
        @else
            <div class="additional-image">
                <img class="blur-up lazyload"
                     data-src="{{ $product->base_image->path }}"
                     src="{{ $product->base_image->path }}"
                     alt="Product image">
            </div>
        @endif

        @foreach ($product->additional_images as $additionalImage)
            @if (! $additionalImage->exists)
                <div class="additional-image">
                    <img class="blur-up lazyload"
                         data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                         src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"
                         alt="Image placeholder"
                         class="image-placeholder">
                </div>
            @else
                <div class="additional-image">
                    <img class="blur-up lazyload"
                         data-src="{{ $additionalImage->path }}"
                         src="{{ $additionalImage->path }}"
                         alt="product-additional-image">
                </div>
            @endif
        @endforeach
    </div>
</div>

{{--<div class="zoompro-wrap product-zoom-right w-100 p-0">--}}
{{--    <div class="zoompro-span">--}}
{{--        @if (! $product->base_image->exists)--}}
{{--        <img id="zoompro" class="zoompro" src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--             data-zoom-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}" alt="Image placeholder"/>--}}
{{--        @else--}}
{{--            <img id="zoompro" class="zoompro" src="{{ $product->base_image->path }}"--}}
{{--             data-zoom-image="{{ $product->base_image->path }}" alt="product"/>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="product-labels">--}}
{{--        <span class="lbl on-sale">Sold out</span>--}}
{{--    </div>--}}
{{--    <div class="product-buttons">--}}
{{--        <a href="https://www.youtube.com/watch?v=NpEaa2P7qZI" class="mfpbox mfp-with-anim btn rounded popup-video d-none">--}}
{{--            <i class="icon an an-video"></i><span class="tooltip-label">Watch Video</span>--}}
{{--        </a>--}}
{{--        <a href="#" class="btn rounded prlightbox"><i class="icon an an-expand-l-arrows">--}}

{{--            </i><span class="tooltip-label">Zoom Image</span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="product-thumb product-horizontal-thumb w-100 pt-2 mt-1">--}}
{{--    <div id="gallery" class="product-thumb-style1 overflow-hidden">--}}
{{--        @if (! $product->base_image->exists)--}}
{{--            <a data-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--               data-zoom-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--               class="slick-slide slick-cloned active">--}}
{{--                <img class="blur-up lazyload"--}}
{{--                     data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                     src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                     alt="Image placeholder"/>--}}
{{--            </a>--}}
{{--        @else--}}
{{--            <a data-image="{{ $product->base_image->path }}" data-zoom-image="{{ $product->base_image->path }}"--}}
{{--               class="slick-slide slick-cloned">--}}
{{--                <img class="blur-up lazyload" data-src="{{ $product->base_image->path }}"--}}
{{--                     src="{{ $product->base_image->path }}" alt="product"/>--}}
{{--            </a>--}}
{{--        @endif--}}
{{--        @foreach ($product->additional_images as $additionalImage)--}}
{{--            @if (! $additionalImage->exists)--}}
{{--                <a data-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                   data-zoom-image="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                   class="slick-slide slick-cloned">--}}
{{--                    <img class="blur-up lazyload"--}}
{{--                         data-src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                         src="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--                         alt="Image placeholder"/>--}}
{{--                </a>--}}
{{--            @else--}}
{{--                <a data-image="{{ $additionalImage->path }}" data-zoom-image="{{ $additionalImage->path }}"--}}
{{--                   class="slick-slide slick-cloned">--}}
{{--                    <img class="blur-up lazyload" data-src="{{ $additionalImage->path }}"--}}
{{--                         src="{{ $additionalImage->path }}" alt="product"/>--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="lightboximages">--}}
{{--    @if (! $product->base_image->exists)--}}
{{--        <a href="{{ asset('themes/storefront/public/images/image-placeholder.png') }}" data-size="1000x1280"></a>--}}
{{--    @else--}}
{{--        <a href="{{ $product->base_image->path }}" data-size="1000x1280"></a>--}}
{{--    @endif--}}
{{--    @foreach ($product->additional_images as $additionalImage)--}}
{{--        @if (! $additionalImage->exists)--}}
{{--            <a href="{{ asset('themes/storefront/public/images/image-placeholder.png') }}"--}}
{{--               data-size="1000x1280"></a>--}}
{{--        @else--}}
{{--            <a href="{{ $additionalImage->path }}" data-size="1000x1280"></a>--}}
{{--        @endif--}}
{{--    @endforeach--}}
{{--</div>--}}
