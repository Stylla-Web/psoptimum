@guest
    <div class="card card--grey">
        <div class="card-body">
            <h2 class="fs-6">{{ trans('storefront::checkout.account_details') }}</h2>

            <div class="row mt-2">
                <div class="col-sm-6">
                    <label for="email" class="text-uppercase d-none">
                        {{ trans('checkout::attributes.customer_email') }}<span>*</span>
                    </label>
                    <div class="form-group">
                        <input
                            placeholder="{{ trans('checkout::attributes.customer_email') }}"
                            type="text"
                            name="customer_email"
                            v-model="form.customer_email"
                            id="email"
                            class="form-control"
                        >

                        <span
                            class="error-message"
                            v-if="errors.has('customer_email')"
                            v-text="errors.get('customer_email')"
                        ></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="text-uppercase d-none" for="phone">
                        {{ trans('checkout::attributes.customer_phone') }}<span>*</span>
                    </label>
                    <div class="form-group">
                        <input
                            type="text"
                            placeholder="{{ trans('checkout::attributes.customer_phone') }}"
                            name="customer_phone"
                            v-model="form.customer_phone"
                            id="phone"
                            class="form-control"
                        >

                        <span
                            class="error-message"
                            v-if="errors.has('customer_phone')"
                            v-text="errors.get('customer_phone')"
                        ></span>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group create-an-account-label">
                        <div class="customCheckbox">
                            <input
                                type="checkbox"
                                name="create_an_account"
                                v-model="form.create_an_account"
                                id="create-an-account"
                                class="form-check-input"
                            >

                            <label for="create-an-account" class="form-check-label">
                                {{ trans('checkout::attributes.create_an_account') }}
                            </label>
                        </div>
                    </div>

                    <div class="create-an-account-form" v-show="form.create_an_account" v-cloak>
                    <span class="helper-text">
                        {{ trans('storefront::checkout.create_an_account_by_entering_the_information_below') }}
                    </span>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="password">
                                        {{ trans('checkout::attributes.password') }}<span>*</span>
                                    </label>

                                    <input
                                        type="password"
                                        name="password"
                                        v-model="form.password"
                                        id="password"
                                        class="form-control"
                                    >

                                    <span
                                        class="error-message"
                                        v-if="errors.has('billing.password')"
                                        v-text="errors.get('billing.password')"
                                    >
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <input type="hidden" name="customer_email" v-model="form.customer_email">
@endguest
