@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head> 
  <style type="text/css" media="screen">
        td{
            vertical-align: middle !important;
        }
        .descr{	
        	max-width: 100px;
        	overflow:hidden;
        	text-overflow:ellipsis;
        	white-space: nowrap;
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
        公告列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <div class="row-fluid"> 
          <div class="span6"> 
           <form action="/adminarticle" method="get">  
           </form> 
          </div> 
         </div> 
         <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr role="row">
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">操作</th>  
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">标题</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">内容</th>
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">添加时间</th>
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">修改时间</th>   
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th> 
           </tr> 
          </thead> 
          <tbody class=".table-striped">
           @foreach($article as $row)
           <tr class="odd"> 
            <td class=""><input type="checkbox" value="{{$row->id}}"></td> 
            <td class="">{{$row->id}}</td> 
            <td class="">{{$row->title}}</td>
            <td class="descr">{!!$row->descr!!}</td>
            <td class="">{{$row->created_at}}</td>
            <td class="">{{$row->updated_at}}</td>   
            <td class="">
           
              <a href="/adminarticle/{{$row->id}}/edit" class="btn btn-warning">修改</a>
           </tr>

          </tbody> 
          @endforeach
          
         </table>
         <div style="float: left">
          
          <tr>	
           		<td colspan="5"><a href="javascript:void(0)" class="btn btn-danger allchoose">全选</a></td>
           		<td colspan="5"><a href="javascript:void(0)" class="btn btn-danger nochoose">全不选</a></td>
           		<td colspan="5"><a href="javascript:void(0)" class="btn btn-danger fchoose">反选</a></td>
           		<td colspan="5"><a href="javascript:void(0)" class="btn btn-danger del">删除</a></td>
          </tr>
    
         </div>
           <div style="float: right"> 
      	     {{$article->render()}}
      	   </div>
        </div> 
       </div>
      </div>
      <div class="dataTables_info" id="editable-sample_info">共{{$count}}条数据</div>
     </section> 
    </div> 
   </div> 
  </div>   
 </body>
<script type="text/javascript">
//alert($);
//全选
$(".allchoose").click(function(){	
	$("#dynamic-table").find("tr").each(function(){
		$(this).find(":checkbox").attr("checked",true);	
	});
});
//全不选
$(".nochoose").click(function(){	
	$("#dynamic-table").find("tr").each(function(){
		$(this).find(":checkbox").attr("checked",false);	
	});
});
//反选 
$(".fchoose").click(function(){
   $("#dynamic-table").find("tr").each(function(){
    if($(this).find(":checkbox").attr("checked")){
      //设置为不选中
      $(this).find(":checkbox").attr("checked",false);
    }else{
      $(this).find(":checkbox").attr("checked",true);

    }
  });
});
//ajax批量删除
$(".del").click(function(){
	//新增一个数组
	a=[];	
	//遍历数据
	$(":checkbox").each(function(){
		if($(this).attr("checked")){	
			id=$(this).val();
			//添加数组元素
			a.push(id);
		}
			
	});
		//alert(a);


//ajax操作
  $.get("/articledel",{a:a},function(data){
    // alert(data);
    if(data==1){      
      //把选中数据所在tr从dom里移除 remove
      //遍历
      for(var i=0;i<a.length;i++){
        $("input[value='"+a[i]+"']").parents("tr").remove();
      }
    }else{
      alert(data);
    }
	});
});
</script>
</html>
@endsection
@section('title','公告列表')