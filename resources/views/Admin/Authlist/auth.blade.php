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
    <form class="form-horizontal" role="form" action="/saveauth" method="post"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">权限分配:</label> 
         <div class="mws-form-item clearfix"> 
         <h4>当前角色:{{$role->name}}的权限信息</h4> 
         <ul class="mws-form-list inline">
          @foreach($node as $row)
          <input type="checkbox" name="nid[]" value="{{$row->id}}" @if(in_array($row->id,$nid)) checked @endif> <label>{{$row->name}}</label>
          @endforeach
        </ul> 
        </div> 
     <div class="form-group" style="margin-top: 40px"> 
       {{csrf_field()}}
        <input type="hidden" name="rid" value="{{$role->id}}">
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
@section('title','权限分配')