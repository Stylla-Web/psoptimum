<sidebar-cart inline-template>
    <!--MiniCart Drawer-->
    <aside class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <div class="minicart-header">
                        <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal" aria-label="Close">
                            <i class="an an-times-r" aria-hidden="true" data-bs-toggle="tooltip"
                               data-bs-placement="left" title="Close"></i>
                        </a>
                        <h4 class="fs-6">
                            {{ trans('storefront::layout.shopping_cart') }} (<span v-text="cart.quantity">2</span>
                            articles)
                        </h4>
                    </div>
                    <div class="minicart-content">
                        <ul class="clearfix" :class="{ 'custom-scrollbar': cartIsNotEmpty, empty: cartIsEmpty }">
                            <sidebar-cart-item
                                v-for="cartItem in cart.items"
                                :key="cartItem.id"
                                :cart-item="cartItem"
                            >
                            </sidebar-cart-item>
                        </ul>
                        <div class="empty-message" v-if="cartIsEmpty">
                            @include('public.layout.sidebar_cart.empty_logo')

                            <h4>{{ trans('storefront::cart.your_cart_is_empty') }}</h4>
                        </div>
                    </div>
                    <div class="minicart-bottom" v-if="cartIsNotEmpty">
                        @if (setting('storefront_cross_sell_sidebar_cart_enabled'))
                            <transition name="fade">
                                <landscape-products
                                    title="{{ trans('storefront::product.you_might_also_like') }}"
                                    :slides="2"
                                    v-if="hasAnyCrossSellProduct && cartIsNotEmpty"
                                    :products="crossSellProducts"
                                >
                                </landscape-products>
                            </transition>
                        @endif
                        <div class="shipinfo text-center mb-3 text-uppercase"
                             v-if="{{ json_encode(setting('free_shipping_enabled')) }}">
                            <p class="freeShipMsg">
                                <i class="an an-truck fs-5 me-2 align-middle"></i>
                                {!! trans('storefront::layout.spent_for_free_shipping', ['amount' => \Modules\Support\Money::inCurrentCurrency(setting('free_shipping_min_amount'))->format()]) !!}
                            </p>
                        </div>
                        <div class="subtotal">
                            <span>{{ trans('storefront::layout.subtotal') }}</span>
                            <span class="product-price" v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                        </div>

                        <a href="{{ route('checkout.create') }}"
                           class="w-100 p-2 my-2 btn btn-outline-primary proceed-to-checkout rounded">
                            {{ trans('storefront::layout.checkout') }}
                        </a>
                        <a href="{{ route('cart.index') }}" class="w-100 btn btn-primary cart-btn rounded">
                            {{ trans('storefront::layout.view_cart') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--End MiniCart Drawer-->
</sidebar-cart>
