@extends('Home.Indexpublic.public')
@section('main')
  <div class="offcanvas-wrapper"> 
   <!-- Start Page Title --> 
   <div class="page-title"> 
    <div class="container"> 
     <div class="column"> 
      <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></h1> 
     </div> 
     <div class="column"> 
      <ul class="breadcrumbs"> 
       <li><a href="index-1.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a></li> 
       <li class="separator">&nbsp;</li> 
       <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></li> 
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
         <label class="edit-avatar file_upload" for="inputEmail1"></label>
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
       <a class="list-group-item with-badge" href="/homeorder"><i class="icon-bag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span></a> 
       <a class="list-group-item" href="/homeaddres"><i class="icon-map"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的地址</font></font></a> 
       <a class="list-group-item with-badge" href="account-wishlist.html"><i class="icon-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的心愿单</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span></a> 
       <a class="list-group-item with-badge" href="account-tickets.html"><i class="icon-tag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的优惠卷</font></font><span class="badge badge-primary badge-pill"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span></a> 
      </nav> 
     </div> 
     @section('right')
     @show 

    </div> 
   </div> 
   <!-- End My Profile --> 
  </div>
@endsection