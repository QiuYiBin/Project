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
       分类列表 
      <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
     </header>
     <div class="panel-body"> 
      <div class="adv-table"> 
       <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid">
        <div class="row-fluid">
         <div class="span6">
          	<form action="/admincates" method="get">
  	        	<div class="dataTables_filter" id="dynamic-table_filter"> 
  	           		<input class="form-control" aria-controls="dynamic-table" name="name" type="text" value="{{$request['name'] or ''}}" placeholder="在此输入分类名" />
  	           		<input type="submit" value="搜索" class="btn btn-danger">
  	        	</div>
          	</form>
         </div>
        </div>
        <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
         <thead> 
          <tr role="row">
           <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" style="width: 293px;" aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th>
           <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" style="width: 293px;" aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">分类名</th>
           <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" style="width: 293px;" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">PID</th>
           <th tabindex="0" class="hidden-phone sorting" role="columnheader" aria-controls="dynamic-table" style="width: 293px;" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">PATH</th>
           <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th>
          </tr> 
         </thead>  
         <tbody class=".table-striped">
          @foreach($cate as $row)
          <tr class="odd"> 
           <td class="">{{$row->id}}</td> 
           <td class="">{{$row->name}}</td> 
           <td class="">{{$row->pid}}</td> 
           <td class="">{{$row->path}}</td> 
           <td class="">
              <a href="/admincates/{{$row->id}}/edit" class="btn btn-warning">修改</a>|
			        <form action="/admincates/{{$row->id}}" class="form-group" method="post">
				      <button type="submit" class="btn btn-danger">删除</button>
				        {{csrf_field()}}
				        {{method_field('DELETE')}}
			       </form>
            </td>
          </tr>
          @endforeach
         </tbody>
        </table>
        <div style="float: right;">
        	{{$cate->appends($request)->render()}}
        </div>
       </div>
        <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div>
    </section>  
  </div>
</div>
</div>
 </body>
</html>
@endsection
@section('title','分类列表')