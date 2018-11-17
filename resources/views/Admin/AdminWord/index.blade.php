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
  <section class="panel" style="margin-top: 45px"> 
   <header class="panel-heading">
     文章列表 
    <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
   </header> 
   <div class="panel-body">
    <div class="adv-table "> 
     <div class="clearfix"> 
      <div class="btn-group"> 
       <a href="/word/create"><button class="btn btn-primary" id="editable-sample_new"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加文章</button></a>
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
        <tr role="row" style="text-align:center">
         <th rowspan="1" colspan="1" style="width:100px">ID</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" rowspan="1" colspan="1">列表</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" rowspan="1" colspan="1" style="width:100px">状态</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" rowspan="1" colspan="1" style="width:200px">时间</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" rowspan="1" colspan="1" style="width:300px">操作</th>
        </tr> 
       </thead> 
       <tbody class=".table-striped">
       @foreach($data as $row)
        <tr class="odd">
         <td class="">{{$row->id}}</td>
         <td class="">{{$row->title}}</td>
         <td class="">@if($row->status==0)有效@else无效@endif</td>
         <td class="">{{date("Y-m-d H:i:s",$row->time)}}</td>
         <td class="">
         <form action="/word/{{$row->id}}" method="post"><a href="/word/{{$row->id}}/edit" class="btn btn-warning">修改</a>|<button class="btn btn-danger">删除</button>|
          {{csrf_field()}}
          {{method_field('DELETE')}}
         <a href="/word/{{$row->id}}" class="btn btn-info">文章内容</a>
         </form>
         </td>
        </tr>
        @endforeach
       </tbody>
      </table>
      <div style="float: right;">
          {{$data->appends($request)->render()}}
      </div>
     </div> 
    </div> 
   </div> 
  </section>
 </body>
</html>
@endsection
@section('title','文章管理')