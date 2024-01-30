<template>
    <div :class="nbrColumns">
    <div class="product-card">
        <!--Start Product Image-->
        <div class="product-image">
            <!--Start Product Image-->
            <a :href="productUrl" class="product-img">
                <!--Image-->
                <img loading="lazy" class="primary blur-up lazyload" :data-src="baseImage" :src="baseImage"
                 :class="{ 'image-placeholder': ! hasBaseImage }" alt="product" title="">
                <!--End Image-->
                <!--Hover Image-->
                <img loading="lazy" class="hover blur-up lazyload" :data-src="additionalImages"
                 :src="additionalImages"
                 v-if="hasAdditionalImages" alt="product" title="">
                <!--End Hover Image-->
            </a>
            <!--End Product Image-->
            <!-- product label -->
            <div class="product-labels">
                <span class="lbl hot" v-if="product.has_percentage_special_price">
                    -{{ product.special_price_percent }}%
                </span>
                <span class="lbl on-sale" v-if="product.is_out_of_stock">
                    {{ $trans('storefront::product_card.out_of_stock') }}
                </span>
                <span class="lbl new" v-else-if="product.is_new">
                    {{ $trans('storefront::product_card.new') }}
                </span>
            </div>
            <!-- End product label -->
            <!--Product Button-->
            <div class="button-set d-none d-md-block">
                <ul>
                    <!--Cart Button-->
                    <li>
                        <button class="btn-icon btn cartIcon pro-addtocart-popup"
                           v-if="hasNoOption || product.is_out_of_stock"
                           :class="{ 'btn-loading': addingToCart }"
                           :disabled="product.is_out_of_stock"
                           @click="addToCart">
                            <i class="icon bi bi-cart3"></i>
                            <span class="tooltip-label top">
                                {{ $trans('storefront::product_card.add_to_cart') }}
                            </span>
                        </button>

                        <a
                            v-else
                            :href="productUrl"
                            class="btn-icon btn cartIcon pro-addtocart-popup"
                        >
                            <i class="bi bi-eye"></i>
                            <span class="tooltip-label top">
                                {{ $trans('storefront::product_card.view_options') }}
                            </span>
                        </a>
                    </li>
                    <!--End Cart Button-->
                    <!--Quick View Button-->
                    <!--                    <li>-->
                    <!--                        <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)" data-toggle="modal" data-target="#content_quickview">-->
                    <!--                            <i class="icon an an-search-l"></i> <span class="tooltip-label top">Quick View</span>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                    <!--End Quick View Button-->
                    <!--Wishlist Button-->
                    <li>
                        <a class="btn-icon btn wishlist add-to-wishlist"
                           :class="{ 'added': inWishlist }"
                           :title="$trans('storefront::product_card.wishlist')"
                           @click="syncWishlist">
                            <i class="icon bi " :class="inWishlist ? 'bi-heart-fill' : 'bi-heart'"></i>
                            <span class="tooltip-label top">
                                {{ $trans('storefront::product_card.wishlist') }}
                            </span>
                        </a>
                    </li>
                    <!--End Wishlist Button-->
                    <!--Compare Button-->
                    <li>
                        <a class="btn-icon btn compare add-to-compare"
                           :class="{ 'added': inCompareList }"
                           :title="$trans('storefront::product_card.compare')"
                           @click="syncCompareList">
                            <i class="icon bi bi-arrow-repeat"></i>
                            <span class="tooltip-label top">
                                {{ $trans('storefront::product_card.compare') }}
                            </span>
                        </a>
                    </li>
                    <!--End Compare Button-->
                </ul>
            </div>
            <!--End Product Button-->
        </div>
        <!--End Product Image-->
        <!--Start Product Details-->
        <div class="product-details text-start">
            <!--Product Name-->
            <div class="product-name">
                <a :href="productUrl" class="fw-normal" v-html="product.name"></a>
                <div class="fw-normal product-short-description" v-html="product.short_description"></div>
            </div>
            <!--End Product Name-->
            <!--Product Price-->
            <div class="product-price" v-html="product.formatted_price">
                <!--                <span class="price">$500.00</span>-->
            </div>
            <!--End Product Price-->
            <!--Product Review-->
            <div class="product-review d-flex-center mb-0">
                <ProductRating :ratingPercent="product.rating_percent" :reviewCount="product.reviews.length"/>
            </div>
            <!--End Product Review-->
        </div>
        <!--End Product Details-->
    </div>
    </div>
</template>

<script>
import ProductRating from './ProductRating.vue';
import ProductCardMixin from '../mixins/ProductCardMixin';

export default {
    components: {ProductRating},

    mixins: [
        ProductCardMixin,
    ],

    props: ['product', 'nbrColumns'],
};
</script>
