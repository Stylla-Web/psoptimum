<div class="card card--grey" v-if="hasShippingMethod" v-cloak>
    <div class="card-body">
        <h2 class="fs-6">{{ trans('storefront::cart.shipping_method') }}</h2>

        <div class="form-group">
            <div class="customRadio" v-for="shippingMethod in cart.availableShippingMethods">
                <input
                    type="radio"
                    name="shipping_method"
                    v-model="form.shipping_method"
                    :value="shippingMethod.name"
                    :id="shippingMethod.name"
                    @change="updateShippingMethod(shippingMethod)"
                >
                <label :for="shippingMethod.name" v-text="shippingMethod.label"></label>
                <span
                    class="price-amount fw-bold ms-1"
                    v-html="shippingMethod.cost.inCurrentCurrency.formatted"
                ></span>
            </div>
        </div>
    </div>
</div>
<div class="card card--grey" v-cloak>
    <div class="card-body">
        <h2 class="fs-6">{{ trans('storefront::checkout.payment_method') }}</h2>
        <div class="form-group" v-if="hasMoreThanOnePaymentMethod" v-cloak>
            <div class="customRadio" v-for="(gateway, name) in gateways">
                <input
                    type="radio"
                    name="form.payment_method"
                    v-model="form.payment_method"
                    :value="name"
                    :id="name"
                >
                <label :for="name">
                    <span class="fw-bold d-block" v-text="gateway.label"></span>
                    <span class="helper-text" v-text="gateway.description"></span>
                </label>
            </div>

            <span class="error-message" v-if="hasNoPaymentMethod">
                {{ trans('storefront::checkout.no_payment_method') }}
            </span>
        </div>
        <div class="card-body" id="stripe-card-element" v-show="form.payment_method === 'stripe'" v-cloak>
            {{-- A Stripe Element will be mounted here dynamically. --}}
        </div>
        <span class="error-message" v-if="stripeError" v-text="stripeError"></span>
        <div class="card-body payment-instructions" v-if="shouldShowPaymentInstructions" v-cloak>
            <h4 class="title">{{ trans('storefront::checkout.payment_instructions') }}</h4>

            <p v-html="paymentInstructions"></p>
        </div>
    </div>
</div>


