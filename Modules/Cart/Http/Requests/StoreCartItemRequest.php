<?php

namespace Modules\Cart\Http\Requests;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rule;
use Modules\Option\Entities\Option;
use Modules\Product\Entities\Product;
use Modules\Core\Http\Requests\Request;

class StoreCartItemRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $product = Product::with('options')
            ->select('id', 'manage_stock', 'qty')
            ->findOrFail($this->product_id);

        return array_merge([
            'qty' => ['required', 'numeric', $this->maxQty($product)],
        ], $this->getOptionsRules($product->options));
    }

    /**
     * Get the max qty rule for the given product.
     *
     * @param Product $product
     * @return string|null
     */
    private function maxQty(Product $product): ?string
    {
        if ($product->manage_stock) {
            return "max:{$product->qty}";
        }
        return null;
    }

    /**
     * Get rules for the given options.
     *
     * @param Collection $options
     * @return array
     */
    private function getOptionsRules(Collection $options): array
    {
        return $options->flatMap(function ($option) {
            return ["options.{$option->id}" => $this->getOptionRules($option)];
        })->all();
    }

    /**
     * Get rules for the given option.
     *
     * @param Option $option
     * @return array
     */
    private function getOptionRules(Option $option): array
    {
        $rules = [];

        if ($option->is_required) {
            $rules[] = 'required';
        }

        if (in_array($option->type, ['dropdown', 'radio'])) {
            $rules[] = Rule::in($option->values->map->id->all());
        }

        return $rules;
    }

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    public function validationData(): array
    {
        return array_merge(
            $this->all(),
            [
                'options' => array_filter($this->options ?? []),
            ]
        );
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return array_merge([
            'options.*.required' => trans('cart::validation.this_field_is_required'),
            'options.*.in' => trans('cart::validation.the_selected_option_is_invalid'),
        ], parent::messages());
    }
}
