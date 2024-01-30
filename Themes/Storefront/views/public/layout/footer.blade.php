<!--Footer-->
<div class="footer footer-2">
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <a class="d-flex mb-4" href="{{ route("home") }}">
                    @if (is_null($logo))
                        <span class="logo-txt">{{ setting('store_name') }}</span>
                    @else
                        <img class="logo-img mh-100"
                             src="{{ $logo }}"
                             alt="{{ setting('store_name') }}"
                             title="{{ setting('store_name') }}" width="250px"/>
                    @endif
                </a>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact pt-4 pt-md-0">
                    @if (setting('storefront_address'))
                        <p class="d-flex mb-2">
                            <i class="bi bi-geo-alt"></i>
                            <a href="{{ setting('storefront_google_map_url') }}"
                               target="_blank">
                                {{ setting('store_address_1') }}<br/>
                                {{ setting('store_city') }}
                                , {{ stateName(setting('store_country'), setting('store_state'))}}
                                , {{ setting('store_zip') }}, {{ countryName(setting('store_country')) }}
                            </a>
                        </p>
                    @endif
                    @if (setting('store_phone') && ! setting('store_phone_hide'))
                        <p class="d-flex mb-2">
                            <i class="bi bi-telephone"></i>
                            <a href="tel:{{ setting('store_phone') }}">
                                {{ format_phone_number(setting('store_phone')) }}
                            </a>
                        </p>
                    @endif
                    @if (setting('store_fax') && ! setting('store_phone_hide'))
                        <p class="d-flex mb-2">
                            <i class="bi bi-printer"></i>
                            <a href="fax:{{ setting('store_phone') }}">
                                {{ format_phone_number(setting('store_fax')) }}
                            </a>
                        </p>
                    @endif
                    @if (setting('store_email') && ! setting('store_email_hide'))
                        <p class="d-flex mb-0">
                            <i class="bi bi-envelope"></i>
                            <a href="mailto:{{ setting('store_email') }}">{{ setting('store_email') }}</a>
                        </p>
                    @endif
                    @if ($acceptedPaymentMethodsImage->exists)
                    <img class="mt-4" src="{{ $acceptedPaymentMethodsImage->path }}" alt="Paypal Visa Payments"/>
                    @endif
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ps-lg-4 footer-links">
                    <h4 class="h4 body-font">{{ trans('storefront::layout.my_account') }}</h4>
                    <ul>
                        <li>
                            <a href="{{ route('account.dashboard.index') }}">
                                {{ trans('storefront::account.pages.dashboard') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('account.orders.index') }}">
                                {{ trans('storefront::account.pages.my_orders') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('account.reviews.index') }}">
                                {{ trans('storefront::account.pages.my_reviews') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('account.profile.edit') }}">
                                {{ trans('storefront::account.pages.my_profile') }}
                            </a>
                        </li>

                        @auth
                            <li>
                                <a href="{{ route('logout') }}">
                                    {{ trans('storefront::account.pages.logout') }}
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>

                @if ($footerMenuOne->isNotEmpty())
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 footer-links">
                        <h4 class="h4 body-font">{{ setting('storefront_footer_menu_one_title') }}</h4>
                        <ul>
                            @foreach ($footerMenuOne as $menuItem)
                                <li>
                                    <i class="{{$menuItem->icon}}"></i>
                                    <a href="{{ $menuItem->url() }}"
                                       target="{{ $menuItem->target }}">{{ $menuItem->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($footerMenuTwo->isNotEmpty())
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 footer-links">
                        <h4 class="h4 body-font">Customer Services</h4>
                        <ul>
                            @foreach ($footerMenuTwo as $menuItem)
                                <li>
                                    <i class="{{ $menuItem->icon }}"></i>
                                    <a href="{{ $menuItem->url() }}" target="{{ $menuItem->target }}">
                                        {{ $menuItem->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-12 col-sm-12 col-md-12 col-lg-3 newsletter-col mt-0 pb-4 pb-lg-0">
                    <div class="display-table">
                        <div class="display-table-cell footer-newsletter">
                            <form action="#" method="post">
                                <label class="h4 body-font">NEWSLETTER SIGN UP</label>
                                <p>Enter your email to receive daily news and get 20% off coupon for all items.</p>
                                <div class="input-group">
                                    <input type="email"
                                           class="brounded-start input-group__field newsletter-input rounded-0 mb-0"
                                           name="EMAIL" value="" placeholder="Email address" required>
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit rounded-0" name="commit"
                                                id="Subscribe">
                                            <i class="bi bi-envelope"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if (social_links()->isNotEmpty())
                        <ul class="list-inline social-icons mt-3 pt-1">
                            @foreach (social_links() as $icon => $socialLink)
                                <li class="list-inline-item">
                                    <a href="{{ $socialLink }}" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Facebook" target="_blank">
                                        <i class="{{ $icon }}" aria-hidden="true"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row">
                @if ($footerTags->isNotEmpty())
                    <div class="col-12">
                        <div class="footer-links footer-tags">
                            <h4 class="title">{{ trans('storefront::layout.tags') }}</h4>

                            <ul class="list-inline">
                                @foreach ($footerTags as $footerTag)
                                    <li>
                                        <a href="{{ $footerTag->url() }}">
                                            {{ $footerTag->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="copytext text-center text-uppercase">{!! $copyrightText !!}</div>
        </div>
    </div>
</div>
<!--End Footer-->
{{--<footer class="footer-wrap @if(! setting('newsletter_enabled')) border-separator @endif">--}}
{{--    <div class="container">--}}
{{--        <div class="footer">--}}
{{--            <div class="footer-top">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-5 col-md-9">--}}


{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="footer-bottom">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-md-9 col-sm-18">--}}
{{--                        <div class="footer-text">--}}
{{--                            --}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
