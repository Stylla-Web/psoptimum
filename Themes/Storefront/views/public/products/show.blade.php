@extends('public.layout')

@section('title', $product->meta->meta_title ?: $product->name)

@push('meta')
    <meta name="title" content="{{ $product->meta->meta_title ?: $product->name }}">
    <meta name="description" content="{{ $product->meta->meta_description ?: $product->short_description }}">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $product->meta->meta_title ?: $product->name }}">
    <meta property="og:description" content="{{ $product->meta->meta_description ?: $product->short_description }}">
    <meta property="og:image" content="{{ $product->base_image->path }}">
    <meta property="og:locale" content="{{ locale() }}">

    @foreach (supported_locale_keys() as $code)
        <meta property="og:locale:alternate" content="{{ $code }}">
    @endforeach

    <meta property="product:price:amount" content="{{ $product->selling_price->convertToCurrentCurrency()->amount() }}">
    <meta property="product:price:currency" content="{{ currency() }}">
@endpush

@push('globals')
    <script>
        FleetCart.langs['storefront::product.reviews'] = '{{ trans("storefront::product.reviews") }}';
        FleetCart.langs['storefront::product.related_products'] = '{{ trans("storefront::product.related_products") }}';
    </script>

    {!! $productSchemaMarkup->toScript() !!}
@endpush

@section('breadcrumb')
    <li><a href="{{ route('products.index') }}">{{ trans('storefront::products.shop') }}</a></li>

    {!! $categoryBreadcrumb !!}

    <li class="active">{{ $product->name }}</li>
@endsection

