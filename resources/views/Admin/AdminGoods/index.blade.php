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
     Editable Table 
    <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
   </header> 
   <div class="panel-body"> 
    <div class="adv-table "> 
     <div class="clearfix"> 
      <div class="btn-group"> 
       <a href="/admingoods/create"><button class="btn btn-primary" id="editable-sample_new"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加新商品</button></a>
      </div>  
     </div> 
     <div class="space15"></div> 
     <div class="dataTables_wrapper form-inline" id="editable-sample_wrapper" role="grid">
      <div class="span6">
          <form action="/admingoods" method="get">
            <div class="dataTables_filter" id="dynamic-table_filter"> 
                <input class="form-control" aria-controls="dynamic-table" name="name" type="text" value="{{$request['name'] or ''}}" placeholder="请输入商品名称">
                <input type="submit" value="搜索" class="btn btn-danger">
            </div>
          </form>
      </div>
      <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
       <thead> 
        <tr role="row">
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">ID</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">名字</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Last Name: activate to sort column ascending" rowspan="1" colspan="1">商品图片</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Points: activate to sort column ascending" rowspan="1" colspan="1">分类</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">价格</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Edit: activate to sort column ascending" rowspan="1" colspan="1">库存</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Delete: activate to sort column ascending" rowspan="1" colspan="1">状态</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Delete: activate to sort column ascending" rowspan="1" colspan="1">销量</th>
         <th tabindex="0" class="sorting" role="columnheader" aria-controls="editable-sample" aria-label="Delete: activate to sort column ascending" rowspan="1" colspan="1">操作</th>
        </tr> 
       </thead> 
       <tbody class=".table-striped">
        @foreach($data as $value)
        <tr class="odd"> 
         <td class="">{{$value->id}}</td> 
         <td class="">{{$value->name}}</td> 
         <td class=""><img src="/Uploads/Goods/{{$value->pic}}" alt="" width="100"></td> 
         <td class="">{{$value->catesname}}</td> 
         <td class="">{{$value->price}}</td> 
         <td class="">{{$value->store}}</td> 
         <td class="">{{$value->status}}</td> 
         <td class="">{{$value->sales}}</td> 
         <td class=""><a href="/admingoods/{{$value->id}}/edit" class="btn btn-warning">修改</a>|
          <form action="/admingoods/{{$value->id}}" method="post" class="form-group">
            <button class="btn btn-danger">删除</button>
            {{csrf_field()}}
            {{method_field('DELETE')}}
          </form>
        </td> 
        </tr>
        @endforeach
       </tbody>
      </table>
      <div class="row">
       <div class="col-lg-6">
        {{$data->appends($request)->render()}}
       </div>
      </div>
     </div>
     <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div>   
    </div> 
   </div> 
  </section>
</div>
 </body>
</html>
@endsection
@section('title','商品列表')