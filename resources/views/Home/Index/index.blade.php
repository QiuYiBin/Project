﻿@extends('Home.Indexpublic.public')
@section('main')
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
    <!-- End Top Categories -->
    <!-- Start Featured Products -->
    <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">广告列表</h3>
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