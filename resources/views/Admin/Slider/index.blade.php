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
  <div class="col-sm-12"> 
  <section class="panel" style="margin-top: 45px"> 
   <header class="panel-heading">
     轮播图列表   
    <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
   </header> 
   <div class="panel-body"> 
    <div class="adv-table "> 
     <div class="clearfix"> 
      <div class="btn-group"> 
       <a href="/slider/create"><button class="btn btn-primary" id="editable-sample_new"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加轮播图</button></a>
      </div>  
     </div> 
     <div class="space15"></div> 
     <div class="dataTables_wrapper form-inline" id="editable-sample_wrapper" role="grid">
      <!-- <div class="row"> -->
       <div class="col-lg-6" style="float: right; left: 400px">
        <div class="dataTables_filter" id="editable-sample_filter">
        	<form action="/admingoods" method="get">
        		<input class="form-control medium" aria-controls="editable-sample" type="text" />
        		<input type="submit" value="搜索" class="btn btn-success">
        	</form>
        </div>
       <!-- </div> -->
      </div>
      <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
       <thead> 
        <tr role="row">
         <th class="sorting_disabled" role="columnheader" aria-label="First Name" rowspan="1" colspan="1">ID</th>
         <th class="sorting_disabled" role="columnheader" aria-label="First Name" rowspan="1" colspan="1">标题</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Points: activate to sort column ascending" rowspan="1" colspan="1">图片</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Points: activate to sort column ascending" rowspan="1" colspan="1">地址</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Points: activate to sort column ascending" rowspan="1" colspan="1">排序</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">状态</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">操作</th>
        </tr> 
       </thead> 
       <tbody class=".table-striped">
        @foreach($data as $value)
        <tr class="odd">
         <td class="">{{$value->id}}</td> 
         <td class="">{{$value->name}}</td> 
         <td class=""><img src="./Uploads/Slider/{{$value->pic}}" width="100" alt="{{$value->name}}"></td> 
         <td class="">{{$value->url}}</td>
         <td class="">{{$value->sort}}</td>
         <td class="">{{$value->status}}</td>
         <td class="">
            <a href="/slider/{{$value->id}}/edit" class="btn btn-warning">修改</a>|
            <form action="/slider/{{$value->id}}" class="form-group" method="post">
              {{csrf_field()}}
              {{method_field("DELETE")}}
              <button class="btn btn-danger">删除</button>|
            </form>
              <button class="btn btn-danger del">Ajax删除</button>
            </td> 
        </tr>
        @endforeach
       </tbody>
      </table>
      <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div>
     </div> 
    </div> 
   </div> 
  </section>
</div>

 </body>
 <script type="text/javascript">
   $('.del').click(function(){
      var id = $(this).parents('tr').find('td:first').html();
      var tr = $(this).parents('tr');
      $.get('/sliderdel',{id:id},function(data){
          if(data.msg == 1){
            tr.remove();
          }else{
            alert('删除失败');
          }
      });
   });

 </script>
</html>
@endsection
@section('title','轮播图列表')