<template>
<!--    <div class="col-6 col-sm-6 col-md-3 col-lg-3">-->
        <ProductCard :product="product" :nbr-columns="'col-6 col-sm-6 col-md-4 col-lg-4'"/>
<!--    </div>-->
</template>

<script>
    import ProductCard from './../../ProductCard.vue';

    export default {
        components: { ProductCard },

        props: ['product'],
    };
</script>
