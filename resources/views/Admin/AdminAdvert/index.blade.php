@extends('Admin.AdminPublic.public')
@section('main')
<html>
 <head>
 <script src="/Admin/js/jquery-1.10.2.min.js"></script>
 	<style type="text/css" media="screen">
 		td{
 			vertical-align: middle !important;
 		}
 	</style>
 </head>
 <body>
  <section class="panel" style="margin-top: 45px"> 
   <header class="panel-heading">
     广告列表
    <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
   </header> 
   <div class="panel-body"> 
    <div class="adv-table "> 
     <div class="clearfix"> 
      <div class="btn-group"> 
       <a href="/advert/create"><button class="btn btn-primary" id="editable-sample_new"><i class="fa fa-plus"></i>&nbsp;&nbsp;添加广告</button></a>
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
     <div id="uid">
      <table class="display table table-hover table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
       <thead> 
        <tr role="row">
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">ID</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告名称</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告图片</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">广告状态</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">链接地址</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">内容描述</th>
         <th class="sorting_disabled" role="columnheader"  aria-label="First Name" rowspan="1" colspan="1">操作</th>
        </tr>
       </thead> 
       <tbody class=".table-striped">
       @foreach($data as $row)
        <tr class="odd"> 
         <td class="">{{$row->id}}</td> 
         <td class="">{{$row->name}}</td> 
         <td class=""><img src="/Uploads/Advert_img/{{$row->pic}}" width="100"></td> 
         <td class="">@if($row->status==0)有效@else过期@endif</td>
         <td class="">{{$row->url}}</td> 
         <td class="">{{$row->title}}</td>
         <td class=""><a href="/advert/{{$row->id}}/edit" class="btn btn-warning">修改</a>|<a href="javascript:void(0)" class="btn btn-warning del">Ajax删除</a>|
         <form action="/advert/{{$row->id}}" class="form-group" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button class="btn btn-danger">删除</button>
         </form>
        </td> 
        </tr>
        @endforeach
       </tbody>
      </table>
     </div>
     <div style="float: right;">
          <ul class="pagination">
              @foreach($pp as $row)
          <li><a href="javascript:void(0)" onclick="ppt({{$row}})">{{$row}}</a></li>
          @endforeach
          </ul>
      </div>
     </div>
    </div> 
   </div> 
  </section>
 </body>
 <script>
    $('.del').click(function(){
      id=$(this).parents("tr").find("td:first").html();
      s=$(this).parents('tr');
      $.get("/del",{id:id},function(data){
          if(data==1){
            alert('删除成功');
            s.remove();
          }else{
            alert('删除失败');
          }
          // alert(data);
      });
    });
    function ppt (page){
      $.get("/advert",{page:page},function(dd){
          $('#uid').html(dd);
      });
    }
 </script>
</html>
@endsection
@section('title','广告列表')