<template>
    <div class="col-12 item">
        <!--Start Product Image-->
        <div class="product-image">
            <!--Start Product Image-->
            <a :href="productUrl" class="product-img">
                <!-- image -->
                <img class="primary blur-up lazyload" :data-src="baseImage" :src="baseImage" alt="image" title="">
                <!-- End image -->
                <!-- Hover image -->
                <img class="hover blur-up lazyload" :data-src="additionalImages" :src="additionalImages" v-if="hasAdditionalImages" alt="image" title="">
                <!-- End hover image -->
            </a>
            <!--End Product Image-->

            <!--Countdown Timer-->
<!--            <div class="saleTime" data-countdown="2029/03/01"></div>-->
            <!--End Countdown Timer-->
        </div>
        <!--End Product Image-->
        <!--Start Product Details-->
        <div class="product-details text-center">
            <!--Product Name-->
            <div class="product-name text-uppercase">
                <a :href="productUrl">{{ product.name }}</a>
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
        </div>
        <!--End Product Details-->
    </div>
</template>

<script>
    import ProductRating from './ProductRating.vue';
    import ProductCardMixin from '../mixins/ProductCardMixin';

    export default {
        components: { ProductRating },

        mixins: [
            ProductCardMixin,
        ],

        props: ['product'],
    };
</script>
