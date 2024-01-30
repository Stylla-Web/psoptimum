<template>
    <div class="product-list">
        <!--Start Product Image-->
        <div class="product-image">
            <!--Start Product Image-->
            <a :href="productUrl" class="product-img">
                <!-- image -->
                <img class="primary blur-up lazyload" :data-src="baseImage" :src="baseImage" alt="image" :title="product.name">
                <!-- End image -->
                <!-- Hover image -->
                <img class="hover blur-up lazyload" :data-src="additionalImages" :src="additionalImages" alt="image" :title="'Image additionnelles du ' + product.name" v-if="hasAdditionalImages">
                <!-- End hover image -->
                <!-- product label -->
                <div class="product-labels">
                    <span class="lbl on-sale rounded" v-if="product.is_out_of_stock">
                        {{ $trans('storefront::product_card.out_of_stock') }}
                    </span>
                    <span class="lbl new rounded" v-else-if="product.is_new">
                        {{ $trans('storefront::product_card.new') }}
                    </span>
                    <span class="lbl hot rounded" v-if="product.has_percentage_special_price">
                        -{{ product.special_price_percent }}%
                    </span>
                </div>
                <!-- End product label -->
            </a>
            <!--End Product Image-->

            <!--Countdown Timer-->
<!--            <div class="saleTime" data-countdown="2024/10/01"></div>-->
            <!--End Countdown Timer-->
        </div>
        <!--End Product Image-->
        <!--Start Product Details-->
        <div class="product-details text-center">
            <!--Product Name-->
            <div class="product-name text-uppercase">
                <a :href="productUrl">
                    {{ product.name }}
                </a>
            </div>
            <!--End Product Name-->
            <!--Product Price-->
            <div class="product-price" v-html="product.formatted_price">
            </div>
            <!--End Product Price-->
            <!--Product Review-->
            <div class="product-review d-flex align-items-center justify-content-center">
                <ProductRating :ratingPercent="product.rating_percent" :reviewCount="product.reviews.length"/>
            </div>
            <!--End Product Review-->
            <!--Sort Description-->
            <p class="hidden sort-desc product-short-description" v-html="product.short_description">
            </p>
            <!--End Sort Description-->
            <!-- Product Button -->
            <div class="button-action d-flex">
                <div class="addtocart-btn">
                    <button
                        class="btn pro-addtocart-popup"
                        v-if="hasNoOption || product.is_out_of_stock"
                        :class="{ 'btn-loading': addingToCart }"
                        :disabled="product.is_out_of_stock"
                        @click="addToCart"
                    >
                        <i class="icon hidden an an-cart-l me-1"></i>{{ $trans('storefront::product_card.add_to_cart') }}
                    </button>
                    <a
                        v-else
                        :href="productUrl"
                        class="btn pro-addtocart-popup"
                    >
                        <i class="las la-eye me-1"></i>{{ $trans('storefront::product_card.view_options') }}
                    </a>
                </div>
<!--                <div class="quickview-btn">-->
<!--                    <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview">-->
<!--                        <i class="icon an an-search-l"></i>-->
<!--                        <span class="tooltip-label top">Quick View</span>-->
<!--                    </a>-->
<!--                </div>-->
                <div class="wishlist-btn">
                    <a class="btn btn-icon wishlist add-to-wishlist"
                       href="javascript:void(0)"
                       :class="{ 'added': inWishlist }"
                       @click="syncWishlist"
                    >
                        <i class="icon la-heart" :class="inWishlist ? 'las' : 'lar'"></i>
                        <span class="tooltip-label top">
                        {{ $trans('storefront::product_card.wishlist') }}
                        </span>
                    </a>
                </div>
                <div class="compare-btn">
                    <a class="btn btn-icon compare add-to-compare"
                       href="compare.html"
                       :class="{ 'added': inCompareList }"
                       @click="syncCompareList"
                    >
                        <i class="icon an an-sync-ar"></i>
                        <span class="tooltip-label top">
                        {{ $trans('storefront::product_card.compare') }}
                        </span>
                    </a>
                </div>
            </div>
            <!-- End Product Button -->
        </div>
        <!--End Product Details-->
    </div>
</template>

<script>
import ProductRating from './../../ProductRating.vue';
import ProductCardMixin from '../../../mixins/ProductCardMixin';

export default {
    components: { ProductRating },

    mixins: [
        ProductCardMixin,
    ],

    props: ['product'],
};
</script>
