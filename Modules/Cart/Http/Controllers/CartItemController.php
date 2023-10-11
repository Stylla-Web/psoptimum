<?php

namespace Modules\Cart\Http\Controllers;

use Modules\Cart\Facades\Cart;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Routing\Controller;
use Modules\Cart\Http\Middleware\CheckProductIsInStock;
use Modules\Cart\Http\Requests\StoreCartItemRequest;
use Modules\Coupon\Exceptions\MaximumSpendException;
use Modules\Coupon\Exceptions\MinimumSpendException;
use Modules\Coupon\Exceptions\InapplicableCouponException;
use Modules\Coupon\Checkers\MaximumSpend;
use Modules\Coupon\Checkers\MinimumSpend;
use Modules\Coupon\Checkers\ExcludedBrands;
use Modules\Coupon\Checkers\ApplicableCategories;
use Modules\Coupon\Checkers\ApplicableProducts;
use Modules\Coupon\Checkers\ApplicableBrands;
use Modules\Coupon\Checkers\ExcludedCategories;
use Modules\Coupon\Checkers\ExcludedProducts;

class CartItemController extends Controller
{
    private array $checkers = [
        MinimumSpend::class,
        MaximumSpend::class,
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(CheckProductIsInStock::class)->only(['store', 'update']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Modules\Cart\Http\Requests\StoreCartItemRequest $request
     * @return \Modules\Cart\Cart
     */
    public function store(StoreCartItemRequest $request): \Modules\Cart\Cart
    {
        Cart::store($request->product_id, $request->qty, $request->options ?? []);

        if (Cart::hasCoupon()) {
            try {
                resolve(Pipeline::class)
                    ->send(Cart::coupon()->entity())
                    ->through([
                        MaximumSpend::class,
                        ExcludedProducts::class,
                        ExcludedCategories::class,
                        ExcludedBrands::class
                    ])
                    ->thenReturn();
            } catch (MinimumSpendException|MaximumSpendException|InapplicableCouponException $e) {
                Cart::removeCoupon();
            }
        }

        return Cart::instance();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param mixed $cartItemId
     * @return \Modules\Cart\Cart
     */
    public function update($cartItemId): \Modules\Cart\Cart
    {
        Cart::updateQuantity($cartItemId, request('qty'));

        try {
            resolve(Pipeline::class)
                ->send(Cart::coupon())
                ->through($this->checkers)
                ->thenReturn();
        } catch (MinimumSpendException|MaximumSpendException $e) {
            Cart::removeCoupon();
        }

        return Cart::instance();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $cartItemId
     * @return \Modules\Cart\Cart
     */
    public function destroy(string $cartItemId): \Modules\Cart\Cart
    {
        Cart::remove($cartItemId);

        if (Cart::items()->isEmpty()) {
            Cart::removeCoupon();
        }

        if (Cart::hasCoupon()) {
            try {
                resolve(Pipeline::class)
                    ->send(Cart::coupon()->entity())
                    ->through([
                        MinimumSpend::class,
                        ApplicableProducts::class,
                        ApplicableCategories::class,
                        ApplicableBrands::class,
                    ])
                    ->thenReturn();
            } catch (MinimumSpendException|InapplicableCouponException $e) {
                Cart::removeCoupon();
            }
        }

        return Cart::instance();
    }
}
