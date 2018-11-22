<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>modify</title>
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
<!-- Start NavBar -->
<header class="navbar navbar-sticky">
    <!-- Start Search -->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools">
            <span class="clear-search">Clear</span>
            <span class="close-search"><i class="icon-cross"></i></span>
        </div>
    </form>
    <!-- End Search -->
    <!-- Start Logo -->
    <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <a class="site-logo" href="index-1.html"><img src="/Home/images/logo/logo.png" alt="Inspina"></a>
        </div>
    </div>
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
               
                <!-- End Cart -->
            </div>
        </div>
    </div>
    <!-- End Toolbar -->
</header>
<!-- End NavBar -->

    <!-- End Page Title -->
    <!-- Start Account Access -->
    <div class="container padding-top-1x padding-bottom-3x">
        <div class="row">
            <div class="col-md-6">
                <form class="login-box" action="/doreset" id="fr" method="post">
                    <h4 class="margin-bottom-1x">重置密码</h4>
                    <div class="form-group input-group">
                        <input class="form-control" type="password" id="rd" name="password" placeholder="请填写新密码" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                <p id="err_password" style="font-size:13px"></p>
                {{csrf_field()}}
                    </div>
                    <div class="form-group input-group">
                        <input class="form-control" type="password" id="rw" name="ressword" placeholder="确认密码" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$" oninvalid="setCustomValidity('请输入8-16位的数字和字母');"
                oninput="setCustomValidity('');" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                 </div>
                 <input type="hidden" name="id" value="{{$id}}">
                    <div class="text-center text-sm-right">
                        <button class="btn btn-primary margin-bottom-none" type="submit">修改</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    <!-- End Footer -->
</div>
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- End Back To Top -->
<div class="site-backdrop"></div>
<!-- Modernizr JS -->
<script src="/home/js/jquery-1.8.3.min.js"></script>
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
<script type="text/javascript">
    e=false;
    // alert(1);
     $('#rd').blur(function(){
        // alert(1);
        $rd=$(this).val();
        $("#err_password").css("color",'#f66').html('');
     });

     $('#rw').blur(function(){
        $rw=$(this).val();
        // alert($rw);
        if($rw === $rd ){
            e= true;
        }else{
            $("#err_password").css("color",'#f66').html("两次密码不一致");
            e= false;
        }
     });
     
     $('#fr').submit(function(){
        if(e === true){
            return true;
        }else{
            return false;
        }
     });
</script>
</html>
