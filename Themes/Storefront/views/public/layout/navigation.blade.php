<div class="container">
    <div class="row">
        <div class="col-1 col-sm-1 col-md-1 col-lg-12 align-self-center d-menu-col">
            <nav class="grid__item" id="AccessibleNav">
                <ul id="siteNav" class="site-nav center hidearrow">
                    <li class="lvl1 parent megamenu">
                        <a href="{{ route('home') }}">
                            <i class="an an-home"></i>
                        </a>
                    </li>
{{--                    @include('public.layout.navigation.category_menu')--}}
{{--                    @include('public.layout.navigation.primary_menu')--}}
                    <li class="lvl1 parent megamenu">
                        <a href="#;">
                            Product <i class="an an-angle-down-l"></i>
                        </a>
                        <div class="megamenu style2">
                            <div class="row">
                                <div class="lvl-1 col-md-3 col-lg-3">
                                    <a href="#" class="site-nav lvl-1 menu-title">
                                        Product Types
                                    </a>
                                    <ul class="subLinks">
                                        <li class="lvl-2"><a href="product-standard.html" class="site-nav lvl-2">Simple Product</a></li>
                                        <li class="lvl-2"><a href="product-variable.html" class="site-nav lvl-2">Variable Product</a></li>
                                        <li class="lvl-2"><a href="product-grouped.html" class="site-nav lvl-2">Grouped Product</a></li>
                                        <li class="lvl-2"><a href="product-external-affiliate.html" class="site-nav lvl-2">External / Affiliate Product</a></li>
                                        <li class="lvl-2"><a href="product-outofstock.html" class="site-nav lvl-2">Out Of Stock Product</a></li>
                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">New Product</a></li>
                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Sale Product</a></li>
                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Variable Image</a></li>
                                        <li class="lvl-2"><a href="product-accordian.html" class="site-nav lvl-2">Variable Select</a></li>
                                        <li class="lvl-2"><a href="prodcut-360-degree-view.html" class="site-nav lvl-2">360 Degree view</a></li>
                                    </ul>
                                </div>
                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Product Page</a>
                                    <ul class="subLinks">
                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Product Layout1</a></li>
                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Product Layout2</a></li>
                                        <li class="lvl-2"><a href="product-layout3.html" class="site-nav lvl-2">Product Layout3</a></li>
                                        <li class="lvl-2"><a href="product-layout4.html" class="site-nav lvl-2">Product Layout4</a></li>
                                        <li class="lvl-2"><a href="product-layout5.html" class="site-nav lvl-2">Product Layout5</a></li>
                                        <li class="lvl-2"><a href="product-layout6.html" class="site-nav lvl-2">Product Layout6</a></li>
                                        <li class="lvl-2"><a href="product-layout7.html" class="site-nav lvl-2">Product Layout7</a></li>
                                        <li class="lvl-2"><a href="product-accordian.html" class="site-nav lvl-2">Product Accordian</a></li>
                                        <li class="lvl-2"><a href="product-tabs-left.html" class="site-nav lvl-2">Product Tabs Left</a></li>
                                        <li class="lvl-2"><a href="product-tabs-center.html" class="site-nav lvl-2">Product Tabs Center</a></li>
                                    </ul>
                                </div>
                                <div class="lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1 menu-title">Top Brands</a>
                                    <div class="menu-brand-logo">
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                    </div>
                                    <div class="menu-brand-logo">
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                        <a href="brands-style2.html"><img src="assets/images/logo/brandlogo1.png" alt="image"/></a>
                                    </div>
                                </div>
                                <div class="lvl-1 col-md-3 col-lg-3 p-0">
                                    <a href="shop-left-sidebar.html"><img src="assets/images/megamenu/megamenu-banner3.jpg" alt="image"/></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lvl1 parent megamenu"><a href="#;" class="shop-offers">Shop Deal <i class="an an-angle-down-l"></i></a>
{{--                        <div class="megamenu megamenu-gridproduct end-0 mx-auto">--}}
{{--                            <!--Product Grid-->--}}
{{--                            <div class="grid-products">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End product image-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">Camera TZ85 optical 30 white DMC</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="price">$500.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End Product Image-->--}}
{{--                                            <!-- product label -->--}}
{{--                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>--}}
{{--                                            <!-- End product label -->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">Apple Watch Series 2</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="old-price">$650.00</span> <span class="price">$600.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End Product Image-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">Xiaomi Redmi Note 9 Global Version</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="price">$500.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End Product Image-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">Apple iPhone 13 Midnight</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="price">$700.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End Product Image-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">1080p Wi-Fi Security Camera</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="price">$25.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star-o"></i> <i class="an an-star-o"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                    <div class="item col-lg-4 col-md-4 col-6">--}}
{{--                                        <!--Start Product Image-->--}}
{{--                                        <div class="product-image">--}}
{{--                                            <!--Start Product Image-->--}}
{{--                                            <a href="product-layout1.html" class="product-img">--}}
{{--                                                <!--Image-->--}}
{{--                                                <img class="primary blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Image-->--}}
{{--                                                <!--Hover Image-->--}}
{{--                                                <img class="hover blur-up lazyload" data-src="assets/images/products/800x800.jpg" src="assets/images/products/800x800.jpg" alt="product" title="">--}}
{{--                                                <!--End Hover Image-->--}}
{{--                                            </a>--}}
{{--                                            <!--End Product Image-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Image-->--}}
{{--                                        <!--Start Product Details-->--}}
{{--                                        <div class="product-details text-start">--}}
{{--                                            <!--Product Name-->--}}
{{--                                            <div class="product-name">--}}
{{--                                                <a href="product-layout1.html" class="fw-normal">Samsung-1TB-T5-Portable-Drive</a>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Name-->--}}
{{--                                            <!--Product Price-->--}}
{{--                                            <div class="product-price">--}}
{{--                                                <span class="price">$600.00</span>--}}
{{--                                            </div>--}}
{{--                                            <!--End Product Price-->--}}
{{--                                            <!--Product Review-->--}}
{{--                                            <div class="product-review d-flex-center mb-0"><i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i> <i class="an an-star"></i></div>--}}
{{--                                            <!--End Product Review-->--}}
{{--                                        </div>--}}
{{--                                        <!--End Product Details-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12 text-center">--}}
{{--                                        <a href="shop-fullwidth.html" class="btn btn-outline-primary btn-lg rounded-0">View All Products</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--End Product Grid-->--}}
{{--                        </div>--}}
                    </li>
                    <li class="lvl1 parent megamenu"><a href="#">Features</a>
{{--                        <div class="megamenu style4">--}}
{{--                            <div class="row shop-grid-5">--}}
{{--                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Vendor Pages</a>--}}
{{--                                    <ul class="subLinks">--}}
{{--                                        <li><a href="vendor-dashboard.html" class="site-nav">Vendor Dashboard</a></li>--}}
{{--                                        <li><a href="vendor-profile.html" class="site-nav">Vendor Profile</a></li>--}}
{{--                                        <li><a href="vendor-uploads.html" class="site-nav">Vendor Uploads</a></li>--}}
{{--                                        <li><a href="vendor-tracking.html" class="site-nav">Vendor Tracking</a></li>--}}
{{--                                        <li><a href="vendor-service.html" class="site-nav">Vendor Service</a></li>--}}
{{--                                        <li><a href="vendor-settings.html" class="site-nav last">Vendor Settings</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Email Template</a>--}}
{{--                                    <ul class="subLinks">--}}
{{--                                        <li><a target="_blank" href="email-template/email-order-success1.html" class="site-nav">Order Success 1</a></li>--}}
{{--                                        <li><a target="_blank" href="email-template/email-order-success2.html" class="site-nav">Order Success 2</a></li>--}}
{{--                                        <li><a target="_blank" href="email-template/email-invoice-template1.html" class="site-nav">Invoice Template 1</a></li>--}}
{{--                                        <li><a target="_blank" href="email-template/email-invoice-template2.html" class="site-nav last">Invoice Template 2</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Email Template</a>--}}
{{--                                    <ul class="subLinks">--}}
{{--                                        <li class="lvl-2"><a target="_blank" href="email-template/email-forgot-password.html" class="site-nav">Mail Reset password</a></li>--}}
{{--                                        <li class="lvl-2"><a target="_blank" href="email-template/email-confirmation.html" class="site-nav">Mail Confirmation</a></li>--}}
{{--                                        <li class="lvl-2"><a target="_blank" href="email-template/email-promotional1.html" class="site-nav">Mail Promotional 1</a></li>--}}
{{--                                        <li class="lvl-2"><a target="_blank" href="email-template/email-promotional2.html" class="site-nav last">Mail Promotional 2</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Elements</a>--}}
{{--                                    <ul class="subLinks">--}}
{{--                                        <li class="lvl-2"><a href="elements-typography.html" class="site-nav lvl-2">Typography</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-buttons.html" class="site-nav lvl-2">Buttons</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-titles.html" class="site-nav lvl-2">Titles</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-banner-styles.html" class="site-nav lvl-2">Banner Styles</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-testimonial.html" class="site-nav lvl-2">Testimonial</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-accordions.html" class="site-nav lvl-2">Accordions</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="lvl-1 col-md-3 col-lg-3 col-xl-2 item"><a href="#" class="site-nav lvl-1 menu-title">Elements</a>--}}
{{--                                    <ul class="subLinks">--}}
{{--                                        <li class="lvl-2"><a href="elements-icons.html" class="site-nav lvl-2">Icons</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-blog-posts.html" class="site-nav lvl-2">Blog Posts</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-product.html" class="site-nav lvl-2">Product</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-product-tab.html" class="site-nav lvl-2">Product Tab</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-top-info-bar.html" class="site-nav lvl-2">Top Info Bar</a></li>--}}
{{--                                        <li class="lvl-2"><a href="elements-top-promo-bar.html" class="site-nav lvl-2">Top Promo Bar</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row clear mt-4">--}}
{{--                                <div class="col-md-3 col-lg-3">--}}
{{--                                    <img src="assets/images/megamenu/megamenu-store.png" data-src="assets/images/megamenu/megamenu-elements.png" alt="image"/>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3 col-lg-3">--}}
{{--                                    <img src="assets/images/megamenu/megamenu-elements.png" data-src="assets/images/megamenu/megamenu-elements.png" alt="image"/>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3 col-lg-3">--}}
{{--                                    <img src="assets/images/megamenu/megamenu-pages.png" data-src="assets/images/megamenu/megamenu-elements.png" alt="image"/>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3 col-lg-3">--}}
{{--                                    <img src="assets/images/megamenu/megamenu-fast.png" data-src="assets/images/megamenu/megamenu-elements.png" alt="image"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#;">Pages <i class="an an-angle-down-l"></i></a>
                        <ul class="dropdown">
                            <li>
                                <a href="aboutus-style1.html" class="site-nav">
                                    About Us <i class="an an-angle-right-l"></i>
                                </a>
                                <ul class="dropdown">
                                    <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                                    <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                                    <li><a href="aboutus-style3.html" class="site-nav last">About Us Style3</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="an an-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                                    <li><a href="contact-style2.html" class="site-nav last">Contact Us Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="lookbook-2columns.html" class="site-nav">Lookbook <i class="an an-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="lookbook-2columns.html" class="site-nav">2 Columns</a></li>
                                    <li><a href="lookbook-3columns.html" class="site-nav">3 Columns</a></li>
                                    <li><a href="lookbook-4columns.html" class="site-nav">4 Columns</a></li>
                                    <li><a href="lookbook-5columns.html" class="site-nav">5 Columns + Fullwidth</a></li>
                                    <li><a href="lookbook-shop.html" class="site-nav last">Lookbook Shop</a></li>
                                </ul>
                            </li>
                            <li><a href="faqs-style1.html" class="site-nav">FAQs <i class="an an-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="faqs-style1.html" class="site-nav">FAQs Style1</a></li>
                                    <li><a href="faqs-style2.html" class="site-nav last">FAQs Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="brands-style1.html" class="site-nav">Brands <i class="an an-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="brands-style1.html" class="site-nav">Brands Style1</a></li>
                                    <li><a href="brands-style2.html" class="site-nav last">Brands Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="my-account.html" class="site-nav">My Account <i class="an an-angle-right-l"></i></a>
                                <ul class="dropdown">
                                    <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                    <li><a href="login-sliding-style.html" class="site-nav">Login Sliding Slideshow</a></li>
                                    <li><a href="login.html" class="site-nav">Login</a></li>
                                    <li><a href="register.html" class="site-nav">Register</a></li>
                                    <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                                    <li><a href="change-password.html" class="site-nav last">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="site-nav">Empty Pages <i class="an an-angle-right-l"></i></a>
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
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
                        </ul>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#;">Blog <i class="an an-angle-down-l"></i></a>
                        <ul class="dropdown">
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
                </ul>
            </nav>
        </div>
    </div>
</div>

{{--<section class="navigation-wrap">--}}
{{--    <div class="container">--}}
{{--        <div class="navigation-inner">--}}
{{--            @include('public.layout.navigation.category_menu')--}}
{{--            @include('public.layout.navigation.primary_menu')--}}

{{--            <span class="navigation-text">--}}
{{--                {{ setting('storefront_navbar_text') }}--}}
{{--            </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
