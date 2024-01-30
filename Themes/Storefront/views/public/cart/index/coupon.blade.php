<h5>Discount Codes</h5>
<form @submit.prevent="applyCoupon">
    <div class="form-group">
        <label for="address_zip">{{ trans('storefront::cart.enter_coupon_code') }}</label>
        <input type="text"
               v-model="couponCode"
               placeholder="{{ trans('storefront::cart.enter_coupon_code') }}"
               class="form-control"
               @input="couponError = null"/>

        <span
            class="error-message"
            v-if="couponError"
            v-text="couponError"
        >
                </span>
    </div>
    <div class="actionRow">
        <button
            type="submit"
            class="btn btn--small btn-primary rounded"
            :class="{ 'btn-loading': applyingCoupon }"
        >
            {{ trans('storefront::cart.apply_coupon') }}
        </button>
    </div>
</form>
