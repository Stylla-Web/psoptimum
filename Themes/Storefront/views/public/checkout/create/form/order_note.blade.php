<div class="card card--grey" v-cloak>
    <div class="card-body">
        <h2 class="fs-6">{{ trans('checkout::attributes.order_note') }}</h2>
        <textarea
            name="order_note"
            v-model="form.order_note"
            cols="30"
            rows="4"
            id="order-note"
            class="form-control"
            placeholder="{{ trans('storefront::checkout.special_note_for_delivery') }}"
        ></textarea>
    </div>
</div>
