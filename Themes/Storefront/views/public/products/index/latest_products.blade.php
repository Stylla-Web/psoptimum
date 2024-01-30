<!--Popular Products-->
<div class="sidebar_widget sidePro mt-3">
    <div class="widget-title">
        <h2>{{ trans('storefront::products.latest_products') }}</h2>
    </div>
    <div class="widget-content">
        <div class="sideProSlider grid-products">
            @foreach ($latestProducts as $latestProduct)
                <product-card-vertical :product="{{ json_encode($latestProduct) }}"></product-card-vertical>
            @endforeach
        </div>
    </div>
</div>
<!--End Popular Products-->
