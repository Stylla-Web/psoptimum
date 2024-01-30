<div class="size-chart">
    @foreach ($product->attributeSets as $attributeSet => $attributes)
        <div class="table-responsive px-1">
            <table class="table table-product-spec table-bordered align-middle">
                <thead>
                <tr>
                    <th colspan="2">{{ $attributeSet }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($attributes as $attribute)
                    <tr>
                        <td><label>{{ $attribute->name }}</label></td>
                        <td><span>{{ $attribute->values->implode('value', ', ') }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>
