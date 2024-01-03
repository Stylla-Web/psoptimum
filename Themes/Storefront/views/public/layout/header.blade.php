<!--Header wrap-->
<div class="header-main header-7">
    <!--Topbar-->
    @include('public.layout.top_nav')
    <!--End Topbar-->
    <!--Header-->
    <header id="header" class="header header-wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <!--Logo / Menu Toggle-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex">
                    <!--Mobile Toggle-->
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                    <!--End Mobile Toggle-->
                    <!--Logo-->
                    <div class="logo d-flex-center">
                        <a href="{{ route("home") }}">
                            @if (is_null($logo))
                                <span class="logo-txt d-none">{{ setting('store_name') }}</span>
                            @else
                                <img class="logo-img mh-100"
                                     src="{{ $logo }}"
                                     alt="{{ setting('store_name') }}"
                                     title="{{ setting('store_name') }}" width="100%" />
                                <span class="logo-txt d-none">Optimal</span>
                            @endif
                        </a>
                    </div>
                    <!--End Logo-->
                </div>
                <!--End Logo / Menu Toggle-->
                <!--Search Inline-->
                <div class="col-1 col-sm-1 col-md-1 col-lg-7 d-none d-lg-block">
                    <form class="form minisearch search-inline w-100 px-5" id="header-search1" action="#" method="get">
                        <label class="label d-none"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField d-flex">
                                <div class="search-category">
                                    <select id="rgsearch-category1" name="rgsearch[category]" data-default="All Categories" class="rounded-start bg-transparent">
                                        <option value="00" label="All Categories" selected="selected">All Categories</option>
                                        <optgroup id="rgsearch-shop1" label="Shop">
                                            <option value="0">- All</option>
                                            <option value="1">- Men</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Shoes</option>
                                            <option value="4">- Blouses</option>
                                            <option value="5">- Pullovers</option>
                                            <option value="6">- Bags</option>
                                            <option value="7">- Accessories</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="input-box d-flex w-100">
                                    <input type="text" name="q" value="" placeholder="Search products or #" class="input-text bg-transparent rounded-0 border-start-0 border-end-0">
                                    <button type="submit" title="Search" class="action search bg-transparent rounded-end"><i class="icon an an-search-l"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Search Inline-->
                <!--Right Action-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center icons-col text-right d-flex justify-content-end">
                    <!--Search-->
                    <div class="site-search iconset d-block d-lg-none">
                        <i class="icon an an-search-l"></i><span class="tooltip-label">Search</span>
                    </div>
                    <!--End Search-->
                    <!--Setting Dropdown-->
                    <div class="user-link iconset flex-lg-column">
                        <i class="icon an an-user-expand"></i>
                    </div>
                    <div id="userLinks" class="mt-lg-3">
                        <ul class="user-links">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Sign Up</a></li>
                            <li><a href="my-wishlist.html">Wishlist</a></li>
                            <li><a href="compare-style1.html">Compare</a></li>
                        </ul>
                    </div>
                    <!--End Setting Dropdown-->
                    <!--Wishlist-->
                    <div class="wishlist-link iconset flex-lg-column">
                        <i class="icon an an-heart-l"></i>
                        <span class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle">0</span>
                        <span class="tooltip-label">Wishlist</span>
                    </div>
                    <!--End Wishlist-->
                    <!--Minicart Drawer-->
                    <div class="header-cart iconset flex-lg-column">
                        <a href="#" class="site-header__cart btn-minicart d-flex-justify-center flex-lg-column" data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                            <i class="icon an an-sq-bag"></i>
                            <span class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle">2</span>
                            <span class="tooltip-label">Cart</span>
                        </a>
                    </div>
                    <!--End Minicart Drawer-->
                    <!--Setting Dropdown-->
                    <div class="setting-link iconset flex-lg-column pe-0"><i class="icon an an-globe"></i><span class="tooltip-label">Settings</span></div>
                    <div id="settingsBox" class="mt-lg-3">
                        <div class="currency-picker">
                            <span class="ttl">Select Currency</span>
                            <ul id="currencies" class="cnrLangList">
                                <li class="selected"><a href="#;" class="active">INR</a></li><li><a href="#;">GBP</a></li><li><a href="#;">CAD</a></li><li><a href="#;">USD</a></li><li><a href="#;">AUD</a></li><li><a href="#;">EUR</a></li><li><a href="#;">JPY</a></li>
                            </ul>
                        </div>
                        <div class="language-picker">
                            <span class="ttl">SELECT LANGUAGE</span>
                            <ul id="language" class="cnrLangList">
                                <li><a href="#" class="active">English</a></li><li><a href="#">French</a></li><li><a href="#">German</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Setting Dropdown-->
                </div>
                <!--End Right Action-->
            </div>
        </div>
        <!--Search Popup-->
        <div id="search-popup" class="search-drawer">
            <div class="container">
                <span class="closeSearch an an-times-l"></span>
                <form class="form minisearch" id="header-search" action="#" method="get">
                    <label class="label"><span>Search</span></label>
                    <div class="control">
                        <div class="searchField">
                            <div class="search-category">
                                <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                    <option value="00" label="All Categories" selected="selected">All Categories</option>
                                    <optgroup id="rgsearch-shop" label="Shop">
                                        <option value="0">- All</option>
                                        <option value="1">- Men</option>
                                        <option value="2">- Women</option>
                                        <option value="3">- Shoes</option>
                                        <option value="4">- Blouses</option>
                                        <option value="5">- Pullovers</option>
                                        <option value="6">- Bags</option>
                                        <option value="7">- Accessories</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="input-box">
                                <button type="submit" title="Search" class="action search rounded-0"><i class="icon an an-search-l"></i></button>
                                <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text rounded-0">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--End Search Popup-->
    </header>
    <!--End Header-->

    <!--Main Navigation Desktop-->
    <div class="menu-outer d-none d-lg-block">
        @include('public.layout.navigation')
    </div>
    <!--End Main Navigation Desktop-->

