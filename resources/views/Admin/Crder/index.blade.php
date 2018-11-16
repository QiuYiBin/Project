@extends('Admin.AdminPublic.public')
@section('main')
<html>
 <head></head>
 <body>
  <div class="wrapper" style="margin-top: 30px;">
  <div class="row"> 
   <div class="col-sm-12"> 
    <section class="panel"> 
     <header class="panel-heading">
       订单列表 
      <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
     </header> 
     <div class="panel-body"> 
      <div class="adv-table"> 
       <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
        <div class="row-fluid"> 
         <div class="span6"> 
          <form action="/admincates" method="get"> 
           <div class="dataTables_filter" id="dynamic-table_filter"> 
            收件人：<input class="form-control" aria-controls="dynamic-table" name="keywords" type="text" value="" placeholder="在此输入收件人" /> 
            订单号：<input class="form-control" aria-controls="dynamic-table" name="keywordss" type="text" value="" placeholder="在此输入订单号" /> 
            <input type="submit" value="搜索" class="btn btn-danger" /> 
           </div> 
          </form> 
         </div> 
        </div> 
        <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
         <thead> 
          <tr> 
            <th class="numeric">id</th> 
            <th class="numeric">用户</th>
            <th class="numeric">收件人</th> 
            <th class="numeric">收货地址</th> 
            <th class="numeric">电话</th> 
            <th class="numeric">邮编</th> 
            <th class="numeric">总金额</th> 
            <th class="numeric">状态</th>
            <th class="numeric">订单号</th>  
            <th class="numeric">操作</th>
            <th class="numeric">查看</th>
           </tr> 
         </thead> 
         <tbody class=".table-striped">
          @foreach($data as $row) 
          <tr class="odd"> 
            <td class="numeric">{{$row->id}}</td> 
            <td class="numeric">{{$row->uid}}</td>
            <td class="numeric">{{$row->linkname}}</td> 
            <td class="numeric">{{$row->address}}</td> 
            <td class="numeric">{{$row->tel}}</td> 
            <td class="numeric">{{$row->code}}</td> 
            <td class="numeric">{{$row->total}}</td> 
            <td class="numeric">{{$row->status}}</td> 
            <td class="numeric">{{$row->orderid}}</td>
            
           <td class=""><a href="/crder/{{$row->id}}/edit" class="btn btn-warning">修改</a>| 
            <form action="/crder/{{$row->id}}" class="form-group" method="post"> 
             <button type="submit" class="btn btn-danger">删除</button> 
             <input type="hidden" name="_token" value="XluUDkxoh3mfoyOSqYl1x78aWkB7zOYe5ffS20OC" /> 
             <input type="hidden" name="_method" value="DELETE" /> 
            </form> 
          </td>
          <td class="numeric"><a href="/details/{{$row->id}}" class="btn btn-info">查看订单详情</a></td>
          </tr>
          @endforeach 
         </tbody> 
        </table> 
        <div style="float: right;"> 
         
        </div> 
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
    $.get("/crderajax",{id:id},function(data){
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
@section('title','订单列表')
