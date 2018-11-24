@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head></head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px;"> 
      <header class="panel-heading">
        修改订单列表 
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/crder/{{$link->id}}" method="post"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">收件人</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="linkname" id="inputEmail1" type="text" value="{{$link->linkname}}" />
           </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">收件地址</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="address" id="inputEmail1" type="text" value="{{$link->address}}" />
           </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">电话</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="tel" id="inputEmail1" type="text" value="{{$link->tel}}"/>
           </div> 
          </div>
          @if($link->status == '1')
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="">--请选择--</option>
                <option value="2">发货</option>
                {{csrf_field()}}
                {{method_field('PUT')}}
           </div> 
          </div>
          @endif
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10"> 
              <button class="btn btn-primary" type="submit">修改</button>
            </div> 
          </div>
          <header class="panel-heading" style="border-bottom: hidden; margin-top: 70px;">
          <div>
            <a href="/crder" class="btn btn-warning"><<订单列表</a>
          </div>
          </header>
        </form>
    </section>
  </div>
 </body>
</html>
@endsection
@section('title','订单列表')