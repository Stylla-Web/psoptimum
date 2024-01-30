<div class="coupon-wrap">
    <div class="form-group flex-column">
        <div class="form-input">
            <input
                type="text"
                v-model="couponCode"
                placeholder="{{ trans('storefront::cart.enter_coupon_code') }}"
                class="form-control w-100 my-2"
                @input="couponError = null"
            >

            <span
                class="error-message"
                v-if="couponError"
                v-text="couponError"
            >
            </span>
        </div>

        <button
            type="button"
            class="btn btn-apply-coupon w-100 mx-0"
            :class="{ 'btn-loading': applyingCoupon }"
            @click.prevent="applyCoupon"
        >
            {{ trans('storefront::cart.apply_coupon') }}
        </button>
    </div>

    <span
        class="error-message"
        v-if="couponError"
        v-text="couponError"
    >
    </span>
</div>
