@if (setting('newsletter_enabled'))
    <newsletter-subscription inline-template>
        <div class="display-table">
            <div class="display-table-cell footer-newsletter">
                <form @submit.prevent="subscribe">
                    <label class="h4 body-font">
                        {{ trans('storefront::layout.subscribe_to_our_newsletter') }}
                    </label>
                    <p>{{ trans('storefront::layout.subscribe_to_our_newsletter_subtitle') }}</p>
                    <div class="input-group">
                        <input type="email"
                               class="brounded-start input-group__field newsletter-input rounded-0 mb-0"
                               v-model="email"
                               placeholder="{{ trans('storefront::layout.enter_your_email_address') }}"
                               required>
                        <span class="input-group__btn">
                                        <button type="submit"
                                                class="btn newsletter__submit rounded-0"
                                                v-if="subscribed"
                                                v-cloak>
                                            <i class="las la-check"></i>
                                            {{ trans('storefront::layout.subscribed') }}
                                        </button>

                                        <button type="submit"
                                                class="btn newsletter__submit rounded-0"
                                                :class="{ 'btn-loading': subscribing }"
                                                v-else
                                                v-cloak>
                                            <i class="bi bi-envelope"></i>
                                        </button>
                                    </span>
                    </div>
                </form>
            </div>
        </div>
    </newsletter-subscription>
@endif
