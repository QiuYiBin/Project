<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@section('title')</title>
    <!-- Mobile Specific Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/Home/images/favicon.ico">
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/font-awesome.min.css">
    <!-- Feather Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/feather-icons.css">
    <!-- Pixeden Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/pixeden.css">
    <!-- Social Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/socicon.css">
    <!-- PhotoSwipe CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/photoswipe.css">
    <!-- Izitoast Notification CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/izitoast.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/style.css">
</head>
<body>
<!-- Start Shop Category Menu -->
<div class="offcanvas-container" id="shop-categories">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
    </div>
    <nav class="offcanvas-menu">
        <ul class="menu">
            @foreach($cate as $value)
            <li class="has-children">
                <span>
                    <a href="/goods/{{$value->id}}">{{$value->name}}</a>
                    <span class="sub-menu-toggle"></span>
                </span>
                <ul class="offcanvas-submenu">
                    @if(count($value->dev))
                    @foreach($value->dev as $rows)
                    <li><a href="/goods/{{$rows->id}}">{{$rows->name}}</a></li>
                    @endforeach
                    @endif
                </ul> 
            </li>
            @endforeach
        </ul>
    </nav>
</div>
<!-- End Shop Category Menu -->
<!-- Start TopBar -->
<div class="topbar" style="">
    <div class="topbar-column">
        <a class="hidden-md-down" href="#"><i class="fa fa-phone"></i>&nbsp;+131 8888 8888</a>
        <a class="hidden-md-down" href="#"><i class="fa fa-envelope-o"></i>&nbsp;haikyzhenjiuyixia@qq.com</a>
        <a class="hidden-md-down" href="#"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;广州</a>
    </div>
    @if(session('username'))
       <div style="line-height: 39px;float: right;"> 
        <a href="#">欢迎{{session('username')}}</a>
        <a href="login/create"></i>退出</a>
        </div>
    @else
        <div style="line-height: 39px;float: right;">
        <a href="/login">登陆</a>
        <a href="/register">注册</a>
        </div>
    @endif
</div>
<!-- End TopBar -->
<!-- Start NavBar -->
<header class="navbar navbar-sticky" style="min-height:80px;margin-bottom:0px">
    <!-- Start Search -->
    <form class="site-search" action="/goods" method="get">
        <input type="text" name="search" placeholder="请输入关键词">
        <div class="search-tools">
            <!-- <button class="close-search">&nbsp;搜索&nbsp;</button> -->
            <input type="submit" value="搜索">
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <!-- End Search -->
    <!-- Start Logo -->
    <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <a class="site-logo" href="/"><img src="/Home/images/logo/logo.png" alt="Inspina"></a>
        </div>
    </div>
    <!-- End Logo -->
    <!-- Start Nav Menu -->
    <nav class="site-menu">
        <ul>
            <li class="active">
                <a href="/"><span>首页</span></a>
                
            </li>
            <li>
                <a href="/goods/{{0}}"><span>购物</span></a>
                <ul class="sub-menu">
                    @if(count($cate))
                    @foreach($cate as $value)
                    <li class="has-children">
                        <a href="/goods/{{$value->id}}"><span>{{$value->name}}</span></a>
                        @if(count($value->dev))
                        <ul class="sub-menu">
                            @foreach($value->dev as $rows)
                            <li><a href="/goods/{{$rows->id}}">{{$rows->name}}</a></li>
                            @endforeach
                        </ul>
                         @endif
                    </li>
                    @endforeach
                    @endif
                </ul>
            </li>
            <li>
                <a href="/homeword"><span>文章管理</span></a>
            </li>
            <li>
                <a href="/article"><span>公告</span></a>
            </li>
            <li>
                <a href="#"><span>关于我们</span></a>
            </li>

        </ul>
    </nav>
    <!-- End Nav Menu -->
    <!-- Start Toolbar -->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search">
                    <i class="icon-search"></i>
                </div>
                <!-- Start Account -->
                <div class="account">
                    <a href="#"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava">
                                <img src="/Home/images/account/user-ava-sm.jpg" alt="Tony Stark">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Admin</h6>
                            </div>
                        </li>
                        <li><a href="/homepersonal">个人中心</a></li>
                        <li><a href="/homeorder">我的订单</a></li>
                        <li><a href="/homewish">我的收藏</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"><i class="fa fa-lock"></i>退出</a></li>
                    </ul>
                </div> 
                <!-- End Account -->
                <!-- Start Cart -->
                
                <div class="cart">
                    <a href="#"></a>
                    <i class="icon-bag"></i>
                    <span class="count">3</span>
                    <span class="subtotal">$1920</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                            <a class="dropdown-product-thumb" href="shop-single-1.html">
                                <img src="/Home/images/cart-dropdown/01.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single-1.html">Samsung Galaxy A8</a>
                                <span class="dropdown-product-details">1 x $520</span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                            <a class="dropdown-product-thumb" href="shop-single-2.html">
                                <img src="/Home/images/cart-dropdown/02.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single-2.html">Panasonic TX-32</a>
                                <span class="dropdown-product-details">2 x $400</span>
                            </div>
                        </div>
                        <div class="dropdown-product-item">
                            <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                            <a class="dropdown-product-thumb" href="shop-single-3.html">
                                <img src="/Home/images/cart-dropdown/03.jpg" alt="Product">
                            </a>
                            <div class="dropdown-product-info">
                                <a class="dropdown-product-title" href="shop-single-3.html">Acer Aspire 15.6 i3</a>
                                <span class="dropdown-product-details">1 x $600</span>
                            </div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column">
                                <span class="text-lg">Total:</span>
                            </div>
                            <div class="column text-right">
                                <span class="text-lg text-medium">$1920 </span>
                            </div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a>
                            </div>
                            <div class="column">
                                <a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Cart -->
            </div>
        </div>
    </div>
    <!-- End Toolbar -->
