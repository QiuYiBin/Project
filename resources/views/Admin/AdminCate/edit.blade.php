@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head></head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 30px;height: 500px"> 
      <header class="panel-heading">
        修改分类 
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/admincates/{{$data->id}}" method="post"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">分类名</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" value="{{$data->name}}" /> 
              </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">父类</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="pid">
                <option value="0">--请选择--</option>
                @foreach($result as $value)
                <option value="{{$value->id}}" @if($data->id == $value->id) selected @endif>{{$value->name}}</option>
                @endforeach
              </select> 
            </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10"> 
              <button class="btn btn-primary" type="submit">提交</button> 
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
@section('title','后台修改分类')