</div>
<!--End Header wrap-->

{{--<header class="header-wrap">--}}
{{--    <div class="header-wrap-inner">--}}
{{--        <div class="container">--}}
{{--            <div class="row flex-nowrap justify-content-between position-relative">--}}
{{--                <div class="header-column-left">--}}
{{--                    <div class="sidebar-menu-icon-wrap">--}}
{{--                        <div class="sidebar-menu-icon">--}}
{{--                            <span></span>--}}
{{--                            <span></span>--}}
{{--                            <span></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <a href="{{ route('home') }}" class="header-logo">--}}
{{--                        @if (is_null($logo))--}}
{{--                            <h3>{{ setting('store_name') }}</h3>--}}
{{--                        @else--}}
{{--                            <img src="{{ $logo }}" alt="logo">--}}
{{--                        @endif--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <header-search--}}
{{--                    :categories="{{ $categories }}"--}}
{{--                    :most-searched-keywords="{{ $mostSearchedKeywords }}"--}}
{{--                    initial-query="{{ request('query') }}"--}}
{{--                    initial-category="{{ request('category') }}"--}}
{{--                >--}}
{{--                </header-search>--}}

{{--                <div class="header-column-right d-flex">--}}
{{--                    <a href="{{ route('account.wishlist.index') }}" class="header-wishlist">--}}
{{--                        <div class="icon-wrap">--}}
{{--                            <i class="lar la-heart"></i>--}}
{{--                            <div class="count" v-text="wishlistCount"></div>--}}
{{--                        </div>--}}

{{--                        <span>{{ trans('storefront::layout.favorites') }}</span>--}}
{{--                    </a>--}}

{{--                    <div class="header-cart">--}}
{{--                        <div class="icon-wrap">--}}
{{--                            <i class="las la-cart-arrow-down"></i>--}}
{{--                            <div class="count" v-text="cart.quantity"></div>--}}
{{--                        </div>--}}

{{--                        <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
