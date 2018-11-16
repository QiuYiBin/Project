@extends('Home.Indexpublic.public')
@section('main')
<html>
 <head></head>
 <body>
  <div class="offcanvas-wrapper"> 
   <!-- Start Page Title --> 
   <div class="page-title"> 
    <div class="container"> 
     <div class="column"> 
      <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font></h1> 
     </div> 
     <div class="column"> 
      <ul class="breadcrumbs"> 
       <li><a href="index-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a></li> 
       <li class="separator">&nbsp;</li> 
       <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- End Page Title --> 
   <!-- Start My Profile --> 
   <div class="container padding-top-1x padding-bottom-3x"> 
    <div class="row"> 
    <div class="col-lg-4"> 
      <aside class="user-info-wrapper"> 
       <div class="user-cover account-details"> 
        
       </div> 
       <div class="user-info"> 
        <div class="user-avatar">
         <a class="edit-avatar" href="#"></a>
         <img src="Home/images/account/user-ava.jpg" alt="用户" />
        </div> 
        <div class="user-data"> 
         <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">托尼斯塔克</font></font></h4>
         <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">加入2018年2月6日</font></font></span> 
        </div> 
       </div> 
      </aside> 
      <nav class="list-group"> 
       <a class="list-group-item" href="/homepersonal"><i class="icon-head"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></a> 
       <a class="list-group-item with-badge" href="account-orders.html"><i class="icon-bag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> 
       <a class="list-group-item" href="/homeaddres"><i class="icon-map"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的地址</font></font></a> 
       <a class="list-group-item with-badge" href="account-wishlist.html"><i class="icon-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的心愿单</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> 
       <a class="list-group-item with-badge" href="account-tickets.html"><i class="icon-tag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的优惠卷</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> 
      </nav> 
     </div> 
   <div class="col-lg-8"> 
   <div class="padding-top-2x mt-2 hidden-lg-up"></div> 
   <div class="table-responsive"> 
    <table class="table table-hover margin-bottom-none"> 
     <thead> 
      <tr> 
       <th style="height: 50px"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单＃</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购买日期</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></th> 
       <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">78A643CD409</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年4月13日</font></font></td> 
       <td><span class="text-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">取消</font></font></span></td> 
       <td><span class="text-medium">$450.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34VB5540K83</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年3月21日</font></font></td> 
       <td><span class="text-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">进行中</font></font></span></td> 
       <td><span class="text-medium">$125.99</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">112P45A90V2</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年3月9日</font></font></td> 
       <td><span class="text-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">延迟</font></font></span></td> 
       <td><span class="text-medium">$230.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28BA67U0981</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年2月19日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$400.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">502TR872W2</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年2月4日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$560.00</span></td> 
      </tr> 
      <tr> 
       <td><a class="text-medium navi-link" href="#" data-toggle="modal" data-target="#orderDetails"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47H76G09F33</font></font></a></td> 
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2018年1月23日</font></font></td> 
       <td><span class="text-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交付</font></font></span></td> 
       <td><span class="text-medium">$360.00</span></td> 
      </tr> 
     </tbody> 
    </table> 
   </div> 
   <hr /> 
   <div class="text-right">
    <a class="btn btn-link-primary margin-bottom-none" href="#"><i class="icon-download"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;订单详细信息</font></font></a>
   </div> 
  </div>
       <hr class="margin-top-1x margin-bottom-1x" /> 
       <div class="text-right"> 
        <button class="btn btn-primary margin-bottom-none" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="icon-circle-check" data-toast-title="Success!" data-toast-message="Your address updated successfuly."><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保存</font></font></button> 
       </div> 
      </div> 
     </form> 
    </div> 
   </div> 
  </div>
 </body>
</html>

@endsection
@section('title','首页')