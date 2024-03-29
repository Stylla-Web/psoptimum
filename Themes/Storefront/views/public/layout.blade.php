<!DOCTYPE html>
<html lang="{{ locale() }}">
    <head>
        <base href="{{ config('app.url') }}">
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

        <title>
            @hasSection('title')
                @yield('title') - {{ setting('store_name') }}
            @else
                {{ setting('store_name') }}
            @endif
        </title>

        @stack('meta')

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap" rel="stylesheet">

        @if (is_rtl())
            <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.rtl.css')) }}">
        @else
            <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.css')) }}">
        @endif

        <link rel="stylesheet" href="{{ v(Theme::url('public/css/theme.css')) }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ v(Theme::url('public/css/responsive.css')) }}">
        <style>
            .pace {
                -webkit-pointer-events: none;
                pointer-events: none;

                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .pace-inactive {
                display: none;
            }

            .pace .pace-progress {
                background: #24b4a7;
                position: fixed;
                z-index: 9999999;
                top: 0;
                right: 100%;
                width: 100%;
                height: 2px;
            }
        </style>
        <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">

        @stack('styles')

        {!! setting('custom_header_assets') !!}
        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <script>
            window.FleetCart = {
                baseUrl: '{{ config("app.url") }}',
                rtl: {{ is_rtl() ? 'true' : 'false' }},
                storeName: '{{ setting("store_name") }}',
                storeLogo: '{{ $logo }}',
                loggedIn: {{ auth()->check() ? 'true' : 'false' }},
                csrfToken: '{{ csrf_token() }}',
                stripePublishableKey: '{{ setting("stripe_publishable_key") }}',
                defaultCountry: '{{ setting("default_country") }}',
                locale: '{{ locale() }}',
                razorpayKeyId: '{{ setting("razorpay_key_id") }}',
                cart: {!! $cart !!},
                wishlist: {!! $wishlist !!},
                compareList: {!! $compareList !!},
                langs: {
                    'storefront::layout.next': '{{ trans("storefront::layout.next") }}',
                    'storefront::layout.prev': '{{ trans("storefront::layout.prev") }}',
                    'storefront::layout.all_categories': '{{ trans("storefront::layout.all_categories") }}',
                    'storefront::layout.most_searched': '{{ trans("storefront::layout.most_searched") }}',
                    'storefront::layout.search_for_products': '{{ trans("storefront::layout.search_for_products") }}',
                    'storefront::layout.category_suggestions': '{{ trans("storefront::layout.category_suggestions") }}',
                    'storefront::layout.product_suggestions': '{{ trans("storefront::layout.product_suggestions") }}',
                    'storefront::layout.more_results': '{{ trans("storefront::layout.more_results") }}',
                    'storefront::product_card.out_of_stock': '{{ trans("storefront::product_card.out_of_stock") }}',
                    'storefront::product_card.new': '{{ trans("storefront::product_card.new") }}',
                    'storefront::product_card.add_to_cart': '{{ trans("storefront::product_card.add_to_cart") }}',
                    'storefront::product_card.view_options': '{{ trans("storefront::product_card.view_options") }}',
                    'storefront::product_card.compare': '{{ trans("storefront::product_card.compare") }}',
                    'storefront::product_card.wishlist': '{{ trans("storefront::product_card.wishlist") }}',
                    'storefront::product_card.available': '{{ trans("storefront::product_card.available") }}',
                    'storefront::product_card.sold': '{{ trans("storefront::product_card.sold") }}',
                    'storefront::product_card.years': '{{ trans("storefront::product_card.years") }}',
                    'storefront::product_card.months': '{{ trans("storefront::product_card.months") }}',
                    'storefront::product_card.weeks': '{{ trans("storefront::product_card.weeks") }}',
                    'storefront::product_card.days': '{{ trans("storefront::product_card.days") }}',
                    'storefront::product_card.hours': '{{ trans("storefront::product_card.hours") }}',
                    'storefront::product_card.minutes': '{{ trans("storefront::product_card.minutes") }}',
                    'storefront::product_card.seconds': '{{ trans("storefront::product_card.seconds") }}',
                    'auth::validation.confirmed': '{{ trans("user::auth.validation.confirmed") }}',
                    'auth::validation.email': '{{ trans("user::auth.validation.email") }}',
                    'storefront::layout.shop': '{{ trans("storefront::layout.shop") }}',
                },
            };
        </script>

        {!! $schemaMarkup->toScript() !!}

        @stack('globals')

        @routes
    </head>

    <body
        class="template-index page-template {{ is_rtl() ? 'rtl' : 'ltr' }}"
        data-theme-color="#{{ $themeColor->getHex() }}"
        style="--color-primary: #{{ $themeColor->getHex() }};
            --color-primary-hover: #{{ $themeColor->darken(8) }};
            --color-primary-transparent: {{ color2rgba($themeColor, 0.8) }};
            --color-primary-transparent-lite: {{ color2rgba($themeColor, 0.3) }};"
    >
        <!-- Page Loader -->
        <div id="pre-loader">
            <div id="html-spinner"></div>
            <img src="{{ v(Theme::url('public/images/logo-ps-emblem.png')) }}">
        </div>
        <!-- End Page Loader -->

        <div class="page-wrapper" id="app">
            @include('public.layout.header')
            @include('public.layout.breadcrumb')

            @yield('content')


            @include('public.layout.footer')

{{--            <div class="overlay"></div>--}}

            @include('public.layout.sidebar_menu')
            @include('public.layout.sidebar_cart')
            @include('public.layout.alert')
            @include('public.layout.newsletter_popup')
            @include('public.layout.cookie_bar')
        </div>

        @stack('pre-scripts')

        <script src="{{ v(Theme::url('public/js/app.js')) }}"></script>

        {{--  Theme js --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ v(Theme::url('public/js/plugins.js')) }}"></script>
        <script src="{{ v(Theme::url('public/js/main.js')) }}"></script>

        <script src="https://kit.fontawesome.com/228006f19a.js" crossorigin="anonymous"></script>
        @stack('scripts')

        {!! setting('custom_footer_assets') !!}
        <div class="back-top" title="Top of Page"><i class="las la-arrow-circle-up"></i></div>
    </body>
</html>
