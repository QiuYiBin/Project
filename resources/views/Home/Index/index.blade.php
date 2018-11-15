@extends('Home.Indexpublic.public')
@section('main')
<div class="offcanvas-container" id="mobile-menu">
<!-- Start Mobile Menu -->
    <a class="account-link" href="#">
        <div class="user-ava">
            <img src="/Home/images/account/user-ava-md.jpg" alt="Tony Stark">
        </div>
        <div class="user-info">
            <h6 class="user-name">Tony Stark</h6>
            <span class="text-sm text-white opacity-60">530 Reward Points</span>
        </div>
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            <li class="has-children active">
                <span>
                    <a href="index-1.html"><span>Home</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li class="active"><a href="index-1.html">Home Version 1</a></li>
                    <li><a href="index-2.html">Home Version 2</a></li>
                    <li><a href="index-3.html">Home Version 3</a></li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#"><span>Shop</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Shop Categories</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-categories-1.html">Categories Left Sidebar</a></li>
                            <li><a href="shop-categories-2.html">Categories Right Sidebar</a></li>
                            <li><a href="shop-categories-3.html">Categories No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Shop Grid</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-1.html">Shop Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-2.html">Shop Grid Right Sidebar</a></li>
                            <li><a href="shop-grid-3.html">Shop Grid No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Shop List</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-1.html">Shop List Left Sidebar</a></li>
                            <li><a href="shop-list-2.html">Shop List Right Sidebar</a></li>
                            <li><a href="shop-list-3.html">Shop List No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Single Product</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-single-1.html">Single Product Left Sidebar</a></li>
                            <li><a href="shop-single-2.html">Single Product Right Sidebar</a></li>
                            <li><a href="shop-single-3.html">Single Product No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="checkout-address.html">Checkout</a></li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#">Categories</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li class="has-children">
                <span>
                    <a href="shop-categories-1.html">Mobiles & Tablets</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-1.html">Mobile Phones</a></li>
                            <li><a href="shop-grid-1.html">Tabs & Tablets</a></li>
                            <li><a href="shop-grid-1.html">Game Devices</a></li>
                            <li><a href="shop-grid-1.html">Accessories</a></li>
                            <li><a href="shop-grid-1.html">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                <span>
                    <a href="shop-categories-2.html">Laptops & Computers</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-2.html">Laptops</a></li>
                            <li><a href="shop-grid-2.html">Computers</a></li>
                            <li><a href="shop-grid-2.html">PC SoftWare</a></li>
                            <li><a href="shop-grid-2.html">Accessories</a></li>
                            <li><a href="shop-grid-2.html">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                <span>
                    <a href="shop-categories-3.html">Cameras & TV's</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-grid-3.html">Cameras</a></li>
                            <li><a href="shop-grid-3.html">Photos</a></li>
                            <li><a href="shop-grid-3.html">TV's</a></li>
                            <li><a href="shop-grid-3.html">Accessories</a></li>
                            <li><a href="shop-grid-3.html">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                <span>
                    <a href="shop-categories-1.html">Watches & Eyewear</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-1.html">Watches</a></li>
                            <li><a href="shop-list-1.html">Jewellery</a></li>
                            <li><a href="shop-list-1.html">Eyewear</a></li>
                            <li><a href="shop-list-1.html">Accessories</a></li>
                            <li><a href="shop-list-1.html">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                <span>
                    <a href="shop-categories-2.html">Home Appliances</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-2.html">Washers & Dryers</a></li>
                            <li><a href="shop-list-2.html">Air Conditioners</a></li>
                            <li><a href="shop-list-2.html">Sewing machines</a></li>
                            <li><a href="shop-list-2.html">Accessories</a></li>
                            <li><a href="shop-list-2.html">View All</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                <span>
                    <a href="shop-categories-3.html">Accessories</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="shop-list-3.html">Memory Cards</a></li>
                            <li><a href="shop-list-3.html">USB Flash Drives</a></li>
                            <li><a href="shop-list-3.html">External HDD</a></li>
                            <li><a href="shop-list-3.html">Accessories</a></li>
                            <li><a href="shop-list-3.html">View All</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#"><span>Account</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li><a href="account-login.html">Login & Register</a></li>
                    <li><a href="account-password-recovery.html">Password Recovery</a></li>
                    <li><a href="account-profile.html">Profile Page</a></li>
                    <li><a href="account-address.html">Shipping Address</a></li>
                    <li><a href="account-orders.html">My Orders</a></li>
                    <li><a href="account-wishlist.html">My Wishlist</a></li>
                    <li><a href="account-tickets.html">My Tickets</a></li>
                    <li><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#"><span>Blog</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Blog Layout</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-1.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-2.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-3.html">Blog No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <span>
                            <a href="#"><span>Single Post Layout</span></a>
                            <span class="sub-menu-toggle"></span>
                        </span>
                        <ul class="offcanvas-submenu">
                            <li><a href="blog-single-1.html">Post Left Sidebar</a></li>
                            <li><a href="blog-single-2.html">Post Right Sidebar</a></li>
                            <li><a href="blog-single-3.html">Post No Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#"><span>Pages</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contacts.html">Contact Us</a></li>
                    <li><a href="team.html">Our Team</a></li>
                    <li><a href="faq.html">Help & Support</a></li>
                    <li><a href="order-tracking.html">Order Tracking</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
            </li>
            <li class="has-children">
                <span>
                    <a href="#"><span>ShortCodes</span></a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    <li><a href="accordions.html">Accordions</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="steps.html">Steps</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="progress-bars.html">Progress Bar</a></li>
                    <li class="active"><a href="carousel.html">Carousels</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- End Mobile Menu -->
