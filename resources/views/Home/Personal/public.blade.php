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
       <li><a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a></li> 
       <li class="separator">&nbsp;</li> 
       <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- End Page Title -->
    <!-- 校验失败提示   -->
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show text-center margin-bottom-1x"><span class="alert-close" data-dismiss="alert"></span>
    @foreach ($errors->all() as $error)
     <p><i class="fa fa-bell"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $error }}</font></font></p>
      @endforeach
    </div>
     @endif 

   <!-- Start My Profile --> 
   <div class="container padding-top-1x padding-bottom-3x"> 
    <div class="row"> 
     <div class="col-lg-4"> 
      <aside class="user-info-wrapper"> 
       <div class="user-cover account-details"> 
        
       </div> 
       <div class="user-info"> 
        <div class="user-avatar" >
          @if (session('userinfo')['pic'] != null)
         <img src= "/Uploads/User/{{session('userinfo')['pic']}}" 
         style="height: 110px" alt="用户" />
          @else
          <img src= "/Uploads/ylh.jpg" style="height: 110px" alt="用户" />
          @endif
        </div> 
        <div class="user-data"> 
         <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{session('userinfo')['name']}}</font></font></h4>
        </div> 
       </div> 
      </aside> 
      <nav class="list-group"> 
       <a class="list-group-item" href="/homepersonal"><i class="icon-head"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">个人中心</font></font></a> 
       <a class="list-group-item with-badge" href="/homedetail"><i class="icon-bag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的订单</font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a> 
       <a class="list-group-item" href="/homeaddres"><i class="icon-map"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的地址</font></font></a> 
       <a class="list-group-item with-badge" href="/homewish"><i class="icon-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的心愿单</font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a> 
       <a class="list-group-item with-badge" href="/homecoupon"><i class="icon-tag"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的优惠卷</font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a> 
      </nav> 
     </div> 
     @section('right')
     @show 

    </div> 
   </div> 
   <!-- End My Profile --> 
  </div>
@endsection
@section('title','个人中心')