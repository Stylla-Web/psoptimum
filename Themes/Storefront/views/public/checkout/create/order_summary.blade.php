<h2 class="title fs-6">{{ trans('storefront::cart.order_summary') }}</h2>
<div class="table-responsive order-table style1" :class="{ loading: loadingOrderSummary }">
    <table class="table table-order table-bordered align-middle table-hover text-center mb-1">
        <thead>
        <tr>
            <th>{{ trans('storefront::cart.table_small.image') }}</th>
            <th class="text-start">{{ trans('storefront::cart.table_small.product_name') }}</th>
            <th>{{ trans('storefront::cart.table_small.unit_price') }}</th>
            <th>{{ trans('storefront::cart.table_small.quantity') }}</th>
            <th>{{ trans('storefront::cart.subtotal') }}</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="cartItem in cart.items">
            <td class="thumbImg">
                <a :href="productUrl(cartItem.product)" class="thumb d-inline-block">
                    <img class="cart__image"
                         :src="baseImage(cartItem.product)"
                         :alt="cartItem.product.name"
                         width="80"/>
                </a>
            </td>
            <td class="text-start">
                <a :href="productUrl(cartItem.product)" v-text="cartItem.product.name"></a>
                <div class="cart__meta-text">
                    <ul class="list-inline product-options" v-cloak>
                        <li v-for="option in cartItem.options">
                            <label>@{{ option.name }}:</label> @{{ optionValues(option) }}
                        </li>
                    </ul>
                </div>
            </td>
            <td v-html="cartItem.unitPrice.inCurrentCurrency.formatted"></td>
            <td v-text="cartItem.qty"></td>
            <td class="fw-500" v-html="cartItem.total.inCurrentCurrency.formatted"></td>
        </tr>
        </tbody>
        <tfoot class="font-weight-600">
        <tr v-if="shippingMethodName" v-cloak>
            <td colspan="4" class="text-end fw-bolder">{{ trans('storefront::cart.shipping_cost') }}</td>
            <td class="fw-bolder" v-text="shippingMethodName.cost.inCurrentCurrency.formatted"></td>
        </tr>
        <tr v-if="hasCoupon" v-cloak>
            <td colspan="4" class="text-end fw-bolder">{{ trans('storefront::cart.coupon') }} [@{{ cart.coupon.code }}]
                <span class="btn-remove-coupon" @click="removeCoupon">
                    <i class="las la-times"></i>
                </span>
            </td>
            <td class="fw-bolder" v-html="'-' + cart.coupon.value.inCurrentCurrency.formatted">
            </td>
        </tr>
        <tr v-for="tax in cart.taxes">
            <td colspan="4" class="text-end fw-bolder" v-text="tax.name">
            </td>
            <td class="fw-bolder" v-html="tax.amount.inCurrentCurrency.formatted">
            </td>
        </tr>
        <tr>
            <td colspan="4" class="text-end fw-bolder">{{ trans('storefront::cart.total') }}</td>
            <td class="fw-bolder" v-html="cart.total.inCurrentCurrency.formatted"></td>
        </tr>
        </tfoot>
    </table>
</div>

@include('public.checkout.create.coupon')

<div class="order-button-payment mt-2 clearfix">
    <div class="form-group checkout-terms-and-conditions">
        <div class="form-check customCheckbox">
            <input type="checkbox" v-model="form.terms_and_conditions" id="terms-and-conditions">

            <label for="terms-and-conditions" class="form-check-label">
                {{ trans('storefront::checkout.i_agree_to_the') }}
                <a href="{{ $termsPageURL }}">
                    {{ trans('storefront::checkout.terms_&_conditions') }}
                </a>
            </label>

            <span class="error-message" v-if="errors.has('terms_and_conditions')"
                  v-text="errors.get('terms_and_conditions')"></span>
        </div>
    </div>
    <div id="paypal-button-container" v-if="form.payment_method === 'paypal'"></div>

    <button
        type="submit"
        class="cartCheckout btn-primary fs-6 btn btn-lg rounded w-100 fw-600 text-white btn-place-order"
        :class="{ 'btn-loading': placingOrder }"
        :disabled="! form.terms_and_conditions"
        v-else
        v-cloak
    >
        {{ trans('storefront::checkout.place_order') }}
    </button>
</div>
<div class="paymnet-img text-center mt-4">
    <img src="{{ asset('themes/storefront/public/images/payment-img.jpg') }}" alt="Payment">
</div>
{{--<aside class="order-summary-wrap">--}}
{{--    <div class="order-summary">--}}
{{--        <div class="order-summary-top">--}}
{{--            <h3 class="section-title"></h3>--}}

{{--            <ul class="list-inline cart-item">--}}
{{--                <li>--}}
{{--                    <label>--}}
{{--                        <a class="product-name"></a>--}}
{{--                        <span class="product-quantity"></span>--}}
{{--                    </label>--}}

{{--                    <span class="price-amount"></span>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="order-summary-middle">--}}
{{--            <ul class="list-inline order-summary-list">--}}
{{--                <li>--}}
{{--                    <label></label>--}}

{{--                    <span--}}
{{--                        class="price-amount"--}}
{{--                        "--}}
{{--                    >--}}
{{--                    </span>--}}
{{--                </li>--}}

{{--                <li v-if="hasCoupon" v-cloak>--}}
{{--                    <label>--}}
{{--                        {{ trans('storefront::cart.coupon') }}--}}

{{--                        <span class="coupon-code">--}}

{{--                        </span>--}}
{{--                    </label>--}}

{{--                    <span--}}
{{--                        class="price-amount"--}}
{{--                        --}}
{{--                    >--}}
{{--                    </span>--}}
{{--                </li>--}}

{{--                <li v-for="tax in cart.taxes">--}}
{{--                    <label v-text="tax.name"></label>--}}

{{--                    <span--}}
{{--                        class="price-amount"--}}
{{--                        v-html="tax.amount.inCurrentCurrency.formatted"--}}
{{--                    >--}}
{{--                    </span>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <div class="order-summary-total">--}}
{{--                <label>{{ trans('storefront::cart.total') }}</label>--}}
{{--                <span class="total-price"></span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="order-summary-bottom">--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</aside>--}}
