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
        友情链接列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <div class="row-fluid"> 
          <div class="span6"> 
           <form action="/link" method="get"> 
            <div class="dataTables_filter" id="dynamic-table_filter">
             <input class="form-control" aria-controls="dynamic-table" name="keywords" type="text" value="{{$request['keywords'] or ''}}" placeholder="在此输入站点名" />
             <input type="submit" value="搜索" class="btn btn-danger" /> 
            </div> 
           </form> 
          </div> 
         </div> 
         <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr> 
            <th class="numeric">序列号</th> 
            <th class="numeric">站点名</th> 
            <th class="numeric">地址</th> 
            <th class="numeric">邮箱</th>
            <th class="numeric">描述</th>  
            <th class="numeric">状态</th> 
            <th class="numeric">操作</th> 
           </tr> 
          </thead> 
          <tbody class=".table-striped">
          @foreach($data as $row) 
           <tr class="odd"> 
            <td class="numeric">{{$row->id}}</td> 
            <td class="numeric">{{$row->name}}</td>
            <td class="numeric">{{$row->url}}</td>
            <td class="numeric">{{$row->email}}</td>
            <td class="numeric">{{$row->title}}</td> 
            <td class="numeric">{{$row->status}}</td>  
            <td class="">
              <a href="/link/{{$row->id}}/edit" class="btn btn-warning">修改</a>|
              <form action="/link/{{$row->id}}" method="post" class="form-group">
                {{csrf_field()}}
                {{method_field("DELETE")}} 
                <a href="javascript:void(0)" class="btn btn-danger del">删除</a>
              </form> 
            </td> 
           </tr>
           @endforeach 
          </tbody> 
         </table> 
          <div class="dataTables_paginate paging_full_numbers" id="pages" style="float:right;">
            
          </div> 
         </div> 
        </div>
        <div class="dataTables_paginate paging_full_numbers" id="pages" style="float:right;">
            {{$data->appends($request)->render()}} 
        </div> 

          <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div>
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
    //获取删除数据所在的tr 因为删除成功了页面没有刷新删除数据 tr没有删除 
    s=$(this).parents("tr");
    $.get("/linkajax",{id:id},function(data){
           // alert(data);
           if(data.msg==1){
            alert("删除成功");
            //删除数据所在的tr
            s.remove();
           }else{
            alert("删除失败");
           }
    },'json');

   });
 </script>
</html>
@endsection
@section('title','友情链接列表')
