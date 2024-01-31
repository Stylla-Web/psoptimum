<div class="solid-border" :class="{ loading: loadingOrderSummary }">
    <div class="row border-bottom pb-2">
        <span class="col-6 col-sm-6 cart__subtotal-title">
            {{ trans('storefront::cart.subtotal') }}
        </span>
        <span class="col-6 col-sm-6 text-right">
            <span class="money" v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
        </span>
    </div>
    <div class="row border-bottom pb-2 pt-2" v-if="hasCoupon" v-cloak>
        <span class="col-6 col-sm-6 cart__subtotal-title">
            {{ trans('storefront::cart.coupon') }}
            <span class="coupon-code">
                [@{{ cart.coupon.code }}]
                <span class="btn-remove-coupon" @click="removeCoupon">
                    <i class="las la-times"></i>
                </span>
            </span>
        </span>
        <span class="col-6 col-sm-6 text-right"
              v-html="'-' + cart.coupon.value.inCurrentCurrency.formatted">
        </span>
    </div>
    <div class="row border-bottom pb-2 pt-2" v-for="tax in cart.taxes">
        <span class="col-6 col-sm-6 cart__subtotal-title" v-text="tax.name"></span>
        <span class="col-6 col-sm-6 text-right"
              v-html="tax.amount.inCurrentCurrency.formatted"></span>
    </div>
    <div class="row border-bottom pb-2 pt-2" v-if="cart.shippingMethodName" >
        <span class="col-6 col-sm-6 cart__subtotal-title" v-text="cart.availableShippingMethods[cart.shippingMethodName].label"></span>
        <span class="col-6 col-sm-6 text-right"
              v-html="cart.shippingCost.inCurrentCurrency.formatted"></span>
    </div>
    <div class="row border-bottom pb-2 pt-2">
        <span class="col-6 col-sm-6 cart__subtotal-title">
            <strong>{{ trans('storefront::cart.total') }}</strong>
        </span>
        <span class="col-6 col-sm-6 cart__subtotal-title cart__subtotal text-right">
            <span class="money" v-html="cart.total.inCurrentCurrency.formatted"></span>
        </span>
    </div>
    <p class="cart__shipping m-0 fst-normal freeShipclaim"
       v-if="{{ json_encode(setting('free_shipping_enabled')) }} && cart.subTotal.amount >= {{ setting('free_shipping_min_amount') }}">
        <i class="me-1 align-middle icon an an-truck-l"></i>
        {!! trans('storefront::cart.free_shipping_eligible') !!}
    </p>
    <a href="{{ route('checkout.create') }}" id="cartCheckout"
       class="btn btn-primary btn--small-wide rounded mt-4 checkout">
        {{ trans('storefront::cart.proceed_to_checkout') }}
    </a>
</div>

{{--<aside class="order-summary-wrap" v-if="cartIsNotEmpty">--}}
{{--    <div class="order-summary">--}}
{{--        <div class="order-summary-top">--}}
{{--            <h3 class="section-title">{{ trans('storefront::cart.order_summary') }}</h3>--}}
{{--        </div>--}}

{{--        <div class="order-summary-middle" :class="{ loading: loadingOrderSummary }">--}}
{{--            <ul class="list-inline order-summary-list">--}}
{{--                <li>--}}
{{--                    <label>{{ trans('storefront::cart.subtotal') }}</label>--}}

{{--                    <span--}}
{{--                        class="price-amount"--}}
{{--                        v-html="cart.subTotal.inCurrentCurrency.formatted"--}}
{{--                    >--}}
{{--                    </span>--}}
{{--                </li>--}}

{{--                <li v-if="hasCoupon" v-cloak>--}}
{{--                    <label>--}}
{{--                        {{ trans('storefront::cart.coupon') }}--}}

{{--                        <span class="coupon-code">--}}
{{--                            [@{{ cart.coupon.code }}]--}}
{{--                            <span class="btn-remove-coupon" @click="removeCoupon">--}}
{{--                                <i class="las la-times"></i>--}}
{{--                            </span>--}}
{{--                        </span>--}}
{{--                    </label>--}}

{{--                    <span--}}
{{--                        class="price-amount"--}}
{{--                        v-html="'-' + cart.coupon.value.inCurrentCurrency.formatted"--}}
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

{{--            <div class="shipping-methods">--}}
{{--                <h6>{{ trans('storefront::cart.shipping_method') }}</h6>--}}

