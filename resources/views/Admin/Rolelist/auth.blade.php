@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     权限分配 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/saveauth" method="post"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">权限分配:</label> 
         <div class="mws-form-item clearfix"> 
         <h5><b>{{$role->name}}</b>&nbsp;&nbsp;的权限信息</h5>
         <ul class="mws-form-list inline" style="margin-left:90px;margin-top:40px;width: 850px">
          @foreach($node as $row)
          <input type="checkbox" name="nid[]" value="{{$row->id}}" @if(in_array($row->id,$nid)) checked @endif> 
          <label>{{$row->name}}</label>
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