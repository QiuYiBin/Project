<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>@yield('title')</title>

  <!--icheck-->
  <link href="/Admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="/Admin/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="/Admin/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="/Admin/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="/Admin/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="/Admin/js/morris-chart/morris.css">

  <!--common-->
  <link href="/Admin/css/style.css" rel="stylesheet">
  <link href="/Admin/css/style-responsive.css" rel="stylesheet">
    <!-- Placed js at the end of the document so the pages load faster -->

  <script src="/Admin/js/jquery-1.10.2.min.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/Admin/js/html5shiv.js"></script>
  <script src="/Admin/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">
        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/Admin/images/logo.png" alt=""></a>
        </div>
        <div class="logo-icon text-center">
            <a href="index.html"><img src="/Admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/Admin/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="/admins"><i class="fa fa-home"></i> <span>首页</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/adminuser">用户列表</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-user"></i> <span>管理员管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/adminusers">管理员列表</a></li>
                        <li><a href="/adminusers/create">添加管理员</a></li>
                        <li><a href="/role">角色列表</a></li>
                        <li><a href="/role/create">角色添加</a></li>
                        <li><a href="/authlist">权限列表</a></li>
                        <li><a href="/authlist/create">权限添加</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bars"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admincates">分类列表</a></li>
                        <li><a href="/admincates/create">添加分类</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bullhorn"></i> <span>公告管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/adminarticle/create">公告添加</a></li>
                        <li><a href="/adminarticle">公告列表</a></li>           
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-thumbs-up"></i> <span>商品管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admingoods">商品列表</a></li>
                        <li><a href="/admingoods/create">添加商品</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-thumbs-up"></i> <span>评论管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/comment">评论列表</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="/slider"><i class="fa fa-video-camera"></i> <span>轮播图管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/slider">轮播图列表</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-jpy"></i> <span>订单管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/crder">订单列表</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href=""><i class="fa fa-paperclip"></i> <span>友情链接</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/link">链接详情</a></li>
                    </ul>
                </li>

                <li class="menu-list"><a href="#"><i class="fa fa-bookmark-o"></i> <span>优惠券</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/coupon/create">添加优惠券</a></li>
                        <li><a href="/coupon">优惠券详情表</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-bullhorn"></i> <span>广告管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/advert">广告列表</a></li>
                        <li><a href="/advert/create">广告添加</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fa fa-file-text"></i> <span>文章管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/word">文章列表</a></li>   
                        <li><a href="/word/create">添加文章</a></li>
                    </ul>
                </li>
                <li><a href="/adminlogin"><i class="fa fa-power-off"></i> <span>注销</span></a></li>
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->
            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="/Admin/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Admin/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Admin/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Admin/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="/Admin/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/Admin/images/photos/user-avatar.png" alt="" />
                            Hello {{session('name')}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <!-- <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li> -->
                            <li><a href="/adminlogin"><i class="fa fa-sign-out"></i>注销</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--notification menu end -->
        </div>
        <!-- header section end-->
        <!--body wrapper start-->
        <div class="wrapper">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
              </ul>
              </div>
            @endif
            @if(session('success'))
            <!-- 添加成功样式 -->
            <div class="alert alert-success alert-block fade in">
                <button class="close close-sm" type="button" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <h4>
                    {{session('success')}}
                </h4>
            </div>
            <!-- 添加成功样式结束 -->
            @endif
            @if(session('error'))
            <!-- 添加失败样式 -->
            <div class="alert alert-block alert-danger fade in">
                <button class="close close-sm" type="button" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{session('error')}}</strong>
            </div>
            <!-- 添加失败样式结束 -->
            @endif
            <!-- 主体内容开始 -->
            @section('main')
            @show
            <!-- 主体内容结束 -->
        </div>
        <!--body wrapper end-->
    </div>
        <!--footer section start-->
        <footer>
            2018 &copy; &nbsp;<a href="http://www.mycodes.net/" target="_blank">还可以拯救一下团队制作</a>
        </footer>
        <!--footer section end-->
</section>

    <script src="/Admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/Admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Admin/js/bootstrap.min.js"></script>
    <script src="/Admin/js/modernizr.min.js"></script>
    <script src="/Admin/js/jquery.nicescroll.js"></script>

    <!--easy pie chart-->
    <script src="/Admin/js/easypiechart/jquery.easypiechart.js"></script>
    <script src="/Admin/js/easypiechart/easypiechart-init.js"></script>

    <!--Sparkline Chart-->
    <script src="/Admin/js/sparkline/jquery.sparkline.js"></script>
    <script src="/Admin/js/sparkline/sparkline-init.js"></script>

    <!--icheck -->
    <script src="/Admin/js/iCheck/jquery.icheck.js"></script>
    <script src="/Admin/js/icheck-init.js"></script>

    <!-- jQuery Flot Chart-->
    <script src="/Admin/js/flot-chart/jquery.flot.js"></script>
    <script src="/Admin/js/flot-chart/jquery.flot.tooltip.js"></script>
    <script src="/Admin/js/flot-chart/jquery.flot.resize.js"></script>


    <!--Morris Chart-->
    <script src="/js/morris.js"></script>
    <script src="/Admin/js/morris-chart/raphael-min.js"></script>

    <!--Calendar-->
    <script src="/Admin/js/calendar/clndr.js"></script>  
    <script src="/Admin/js/calendar/evnt.calendar.init.js"></script>
    <script src="/Admin/js/calendar/moment-2.2.1.js"></script>
    <script src="/js/underscore-min.js"></script>

    <!--common scripts for all pages-->
    <script src="/Admin/js/scripts.js"></script>

    <!--Dashboard Charts-->
    <script src="/Admin/js/dashboard-chart-init.js"></script>


    @section('js')
    @show

    </body>
    <script type="text/javascript">
        window.setTimeout(function(){
            $('[data-dismiss="alert"]').alert('close');
        },3000);
    </script>
</html>
