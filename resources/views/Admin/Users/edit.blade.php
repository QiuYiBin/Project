@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body> 
  <div class="col-lg-12">
  <section class="panel" style="margin-top: 45px;"> 
   <header class="panel-heading">
     用户修改 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/adminusers/{{$user->id}}" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">用户名：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="username" id="inputEmail1" type="text" placeholder="用户名" value="{{$user->username}}" disabled /> 
      </div> 
     </div> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">邮箱：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="email" id="inputEmail1" type="text" placeholder="邮箱" value="{{$user->email}}" disabled/> 
      </div> 
     </div> 
    <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">电话：</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="phone" id="inputEmail1" type="text" placeholder="电话" value="{{$user->phone}}" disabled/> 
      </div> 
     </div>
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">状态:</label>
      <div class="col-md-3 col-xs-9"> 
          <select class="form-control m-bot15" name="status">
            <option value="0" @if($user->status == 0) selected @endif>启用</option>
            <option value="1" @if($user->status == 1) selected @endif>禁用</option> 
            </select> 
      </div> 
      </div> 
      {{csrf_field()}}
      {{method_field('PUT')}}
     <div class="form-group" style="margin-top: 40px"> 
      <div class="col-lg-offset-2 col-lg-10"> 
       <button class="btn btn-primary" type="submit">修改</button> 
      </div> 
     </div> 
    </form>
    <header class="panel-heading" style="border-bottom: hidden; margin-top: 40px">
        <div>
         <a href="/adminuser" class="btn btn-warning"><<用户表</a>
        </div>
  </header> 
   </div>
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','后台用户修改')