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
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none">
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
                <!--Search Inline-->
                <div class="col-1 col-sm-1 col-md-1 col-lg-7 d-none d-lg-block">
                    <form class="form minisearch search-inline w-100 px-5" id="header-search1" action="#" method="get">
                        <label class="label d-none"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField d-flex">
                                <div class="search-category">
                                    <select id="rgsearch-category1" name="rgsearch[category]"
                                            data-default="All Categories" class="rounded-start bg-transparent">
                                        <option value="00" label="All Categories" selected="selected">All Categories
                                        </option>
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
                                    <input type="text" name="q" value="" placeholder="Search products or #"
                                           class="input-text bg-transparent rounded-0 border-start-0 border-end-0">
                                    <button type="submit" title="Search"
                                            class="action search bg-transparent rounded-end">
                                        <i class="icon bi bi-search"></i>
                                    </button>
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
                        <i class="icon bi bi-search"></i>
                    </div>
                    <!--End Search-->
                    <!--Setting Dropdown-->
                    <div class="user-link iconset flex-lg-column">
                        <i class="icon bi bi-person"></i>
                    </div>
                    <div id="userLinks" class="mt-lg-3">
                        <ul class="user-links">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="{{ route('account.wishlist.index') }}">Wishlist</a></li>
                            <li><a href="{{ route('compare.index') }}">Compare</a></li>
                        </ul>
                    </div>
                    <!--End Setting Dropdown-->
                    <!--Wishlist-->
                    <div class="wishlist-link iconset flex-lg-column">
                        <i class="icon bi bi-suit-heart"></i>
                        <span
                            class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle">0</span>
                    </div>
                    <!--End Wishlist-->
                    <!--Minicart Drawer-->
                    <div class="header-cart iconset flex-lg-column">
                        <a href="#" class="site-header__cart btn-minicart d-flex-justify-center flex-lg-column"
                           data-bs-toggle="modal" data-bs-target="#minicart-drawer">
                            <i class="icon bi bi-bag"></i>
                            <span
                                class="site-cart-count counter d-flex-center justify-content-center position-absolute rounded-circle">2</span>
                        </a>
                    </div>
                    <!--End Minicart Drawer-->
                    <!--Setting Dropdown-->
                    <div class="setting-link iconset flex-lg-column pe-0">
                        <i class="icon bi-globe2"></i>
                    </div>
                    <div id="settingsBox" class="mt-lg-3">
                        <span class="ttl">SELECT LANGUAGE</span>
                        <ul id="language" class="cnrLangList">
                            <li>
                                <a href="#" class="active">
                                    English
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    French
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    German
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End Setting Dropdown-->
            </div>
            <!--End Right Action-->
        </div>
        <!--Search Popup-->
        <div id="search-popup" class="search-drawer">
            <div class="container">
                <span class="closeSearch bi bi-x-lg"></span>
                <form class="form minisearch" id="header-search" action="#" method="get">
                    <label class="label"><span>Search</span></label>
                    <div class="control">
                        <div class="searchField">
                            <div class="search-category">
                                <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                    <option value="00" label="All Categories" selected="selected">All Categories
                                    </option>
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
                                <button type="submit" title="Search" class="action search rounded-0"><i
                                        class="icon bi bi-search"></i></button>
                                <input type="text" name="q" value="" placeholder="Search by keyword or #"
                                       class="input-text rounded-0">
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
<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon bi bi-x-lg pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="index.html" class="site-nav">Home 01 - Default</a></li>
                        <li class="lvl-2"><a href="index-demo2.html" class="site-nav">Home 02 - Minimal</a></li>
                        <li class="lvl-2"><a href="index-demo3.html" class="site-nav">Home 03 - Colorful</a></li>
                        <li class="lvl-2"><a href="index-demo4.html" class="site-nav">Home 04 - Modern</a></li>
                        <li class="lvl-2"><a href="index-demo5.html" class="site-nav">Home 05 - Kids Clothing</a></li>
                        <li class="lvl-2"><a href="index-demo6.html" class="site-nav">Home 06 - Single Product</a></li>
                        <li class="lvl-2"><a href="index-demo7.html" class="site-nav">Home 07 - Glamour</a></li>
                        <li class="lvl-2"><a href="index-demo8.html" class="site-nav">Home 08 - Simple</a></li>
                        <li class="lvl-2"><a href="index-demo9.html" class="site-nav">Home 09 - Cool <span class="lbl nm_label1">Hot</span></a></li>
                        <li class="lvl-2"><a href="index-demo10.html" class="site-nav last">Home 10 - Cosmetic</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="index-demo11.html" class="site-nav">Home 11 - Pets <span class="lbl nm_label3">Popular</span></a></li>
                        <li class="lvl-2"><a href="index-demo12.html" class="site-nav">Home 12 - Tools & Parts</a></li>
                        <li class="lvl-2"><a href="index-demo13.html" class="site-nav">Home 13 - Watches <span class="lbl nm_label1">Hot</span></a></li>
                        <li class="lvl-2"><a href="index-demo14.html" class="site-nav">Home 14 - Food</a></li>
                        <li class="lvl-2"><a href="index-demo15.html" class="site-nav">Home 15 - Christmas</a></li>
                        <li class="lvl-2"><a href="index-demo16.html" class="site-nav">Home 16 - Phone Case</a></li>
                        <li class="lvl-2"><a href="index-demo17.html" class="site-nav">Home 17 - Jewelry</a></li>
                        <li class="lvl-2"><a href="index-demo18.html" class="site-nav">Home 18 - Bag <span class="lbl nm_label3">Popular</span></a></li>
                        <li class="lvl-2"><a href="index-demo19.html" class="site-nav">Home 19 - Swimwear</a></li>
                        <li class="lvl-2"><a href="index-demo20.html" class="site-nav last">Home 20 - Furniture <span class="lbl nm_label2">New</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Home Styles <i class="an an-plus-l"></i></a>
                    <ul>
                        <li class="lvl-2"><a href="index-demo21.html" class="site-nav">Home 21 - Party Supplies</a></li>
                        <li class="lvl-2"><a href="index-demo22.html" class="site-nav">Home 22 - Digital</a></li>
                        <li class="lvl-2"><a href="index-demo23.html" class="site-nav">Home 23 - Vogue</a></li>
                        <li class="lvl-2"><a href="index-demo24.html" class="site-nav">Home 24 - Glamour</a></li>
                        <li class="lvl-2"><a href="index-demo25.html" class="site-nav">Home 25 - Shoes <span class="lbl nm_label2">New</span></a></li>
                        <li class="lvl-2"><a href="index-demo26.html" class="site-nav">Home 26 - Books <span class="lbl nm_label2">New</span></a></li>
                        <li class="lvl-2"><a href="index-demo27.html" class="site-nav last">Home 27 - Yoga <span class="lbl nm_label2">New</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="#" class="site-nav">Category Page <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="category-2columns.html" class="site-nav">2 Columns with style1</a></li>
                        <li><a href="category-3columns.html" class="site-nav">3 Columns with style2</a></li>
                        <li><a href="category-4columns.html" class="site-nav">4 Columns with style3</a></li>
                        <li><a href="category-5columns.html" class="site-nav">5 Columns with style4</a></li>
                        <li><a href="category-6columns.html" class="site-nav">6 Columns with Fullwidth</a></li>
                        <li><a href="category-7columns.html" class="site-nav">7 Columns</a></li>
                        <li><a href="empty-category.html" class="site-nav last">Category Empty</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                        <li><a href="shop-top-filter.html" class="site-nav">Top Filter</a></li>
                        <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                        <li><a href="shop-no-sidebar.html" class="site-nav">Without Filter</a></li>
                        <li><a href="shop-listview-sidebar.html" class="site-nav">List View</a></li>
                        <li><a href="shop-listview-drawer.html" class="site-nav">List View Drawer</a></li>
                        <li><a href="shop-category-slideshow.html" class="site-nav">Category Slideshow</a></li>
                        <li><a href="shop-heading-with-banner.html" class="site-nav last">Headings With Banner</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Shop Page <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="shop-sub-collections.html" class="site-nav">Sub Collection List <span class="lbl nm_label5">Hot</span></a></li>
                        <li><a href="shop-masonry-grid.html" class="site-nav">Shop Masonry Grid</a></li>
                        <li><a href="shop-left-sidebar.html" class="site-nav">Shop Countdown</a></li>
                        <li><a href="shop-hover-info.html" class="site-nav">Shop Hover Info</a></li>
                        <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                        <li><a href="shop-fullwidth.html" class="site-nav">Classic Pagination</a></li>
                        <li><a href="shop-swatches-style.html" class="site-nav">Swatches Style</a></li>
                        <li><a href="shop-grid-style.html" class="site-nav">Grid Style</a></li>
                        <li><a href="shop-search-results.html" class="site-nav last">Search Results</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Shop Other Page <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="my-wishlist.html" class="site-nav">My Wishlist Style1</a></li>
                        <li><a href="my-wishlist-style2.html" class="site-nav">My Wishlist Style2</a></li>
                        <li><a href="compare-style1.html" class="site-nav">Compare Page Style1</a></li>
                        <li><a href="compare-style2.html" class="site-nav">Compare Page Style2</a></li>
                        <li><a href="cart-style1.html" class="site-nav">Cart Page Style1</a></li>
                        <li><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                        <li><a href="checkout-style1.html" class="site-nav">Checkout Page Style1</a></li>
                        <li><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                        <li><a href="checkout-success.html" class="site-nav last">Checkout Success</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Product <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="product-standard.html" class="site-nav">Product Types<i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="product-standard.html" class="site-nav">Simple Product</a></li>
                        <li><a href="product-variable.html" class="site-nav">Variable Product</a></li>
                        <li><a href="product-grouped.html" class="site-nav">Grouped Product</a></li>
                        <li><a href="product-external-affiliate.html" class="site-nav">External / Affiliate Product</a></li>
                        <li><a href="product-outofstock.html" class="site-nav">Out Of Stock Product</a></li>
                        <li><a href="product-layout1.html" class="site-nav">New Product</a></li>
                        <li><a href="product-layout2.html" class="site-nav">Sale Product</a></li>
                        <li><a href="product-layout1.html" class="site-nav">Variable Image</a></li>
                        <li><a href="product-accordian.html" class="site-nav">Variable Select</a></li>
                        <li><a href="prodcut-360-degree-view.html" class="site-nav last">360 Degree view</a></li>
                    </ul>
                </li>
                <li><a href="product-layout1.html" class="site-nav">Product Page Types <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="product-layout1.html" class="site-nav">Product Layout1</a></li>
                        <li><a href="product-layout2.html" class="site-nav">Product Layout2</a></li>
                        <li><a href="product-layout3.html" class="site-nav">Product Layout3</a></li>
                        <li><a href="product-layout4.html" class="site-nav">Product Layout4</a></li>
                        <li><a href="product-layout5.html" class="site-nav">Product Layout5</a></li>
                        <li><a href="product-layout6.html" class="site-nav">Product Layout6</a></li>
                        <li><a href="product-layout7.html" class="site-nav">Product Layout7</a></li>
                        <li><a href="product-accordian.html" class="site-nav">Product Accordian</a></li>
                        <li><a href="product-tabs-left.html" class="site-nav">Product Tabs Left</a></li>
                        <li><a href="product-tabs-center.html" class="site-nav last">Product Tabs Center</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Shop Deal <span class="lbl nm_label1">Sale</span><i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="product-layout1.html" class="site-nav">Camera TZ85 optical 30 white DMC</a></li>
                <li><a href="product-layout1.html" class="site-nav">Apple Watch Series 2</a></li>
                <li><a href="product-layout1.html" class="site-nav">Xiaomi Redmi Note 9 Global Version</a></li>
                <li><a href="product-layout1.html" class="site-nav">Apple iPhone 13 Midnight</a></li>
                <li><a href="product-layout1.html" class="site-nav">1080p Wi-Fi Security Camera</a></li>
                <li><a href="product-layout1.html" class="site-nav">Samsung-1TB-T5-Portable-Drive</a></li>
                <li><a href="shop-fullwidth.html" class="site-nav">View All Products</a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Features <i class="an an-plus-l"></i><span class="lbl nm_label1">New</span></a>
            <ul>
                <li><a href="#" class="site-nav">Vendor Pages <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="vendor-dashboard.html" class="site-nav">Vendor Dashboard</a></li>
                        <li><a href="vendor-profile.html" class="site-nav">Vendor Profile</a></li>
                        <li><a href="vendor-uploads.html" class="site-nav">Vendor Uploads</a></li>
                        <li><a href="vendor-tracking.html" class="site-nav">Vendor Tracking</a></li>
                        <li><a href="vendor-service.html" class="site-nav">Vendor Service</a></li>
                        <li><a href="vendor-settings.html" class="site-nav last">Vendor Settings</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Email Template <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a target="_blank" href="email-template/email-order-success1.html" class="site-nav">Order Success 1</a></li>
                        <li><a target="_blank" href="email-template/email-order-success2.html" class="site-nav">Order Success 2</a></li>
                        <li><a target="_blank" href="email-template/email-invoice-template1.html" class="site-nav">Invoice Template 1</a></li>
                        <li><a target="_blank" href="email-template/email-invoice-template2.html" class="site-nav last">Invoice Template 2</a></li>
                        <li><a target="_blank" href="email-template/email-forgot-password.html" class="site-nav">Mail Reset password</a></li>
                        <li><a target="_blank" href="email-template/email-confirmation.html" class="site-nav">Mail Confirmation</a></li>
                        <li><a target="_blank" href="email-template/email-promotional1.html" class="site-nav">Mail Promotional 1</a></li>
                        <li><a target="_blank" href="email-template/email-promotional2.html" class="site-nav last">Mail Promotional 2</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Elements <i class="an an-plus-l"></i></a>
                    <ul>
                        <li><a href="elements-typography.html" class="site-nav">Typography</a></li>
                        <li><a href="elements-buttons.html" class="site-nav">Buttons</a></li>
                        <li><a href="elements-titles.html" class="site-nav">Titles</a></li>
                        <li><a href="elements-banner-styles.html" class="site-nav">Banner Styles</a></li>
                        <li><a href="elements-testimonial.html" class="site-nav">Testimonial</a></li>
                        <li><a href="elements-accordions.html" class="site-nav">Accordions</a></li>
                        <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                        <li><a href="elements-blog-posts.html" class="site-nav">Blog Posts</a></li>
                        <li><a href="elements-product.html" class="site-nav">Product</a></li>
                        <li><a href="elements-product-tab.html" class="site-nav">Product Tab</a></li>
                        <li><a href="elements-top-info-bar.html" class="site-nav">Top Info Bar</a></li>
                        <li><a href="elements-top-promo-bar.html" class="site-nav last">Top Promo Bar</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="#">Pages <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                        <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                        <li><a href="aboutus-style3.html" class="site-nav last">About Us Style3</a></li>
                    </ul>
                </li>
                <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                        <li><a href="contact-style2.html" class="site-nav last">Contact Us Style2</a></li>
                    </ul>
                </li>
                <li><a href="lookbook-2columns.html" class="site-nav">Lookbook <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                        <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                        <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                        <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                        <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                    </ul>
                </li>
                <li><a href="faqs-style1.html" class="site-nav">FAQs <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                        <li><a href="faqs-style2.html" class="site-nav last">FAQs Style2</a></li>
                    </ul>
                </li>
                <li><a href="brands-style1.html" class="site-nav">Brands <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="brands-style1.html" class="site-nav">Brands Style1</a></li>
                        <li><a href="brands-style2.html" class="site-nav last">Brands Style2</a></li>
                    </ul>
                </li>
                <li><a href="my-account.html" class="site-nav">My Account <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="my-account.html" class="site-nav">My Account</a></li>
                        <li><a href="login-sliding-style.html" class="site-nav">Login Sliding Slideshow</a></li>
                        <li><a href="login.html" class="site-nav">Login</a></li>
                        <li><a href="register.html" class="site-nav">Register</a></li>
                        <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                        <li><a href="change-password.html" class="site-nav last">Change Password</a></li>
                    </ul>
                </li>
                <li><a href="#" class="site-nav">Empty Pages <i class="an an-plus-l"></i></a>
                    <ul class="dropdown">
                        <li><a href="empty-category.html" class="site-nav">Empty Category</a></li>
                        <li><a href="empty-cart.html" class="site-nav">Empty Cart</a></li>
                        <li><a href="empty-compare.html" class="site-nav">Empty Compare</a></li>
                        <li><a href="empty-wishlist.html" class="site-nav">Empty Wishlist</a></li>
                        <li><a href="empty-search.html" class="site-nav last">Empty Search</a></li>
                    </ul>
                </li>
                <li><a href="error-404.html" class="site-nav">Error 404 </a></li>
                <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                <li><a href="coming-soon.html" class="site-nav last">Coming soon <span class="lbl nm_label2">New</span></a></li>
            </ul>
        </li>
        <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="an an-plus-l"></i></a>
            <ul>
                <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="blog-masonry.html" class="site-nav">Masonry Blog Style</a></li>
                <li><a href="blog-2columns.html" class="site-nav">2 Columns</a></li>
                <li><a href="blog-3columns.html" class="site-nav">3 Columns</a></li>
                <li><a href="blog-4columns.html" class="site-nav">4 Columns</a></li>
                <li><a href="blog-single-post.html" class="site-nav last">Article Page</a></li>
            </ul>
        </li>
        <li class="acLink"></li>
        <li class="lvl1 bottom-link"><a href="login.html">Login</a></li>
        <li class="lvl1 bottom-link"><a href="register.html">Signup</a></li>
        <li class="lvl1 bottom-link"><a href="my-wishlist.html">Wishlist</a></li>
        <li class="lvl1 bottom-link"><a href="compare-style1.html">Compare</a></li>
        <li class="help bottom-link"><b>NEED HELP?</b><br>Call: +41 525 523 5687</li>
    </ul>
</div>
<!--End Mobile Menu-->
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