<div class="offcanvas-wrapper">
    <!-- Start Main Slider -->
    <div class="hero-slider home-1-hero">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel='{"nav": true, "dots": true, "loop": true, "autoplay": true, "autoplayTimeou": 7000}'>
            <!-- Start Slide #1 -->
            @if($Slider != '')
            @foreach($Slider as $value)
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center hidden-md-down">
                            <div class="from-bottom">
                                <img class="d-inline-block w-150 mb-4" src="/Home/images/hero-slider/logo02.png" alt="Puma">
                                <div class="h2 text-body text-normal mb-2 pt-1">{{$value->name}}</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">starting at <span class="text-bold">$200</span></div>
                            </div>
                            <a class="btn btn-primary scale-up delay-1" href="{{$value->url}}" target="_blank">Shop Now</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3">
                            <img class="d-block mx-auto" src="/Uploads/Slider/{{$value->pic}}" alt="Puma Backpack">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <!-- End Slide #1 -->
        </div>
    </div>
    <!-- End Main Slider -->
    <!-- Start Top Categories -->
    <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Top Categories</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6 home-cat">
                <div class="card">
                    <a class="card-img-tiles" href="shop-categories-1.html">
                        <div class="inner">
                            <div class="main-img">
                                <img src="/Home/images/shop/categories/01.jpg" alt="Category">
                            </div>
                            <div class="thumblist">
                                <img src="/Home/images/shop/categories/02.jpg" alt="Category">
                                <img src="/Home/images/shop/categories/03.jpg" alt="Category">
                            </div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Smartphones</h4>
                        <p class="text-muted">Starting from $149</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">View Products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 home-cat">
                <div class="card">
                    <a class="card-img-tiles" href="shop-categories-2.html">
                        <div class="inner">
                            <div class="main-img">
                                <img src="/Home/images/shop/categories/04.jpg" alt="Category">
                            </div>
                            <div class="thumblist">
                                <img src="/Home/images/shop/categories/05.jpg" alt="Category">
                                <img src="/Home/images/shop/categories/06.jpg" alt="Category">
                            </div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Laptops</h4>
                        <p class="text-muted">Starting from $349</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">View Products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 horizontal-center home-cat">
                <div class="card">
                    <a class="card-img-tiles" href="shop-categories-3.html">
                        <div class="inner">
                            <div class="main-img">
                                <img src="/Home/images/shop/categories/07.jpg" alt="Category">
                            </div>
                            <div class="thumblist">
                                <img src="/Home/images/shop/categories/08.jpg" alt="Category">
                                <img src="/Home/images/shop/categories/09.jpg" alt="Category">
                            </div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Televisions</h4>
                        <p class="text-muted">Starting from $499</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Categories -->
    <!-- Start Featured Products -->
    <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Products</h3>
        <div class="owl-carousel"
             data-owl-carousel='{"nav": false, "dots": false, "margin": 30, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},"1200":{"items":4}} }'>
            <!-- Start Product #1 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/01.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">iPhone X</a></h3>
                    <h4 class="product-price">$749.99</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #1 -->
            <!-- Start Product #2 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/05.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">Panasonic TX-32</a></h3>
                    <h4 class="product-price">$949.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #2 -->
            <!-- Start Product #3 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/09.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">Sony HDR-AS50R</a></h3>
                    <h4 class="product-price">$700.00</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #3 -->
            <!-- Start Product #4 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/13.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">HP LaserJet Pro 200</a></h3>
                    <h4 class="product-price">$249.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #4 -->
            <!-- Start Product #5 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/17.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">Apple Watch 3</a></h3>
                    <h4 class="product-price">$449.00</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #5 -->
            <!-- Start Product #6 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/21.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">Acer Aspire 15.6 i3</a></h3>
                    <h4 class="product-price">$649.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #6 -->
        </div>
    </section>
    <!-- End Featured Products -->
    <!-- Start Popular Brands -->
    <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
            <h3 class="text-center mb-30">Popular Brands</h3>
            <div class="owl-carousel" data-owl-carousel='{ "nav": false, "dots": false, "loop": true, "autoplay": true, "autoplayTimeout": 4000, "responsive": {"0":{"items":2}, "470":{"items":3},"630":{"items":4},"991":{"items":5},"1200":{"items":6}} }'>
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/01.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/02.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/03.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/04.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/05.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/06.png" alt="Brands">
                <img class="d-block w-110 opacity-75 m-auto" src="/Home/images/brands/07.png" alt="Brands">
            </div>
        </div>
    </section>
    <!-- End Popular Brands -->
    <!-- Start Services -->
    <section class="container padding-top-3x padding-bottom-3x">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/01.png" alt="Shipping">
                <h6>Free Shipping</h6>
                <p class="text-muted margin-bottom-none">On order over $200 ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/02.png" alt="Money Back">
                <h6>Money Back</h6>
                <p class="text-muted margin-bottom-none">Moneyback guarantee ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/03.png" alt="Support">
                <h6>24/7 Support</h6>
                <p class="text-muted margin-bottom-none">Online consultations ...</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center home-cat">
                <img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="/Home/images/services/04.png" alt="Payment">
                <h6>Secure Payment</h6>
                <p class="text-muted margin-bottom-none">Safe Shopping Guarantee ...</p>
            </div>
        </div>
    </section>
    <!-- End Services -->
</div>
</div>
@endsection
@section('title','首页')