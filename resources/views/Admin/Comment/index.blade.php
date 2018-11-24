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
        评论列表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr role="row"> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1" >用户名</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">商品名</th> 
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">商品图片</th>
             <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">星级</th>
             <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">时间</th>
             <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">状态</th>
             <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">操作</th>    
           </tr> 
          </thead> 
          <tbody class=".table-striped">
           @foreach($comment as $row)
           <tr class="odd"> 
            <td class="">{{$row->id}}</td> 
            <td class="">{{$row->username}}</td> 
            <td class="">{{$row->name}}</td> 
            <td class=""><img src="/Uploads/Goods/{{$row->pic}}" alt="" width="100"></td> 
            <td class="" style="color:#ffb74f">{{str_repeat("★",$row->start)}}{{str_repeat("☆",5-$row->start)}}</td>
            <td class="" >{{$row->time}}</td>
            <td class="">{{$row->status == 0 ? '已评论' : '已回复'}}</td>
            <td class="">
              <a href="/comment/{{$row->id}}/edit" class="btn btn-warning">查看评论</a>
            </td>
            </tr> 
             @endforeach 
          </tbody> 
         </table>
         <div style="float: right">
            {{$comment->render()}}
         </div>
         <div class="dataTables_info" id="editable-sample_info"></div> 
        </div> 
       </div> 
      </div> 
     </section> 
    </div> 
   </div> 
  </div>   
 </body>
</html>
@endsection
@section('title','评论列表')