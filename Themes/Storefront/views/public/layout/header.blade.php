<!--Topbar-->
@include('public.layout.top_nav')
<!--End Topbar-->
<!--Header wrap-->
<div class="header-main header-7">
    <!--Header-->
    <header id="header" class="header header-wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <!--Logo / Menu Toggle-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex">
                    <!--Mobile Toggle-->
                    <button type="button"
                            class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none">
                        <i class="bi bi-list"></i>
                    </button>
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
                                     title="{{ setting('store_name') }}" width="100%"/>
                                <span class="logo-txt d-none">{{ setting('store_name') }}</span>
                            @endif
                        </a>
                    </div>
                    <!--End Logo-->
                </div>
                <!--End Logo / Menu Toggle-->
                <div class="col-1 col-sm-1 col-md-1 col-lg-7 d-none d-lg-block"
                     style="z-index: 1">
                    <header-search
                        :categories="{{ $categories }}"
                        :most-searched-keywords="{{ $mostSearchedKeywords }}"
                        initial-query="{{ request('query') }}"
                        initial-category="{{ request('category') }}"
                    >
                    </header-search>
                </div>


                <header-search
                    :responsive="true"
                    :categories="{{ $categories }}"
                    :most-searched-keywords="{{ $mostSearchedKeywords }}"
                    initial-query="{{ request('query') }}"
                    initial-category="{{ request('category') }}"
                >
                </header-search>
                <!--Search Inline-->
                {{--                <div class="col-1 col-sm-1 col-md-1 col-lg-7 d-none d-lg-block">--}}
                {{--                    <form class="form minisearch search-inline w-100 px-5" id="header-search1" action="#" method="get">--}}
                {{--                        <label class="label d-none"><span>Search</span></label>--}}
                {{--                        <div class="control">--}}
                {{--                            <div class="searchField d-flex">--}}
                {{--                                <div class="search-category">--}}
                {{--                                    <select id="rgsearch-category1" name="rgsearch[category]"--}}
                {{--                                            data-default="All Categories" class="rounded-start bg-transparent">--}}
                {{--                                        <option value="00" label="All Categories" selected="selected">All Categories--}}
                {{--                                        </option>--}}
                {{--                                        <optgroup id="rgsearch-shop1" label="Shop">--}}
                {{--                                            <option value="0">- All</option>--}}
                {{--                                            <option value="1">- Men</option>--}}
                {{--                                            <option value="2">- Women</option>--}}
                {{--                                            <option value="3">- Shoes</option>--}}
                {{--                                            <option value="4">- Blouses</option>--}}
                {{--                                            <option value="5">- Pullovers</option>--}}
                {{--                                            <option value="6">- Bags</option>--}}
                {{--                                            <option value="7">- Accessories</option>--}}
                {{--                                        </optgroup>--}}
                {{--                                    </select>--}}
                {{--                                </div>--}}
                {{--                                <div class="input-box d-flex w-100">--}}
                {{--                                    <input type="text" name="q" value="" placeholder="Search products or #"--}}
                {{--                                           class="input-text bg-transparent rounded-0 border-start-0 border-end-0">--}}
                {{--                                    <button type="submit" title="Search"--}}
                {{--                                            class="action search bg-transparent rounded-end">--}}
                {{--                                        <i class="icon bi bi-search"></i>--}}
                {{--                                    </button>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </form>--}}
                {{--                </div>--}}
                <!--End Search Inline-->
                <!--Right Action-->
                <div
                    class="col-6 col-sm-6 col-md-6 col-lg-2 align-self-center icons-col text-right d-flex justify-content-end">
                    <!--Search-->
                    <div class="site-search iconset d-block d-lg-none">
                        <i class="icon bi bi-search"></i>
                    </div>
                    <!--End Search-->
                    <!--Setting Dropdown-->
                    <div class="user-link iconset flex-lg-column">
                        <i class="icon bi bi-person"></i>
                    </div>
                    <div id="userLinks" class="mt-lg-3">
                        <ul class="user-links">
                            @auth
                                <li>
                                    <a href="{{ route('account.dashboard.index') }}">
                                        {{ trans('storefront::layout.account') }}
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}">
                                        {{ trans('storefront::layout.login') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">
                                        {{ trans('user::auth.create_account') }}
                                    </a>
                                </li>
                            @endauth
                            <li>
                                <a href="{{ route('account.wishlist.index') }}">
                                    {{ trans('storefront::layout.wishlist') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('compare.index') }}">
                                    {{ trans('storefront::layout.compare') }}
                                </a>
                            </li>
                            @auth
                                <li class="logout">
                                    <a href="{{ route('logout') }}">
                                        {{ trans('storefront::account.pages.logout') }}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!--End Setting Dropdown-->
                    <!--Wishlist-->
                    <div class="wishlist-link iconset flex-lg-column">
                        <a href="{{ route('account.wishlist.index') }}"><i class="icon bi bi-suit-heart"></i>
                            <span
                                class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle"
                                v-text="wishlistCount"></span></a>
                    </div>
                    <!--End Wishlist-->
                    <!--Compare-->
                    <div class="compare-link iconset flex-lg-column">
                        <a href="{{ route('compare.index') }}">
                            <i class="icon bi bi-arrow-left-right"></i>
                        </a>
                    </div>
                    <!--End Compare-->
                    <!--Minicart Drawer-->
                    <div class="header-cart iconset flex-lg-column">
                        <a href="#" class="site-header__cart btn-minicart d-flex-justify-center flex-lg-column"
                           data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                            <i class="icon bi bi-bag"></i>
                            <span
                                class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle"
                                v-text="cart.quantity"></span>
                        </a>
                    </div>
                    <!--End Minicart Drawer-->

                    @if (is_multilingual())
                        <!--Setting Dropdown-->
                        <div class="setting-link iconset flex-lg-column pe-0">
                            <span class="text-uppercase fw-bold large-title">{{ locale() }}</span>
                            <span class="tooltip-label">{{ trans('storefront::layout.select_language') }}</span>
                        </div>
                        <div id="settingsBox" class="mt-lg-3">
                            <span class="ttl">{{ trans('storefront::layout.select_language') }}</span>
                            <ul id="language" class="cnrLangList">
                                @foreach (supported_locales() as $locale => $language)
                                    <li>
                                        <a href="{{ localized_url($locale, $routeArray[$locale] ?? '') }}"
                                           class="{{ locale() === $locale ? 'active' : '' }}">
                                            {{ $language['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End Setting Dropdown-->
                    @endif
                </div>
            </div>
            <!--End Right Action-->
        </div>
    </header>
    <!--End Header-->

    <!--Main Navigation Desktop-->
    <div class="menu-outer d-none d-lg-block">
        @include('public.layout.navigation')
    </div>
    <!--End Main Navigation Desktop-->

</div>
<!--End Header wrap-->
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu">
        <i class="icon bi bi-x-lg pull-right"></i>
        {{ trans('storefront::layout.close_menu') }}
    </div>
    <ul id="MobileNav" class="mobile-nav">
        @if ($categoryMenu->menus()->isNotEmpty())
            <li class="lvl1 parent megamenu help">
                <a href="{{ route('categories.index') }}">
                    {{ trans('storefront::layout.shop') }}
                    @if ($categoryMenu->menus()->count())
                        <i class="bi bi-plus-lg"></i>
                    @endif
                </a>
                <ul>
                    @foreach ($categoryMenu->menus() as $menu)
                        <li class="{{ $menu->hasSubMenus() ? 'lvl2 parent megamenu' : '' }}">
                            <a href="{{ $menu->url() }}" target="{{ $menu->target() }}">
                                {{ $menu->name() }}
                                @if ($menu->hasSubMenus())
                                    <i class="bi bi-plus-lg"></i>
                                @endif
                            </a>
                            @if ($menu->hasSubmenus())
                                @include('public.layout.sidebar_menu.dropdown', ['subMenus' => $menu->subMenus()])
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
        @endif
        @include('public.layout.sidebar_menu.menu', ['menu' => $primaryMenu])
        <li class="acLink"></li>
        @auth
            <li class="lvl1 bottom-link">
                <a href="{{ route('account.dashboard.index') }}">
                    {{ trans('storefront::layout.my_account') }}
                </a>
            </li>
            <li class="lvl1 bottom-link">
                <a href="{{ route('account.wishlist.index') }}">
                    {{ trans('storefront::layout.wishlist') }}
                </a>
            </li>
            <li class="lvl1 bottom-link">
                <a href="{{ route('compare.index') }}">
                    {{ trans('storefront::layout.compare') }}
                </a>
            </li>
            <li class="lvl1 bottom-link">
                <a href="{{ route('logout') }}">
                    {{ trans('storefront::account.pages.logout') }}
                </a>
            </li>
        @else
            <li class="lvl1 bottom-link">
                <a href="{{ route('compare.index') }}">
                    {{ trans('storefront::layout.compare') }}
                </a>
            </li>
            <li class="lvl1 bottom-link">
                <a href="{{ route('login') }}">
                    {{ trans('storefront::layout.login') }}
                </a>
            </li>
            <li class="lvl1 bottom-link">
                <a href="{{ route('register') }}">
                    {{ trans('user::auth.create_account') }}
                </a>
            </li>
        @endauth
        <li class="help bottom-link">
            <b>{{ trans('storefront::layout.need_help') }}</b><br>Call: {{ format_phone_number(setting('store_phone')) }}
        </li>
    </ul>
</div>
