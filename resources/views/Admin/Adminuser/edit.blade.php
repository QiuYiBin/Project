@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body> 
  <div class="col-lg-12">
  <section class="panel" style="margin-top: 45px;height: 500px"> 
   <header class="panel-heading">
     管理员修改 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/adminsuser/{{$admin->id}}" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">用户名：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="用户名" value="{{$admin->name}}" disabled/> 
      </div> 
     </div> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">状态:</label>
      <div class="col-md-3 col-xs-9"> 
          <select class="form-control m-bot15" name="status">
            <option value="0">禁用</option>
            <option value="1" selected="">启用</option> 
            </select> 
      </div> 
      </div> 
      </div>
      <div class="form-group" style="margin-top: 40px"> 
      <div class="col-lg-offset-2 col-lg-10"> 
       <button class="btn btn-primary" type="submit">提交</button> 
      </div> 
     </div> 
     </div> 
      {{csrf_field()}}
      {{method_field('PUT')}}
      
    </form> 
   </div> 
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','后台用户修改')