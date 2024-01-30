<template>
    <!--Brand Logo Slider-->
    <section class="section logo-section">
        <div class="layout-fullwidth">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar d-flex-center">
                        <div class="logo-bar__item" v-for="(topBrand, index) in topBrands"
                             :key="index">
                            <a :href="topBrand.url">
                                <img class="blur-up lazyload"
                                     :data-src="topBrand.logo.path"
                                     :src="topBrand.logo.path"
                                     alt="brand" title="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand Logo Slider-->
</template>

<script>
    export default {
        props: ['topBrands'],
    };
</script>
