@if ($upSellProducts->isNotEmpty())
    <aside class="left-sidebar">
        <div class="vertical-products">
            <h4 class="text-transform-none">{{ trans('storefront::product.you_might_also_like') }}</h4>

            <div class="vertical-products-slider" ref="upSellProducts">
                <div class="vertical-products-slide grid-products">
                    @foreach ($upSellProducts as $upSellProduct)
                        <product-card-vertical :product="{{ $upSellProduct }}"></product-card-vertical>
                    @endforeach
                </div>
            </div>
        </div>
        @if ($banner->image->exists)
            <a
                href="{{ $banner->call_to_action_url }}"
                class="banner d-none d-lg-block"
                target="{{ $banner->open_in_new_window ? '_blank' : '_self' }}"
            >
                <img src="{{ $banner->image->path }}" alt="Banner">
            </a>
        @endif
    </aside>
@endif
