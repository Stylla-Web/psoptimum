<?php

use Modules\FlashSale\Entities\FlashSale;

if (! function_exists('product_price_formatted')) {
    /**
     * Get the selling price of the given product.
     *
     * @param \Modules\Product\Entities\Product $product
     * @param \Closure $callback
     * @return string
     */
    function product_price_formatted($product, $callback = null)
    {
        if (FlashSale::contains($product)) {
            $previousPrice = $product->getSellingPrice()->convertToCurrentCurrency()->format();
            $flashSalePrice = FlashSale::pivot($product)->price->convertToCurrentCurrency()->format();

            if (is_callable($callback)) {
                return $callback($flashSalePrice, $previousPrice);
            }

            return "{$flashSalePrice} {$product->getUnit()} <span class='previous-price'>{$previousPrice}</span>";
        }

        $price = $product->price->convertToCurrentCurrency()->format();
        $specialPrice = $product->getSpecialPrice()->convertToCurrentCurrency()->format();

        if (is_callable($callback)) {
            return $callback($price, $specialPrice);
        }

        if (! $product->hasSpecialPrice()) {
            return "<span class='regular-price'>{$price} {$product->getUnit()}</span>";
        }

        return "<span>{$specialPrice} {$product->getUnit()}</span><span class='previous-price'>{$price}</span>";
    }
}
