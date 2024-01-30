<div class="form-group variant-custom-selection">
    <div class="row">
        <div class="col-12">
            <label>
                {!!
                    $option->name .
                    ($option->is_required ? '<span>*</span>' : '')
                !!}
            </label>
        </div>

        <div class="col-12">
            <ul class="list-inline form-custom-radio custom-selection color-selection">
                @foreach ($option->values as $value)
                    <li style="background: {{ $value->label }}; border-radius: 100%"
                        :class="{ active: customRadioTypeOptionValueIsActive({{ $option->id }}, {{ $value->id }}) }"
                        @click="syncCustomRadioTypeOptionValue({{ $option->id }}, {{ $value->id }})"
                    >
                        {!!
                            $value->formattedPriceForProduct($product)
                        !!}
                    </li>
                @endforeach
            </ul>

            <span
                class="error-message"
                v-if="errors.has('{{ "options.{$option->id}" }}')"
                v-text="errors.get('{{ "options.{$option->id}" }}')"
            >
        </div>
    </div>
</div>
