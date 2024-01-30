<template>
    <li class="item d-flex">
        <a class="product-image" :href="productUrl(cartItem.product)">
            <img class="blur-up lazyload"
                 :data-src="baseImage(cartItem.product)"
                 :src="baseImage(cartItem.product)"
                 :class="{ 'image-placeholder': ! hasBaseImage(cartItem.product) }"
                 alt="image"
                 title="">
        </a>
        <div class="product-details">
            <a class="product-title" :href="productUrl(cartItem.product)" :title="cartItem.product.name">
                {{ cartItem.product.name }}
            </a>
            <div class="variant-cart">
                <ul>
                    <li v-for="option in cartItem.options" :key="option.id">
                        <label class="d-inline">{{ option.name }}:</label> <span v-html="optionValues(option)"></span>
                    </li>
                </ul>
            </div>
            <div class="priceRow">
                <div class="product-price">
                    {{ cartItem.qty }} x <span v-html="cartItem.unitPrice.inCurrentCurrency.formatted"></span>
                </div>
            </div>
        </div>
        <div class="qtyDetail text-center">
            <button class="btn-remove" @click="remove">
                <i class="las la-times"></i>
            </button>
<!--            <div class="wrapQtyBtn">-->
<!--                <div class="qtyField">-->
<!--                    <a class="qtyBtn minus" href="javascript:void(0);">-->
<!--                        <i class="icon an an-minus-r" aria-hidden="true"></i>-->
<!--                    </a>-->
<!--                    <input type="text" name="quantity" value="1" class="qty">-->
<!--                    <a class="qtyBtn plus" href="javascript:void(0);">-->
<!--                        <i class="icon an an-plus-l" aria-hidden="true"></i>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </li>
</template>

<script>
import store from '../../store';
import ProductHelpersMixin from '../../mixins/ProductHelpersMixin';

export default {
        mixins: [
            ProductHelpersMixin,
        ],

        props: ['cartItem'],

        methods: {
            optionValues(option) {
                let values = [];

                if (option.type !== 'color') {
                    for (let value of option.values) {
                        values.push(value.label);
                    }
                    return values.join(', ');
                } else {
                    return `<span style="background-color: ${option.values[0].label} ; display: inline-block; height: 15px; width: 15px"></span>`;
                }
            },

            remove() {
                store.removeCartItem(this.cartItem);

                $.ajax({
                    method: 'DELETE',
                    url: route('cart.items.destroy', { cartItemId: this.cartItem.id }),
                }).then((cart) => {
                    store.updateCart(cart);
                });
            },
        },
    };
</script>
