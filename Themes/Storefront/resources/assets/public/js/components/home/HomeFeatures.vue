<template>
    <!--Store Feature-->
    <section class="store-features style2">
        <div class="container">
            <div class="row store-info">
                <div class="col d-flex align-items-center mb-2 mb-md-0" v-for="(feature, index) in features" :key="index">
                    <i :class="feature.icon"></i>
                    <div class="detail">
                        <h5 class="fs-6 text-uppercase mb-0">{{ feature.title }}</h5>
                        <span>{{ feature.subtitle }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Store Feature-->
</template>

<script>
    export default {
        props: ['features'],
    };
</script>
