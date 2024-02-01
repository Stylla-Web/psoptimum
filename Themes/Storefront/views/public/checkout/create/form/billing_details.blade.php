<div class="card card--grey mt-2 mt-md-0">
    <div class="card-body">
        <h2 class="fs-6">{{ trans('storefront::checkout.billing_details') }}</h2>

        <div class="select-address" v-if="hasAddress" v-cloak>
            <div class="form-group">
                <div class="form-radio customRadio" v-for="address in addresses">
                    <input
                        type="radio"
                        v-model="form.billingAddressId"
                        :value="address.id"
                        :id="'billing-address-' + address.id"
                    >

                    <label :for="'billing-address-' + address.id">
                        <span class="fw-bold d-block" v-text="address.full_name"></span>
                        <span v-text="address.address_1"></span>
                        <span v-if="address.address_2" v-text="address.address_2"></span>
                        <span>@{{ address.city }}, @{{ address.state_name }} @{{ address.zip }}</span>
                        <span v-text="address.country_name"></span>
                    </label>
                </div>

                <span class="error-message" v-if="! form.newBillingAddress && errors.has('billing.address_1')">
                {{ trans('storefront::checkout.you_must_select_an_address') }}
            </span>
            </div>
        </div>

        <div class="form-group add-new-address-wrap" v-cloak>
            <button
                v-if="hasAddress"
                type="button"
                class="btn btn-add-new-address"
                @click="addNewBillingAddress"
            >
                {{ trans('storefront::checkout.add_new_address') }}
            </button>

            <div class="add-new-address-form" v-show="! hasAddress || form.newBillingAddress">
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label class="text-uppercase d-none" for="billing-first-name">
                            {{ trans('checkout::attributes.billing.first_name') }}<span>*</span>
                        </label>
                        <div class="form-group">
                            <input
                                type="text"
                                name="billing[first_name]"
                                v-model="form.billing.first_name"
                                id="billing-first-name"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.billing.first_name') }}"
                            >
                            <span
                                class="error-message"
                                v-if="errors.has('billing.first_name')"
                                v-text="errors.get('billing.first_name')"
                            >
                        </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="text-uppercase d-none" for="billing-last-name">
                            {{ trans('checkout::attributes.billing.last_name') }}<span>*</span>
                        </label>
                        <div class="form-group">
                            <input
                                type="text"
                                name="billing[last_name]"
                                v-model="form.billing.last_name"
                                id="billing-last-name"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.billing.last_name') }}"
                            >
                            <span
                                class="error-message"
                                v-if="errors.has('billing.last_name')"
                                v-text="errors.get('billing.last_name')"
                            ></span>
                        </div>
                    </div>
                </div>

                <label class="text-uppercase d-none" for="billing-address-1">
                    {{ trans('checkout::attributes.street_address') }}<span>*</span>
                </label>
                <div class="form-group">
                    <input
                        type="text"
                        name="billing[address_1]"
                        v-model="form.billing.address_1"
                        id="billing-address-1"
                        class="form-control"
                        placeholder="{{ trans('checkout::attributes.billing.address_1') }}"
                    >
                    <span
                        class="error-message"
                        v-if="errors.has('billing.address_1')"
                        v-text="errors.get('billing.address_1')"
                    ></span>
                </div>

                <label class="text-uppercase d-none" for="billing-address-2">Address 2:</label>
                <div class="form-group">
                    <input
                        type="text"
                        name="billing[address_2]"
                        v-model="form.billing.address_2"
                        id="billing-address-2"
                        class="form-control"
                        placeholder="{{ trans('checkout::attributes.billing.address_2') }}"
                    >
                </div>

                <div class="row mt-2">
                    <div class="col-sm-6">
                        <label class="text-uppercase d-none" for="billing-city">
                            {{ trans('checkout::attributes.billing.city') }}<span>*</span>
                        </label>
                        <div class="form-group">
                            <input
                                type="text"
                                name="billing[city]"
                                :value="form.billing.city"
                                id="billing-city"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.billing.city') }}"
                                @change="changeBillingCity($event.target.value)"
                            >
                            <span
                                class="error-message"
                                v-if="errors.has('billing.city')"
                                v-text="errors.get('billing.city')"
                            >
                        </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="text-uppercase d-none" for="billing-zip">
                            {{ trans('checkout::attributes.billing.zip') }}<span>*</span>
                        </label>
                        <div class="form-group">
                            <input
                                type="text"
                                name="billing[zip]"
                                :value="form.billing.zip"
                                id="billing-zip"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.billing.zip') }}"
                                @change="changeBillingZip($event.target.value)"
                            >
                            <span
                                class="error-message"
                                v-if="errors.has('billing.zip')"
                                v-text="errors.get('billing.zip')"
                            >
                        </span>
                        </div>
                    </div>
                </div>

                <label for="billing-country" class="text-uppercase d-none">
                    {{ trans('checkout::attributes.billing.country') }}<span>*</span>
                </label>
                <div class="form-group select-wrapper">
                    <select
                        name="billing[country]"
                        :value="form.billing.country"
                        id="billing-country"
                        class="form-control arrow-black"
                        @change="changeBillingCountry($event.target.value)"
                    >
                        <option
                            v-for="(name, code) in countries"
                            :value="code"
                            v-text="name"
                        >
                        </option>
                    </select>
                    <span
                        class="error-message"
                        v-if="errors.has('billing.country')"
                        v-text="errors.get('billing.country')"
                    >
                        </span>

                </div>

                <label class="text-uppercase d-none">State:</label>
                <div class="form-group select-wrapper">
                    <input
                        type="text"
                        name="billing[state]"
                        :value="form.billing.state"
                        id="billing-state"
                        class="checkout__input--select__field border-radius-5"
                        v-if="! hasBillingStates"
                        @change="changeBillingState($event.target.value)"
                    >

                    <select
                        name="billing[state]"
                        v-model="form.billing.state"
                        id="billing-state"
                        class="checkout__input--select__field border-radius-5"
                        v-else
                    >
                        <option value="">{{ trans('storefront::checkout.please_select') }}</option>

                        <option
                            v-for="(name, code) in states.billing"
                            :value="code"
                            v-text="name"
                        >
                        </option>
                    </select>

                    <span
                        class="error-message"
                        v-if="errors.has('billing.state')"
                        v-text="errors.get('billing.state')"
                    >
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group mt-2">
            <div class="customCheckbox">
                <input
                    type="checkbox"
                    name="ship_to_a_different_address"
                    v-model="form.ship_to_a_different_address"
                    id="ship-to-different-address"
                >

                <label for="ship-to-different-address" class="form-check-label">
                    {{ trans('checkout::attributes.ship_to_a_different_address') }}
                </label>
            </div>
        </div>
    </div>
</div>
