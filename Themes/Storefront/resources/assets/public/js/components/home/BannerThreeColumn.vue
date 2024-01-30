<template>
    <!--Banner Masonary-->
    <section class="section collection-banners style8 mt-0">
        <div class="container">
            <div class="grid-masonary banner-grid grid-mr-30">
                <div class="grid-sizer col-12 col-sm-12 col-md-6 col-lg-6 mw-100"></div>
                <div class="row mx-0">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mw-100 cl-item banner-item">
                        <div class="collection-grid-item banner1">
                            <a :href="data.banner_1.call_to_action_url"
                               :target="data.banner_1.open_in_new_window ? '_blank' : '_self'">
                                <div class="img">
                                    <img class="blur-up lazyload"
                                         :data-src="data.banner_1.image.path"
                                         :src="data.banner_1.image.path"
                                         alt="collection"
                                         title="" />
                                </div>
                                <div class="details center-left w-50">
                                    <div class="inner">
                                        <h3 class="title lh-1">
                                            {{  data.banner_1.call_to_action_title }}
                                        </h3>
                                        <p class="subtitle mt-3 mb-0">
                                            {{  data.banner_1.call_to_action_body }}
                                        </p>
                                        <span class="btn btn-outline-primary mt-3 mt-sm-4" v-text="$trans('storefront::layout.shop')">
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mw-100 cl-item banner-item">
                        <div class="collection-grid-item banner2">
                            <a :href="data.banner_2.call_to_action_url"
                               :target="data.banner_2.open_in_new_window ? '_blank' : '_self'">
                                <div class="img">
                                    <img class="blur-up lazyload"
                                         :data-src="data.banner_2.image.path"
                                         :src="data.banner_2.image.path"
                                         alt="collection" title="" />
                                </div>
                                <div class="details center-left w-50">
                                    <div class="inner">
                                        <p class="subtitle mb-3">
                                            {{  data.banner_1.call_to_action_title }}
                                        </p>
                                        <h3 class="title lh-1">
                                            {{  data.banner_1.call_to_action_body }}
                                        </h3>
                                        <span class="btn btn-outline-primary mt-3 mt-sm-4" v-text="$trans('storefront::layout.shop')">
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mw-100 cl-item banner-item">
                        <div class="collection-grid-item banner3">
                            <a :href="data.banner_3.call_to_action_url"
                               :target="data.banner_3.open_in_new_window ? '_blank' : '_self'">
                                <div class="img">
                                    <img class="blur-up lazyload"
                                         :data-src="data.banner_3.image.path"
                                         :src="data.banner_3.image.path"
                                         alt="collection"
                                         title="" />
                                </div>
                                <div class="details center-right text-center">
                                    <div class="inner">
                                        <h3 class="title">
                                            {{  data.banner_3.call_to_action_title }}
                                        </h3>
                                        <p class="subtitle mt-2 mt-lg-3 mb-0 small--hide">
                                            {{  data.banner_3.call_to_action_body }}
                                        </p>
                                        <span class="btn btn-outline-primary mt-3 mt-lg-4 small--hide" v-text="$trans('storefront::layout.shop')">
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Masonary-->
</template>

<script>
    export default {
        props: ['data'],
    };
</script>
