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
 <body> 
  <div class="wrapper" style="margin-top: 30px"> 
   <div class="row"> 
    <div class="col-sm-12"> 
     <section class="panel"> 
      <header class="panel-heading">
        用户详情表 
       <span class="tools pull-right"> <a class="fa fa-chevron-down" href="javascript:;"></a> <a class="fa fa-times" href="javascript:;"></a> </span> 
      </header> 
      <div class="panel-body"> 
       <div class="adv-table"> 
        <div class="dataTables_wrapper form-inline" id="dynamic-table_wrapper" role="grid"> 
         <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info"> 
          <thead> 
           <tr role="row"> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Rendering engine: activate to sort column ascending" rowspan="1" colspan="1">ID</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table"  aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">用户名</th> 
            <th tabindex="0" class="sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">性别</th> 
            <th tabindex="0" class="hidden-phone sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">年龄</th>
            <th tabindex="0" class="hidden-phone sorting" role="columnheader" aria-controls="dynamic-table" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">邮箱</th>  
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">手机号码</th>
            <th tabindex="0" class="hidden-phone sorting_desc" role="columnheader" aria-controls="dynamic-table" aria-label="CSS grade: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">爱好</th> 
           </tr> 
          </thead> 
          <tbody class=".table-striped">
           <tr class="odd"> 
            <td class="">{{$data->id}}</td> 
            <td class="">{{$data->name}}</td> 
            <td class="">{{$data->sex}}</td> 
            <td class="">{{$data->age}}</td> 
            <td class="">{{$data->email}}</td> 
            <td class="">{{$data->phone}}</td> 
            <td class="">{{$data->hobby}}</td>
           </tr>
          </tbody> 
         </table>
         <div style="float: right">
          
         </div> 
        </div> 
       </div> 
      </div>
      <header class="panel-heading" >
        <div>
         <a href="/adminusers"><<用户表</a>
         </div>
      </header>  
     </section> 
    </div> 
   </div> 
  </div> 
  
 </body>
</html>
@endsection
@section('title','用户详情表')