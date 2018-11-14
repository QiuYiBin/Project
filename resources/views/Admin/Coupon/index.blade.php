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
 <body>
  <div class="wrapper" style="margin-top: 30px;"> 
   <div class="row"> 
    <div class="col-sm-12"> 
     <section class="panel"> 
      <header class="panel-heading">
        优惠券列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <div class="row-fluid"> 
          <div class="span6"> 
           <form action="/coupon" method="get"> 
            <div class="dataTables_filter" id="dynamic-table_filter">
             <input class="form-control" aria-controls="dynamic-table" name="keywords" type="text" value="{{$request['keywords'] or ''}}" placeholder="在此输入方案名" />
             <input type="submit" value="搜索" class="btn btn-danger" /> 
            </div> 
           </form> 
          </div> 
         </div> 
         <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr> 
            <th class="numeric">id</th> 
            <th class="numeric">方案</th>
            <th class="numeric">开始时间</th> 
            <th class="numeric">结束时间</th> 
            <th class="numeric">数量</th>
            <th class="numeric">操作</th> 
           </tr> 
          </thead> 
          <tbody class=".table-striped">
          @foreach($coupon as $row) 
           <tr class="odd"> 
            <td class="numeric">{{$row->id}}</td> 
            <td class="numeric">{{$row->should}}</td>
            <td class="numeric">{{$row->start_time}}</td> 
            <td class="numeric">{{$row->end_time}}</td> 
            <td class="numeric">{{$row->num}}</td> 
            <td class="">
              <a href="coupon/{{$row->id}}/edit" class="btn btn-warning">修改</a>|  
              <a href="javascript:void(0)" class="btn btn-danger del">删除</a>
            </td> 
           </tr>
           @endforeach 
          </tbody> 
         </table> 
          <div class="dataTables_paginate paging_full_numbers" id="pages" style="float:right;">
            {{$coupon->appends($request)->render()}} 
          </div> 
         </div>
          <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div> 
        </div> 
       </div> 
      </div> 
     </section> 
    </div> 
   </div> 
  </div>
 </body>
 <script type="text/javascript">
   // alert($);
   //绑定点击事件
    $(".del").click(function(){
    //获取id  根据当前对象找到祖先tr的位置下的第一个td 属性值为id
    id=$(this).parents("tr").find("td:first").html();
    // alert(id);
    //获取删除数据所在的tr 因为删除成功了页面没有刷新删除数据 tr没有删除 
    s=$(this).parents("tr");
    //ajax
    $.get("/couponajax",{id:id},function(data){
        if(data.msg==1){
          //删除数据所在的tr
          s.remove();
          Load();
        }else{
          alert("删除失败");
        }
    },'json');

   });
 </script>
</html>
@endsection
@section('title','优惠券列表')