@section('content')
    <product-show
        :product="{{ $product }}"
        :review-count="{{ $review->count ?? 0 }}"
        :avg-rating="{{ $review->avg_rating ?? 0 }}"
        inline-template
    >
        <section class="product-details-wrap">
            <div class="container pb-5">
                <!--Product Content-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-sticky-style">
                                <div class="product-details-img product-horizontal-style clearfix mb-3 mb-md-0">
                                    @include('public.products.show.images')
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- Product Info -->
                            <div class="product-single__meta">
                                <h1 class="product-single__title">{{ $product->name }}</h1>

                                @if (setting('reviews_enabled'))
                                    <!-- Product Reviews -->
                                    <div class="product-review mb-2">
                                        <product-rating :rating-percent="ratingPercent"
                                                        :review-count="totalReviews"></product-rating>
                                    </div>
                                @endif
                                <!-- End Product Reviews -->
                                <p class="mb-2">
                                    {{ $product->short_description }}
                                </p>
                                <!-- Product Info -->
                                <div class="product-info">
                                    @if ($product->categories->isNotEmpty())
                                        <p class="product-type">
                                            {{ trans('storefront::product.categories') }}
                                            @foreach ($product->categories as $category)
                                                <span><a
                                                        href="{{ $category->url() }}">{{ $category->name }}</a></span>{{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </p>
                                    @endif

                                    @if ($product->brand->is_active)
                                        <p class="product-type">{{ trans('storefront::product.brand') }} <span>
                                            <a href="{{ $product->brand->url() }}" class="brand-image">
                                                {{ $product->brand->name }}
                                            </a></span>
                                        </p>
                                    @endif

                                    @if ($product->tags->isNotEmpty())
                                        <p class="product-type">
                                            {{ trans('storefront::product.tags') }}
                                            @foreach ($product->tags as $tag)
                                                <span><a
                                                        href="{{ $tag->url() }}">{{ $tag->name }}</a></span>{{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </p>
                                    @endif

                                    @unless (is_null($product->sku))
                                        <p class="product-sku">{{ trans('storefront::product.sku') }} <span
                                                class="variant-sku">{{ $product->sku }}</span></p>
                                    @endunless
                                </div>
                                <!-- End Product Info -->
                                <!-- Product Price -->
                                <div class="product-price my-4" v-html="price">
                                    {!! $product->formatted_price !!}
                                </div>
                                <!-- End Product Price -->
                                <!-- Countdown -->
                                {{--                                <div class="countdown-text style2 d-flex-wrap mb-3 pb-1 d-none">--}}
                                {{--                                    <label class="mb-2 mb-lg-0 border-0">Hurry up! Sales End In </label>--}}
                                {{--                                    <div class="prcountdown d-flex" data-countdown="2028/10/01"></div>--}}
                                {{--                                </div>--}}
                                <!-- End Countdown -->
                            </div>
                            <!-- End Product Info -->
                            <!-- Product Form -->
                            <form
                                @submit.prevent="addToCart"
                                @input="errors.clear($event.target.name)"
                                @change="updatePrice"
                                @nice-select-updated="updatePrice"
                                class="product-form hidedropdown">
                                <!-- Swatches Color/Size -->
                                <div class="row g-2 variable-select pb-2 w-100">
                                    @foreach ($product->options as $option)
                                        <!-- Swatches Color -->
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                            @includeIf("public.products.show.custom_options.{$option->type}")
                                        </div>
                                        <!-- End Swatch Color -->
                                    @endforeach
                                </div>
                                <!-- End Swatches Color/Size -->
                                <!-- Product Action -->
                                <div class="product-action w-100 clearfix">
                                    <div class="product-form__item--quantity d-flex-center mb-3">
                                        <div class="qtyField input-group-quantity">
                                            <button type="button" class="qtyBtn btn-number minus btn-minus"
                                                    data-type="minus" disabled>
                                                <i class="icon an an-minus-r" aria-hidden="true"></i>
                                            </button>
                                            <input
                                                type="text"
                                                :value="cartItemForm.qty"
                                                min="1"
                                                max="{{ $product->manage_stock ? $product->qty : '' }}"
                                                id="qty"
                                                class="product-form__input input-number input-quantity"
                                                @input="updateQuantity($event.target.value)"
                                                @keydown.up="updateQuantity(cartItemForm.qty + 1)"
                                                @keydown.down="updateQuantity(cartItemForm.qty - 1)"
                                            >
                                            <button type="button" class="qtyBtn btn-number plus btn-plus"
                                                    data-type="plus">
                                                <i class="icon an an-plus-r" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="pro-stockLbl ms-3">
                                            @if ($product->isInStock())
                                                @if ($product->manage_stock && $product->qty < 15)
                                                    <span class="d-flex-center stockLbl lowstock">
                                                        <i class="icon an an-exclamation-cir"></i>
                                                        {!! trans('storefront::product.left_in_stock', ['count' => $product->qty]) !!}
                                                    </span>
                                                @else
                                                    <span class="d-flex-center stockLbl instock">
                                                        <i class="icon an an-check-cil"></i>
                                                        <span>
                                                            {{ trans('storefront::product.in_stock') }}
                                                        </span>
                                                    </span>
                                                @endif
                                            @else
                                                <span class="d-flex-center stockLbl outstock">
                                                    <i class="icon an an-times-cil"></i>
                                                    <span>
                                                        {{ trans('storefront::product.out_of_stock') }}
                                                    </span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-form__item--submit">
                                        @if($product->isOutOfStock())
                                            <button class="btn rounded product-form__cart-submit out-of-stock-btn"
                                                    disabled="disabled">
                                                {{ trans('storefront::product.out_of_stock') }}
                                            </button>
                                        @else
                                            <button type="submit" name="add"
                                                    class="btn rounded btn-outline-primary product-form__cart-submit"
                                                    :class="{'btn-loading': addingToCart }"
                                            >
                                                <span>{{ trans('storefront::product.add_to_cart') }}</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                                <!-- End Product Action -->
                                <!-- Product Info link -->
                                <p class="infolinks mt-2 mb-3">
                                    <button class="btn add-to-wishlist" :class="{ 'added': inWishlist }" @click="syncWishlist">
                                        <i class="icon la-heart me-1" :class="inWishlist ? 'las' : 'lar'" aria-hidden="true"></i> <span>Add to Wishlist</span>
                                    </button>
                                    <button class="btn add-to-wishlist" :class="{ 'added': inCompareList }" @click="syncCompareList">
                                        <i class="icon an an-sync-ar me-1" aria-hidden="true"></i>
                                        <span>{{ trans('storefront::product.compare') }}</span>
                                    </button>
                                    <a class="btn emaillink me-0" href="{{ route('contact.create') }}" target="_blank">
                                        <i class="icon an an-question-cil me-1"></i>
                                        {{ trans('storefront::product.ask_a_question') }}
                                    </a>
                                </p>
                                <!-- End Product Info link -->
                            </form>
                            <!-- End Product Form -->
                            <!-- Social Sharing -->
                            <div class="social-sharing d-flex-center mb-3">
                                <span class="sharing-lbl me-2">Share :</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" title="{{ trans('storefront::product.facebook') }}" target="_blank" class="d-flex-center btn btn-link btn--share share-facebook"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i
                                        class="icon an an-facebook mx-1"></i><span
                                        class="share-title d-none">Facebook</span></a>
                                <a href="https://twitter.com/share?url={{ url()->current() }}&text={{ $product->name }}" title="{{ trans('storefront::product.twitter') }}" target="_blank" class="d-flex-center btn btn-link btn--share share-twitter"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i
                                        class="icon an an-twitter mx-1"></i><span
                                        class="share-title d-none">Tweet</span></a>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" title="{{ trans('storefront::product.linkedin') }}" target="_blank" class="d-flex-center btn btn-link btn--share share-linkedin"
                                   data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Linkedin"><i
                                        class="icon an an-linkedin mx-1"></i><span
                                        class="share-title d-none">Linkedin</span></a>
                            </div>
                            <!-- End Social Sharing -->

                            <!--Product Accordian-->
                            <div class="accordion tab-accordian-style mt-4" id="productAccordian">
                                <div class="accordion-item border-0 bg-transparent mb-2">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            {{ trans('storefront::product.description') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#productAccordian">
                                        <div class="accordion-body product-description">
                                            {!! nl2br_save_html($product->description) !!}
                                        </div>
                                    </div>
                                </div>

                                @if ($product->hasDownloadsAttribute())
                                <div class="accordion-item border-0 bg-transparent mb-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            {{ trans('product::products.tabs.downloads') }}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#productAccordian">
                                        <div class="accordion-body pb-3 size-chart">
                                            <p class="text-center">
                                                {{ trans('storefront::product.here_you_will_find_full_user_manual') }}
                                            </p>

                                            @include('public.products.show.tab_download')
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if (setting('reviews_enabled'))
                                <div class="accordion-item border-0 bg-transparent mb-2">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                            @{{ $trans('storefront::product.reviews', { count: totalReviews }) }}
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                         aria-labelledby="headingFour" data-bs-parent="#productAccordian">
                                        <div class="accordion-body" id="reviews">
                                            <div class="row">
                                                @include('public.products.show.tab_reviews')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if ($product->hasAnyAttribute())
                                <div class="accordion-item border-0 bg-transparent mb-2">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                            {{ trans('storefront::product.specification') }}
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                         aria-labelledby="headingFive" data-bs-parent="#productAccordian">
                                        <div class="accordion-body" id="specification-tabs">
                                            @include('public.products.show.tab_specification')
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <!--End Product Accordian-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <related-products :products="{{ $relatedProducts }}"></related-products>
                {{--                @include('public.products.show.left_sidebar')--}}
                {{--                @include('public.products.show.right_sidebar')--}}
            </div>
            @if (setting('storefront_features_section_enabled'))
                <home-features :features="{{ json_encode($features) }}"></home-features>
            @endif
        </section>
    </product-show>
@endsection

@push('scripts')
    <script src="{{ v(Theme::url('public/js/flatpickr.js')) }}"></script>
@endpush
