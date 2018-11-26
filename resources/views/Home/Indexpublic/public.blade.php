<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
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

    <style>
        .item_submit
        {
        background-color:#fff;
        border: 1px solid #e1e7ec;
        width:40px;
        height:40px;
        border-radius:40px;
        outline:none;
        color:#000;
        cursor:pointer;
        font-size:15px;
        }
</style>
    <script src="/Home/js/jquery-1.8.3.min.js"></script>
</head>
<body>
<!-- Start Shop Category Menu -->
<div class="offcanvas-container" id="shop-categories">
    <div class="offcanvas-header">
        <h3 class="offcanvas-title">商品类别</h3>
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
    	
    </div>
    
    @if(session('username'))
       <div style="line-height: 39px;float: right;"> 
        <a href="#">欢迎{{session('username')}}</a>
        <a href="/homelogin/create"></i>退出</a>
        </div>
    @else
        <div style="line-height: 39px;float: right;">
        <a href="/homelogin">登陆</a>
        <a href="/register">注册</a>
        </div>
    @endif
</div>
<!-- End TopBar -->
<!-- Start NavBar -->
<header class="navbar navbar-sticky" style="min-height:80px;margin-bottom:0px">
    <!-- Start Search -->
    <form class="site-search" action="/goods" method="get">
        <input type="text" name="search" placeholder="请输入搜索内容">
        <div class="search-tools">
            <button class="item_submit">&nbsp;<i class="icon-search"></i>&nbsp;</button>
            <!-- <input type="submit" class="item_submit" value="Go"> -->
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
                
                <a href="/goodsall" mehtod="post"><span>购物</span></a>
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
                        <li><a href="/homedetail">我的订单</a></li>
                        <li><a href="/homewish">我的收藏</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="/homelogin/create"><i class="fa fa-lock"></i>退出</a></li>
                    </ul>
                </div> 
                <!-- End Account -->
                <!-- Start Cart -->
                <div class="cart">
                    <a href="/homecart"></a>
                    <i class="icon-bag"></i>
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
<footer class="site-footer">
        <div class="container">
            <!-- Start Footer Info -->
            <div class="row">
                <!-- Start Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-light-skin">
                        <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inspina联系信息</font></font></h3>
                        <p class="text-white"><i class="fa fa-phone"></i> +1 888 888 8888</p>
                        <p class="text-white"><i class="fa fa-envelope-o"></i> info@yoursite.com</p>
                        <p class="text-white"><i class="fa fa-map-marker"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 221B Baker Street，London，UK</font></font></p>
                        <ul class="list-unstyled text-sm text-white">
                            <li><span class="opacity-50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">周一至周五：</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 09：00-18 </font><span class="opacity-50"><font style="vertical-align: inherit;">：</font></span><font style="vertical-align: inherit;"> 00</font></font></li>
                            <li><span class="opacity-50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">周六至周日：</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 10 </font><span class="opacity-50"><font style="vertical-align: inherit;">：</font></span><font style="vertical-align: inherit;"> 00-15：00</font></font></li>
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
                        <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的服务</font></font></h3>
                        <ul>
                            <li><a href="/friendship">友情链接</a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">完全响应的前端</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">兼容所有浏览器</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">W3C Walidated Code</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">惊人的晚餐想法</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50多个不同的页面</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">在多个设备上测试</font></font></a></li>
                        </ul>
                    </section>
                </div>
                <!-- End Mobile Apps -->
                <!-- Start About Us -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></h3>
                        <ul>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们公司</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的队伍</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的产品</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的客户</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的推荐</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全天候支持</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">隐私政策</font></font></a></li>
                        </ul>
                    </section>
                </div>
                <!-- End About Us -->
                <!-- Start Account Info -->
                <div class="col-lg-3 col-md-6">
                    <section class="widget widget-links widget-light-skin">
                        <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户信息</font></font></h3>
                        <ul>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的购物车</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的简历</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的门票</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单跟踪</font></font></a></li>
                            <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单票</font></font></a></li>
                        </ul>
                    </section>
                </div>
                <!-- End Account Info -->
            </div>
            <!-- End Footer Info -->
            <hr class="hr-light">
            <!-- Start Copyright -->
            <p class="footer-copyright text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">©2018 Inspina | </font><a href="http://www.17sucai.com/"><font style="vertical-align: inherit;">保留</font></a><font style="vertical-align: inherit;">所有权利</font></font><a href="http://www.17sucai.com/"><font style="vertical-align: inherit;"></font></a></p>
            <!-- End Copyright -->
        </div>
    </footer>
    <!-- Start Back To Top -->
    <a class="scroll-to-top-btn" href="#">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- End Back To Top -->
    <div class="site-backdrop"></div>
    <!-- Modernizr JS -->
    <script src="/Home/js/modernizr.min.js"></script>
    <!-- JQuery JS -->
    <!-- <script src="/Home/js/jquery.min.js"></script> -->
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
