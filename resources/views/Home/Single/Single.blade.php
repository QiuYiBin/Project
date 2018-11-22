@extends('Home.Indexpublic.public')
@section('main')
<!DOCTYPE html>
<html lang="zxx">
<head>
</head>
<body>
<!-- End NavBar -->
<div class="offcanvas-wrapper">
    <!-- Start Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>商品详情</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="/">首页</a></li>
                    <li class="separator">&nbsp;</li>
                    <li><a href="shop-grid-3.html">商品分类</a></li>
                    <li class="separator">&nbsp;</li>
                    <li>商品详情</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Product Content -->
    <div class="container padding-top-1x padding-bottom-3x">
        <div class="row">
            <!-- Start Product Gallery -->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="gallery-wrapper">
                    	@foreach($imgs as $key=>$value)
                        <div class="gallery-item active"><a href="/Uploads/Goods/{{$value}}" data-hash="one{{$key}}" data-size="1000x667"></a></div>
                        @endforeach
                    </div>
                    <div class="product-carousel owl-carousel">
                    	@foreach($imgs as $key=>$value)
                        <div data-hash="one{{$key}}"><img src="/Uploads/Goods/{{$value}}" alt="Product"></div>
                        @endforeach
                    </div>
                    <ul class="product-thumbnails">
                    	@foreach($imgs as $key=>$value)
                        <li class="active"><a href="#one{{$key}}"><img src="/Uploads/Goods/{{$value}}"alt="Product"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End Product Gallery -->
            <!-- Start Product Info -->
            <div class="col-md-6 single-shop">
            	<div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                </div>
                <h2 class="padding-top-1x text-normal with-side">{{$data->name}}</h2>
                <span class="h2 d-block with-side">¥{{$data->price}}</span>
                <p>{{$data->descr}}</p>
            </div>

            <div class="col-md-12">
                <hr class="mt-30 mb-30">
                <div class="d-flex flex-wrap justify-content-between mb-30">
                    <div class="entry-share">
                    </div>
                    <form  method="post" action="/homecart">
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-primary" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> 添加购物车</button>
                        <input type="hidden" name="id" value="{{$data->id}}">
                        {{csrf_field()}}
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Info -->
        <!-- Start Product Tabs -->
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">商品描述</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">评论</a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane fade show active" id="description" role="tabpanel" style="margin: 0 auto">
                    {!!$data->text!!}
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                	@if(!empty($comment))
					@foreach($comment as $value)
                    <!-- Start Review #1 -->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/01.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <!-- <h4 class="comment-title">Lorem存有简直是虚拟</h4> -->
                                <div class="mb-2">
                                    <div class="rating-stars" style="color:#ffb74f">{{str_repeat("★",$value->start)}}{{str_repeat("☆",5-$value->start)}}</div>
                                </div>
                            </div>
                            <p class="comment-text">{{$value->text}}</p>
                            <div class="comment-footer"><span class="comment-meta">{{$value->username}}</span></div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <center>暂无评价哦~~~</center>
                    @endif
                    <!-- End Review #1 -->
                    <!-- Start Review Form -->
                    <h5 class="mb-30 padding-top-1x">离开评论</h5>
                    <form class="row" method="post">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_rating">你的评价</label>
                                <select class="form-control form-control-rounded" id="review_rating">
                                    <option>5 星</option>
                                    <option>4 星</option>
                                    <option>3 星</option>
                                    <option>2 星</option>
                                    <option>1 星</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="review_text">评论 </label>
                                <textarea class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-outline-primary" type="submit">提交 评论</button>
                        </div>
                    <!-- End Review Form -->
                </div>
            </div>
        </div>
        <!-- End Product Tabs -->
        <!-- Start Related Products -->
        <h3 class="text-center padding-top-3x mb-30">发布的产品</h3>
        <div class="owl-carousel" data-owl-carousel='{ "nav": false, "dots": false, "margin": 30, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},";1200":{"items":4}} }'>
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
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物侧</button>
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
                    <h3 class="product-title"><a href="shop-single-2.html">松下 TX-32</a></h3>
                    <h4 class="product-price">$949.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物侧</button>
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
                    <h3 class="product-title"><a href="shop-single-3.html">索尼 HDR-AS50R</a></h3>
                    <h4 class="product-price">$700.00</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物侧</button>
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
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物侧</button>
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
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物侧</button>
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
        <!-- End Related Products -->
    </div>
    <!-- End Product Content -->
</div>
<!-- Start Photoswipe Container -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Photoswipe Container -->
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- End Back To Top -->
<div class="site-backdrop"></div>
</body>
</html>

@endsection
@section('title','商品详情')

