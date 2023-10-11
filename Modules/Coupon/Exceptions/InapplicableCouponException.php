<?php

namespace Modules\Coupon\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class InapplicableCouponException extends Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return response()->json([
            'message' => trans('coupon::messages.inapplicable'),
        ], 403);
    }
}
