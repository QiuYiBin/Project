@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head></head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px"> 
      <header class="panel-heading">
        修改链接 
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/link/{{$link->id}}" method="post"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">站点名</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" value="{{$link->name}}" disabled="true"/>
           </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">地址</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="url" id="inputEmail1" type="text" value="{{$link->url}}" disabled="true" />
           </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">描述</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="title" id="inputEmail1" type="text" value="{{$link->title}}" disabled="true" />
           </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="0" @if($link->status == 0) ? selected : '' @endif>通过</option>
                <option value="1" @if($link->status == 1) ? selected : '' @endif>不通过</option>
                {{csrf_field()}}
                {{method_field('PUT')}}
              </select>
              
            </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10"> 
              <button class="btn btn-primary" type="submit">修改</button>
            </div> 
          </div>
        </form>
        <header class="panel-heading" style="border-bottom: hidden; margin-top: 70px;">
        <div>
          <a href="/link" class="btn btn-warning"><<列表</a>
        </div>
        </header> 
      </div> 
    </section>
  </div>
 </body>
</html>
@endsection
@section('title','友情链接列表')