{{--                <div class="form-group" v-if="hasShippingMethod" v-cloak>--}}
{{--                    <div class="form-radio" v-for="shippingMethod in cart.availableShippingMethods">--}}
{{--                        <input--}}
{{--                            type="radio"--}}
{{--                            name="shipping_method"--}}
{{--                            v-model="shippingMethodName"--}}
{{--                            :value="shippingMethod.name"--}}
{{--                            :id="shippingMethod.name"--}}
{{--                            @change="updateShippingMethod(shippingMethod)"--}}
{{--                        >--}}

{{--                        <label :for="shippingMethod.name" v-text="shippingMethod.label"></label>--}}

{{--                        <span--}}
{{--                            class="price-amount"--}}
{{--                            v-html="shippingMethod.cost.inCurrentCurrency.formatted"--}}
{{--                        >--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <form id="address-to-ship-wrap" v-else v-cloak>--}}
{{--                    --}}{{-- Country --}}
{{--                    <div class="form-group">--}}
{{--                        <label for="billing-country">--}}
{{--                            {{ trans('storefront::cart.shipping_address.country') }}<span>*</span>--}}
{{--                        </label>--}}

{{--                        <select--}}
{{--                            name="shipping[country]"--}}
{{--                            :value="form.shipping.country"--}}
{{--                            id="shipping-country"--}}
{{--                            class="form-control arrow-black"--}}
{{--                            @change="changeShippingCountry($event.target.value)"--}}
{{--                        >--}}
{{--                            <option--}}
{{--                                v-for="(name, code) in countries"--}}
{{--                                :value="code"--}}
{{--                                v-text="name"--}}
{{--                            >--}}
{{--                            </option>--}}
{{--                        </select>--}}

{{--                        <span--}}
{{--                            class="error-message"--}}
{{--                            v-if="errors.has('shipping.country')"--}}
{{--                            v-text="errors.get('shipping.country')"--}}
{{--                        >--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    --}}{{-- State --}}
{{--                    <div class="form-group">--}}
{{--                        <label for="shipping-state">--}}
{{--                            {{ trans('storefront::cart.shipping_address.state') }}<span>*</span>--}}
{{--                        </label>--}}

{{--                        <input--}}
{{--                            type="text"--}}
{{--                            name="shipping[state]"--}}
{{--                            :value="form.shipping.state"--}}
{{--                            id="shipping-state"--}}
{{--                            class="form-control"--}}
{{--                            v-if="! hasShippingStates"--}}
{{--                            @change="changeShippingState($event.target.value)"--}}
{{--                        >--}}

{{--                        <select--}}
{{--                            name="shipping[state]"--}}
{{--                            v-model="form.shipping.state"--}}
{{--                            id="shipping-state"--}}
{{--                            class="form-control arrow-black"--}}
{{--                            v-else--}}
{{--                        >--}}
{{--                            <option value="">{{ trans('storefront::checkout.please_select') }}</option>--}}

{{--                            <option--}}
{{--                                v-for="(name, code) in states.shipping"--}}
{{--                                :value="code"--}}
{{--                                v-text="name"--}}
{{--                            >--}}
{{--                            </option>--}}
{{--                        </select>--}}

{{--                        <span--}}
{{--                            class="error-message"--}}
{{--                            v-if="errors.has('shipping.state')"--}}
{{--                            v-text="errors.get('shipping.state')"--}}
{{--                        >--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    --}}{{-- Zip code--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="billing-zip">--}}
{{--                            {{ trans('storefront::cart.shipping_address.zip') }}<span>*</span>--}}
{{--                        </label>--}}

{{--                        <input--}}
{{--                            type="text"--}}
{{--                            name="shipping[zip]"--}}
{{--                            :value="form.shipping.zip"--}}
{{--                            id="shipping-zip"--}}
{{--                            class="form-control"--}}
{{--                            @change="changeShippingZip($event.target.value)"--}}
{{--                        >--}}

{{--                        <span--}}
{{--                            class="error-message"--}}
{{--                            v-if="errors.has('shipping.zip')"--}}
{{--                            v-text="errors.get('shipping.zip')"--}}
{{--                        >--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

{{--            <div class="order-summary-total">--}}
{{--                <label>{{ trans('storefront::cart.total') }}</label>--}}
{{--                <span class="total-price" v-html="cart.total.inCurrentCurrency.formatted"></span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="order-summary-bottom">--}}
{{--            <a--}}
{{--                href="{{ route('checkout.create') }}"--}}
{{--                class="btn btn-primary btn-proceed-to-checkout"--}}
{{--            >--}}
{{--                {{ trans('storefront::cart.proceed_to_checkout') }}--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</aside>--}}