</header>
@section('main')
@show
<!-- End NavBar -->
<!-- Start Footer -->
<footer class="site-footer">
        <div class="container">
            <!-- Start Footer Info -->
            <div class="row">
                <!-- Start Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">Inspina Contact Info</h3>
                        <p class="text-white"><i class="fa fa-phone"></i> +1 888 888 8888</p>
                        <p class="text-white"><i class="fa fa-envelope-o"></i> info@yoursite.com</p>
                        <p class="text-white"><i class="fa fa-map-marker"></i> 221B Baker Street, London, UK</p>
                        <ul class="list-unstyled text-sm text-white">
                            <li><span class="opacity-50">Mon - Fri: </span>09:00 - 18:00</li>
                            <li><span class="opacity-50">Sat - Sun: </span>10.00 - 15:00</li>
                        </ul>
                        <a class="social-button shape-circle sb-facebook sb-light-skin" href="#">
                            <i class="socicon-facebook"></i>
                        </a>
                        <a class="social-button shape-circle sb-twitter sb-light-skin" href="#">
                            <i class="socicon-twitter"></i>
                        </a>
                        <a class="social-button shape-circle sb-instagram sb-light-skin" href="#">
                            <i class="socicon-googleplus"></i>
                        </a>
                        <a class="social-button shape-circle sb-instagram sb-light-skin" href="#">
                            <i class="socicon-instagram"></i>
                        </a>
                    </section>
                </div>
                <!-- End Contact Info -->
                <!-- Start Mobile Apps -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">Our Services</h3>
                        <ul>
                            <li><a href="/friendship">友情链接</a></li>
                            <li><a href="#">Full Responsive Front-End</a></li>
                            <li><a href="#">Compatible For All Browsers</a></li>
                            <li><a href="#">W3C Walidated Code</a></li>
                            <li><a href="#">Amazing Supper Ideas</a></li>
                            <li><a href="#">50+ Different Pages</a></li>
                            <li><a href="#">Tested on Multiple Devices</a></li>
                        </ul>
                    </section>
                </div>
                <!-- End Mobile Apps -->
                <!-- Start About Us -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">About Us</h3>
                        <ul>
                            <li><a href="#">Our Company</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Our Products</a></li>
                            <li><a href="#">Our Clients</a></li>
                            <li><a href="#">Our Testimonials</a></li>
                            <li><a href="#">24/7 Support</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </section>
                </div>
                <!-- End About Us -->
                <!-- Start Account Info -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title">Account Info</h3>
                        <ul>
                            <li><a href="#">My Shopping Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">My Tickets</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Single Tickets</a></li>
                        </ul>
                    </section>
                </div>
                <!-- End Account Info -->
            </div>
            <!-- End Footer Info -->
            <hr class="hr-light">
            <!-- Start Copyright -->
            <p class="footer-copyright text-center">© 2018 Inspina | All rights <a href="http://www.17sucai.com/">Reserved</a></p>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Start Back To Top -->
    <a class="scroll-to-top-btn" href="#">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- End Back To Top -->
    <div class="site-backdrop"></div>
    <!-- Modernizr JS -->
    <script src="/Home/js/modernizr.min.js"></script>
    <!-- JQuery JS -->
    <script src="/Home/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="/Home/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="/Home/js/bootstrap.min.js"></script>
    <!-- CountDown JS -->
    <script src="/Home/js/count.min.js"></script>
    <!-- Gmap JS -->
    <script src="/Home/js/gmap.min.js"></script>
    <!-- ImageLoader JS -->
    <script src="/Home/js/imageloader.min.js"></script>
    <!-- Isotope JS -->
    <script src="/Home/js/isotope.min.js"></script>
    <!-- NouiSlider JS -->
    <script src="/Home/js/nouislider.min.js"></script>
    <!-- OwlCarousel JS -->
    <script src="/Home/js/owl.carousel.min.js"></script>
    <!-- PhotoSwipe UI JS -->
    <script src="/Home/js/photoswipe-ui-default.min.js"></script>
    <!-- PhotoSwipe JS -->
    <script src="/Home/js/photoswipe.min.js"></script>
    <!-- Velocity JS -->
    <script src="/Home/js/velocity.min.js"></script>
    <!-- Main JS -->
    <script src="/Home/js/script.js"></script><script src="/Home/js/custom.js"></script>
</body>
</html>
