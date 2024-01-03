<div class="top-bar">
    <div class="container-fluid">
        <div class="inner d-flex align-items-center">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 d-none d-lg-flex d-md-flex">
                @if (social_links()->isNotEmpty())
                    <span class="d-inline me-1">Follow Us:</span>
                    <ul class="social-icons list-inline align-items-center">
                        @foreach (social_links() as $icon => $socialLink)
                            <li class="list-inline-item">
                                <a href="{{ $socialLink }}" target="_blank">
                                    <i class="{{ $icon }}" aria-hidden="true"></i>
                                    <span class="tooltip-label">Facebook</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
                {{ setting('storefront_welcome_text') }}
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 d-none d-lg-block d-md-block text-right">
                <div class="phone-no m-0 px-2 d-inline-block">
                    <a href="tel:{{ setting('store_phone') }}" class="d-flex align-items-center">
                        <i class="an an-phone-l me-2"></i> <span class="pno">{{ format_phone_number(setting('store_phone')) }}</span>
                    </a>
                </div>
                <div class="m-0 d-inline email-id d-none d-xl-inline-block">
                    <a href="mailto:{{ setting('store_email') }}" class="d-flex align-items-center">
                        <i class="an an-envelope-l me-2"></i> <span class="eno">{{ setting('store_email') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<section class="top-nav-wrap">--}}
{{--    <div class="container">--}}
{{--        <div class="top-nav">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="top-nav-left d-none d-lg-block">--}}
{{--                    <span>{{ setting('storefront_welcome_text') }}</span>--}}
{{--                </div>--}}

{{--                <div class="top-nav-right">--}}
{{--                    <ul class="list-inline top-nav-right-list">--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('contact.create') }}">--}}
{{--                                <i class="las la-phone"></i>--}}
{{--                                {{ trans('storefront::layout.contact') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a href="{{ route('compare.index') }}">--}}
{{--                                <i class="las la-random"></i>--}}
{{--                                {{ trans('storefront::layout.compare') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        @if (is_multilingual())--}}
{{--                            <li>--}}
{{--                                <i class="las la-language"></i>--}}
{{--                                <select class="custom-select-option arrow-black" onchange="location = this.value">--}}
{{--                                    @foreach (supported_locales() as $locale => $language)--}}
{{--                                        <option--}}
{{--                                            value="{{ localized_url($locale, $routeArray[$locale] ?? '') }}" {{ locale() === $locale ? 'selected' : '' }}>--}}
{{--                                            {{ $language['name'] }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (is_multi_currency())--}}
{{--                            <li>--}}
{{--                                <i class="las la-money-bill"></i>--}}
{{--                                <select class="custom-select-option arrow-black" onchange="location = this.value">--}}
{{--                                    @foreach (setting('supported_currencies') as $currency)--}}
{{--                                        <option--}}
{{--                                            value="{{ route('current_currency.store', ['code' => $currency]) }}"--}}
{{--                                            {{ currency() === $currency ? 'selected' : '' }}--}}
{{--                                        >--}}
{{--                                            {{ $currency }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @auth--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('account.dashboard.index') }}">--}}
{{--                                    <i class="las la-user"></i>--}}
{{--                                    {{ trans('storefront::layout.account') }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @else--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('login') }}">--}}
{{--                                    <i class="las la-sign-in-alt"></i>--}}
{{--                                    {{ trans('storefront::layout.login') }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endauth--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
