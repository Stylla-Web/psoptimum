<!--Price Filter-->
<div class="sidebar_widget filterBox filter-widget filter-price">
    <div class="widget-title" @click="toggleWidgetTitle($event)">
        <h2 class="mb-0">{{ trans('storefront::products.price') }}</h2>
    </div>
    <form @submit.prevent="fetchProducts" class="price-filter filterDD px-2 m-0">
        <div ref="priceRange" class="my-4" @change="fetchProducts"></div>
        <div class="row price-input">
            <div class="col-5 form-group">
                <input
                    type="number"
                    id="price-from"
                    class="no-margin price-from"
                    :value="queryParams.fromPrice"
                    @change="updatePriceRange($event.target.value, null)"
                    ref="fromPrice"
                >
            </div>
            <div class="col-5 form-group">
                <input
                    type="number"
                    id="price-to"
                    class="no-margin price-to"
                    :value="queryParams.toPrice"
                    @change="updatePriceRange(null, $event.target.value)"
                    ref="toPrice"
                >
            </div>
        </div>
    </form>
</div>
<!--End Price Filter-->


<!--Size Swatches-->
<div class="sidebar_widget filterBox filter-widget" v-for="attribute in attributeFilters" :key="attribute.id" v-cloak>
    <div class="widget-title" @click="toggleWidgetTitle($event)">
        <h2 class="mb-0" v-text="attribute.name"></h2>
    </div>
    <div class="filterDD">
        <ul class="clearfix">
            <li v-for="value in attribute.values" :key="value.id">
                <input
                    type="checkbox"
                    :name="attribute.slug"
                    :id="'attribute-' + value.id"
                    :checked="isFilteredByAttribute(attribute.slug, value.value)"
                    @click="toggleAttributeFilter(attribute.slug, value.value)"
                >

                <label :for="'attribute-' + value.id" v-html="'<span></span>' + value.value"></label>
            </li>
        </ul>
    </div>
</div>
<!--End Size Swatches-->
