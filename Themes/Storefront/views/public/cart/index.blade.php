@extends('public.layout')

@section('title', trans('storefront::cart.cart'))

@section('content')
    <cart-index inline-template v-cloak :countries="{{ json_encode($countries) }}">
        <!--Main Content-->
        <div class="container">
            <!--Collection Banner-->
            <div class="collection-header mt-5">
                <div class="collection-hero">
                    <div class="collection-hero__image"></div>
                    <div class="collection-hero__title-wrapper container">
                        <h1 class="collection-hero__title">
                            {{ trans('storefront::cart.cart') }}
                        </h1>
                        <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">
                            <a href="{{ route('home') }}"
                               title="Back to the home page">{{ trans('storefront::layout.home') }}</a>
                            <span>|</span> {{ trans('storefront::cart.cart') }}</div>
                    </div>
                </div>
            </div>
            <!--End Collection Banner-->
            <!--Cart Page-->
            <div class="row mt-5" v-if="cartIsNotEmpty">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="alert alert-success py-2 rounded-1 alert-dismissible fade show cart-alert"
                         role="alert"
                         v-if="{{ json_encode(setting('free_shipping_enabled')) }} && cart.subTotal.amount >= {{ setting('free_shipping_min_amount') }}"
                    >
                        <i class="align-middle icon an an-truck me-2"></i>
                        {!! trans('cart::messages.congrats_free_shipping') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="cart style1">
                        @include('public.cart.index.cart_items')
                    </div>
                </div>
            </div>
            <div class="row mt-2 cart-footer-wrap" v-if="cartIsNotEmpty">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 cart-col px-0">
                    <div class="cart-col-wrap">
                        @include('public.cart.index.coupon')
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 cart-col px-0">
                    <div class="cart-col-wrap mx-3 mx-lg-0">
                        <h5>{{ trans('storefront::cart.shipping_method') }}</h5>


                        <div class="form-group" v-if="hasShippingMethod" v-cloak>
                            <div class="form-radio" v-for="shippingMethod in cart.availableShippingMethods">
                                <input
                                    type="radio"
                                    name="shipping_method"
                                    v-model="shippingMethodName"
                                    :value="shippingMethod.name"
                                    :id="shippingMethod.name"
                                    @change="updateShippingMethod(shippingMethod)"
                                >

                                <label :for="shippingMethod.name" v-text="shippingMethod.label"></label>

                                <span
                                    class="price-amount"
                                    v-html="shippingMethod.cost.inCurrentCurrency.formatted"
                                >
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart__footer px-0">
                    <div class="cart-col-wrap">
                        @include('public.cart.index.order_summary')
                    </div>
                </div>
            </div>
            <!--End Cart Page-->
            <!--Cart Empty-->
            <div class="row" v-if="cartIsEmpty" v-cloak>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center pt-5 pb-5">
                    <p>
                        <img src="{{ asset('themes/storefront/public/images/sad-icon.png') }}" alt=""/>
                    </p>
                    <h2 class="mt-4">{{ trans('storefront::cart.your_cart_is_empty') }}</h2>
                    <p class="mb-3 pb-1">{{ trans('storefront::cart.looks_like_you_haven\'t_made_any_choice_yet') }}
                        .</p>
                    <p>
                        <a href="{{ route('home') }}" class="btn btn-outline-primary rounded mb-2 me-2">
                            {{ trans('cart::messages.go_back') }}</a>
                        <a href="{{ route('products.index') }}" class="btn rounded mb-2 text-capitalize">
                            {{ trans('cart::messages.continue_shopping') }}</a>
                    </p>
                </div>
            </div>
            <!--End Cart Empty-->
        </div>


        {{--        <div>--}}
        {{--            <section class="shopping-cart-wrap">--}}
        {{--                <div class="container">--}}
        {{--                    @include('public.cart.index.steps')--}}

        {{--                    <div class="shopping-cart">--}}
        {{--                        <div class="shopping-cart-inner">--}}
        {{--                        </div>--}}

        {{--                    </div>--}}

        {{--                    @include('public.cart.index.empty_cart')--}}
        {{--                </div>--}}
        {{--            </section>--}}

        {{--            <landscape-products--}}
        {{--                title="{{ trans('storefront::product.you_might_also_like') }}"--}}
        {{--                v-if="hasAnyCrossSellProduct"--}}
        {{--                :products="crossSellProducts"--}}
        {{--            >--}}
        {{--            </landscape-products>--}}
        {{--        </div>--}}
    </cart-index>
@endsection
