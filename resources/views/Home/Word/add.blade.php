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
      <h1>我的文章</h1> 
     </div> 
     <div class="column"> 
      <ul class="breadcrumbs"> 
       <li><a href="/">首页</a> </li> 
       <li class="separator">&nbsp;</li> 
       <li><a href="/homeword">我的文章</a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- End Page Title --> 
   <!-- Start Page Content --> 
   <div class="container padding-top-1x padding-bottom-3x"> 
    <div class="row justify-content-center"> 
     <div class="col-lg-10"> 
      <!-- Start Blog Posts -->
      <div> 
        <center>
          <h1>{{$data->title}}</h1>
        </center>
      </div>
      <font style="float:right;margin-top: 5px"> 发表时间：{{date('Y-m-d',$data->time)}}</font>
      <div style=" margin-top:80px;">
        <h4>{!!$data->content!!}</h4>
      </div>
      
      <!-- End Pagination --> 
     </div> 
    </div> 
   </div> 
   <!-- End Page Content --> 
  </div>
 </body>
</html>
@endsection
@section('title','我的文章')