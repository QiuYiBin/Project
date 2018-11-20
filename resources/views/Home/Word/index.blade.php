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
       <li>我的文章</li> 
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

        @foreach($word as $row)
      <article class="row"> 
       <div class="col-md-3 order-md-1"> 
        <ul class="post-meta"> 
         <li><i class="icon-clock"></i><a href="/homeword/{{$row->id}}">&nbsp;{{date('Y-m-d',$row->time)}}</a></li> 
         <li><i class="icon-head"></i>&nbsp;{{$row->title}}</li> 
          
         <li><i class="icon-speech-bubble"></i><a href="#">&nbsp;0 评论</a></li> 
        </ul> 
       </div> 
       <div class="col-md-9 order-md-2 blog-post"> 
        <a class="post-thumb" href="/homeword/{{$row->id}}"></a> 
        <h3 class="post-title"><a href="/homeword/{{$row->id}}">{{$row->title}}</a></h3> {!!$row->content!!}
        <p><a href="/homeword/{{$row->id}}" class="text-medium">阅读更多</a></p> 
       </div> 
      </article> 
        @endforeach
      
      <!-- End Blog Posts --> 
      
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