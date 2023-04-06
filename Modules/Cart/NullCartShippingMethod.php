<?php

namespace Modules\Cart;

use Modules\Support\Money;

class NullCartShippingMethod
{
    public function name()
    {
        //
    }

    public function title()
    {
        //
    }

    public function label()
    {

    }

    public function shipment_rate_id()
    {

    }

    public function cost()
    {
        return Money::inDefaultCurrency(0);
    }
}
