<template>
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="tabs-listing">
                <ul class="tabs clearfix product-grid-tabs">
                    <li
                        v-for="(tab, index) in tabs"
                        :key="index"
                        :class="classes(tab)"
                        @click="change(tab)"
                    >
                        {{ tab.label }}
                    </li>
                </ul>
            </div>

            <div class="tab_container">
                <div class="tab-content grid-products" v-if="products.length > 0">
                    <div v-for="(productChunks, index) in $chunk(products, 12)" :key="index"
                         class="grid-products-inner d-flex row">
                        <ProductCard v-for="product in productChunks" :key="product.id" :product="product" :nbr-columns="'col-6 col-sm-6 col-md-3'" v-cloak/>
                    </div>
                </div>
                <div class="empty-products text-center p-5" v-else>
                    <h3>Aucun produits</h3>
                </div>
            </div>

            <dynamic-tab
                v-for="(tabLabel, index) in data"
                :key="index"
                :label="tabLabel"
                :url="route('storefront.product_grid.index', { tabNumber: index + 1 })"
            >
            </dynamic-tab>
        </div>
    </section>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import DynamicTabsMixin from '../../mixins/DynamicTabsMixin';
import {slickPrevArrow, slickNextArrow} from '../../functions';

export default {
    components: {ProductCard},

    mixins: [
        DynamicTabsMixin,
    ],

    props: ['data'],

    methods: {
        selector() {
            return $('.grid-products');
        },

        slickOptions() {
            return {
                rows: 0,
                dots: false,
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                rtl: window.FleetCart.rtl,
                prevArrow: slickPrevArrow(),
                nextArrow: slickNextArrow(),
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            dots: true,
                            arrows: false,
                        },
                    },
                ],
            };
        },
    },
};
</script>
