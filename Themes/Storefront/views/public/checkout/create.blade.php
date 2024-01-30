@extends('public.layout')

@section('title', trans('storefront::checkout.checkout'))

@section('content')
    <checkout-create
        customer-email="{{ auth()->user()->email ?? null }}"
        customer-phone="{{ auth()->user()->phone ?? null }}"
        :addresses="{{ $addresses }}"
        :default-address="{{ $defaultAddress }}"
        :gateways="{{ $gateways }}"
        :countries="{{ json_encode($countries) }}"
        inline-template
    >
        <div>
            <!--Collection Banner-->
            <div class="collection-header mt-5">
                <div class="collection-hero">
                    <div class="collection-hero__image"></div>
                    <div class="collection-hero__title-wrapper container">
                        <h1 class="collection-hero__title">
                            {{ trans('storefront::cart.checkout') }}
                        </h1>
                        <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">
                            <a href="{{ route('home') }}" title="Back to the home page">{{ trans('storefront::layout.home') }}</a>
                            <span>|</span>
                            <a href="{{ route('cart.index') }}" title="">{{ trans('storefront::cart.cart') }}</a>
                            <span>|</span>
                            <span class="fw-bold">{{ trans('storefront::cart.checkout') }}</span></div>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->
            <div class="container mt-5">
                <form @submit.prevent="placeOrder" @input="errors.clear($event.target.name)">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            @include('public.checkout.create.form.account_details')
                            @include('public.checkout.create.form.billing_details')
                            @include('public.checkout.create.form.shipping_details')
                        </div>

                        <div class="col-md-6 col-lg-4 mt-2 mt-md-0">
                            @include('public.checkout.create.payment')
                            @include('public.checkout.create.form.order_note')
                        </div>

                        <div class="col-md-12 col-lg-4 mt-2 mt-lg-0">
                            @include('public.checkout.create.order_summary')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </checkout-create>
@endsection

@push('pre-scripts')
    @if (setting('paypal_enabled'))
        <script
            src="https://www.paypal.com/sdk/js?client-id={{ setting('paypal_client_id') }}&currency={{ setting('default_currency') }}&disable-funding=credit,card,venmo,sepa,bancontact,eps,giropay,ideal,mybank,p24,p24"></script>
    @endif

    @if (setting('stripe_enabled'))
        <script src="https://js.stripe.com/v3/"></script>
    @endif

    @if (setting('paytm_enabled'))
        @if (setting('paytm_test_mode'))
            <script
                src="https://securegw-stage.paytm.in/merchantpgpui/checkoutjs/merchants/{{ setting('paytm_merchant_id') }}.js"></script>
        @else
            <script
                src="https://securegw.paytm.in/merchantpgpui/checkoutjs/merchants/{{ setting('paytm_merchant_id') }}.js"></script>
        @endif
    @endif

    @if (setting('razorpay_enabled'))
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    @endif
@endpush
