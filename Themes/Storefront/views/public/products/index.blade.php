@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection

@push('meta')
    <meta name="title" content="{{ $brand->meta->meta_title ?? $brandName ?? env('APP_NAME') }}">
    <meta name="description" content="{{ $brand->meta->meta_description ?? '' }}">
    <meta name="twitter:card" content="summary">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $brand->meta->meta_title ?? $brandName ?? env('APP_NAME')  }}">
    <meta property="og:description" content="{{ $brand->meta->meta_description ?? ''  }}">
    <meta property="og:image" content="{{ $brandLogo ?? $logo }}">
    <meta property="og:locale" content="{{ locale() }}">

    @foreach (supported_locale_keys() as $code)
        <meta property="og:locale:alternate" content="{{ $code }}">
    @endforeach
@endpush

@push('globals')
    <script>
        FleetCart.langs['storefront::products.showing_results'] = '{{ trans("storefront::products.showing_results") }}';
        FleetCart.langs['storefront::products.show_more'] = '{{ trans("storefront::products.show_more") }}';
        FleetCart.langs['storefront::products.show_less'] = '{{ trans("storefront::products.show_less") }}';
    </script>
@endpush

@section('content')
    <product-index
        initial-query="{{ request('query') }}"
        initial-brand-name="{{ $brandName ?? '' }}"
        initial-brand-banner="{{ $brandBanner ?? '' }}"
        initial-brand-logo="{{ $brandLogo ?? '' }}"
        initial-brand-presentation="{{ $brandPresentation ?? '' }}"
        initial-brand-slug="{{ request('brand') }}"
        initial-category-name="{{ $categoryName ?? '' }}"
        initial-category-banner="{{ $categoryBanner ?? '' }}"
        initial-category-slug="{{ request('category') }}"
        initial-tag-name="{{ $tagName ?? '' }}"
        initial-tag-slug="{{ request('tag') }}"
        :initial-attribute="{{ json_encode(request('attribute', [])) }}"
        :max-price="{{ $maxPrice }}"
        initial-sort="{{ request('sort', 'latest') }}"
        :initial-per-page="{{ request('perPage', 30) }}"
        :initial-page="{{ request('page', 1) }}"
        initial-view-mode="{{ request('viewMode', 'grid') }}"
        initial-promotions="{{request('promotions', false)}}"
        inline-template
    >
        <div class="container">
            <div class="row my-5">
                <!--Sidebar-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar"
                     ref="productsearchwrap">
                    <div class="closeFilter d-block d-lg-none">
                        <i class="icon icon an an-times-r"></i>
                    </div>
                    <div class="sidebar_tags">
                        <!--Categories-->
                        <div class="sidebar_widget categories filterBox filter-widget">
                            @if ($categories->isNotEmpty())
                                <div class="widget-title" @click="toggleWidgetTitle($event)">
                                    <h2 class="mb-0">
                                        {{ trans('storefront::products.browse_categories') }}
                                    </h2>
                                </div>
                                <div class="widget-content filterDD">
                                    @include('public.products.index.browse_categories')
                                </div>
                            @endif
                        </div>
                        <!--Categories-->
                        @include('public.products.index.filter')
                        @include('public.products.index.latest_products')

                    </div>
                </div>
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                    <!--Category Slideshow-->
                    <div class="category-banner mt-2 mt-lg-0" v-if="brandBanner" v-cloak>
                        <img :src="brandBanner" alt="Brand banner">
                    </div>

                    <div class="brand-presentation" v-if="brandPresentation">
                        <div class="col-md-3 brand-image px-0">
                            <img :src="brandLogo" alt="Brand logo">
                        </div>
                        <div class="col-md-9 category-description" v-if="brandPresentation" v-html="brandPresentation">
                        </div>
                    </div>

                    <div class="d-none d-lg-block categories-banner" v-else-if="categoryBanner">
                        <img :src="categoryBanner" alt="Category banner">
                    </div>

                    <div class="page-title">
                        <h1 v-if="queryParams.query">
                            {{ trans('storefront::products.search_results_for') }}
                            <span>"@{{ queryParams.query }}"</span>
                        </h1>
                        <h1 v-else-if="queryParams.brand && !brandPresentation"
                            v-text="initialBrandName"></h1>
                        <h1 v-else-if="queryParams.category" v-text="categoryName"></h1>
                        <h1 v-else-if="queryParams.tag" v-text="initialTagName"></h1>
                        <h1 v-else>{{ trans('storefront::products.shop') }}</h1>
                    </div>

                    <!--Toolbar-->
                    <div class="toolbar">
                        <div class="filters-toolbar-wrapper">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li class="product-count d-flex align-items-center">
                                    <button type="button"
                                            class="btn btn-filter an an-slider-3 d-inline-flex d-lg-none me-2 me-sm-3">
                                        <span class="hidden">Filter</span>
                                    </button>
                                </li>
                                <li class="collection-view ms-sm-auto">
                                    <div
                                        class="filters-toolbar__item collection-view-as d-flex align-items-center me-3">
                                        <a href="javascript:void(0)"
                                           class="change-view prd-grid"
                                           :class="{ 'change-view--active' : viewMode === 'grid' }"
                                           title="{{ trans('storefront::products.grid_view') }}"
                                           @click="viewMode = 'grid'"
                                        >
                                            <i class="icon an an-th" aria-hidden="true"></i>
                                            <span class="tooltip-label">Grid View</span>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="change-view prd-list"
                                           :class="{ 'change-view--active' : viewMode === 'list' }"
                                           title="{{ trans('storefront::products.list_view') }}"
                                           @click="viewMode = 'list'"
                                        >
                                            <i class="icon an an-th-list" aria-hidden="true"></i>
                                            <span class="tooltip-label">List View</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="filters-sort ms-auto ms-sm-0">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">
                                            Sort by:
                                        </label>
                                        <select id="SortBy"
                                                class="filters-toolbar__input filters-toolbar__input--sort"
                                                v-model="queryParams.sort"
                                                ref="sortSelect"
                                        >
                                            @foreach (trans('storefront::products.sort_options') as $key => $value)
                                                <option
                                                    value="{{ $key }}"
                                                    {{ request('sort', 'latest') === $key ? 'selected' : '' }}
                                                >
                                                    {{ $value }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </li>
                                <li class="filters-sort ms-3">
                                    <select
                                        class="filters-toolbar__input filters-toolbar__input--sort"
                                        v-model="queryParams.perPage"
                                        ref="perPageSelect"
                                    >
                                        @foreach (trans('storefront::products.per_page_options') as $key => $value)
                                            <option
                                                value="{{ $key }}"
                                                {{ request('perPage', 30) == $key ? 'selected' : '' }}
                                            >
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Toolbar-->

                    <!--Product Grid-->
                    <div class="grid-products grid--view-items prd-grid" v-if="viewMode === 'grid'">
                        <div class="row"
                             :class="{ empty: emptyProducts, loading: fetchingProducts }">
                            <product-card-grid-view v-for="product in products.data" :key="product.id"
                                                    :product="product"></product-card-grid-view>
                            <div class="empty-message" v-if="! fetchingProducts && emptyProducts">
                                @include('public.products.index.empty_results_logo')

                                <h2>{{ trans('storefront::products.no_product_found') }}</h2>
                            </div>

                        </div>
                    </div>
                    <!--Product List-->
                    <div class="grid-products grid--view-items prd-list" v-if="viewMode === 'list'">
                        <div class="row"
                             :class="{ empty: emptyProducts, loading: fetchingProducts }">
                            <product-card-list-view v-for="product in products.data" :key="product.id"
                                                    :product="product"></product-card-list-view>
                            <div class="empty-message" v-if="! fetchingProducts && emptyProducts">
                                @include('public.products.index.empty_results_logo')

                                <h2>{{ trans('storefront::products.no_product_found') }}</h2>
                            </div>
                        </div>
                    </div>

                    <!--Pagination Classic-->
                    <hr class="clear">
                    <div class="pagination" v-if="! emptyProducts">
                        <span class="showing-results" v-text="showingResults"></span>

                        <v-pagination
                            :total-page="totalPage"
                            :current-page="queryParams.page"
                            @page-changed="changePage"
                            v-if="products.total > queryParams.perPage"
                        >
                        </v-pagination>
                    </div>
                    <!--End Pagination Classic-->
                </div>
            </div>
        </div>
    </product-index>
@endsection
