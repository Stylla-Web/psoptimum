<template>
    <section class="featured-categories-wrap">
        <div class="container">
            <div class="featured-categories-header row">
                <div class="featured-categories-text row">
                    <h2 class="title col-12 col-md-3 border-0 border-md-right">{{ data.title }}</h2>
                    <span class="excerpt col-12 col-md-9">{{ data.subtitle }}</span>
                </div>

                <ul class="tabs featured-categories-tabs col-12 mt-5 mb-0">
                    <li
                        v-for="(tab, index) in tabs"
                        :key="index"
                        :class="classes(tab)"
                        :title="title(tab)"
                        @click="change(tab)"
                    >
                        <div class="featured-category-image">
                            <img :src="tab.logo" :class="{ 'image-placeholder': ! tab.hasLogo }" alt="category logo">
                        </div>

                        <span class="featured-category-name">{{ tab.label }}</span>
                    </li>
                </ul>
            </div>

            <div class="tab-content featured-category-products row pb-5 mt-3" v-if="products.length > 0">
                <ProductCard v-for="product in products" :key="product.id" :product="product" :nbr-columns="'col-6 col-sm-6 col-md-4 col-lg-4'"/>
            </div>
            <div class="empty-products text-center p-5" v-else>
                <h3>Aucun produits</h3>
            </div>
        </div>

        <dynamic-tab
            v-for="(category, index) in data.categories"
            :key="index"
            :label="category.name"
            :initial-logo="category.logo"
            :url="route('storefront.featured_category_products.index', { categoryNumber: index + 1 })"
        >
        </dynamic-tab>
    </section>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import DynamicTabsMixin from '../../mixins/DynamicTabsMixin';
import {slickNextArrow, slickPrevArrow} from '../../functions';

export default {
        components: { ProductCard },

        mixins: [
            DynamicTabsMixin,
        ],

        props: ['data'],

        methods: {
            selector() {
                return $('.featured-category-products');
            },

            slickOptions() {
                return {
                    rows: 0,
                    dots: true,
                    arrows: false,
                    infinite: true,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    rtl: window.FleetCart.rtl,
                    prevArrow: slickPrevArrow(),
                    nextArrow: slickNextArrow(),
                    responsive: [
                        {
                            breakpoint: 1761,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                            },
                        },
                        {
                            breakpoint: 1301,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                            },
                        },
                        {
                            breakpoint: 1051,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            },
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                            },
                        },
                        {
                            breakpoint: 881,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            },
                        },
                        {
                            breakpoint: 641,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            },
                        },
                    ],
                };
            },
        },
    };
</script>
