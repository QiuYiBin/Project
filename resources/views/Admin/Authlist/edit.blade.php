@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     修改权限 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/authlist/{{$user->id}}" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">权限名:</label> 
        <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="需要修改的角色名" value="{{$user->name}}"/> 
      </div> 
     </div>
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">控制器:</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="mname" id="inputEmail1" type="text" placeholder="请输入控制器名" value="{{$user->mname}}"/> 
      </div> 
     </div>

     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">方法:</label> 
      <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="aname" id="inputEmail1" type="text" placeholder="请输入方法名" value="{{$user->aname}}"/>
     </div> 
   </div>
     
      {{csrf_field()}}
      {{method_field('PUT')}}
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
@section('title','后台管理员修改权限')