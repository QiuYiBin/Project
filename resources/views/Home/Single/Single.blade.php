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
                    <li><a href="index-1.html">家</a></li>
                    <li class="separator">&nbsp;</li>
                    <li><a href="shop-grid-3.html">Shop Grid No Sidebar</a></li>
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
                <div class="product-gallery"><span class="product-badge text-danger">20% Off</span>
                    <div class="gallery-wrapper">
                        <div class="gallery-item active"><a href="/Home/images/shop/single/01.jpg" data-hash="one" data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="/Home/images/shop/single/02.jpg" data-hash="two" data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="/Home/images/shop/single/03.jpg" data-hash="three" data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="/Home/images/shop/single/04.jpg" data-hash="four" data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="/Home/images/shop/single/05.jpg" data-hash="five" data-size="1000x667"></a></div>
                    </div>
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one"><img src="/Home/images/shop/single/01.jpg" alt="Product"></div>
                        <div data-hash="two"><img src="/Home/images/shop/single/02.jpg" alt="Product"></div>
                        <div data-hash="three"><img src="/Home/images/shop/single/03.jpg" alt="Product"></div>
                        <div data-hash="four"><img src="/Home/images/shop/single/04.jpg" alt="Product"></div>
                        <div data-hash="five"><img src="/Home/images/shop/single/05.jpg" alt="Product"></div>
                    </div>
                    <ul class="product-thumbnails">
                        <li class="active"><a href="#one"><img src="/Home/images/shop/single/th01.jpg" alt="Product"></a></li>
                        <li><a href="#two"><img src="/Home/images/shop/single/th02.jpg" alt="Product"></a></li>
                        <li><a href="#three"><img src="/Home/images/shop/single/th03.jpg" alt="Product"></a></li>
                        <li><a href="#four"><img src="/Home/images/shop/single/th04.jpg" alt="Product"></a></li>
                        <li><a href="#five"><img src="/Home/images/shop/single/th05.jpg" alt="Product"></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Product Gallery -->
            <!-- Start Product Info -->
            <div class="col-md-6 single-shop">
                <div class="hidden-md-up"></div>
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                </div>
                <span class="text-muted align-middle">&nbsp;&nbsp;5 | 13 Customer Reviews</span>
                <h2 class="padding-top-1x text-normal with-side">iPhone X Gold 128GB</h2>
                <span class="h2 d-block with-side"><del class="text-muted text-normal">$899.00</del>&nbsp; $749.60</span>
                <p>Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存活了五个......</p>
                <p>Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存活了五个......</p>
                <div class="row margin-top-1x">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="size">内存大小</label>
                            <select class="form-control" id="size">
                                <option>嘻哈大小</option>
                                <option>16GB</option>
                                <option>32GB</option>
                                <option>64GB</option>
                                <option>128GB</option>
                                <option>256GB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="color">选择颜色</label>
                            <select class="form-control" id="color">
                                <option>白色 / 红色 / 蓝色</option>
                                <option>Black / Orange / Green</option>
                                <option>Gray / Purple / White</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="quantity">数量</label>
                            <select class="form-control" id="quantity">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="pt-1 mb-2"><span class="text-medium">SKU:</span> #17685932</div>
                <div class="padding-bottom-1x mb-2">
                    <span class="text-medium">分类:&nbsp;</span>
                    <a class="navi-link" href="#">Apple,</a>
                    <a class="navi-link" href="#"> 智能手机,</a>
                    <a class="navi-link" href="#"> 手机</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr class="mt-30 mb-30">
                <div class="d-flex flex-wrap justify-content-between mb-30">
                    <div class="entry-share">
                        <span class="text-muted">分享:</span>
                        <div class="share-links">
                            <a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="socicon-facebook"></i>
                            </a>
                            <a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="socicon-twitter"></i>
                            </a>
                            <a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                                <i class="socicon-instagram"></i>
                            </a>
                            <a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google +">
                                <i class="socicon-googleplus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="" data-original-title="Whishlist">
                            <i class="icon-heart"></i>
                        </button>
                        <button class="btn btn-primary" data-toast="" data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> 添加购物车</button>
                    </div>
                </div>
            </div>
            <!-- End Product Info -->
        </div>
        <!-- Start Product Tabs -->
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">描述</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">测评</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <p>Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存在了五个世纪，而且还延续了电子排版，基本保持不变。</p>
                    <p class="mb-30">Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存在了五个世纪，而且还延续了电子排版，基本保持不变。</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                    <!-- Start Review #1 -->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/01.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">Lorem存有简直是虚拟</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i></div>
                                </div>
                            </div>
                            <p class="comment-text">Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存活了五个世纪。</p>
                            <div class="comment-footer"><span class="comment-meta">啊滚</span></div>
                        </div>
                    </div>
                    <!-- End Review #1 -->
                    <!-- Start Review #2 -->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/02.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">Lorem存有简直是虚拟</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i></div>
                                </div>
                            </div>
                            <p class="comment-text">Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存活了五个世纪。</p>
                            <div class="comment-footer"><span class="comment-meta">啊杰</span></div>
                        </div>
                    </div>
                    <!-- End Review #2 -->
                    <!-- Start Review #3 -->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/03.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <h4 class="comment-title">Lorem存有简直是虚拟</h4>
                                <div class="mb-2">
                                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i></div>
                                </div>
                            </div>
                            <p class="comment-text">Lorem Ipsum只是印刷和排版行业的虚拟文本。自16世纪以来，Lorem Ipsum一直是业界标准的虚拟文本，当时一台未知的打印机采用了类型的厨房并将其拼凑成一本类型的样本。它不仅存活了五个世纪。</p>
                            <div class="comment-footer"><span class="comment-meta">啊斌</span></div>
                        </div>
                    </div>
                    <!-- End Review #3 -->
                    <!-- Start Review Form -->
                    <h5 class="mb-30 padding-top-1x">离开评论</h5>
                    <form class="row" method="post">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_name">你的名字</label>
                                <input class="form-control form-control-rounded" type="text" id="review_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_email">你的邮件</label>
                                <input class="form-control form-control-rounded" type="email" id="review_email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_subject">你的主题</label>
                                <input class="form-control form-control-rounded" type="text" id="review_subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_rating">你的价格</label>
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
                    </form>
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

