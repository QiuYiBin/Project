@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     添加用户 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/adminusers" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">用户名：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="username" id="inputEmail1" type="text" placeholder="必须输入4-8位数字或字母" value="{{old('username')}}"/> 
      </div> 
     </div> 

     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">密码：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="password" id="inputEmail1" type="password" placeholder="必须输入8-16位数字或字母" /> 
      </div> 
     </div>
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">确认密码：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="passwords" id="inputEmail1" type="password" placeholder="必须输入8-16位数字或字母" /> 
      </div> 
     </div>  
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">邮箱：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="email" id="inputEmail1" type="text" placeholder="邮箱必须符合规则" value="{{old('email')}}"/> 
      </div> 
     </div> 
    <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">电话：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="phone" id="inputEmail1" type="text" placeholder="电话必须输入11位数字" value="{{old('phone')}}"/> 
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
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','后台添加用户')