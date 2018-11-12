@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     添加管理员 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/adminsuser" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">管理员名:</label> 
        <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="必须输入4-8位数字或字母" value="{{old('username')}}"/> 
      </div> 
     </div> 

     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">密码:</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="password" id="inputEmail1" type="password" placeholder="必须输入8-16位数字或字母" /> 
      </div> 
     </div>
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">确认密码:</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="passwords" id="inputEmail1" type="password" placeholder="必须输入8-16位数字或字母" /> 
      </div> 
     </div>
      {{csrf_field()}}
     <div class="form-group" style="margin-top: 40px"> 
      <div class="col-lg-offset-2 col-lg-10"> 
       <button class="btn btn-primary" type="submit">提交</button> 
      </div> 
     </div> 
    </form> 
   </div>
   <header class="panel-heading" >
      <div>
        <a href="/adminusers"><<用户表</a>
      </div>
   </header>
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','后台管理员添加管理员')