<table>
    <thead class="cart__row cart__header small--hide">
    <tr>
        <th class="action">&nbsp;</th>
        <th colspan="2" class="text-start">{{ trans('storefront::cart.table.product_name') }}</th>
        <th class="text-center">{{ trans('storefront::cart.table.unit_price') }}</th>
        <th class="text-center">{{ trans('storefront::cart.table.quantity') }}</th>
        <th class="text-center">{{ trans('storefront::cart.table.line_total') }}</th>
    </tr>
    </thead>
    <tbody>
    <tr v-for="cartItem in cart.items" :key="cartItem.id" class="cart__row border-bottom line1 cart-flex border-top">
        <td class="cart-delete text-center small--hide">
            <button class="btn btn--secondary cart__remove remove-icon position-static" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Remove item"  @click="remove(cartItem)">
                <i class="icon an an-times-r"></i>
            </button>
        </td>
        <td class="cart__image-wrapper cart-flex-item">
            <a :href="productUrl(cartItem.product)">
                <img class="cart__image blur-up lazyload"
                     :src="baseImage(cartItem.product)"
                     :data-src="baseImage(cartItem.product)"
                     :class="{ 'image-placeholder': ! hasBaseImage(cartItem.product) }"
                     :alt="cartItem.product.name" width="80"/>
            </a>
        </td>
        <td class="cart__meta small--text-left cart-flex-item">
            <div class="list-view-item__title">
                <a :href="productUrl(cartItem.product)"
                   v-text="cartItem.product.name">
                </a>
            </div>
            <div class="cart__meta-text">
                <ul>
                    <li v-for="option in cartItem.options">
                        <label class="d-inline">@{{ option.name }}:</label> <span v-html="optionValues(option)"></span>
                    </li>
                </ul>
            </div>
            <div class="cart-price d-md-none">
                <span class="money fw-500" v-html="cartItem.total.inCurrentCurrency.formatted"></span>
            </div>
        </td>
        <td class="cart__price-wrapper cart-flex-item text-center small--hide">
            <span class="money" v-html="cartItem.unitPrice.inCurrentCurrency.formatted"></span>
        </td>
        <td class="cart__update-wrapper cart-flex-item text-end text-md-center">
            <div class="cart__qty d-flex justify-content-end justify-content-md-center">
                <div class="number-picker">
                    <div class="qtyField input-group-quantity">
                        <button type="button" class="qtyBtn btn btn-number btn-minus minus" data-type="minus"
                                :disabled="cartItem.qty == 1">
                            <i class="las la-angle-left"></i>
                        </button>

                        <input
                            type="text"
                            :value="cartItem.qty"
                            min="1"
                            :max="cartItem.product.manage_stock ? cartItem.product.qty : ''"
                            class="input-number input-quantity cart__qty-input qty"
                            @input="updateQuantity(cartItem, $event.target.value)"
                            @keydown.up="updateQuantity(cartItem, cartItem.qty + 1)"
                            @keydown.down="updateQuantity(cartItem, cartItem.qty - 1)"
                        >

                        <button type="button" class="qtyBtn btn btn-number btn-plus plus" data-type="plus">
                            <i class="las la-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);"
               @click="remove(cartItem)"
               title="Remove"
               class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3"
            >
                {{ trans('storefront::cart.table.remove') }}
            </a>
        </td>
        <td class="cart-price cart-flex-item text-center small--hide">
            <span class="money fw-500" v-html="cartItem.total.inCurrentCurrency.formatted"></span>
        </td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3" class="text-start pt-3">
            <a href="{{ route("products.index") }}" class="btn btn--link d-inline-flex align-items-center btn--small p-0 cart-continue">
                <i class="me-1 icon an an-angle-left-l"></i>
                <span class="text-decoration-underline">{{ trans('cart::messages.continue_shopping') }}</span>
            </a>
        </td>
        <td colspan="3" class="text-end pt-3">
            <button name="clear"
                    class="btn btn--link d-inline-flex align-items-center btn--small small--hide">
                <i class="me-1 icon an an-times-r"></i>
                <span class="ms-1 text-decoration-underline" @click="clearCart">{{ trans('cart::messages.clear_shopping_cart') }}</span>
            </button>
        </td>
    </tr>
    </tfoot>
</table>
