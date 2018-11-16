@extends('Admin.AdminPublic.public')
@section('main')
<html>
 <head>
   <style type="text/css" media="screen">
        td{
            vertical-align: middle !important;
        }
    </style>
 </head>
 <script type="text/javascript" src="/static/js/jquery-1.8.3.min.js"></script>
 <body>
  <div class="wrapper" style="margin-top: 30px"> 
   <div class="row"> 
    <div class="col-sm-12">
    <section class="panel"> 
   <header class="panel-heading">
     订单列表 
    <span class="tools pull-right"> <a href="javascript:;" class="fa fa-chevron-down"></a> <a href="javascript:;" class="fa fa-times"></a> </span>
    <form action="/crder/" method="get">
    </form> 
   </header> 
   <div class="panel-body"> 
    <section id="unseen"> 
     <table class="table table-bordered table-striped table-condensed"> 
      <thead> 
       <tr> 
        <th class="numeric">id</th>  
        <th class="numeric">商品id</th>
        <th class="numeric">商品名称</th> 
        <th class="numeric">单价</th> 
        <th class="numeric">数量</th> 
        <th class="numeric">商品图片</th>  
       </tr> 
      </thead> 
      <tbody>
        @foreach($data as $value)
        <!-- dd($row); -->
       <tr> 
        <td class="numeric">{{$value->id}}</td> 
        <td class="numeric">{{$value->oid}}</td>
        <td class="numeric">{{$value->gname}}</td> 
        <td class="numeric">{{$value->price}}</td> 
        <td class="numeric">{{$value->gnum}}</td> 
        <td class="numeric">{{$value->pic}}</td> 

      </tr>
      @endforeach
      </tbody> 
     </table>
    </section> 
   </div>
   <header class="panel-heading" style="border-bottom: hidden; margin-top: 70px;">
      <div>
        <a href="/crder" class="btn btn-warning"><<订单列表</a>
      </div>
    </header> 
  </section>
</div>
</div>
</div>
 </body>
 </script>
</html>
@endsection
@section('title','订单列表')
