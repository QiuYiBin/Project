@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     添加角色 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/role" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">角色名:</label> 
        <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="需要添加的角色名" value="{{old('username')}}"/> 
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
@section('title','后台权限分配')