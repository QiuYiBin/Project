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
        权限列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
          <div id="uid">
         <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr role="row"> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">权限名</th> 
           
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">控制器</th>

            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">方法</th> 
            
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th>  
           </tr> 
          </thead> 
          <tbody class=".table-striped">
            @foreach($data as $row)
           <tr class="odd"> 
            <td class="">{{$row->id}}</td> 
            <td class="">{{$row->name}}</td>
            <td class="">{{$row->mname}}</td>
            <td class="">{{$row->aname}}</td>
            <td class="">
              <a href="" class="btn btn-success del">删除</a>
              <a href="/authlist/{{$row->id}}/edit" class="btn btn-warning">修改</a>             
            </td>
           </tr> 
            @endforeach
          </tbody> 
         </table>
         </div>
         <div style="float: right">
          @foreach($pp as $row)
          <a href="javascript:void(0)" class="btn btn-success del" onclick="page({{$row}})">{{$row}}</a>
           @endforeach
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
 $(".del").click(function(){
 	//获取id
 	id=$(this).parents("tr").find("td:first").html();
 	//获取删除数据所在的tr
 	s=$(this).parents("tr");
 	//Ajax
 	$.get("/authlists",{id:id},function(data){
 		if(data.msg == 1){	
 			alert("删除成功");
 			//移除删除数据所在的tr
 			s.remove();
      //删除完需要加载数据
      Load();
 		}else{
      //终止请求动作
    	request.abort();
 			//alert("删除失败");
 		}
 	},'json')
 });

  function page(page){
    // alert(page);
     //触发Ajax
    $.get("/authlist",{page:page},function(data){
      // alert(data);
      $("#uid").html(data);
    });
  }
</script>
</html>
@endsection
@section('title','权限列表')