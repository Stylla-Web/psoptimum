<template>
    <!--Featured Content-->
    <section class="section featured-content style1 p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                    <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-0 order-sm-0">
                            <div class="f-image">
                                <img class="blur-up lazyload" :data-src="data.banner_1.image.path" :src="data.banner_1.image.path" alt="image" title="" />
                            </div>
                        </div>
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                            <div class="f-text text-black">
                                <h2 class="text-black text-transform-none mb-2 mb-md-3">
                                    {{ data.banner_1.call_to_action_title }}
                                </h2>
                                <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                    <p>
                                        {{ data.banner_1.call_to_action_body }}
                                    </p>
                                </div>
                                <a :href="data.banner_1.call_to_action_url"
                                   :target="data.banner_1.open_in_new_window ? '_blank' : '_self'"
                                   class="btn mt20" v-text="$trans('storefront::layout.shop')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                    <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-1 order-sm-1">
                            <div class="f-image">
                                <img class="blur-up lazyload" :data-src="data.banner_2.image.path" :src="data.banner_2.image.path" alt="image" title="" />
                            </div>
                        </div>
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                            <div class="f-text text-black">
                                <h2 class="text-black text-transform-none mb-2 mb-md-3">
                                    {{ data.banner_2.call_to_action_title }}
                                </h2>
                                <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                    <p>
                                        {{ data.banner_2.call_to_action_body }}
                                    </p>
                                </div>
                                <a :href="data.banner_2.call_to_action_url"
                                   :target="data.banner_2.open_in_new_window ? '_blank' : '_self'"
                                   class="btn mt20" v-text="$trans('storefront::layout.shop')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                    <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-0 order-sm-0">
                            <div class="f-image">
                                <img class="blur-up lazyload" :data-src="data.banner_3.image.path" :src="data.banner_3.image.path" alt="image" title="" />
                            </div>
                        </div>
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-1 order-sm-1">
                            <div class="f-text text-black">
                                <h2 class="text-black text-transform-none mb-2 mb-md-3">
                                    {{ data.banner_3.call_to_action_title }}
                                </h2>
                                <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                    <p>
                                        {{ data.banner_3.call_to_action_body }}
                                    </p>
                                </div>
                                <a :href="data.banner_3.call_to_action_url"
                                   :target="data.banner_3.open_in_new_window ? '_blank' : '_self'"
                                   class="btn mt20" v-text="$trans('storefront::layout.shop')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                    <div class="d-flex align-items-stretch justify-content-between w-100 flex-sm-row flex-column clr-f5">
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-0 order-md-1 order-sm-1">
                            <div class="f-image">
                                <img class="blur-up lazyload" :data-src="data.banner_4.image.path" :src="data.banner_4.image.path" alt="image" title="" />
                            </div>
                        </div>
                        <div class="f-item fl-1 d-flex w-100 align-items-center order-lg-1 order-md-0 order-sm-0">
                            <div class="f-text text-black">
                                <h2 class="text-black text-transform-none mb-2 mb-md-3">
                                    {{ data.banner_4.call_to_action_title }}
                                </h2>
                                <div class="rte rte-setting d-flex mb-3 mb-md-4">
                                    <p>
                                        {{ data.banner_4.call_to_action_body }}
                                    </p>
                                </div>
                                <a :href="data.banner_4.call_to_action_url"
                                   :target="data.banner_4.open_in_new_window ? '_blank' : '_self'"
                                   class="btn mt20" v-text="$trans('storefront::layout.shop')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Featured Content-->
<!--    <section class="banner-wrap three-column-banner">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <a-->
<!--                        :href="data.banner_1.call_to_action_url"-->
<!--                        class="banner"-->
<!--                        :target="data.banner_1.open_in_new_window ? '_blank' : '_self'"-->
<!--                    >-->
<!--                        <img :src="data.banner_1.image.path" alt="banner">-->
<!--                    </a>-->
<!--                </div>-->

<!--                <div class="col-md-6">-->
<!--                    <a-->
<!--                        :href="data.banner_2.call_to_action_url"-->
<!--                        class="banner"-->
<!--                        :target="data.banner_2.open_in_new_window ? '_blank' : '_self'"-->
<!--                    >-->
<!--                        <img :src="data.banner_2.image.path" alt="banner">-->
<!--                    </a>-->
<!--                </div>-->

<!--                <div class="col-md-6">-->
<!--                    <a-->
<!--                        :href="data.banner_3.call_to_action_url"-->
<!--                        class="banner"-->
<!--                        :target="data.banner_3.open_in_new_window ? '_blank' : '_self'"-->
<!--                    >-->
<!--                        <img :src="data.banner_3.image.path" alt="banner">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
</template>

<script>
    export default {
        props: ['data'],
    };
</script>
