@extends("Admin.AdminPublic.public")
@section("main")
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
        角色列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr role="row"> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">角色</th> 
           
           <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">状态</th> 

            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th> 
           </tr> 
          </thead> 
          <tbody class=".table-striped">
            @foreach($role as $row)
           <tr class="odd"> 
            <td class="">{{$row->id}}</td> 
            <td class="">{{$row->name}}</td>
            <td class="">{{$row->status}}</td>
            <td class="">

             <a href="javascript:void(0)" class="btn btn-danger del">删除</a>

              <a href="/role/{{$row->id}}/edit" class="btn btn-warning">修改</a>
              <a href="/authrole/{{$row->id}}" class="btn btn-info">分配权限</a>
            </td>
           </tr> 
            @endforeach
          </tbody> 
         </table>
         <div style="float: right">
          
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
//alert($);
 $(".del").click(function(){	
 	//获取id
 	id=$(this).parents("tr").find("td:first").html();
 	//获取删除数据所在的tr
 	s=$(this).parents("tr");

 	//Ajax
 	$.get("/roles",{id:id},function(data){	
 		//alert(data);
 		if(data.msg==1){	
 			alert("删除成功");
 			//移除删除数据所在的tr
 			s.remove();
 		}else{	
 			alert("删除失败");
 		}
 	},'json')
 });
</script>
</html>
@endsection
@section('title','管理员列表')