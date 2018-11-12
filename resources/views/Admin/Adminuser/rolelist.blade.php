@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 600px"> 
   <header class="panel-heading">
     分配角色
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/saverole" method="post"> 
     
      <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">角色:</label>
      <div class="col-md-3 col-xs-9"> 
          <select class="form-control m-bot15" name="rid[]">
            @foreach($role as $row)
            <option value="{{$row->id}}" @if(in_array($row->id,$rids)) selected @endif >{{$row->name}}</option>
            @endforeach 
            </select> 
      </div> 
      </div>
      <div class="form-group" style="margin-top: 40px"> 
      <div class="col-lg-offset-2 col-lg-10"> 
       <button class="btn btn-primary" type="submit">提交</button> 
      </div> 
     </div> 
    </div> 
      </div> 
      <div class="mws-button-row">
        {{csrf_field()}}
        <input type="hidden" name="uid" value="{{$info->id}}">
      
    </form> 
   </div> 
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','分配角色')