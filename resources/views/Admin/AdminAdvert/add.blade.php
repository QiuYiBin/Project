@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head></head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px;"> 
      <header class="panel-heading">
        广告添加
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/advert" method="post" enctype="multipart/form-data"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">广告名称</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" value="{{old('name')}}" id="inputEmail1" type="text" placeholder="请输入广告名称" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">链接地址</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="url" value="{{old('url')}}" id="inputEmail1" type="text" placeholder="请输入链接地址" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
            <div class="col-md-3 col-xs-9">  
              <select class="form-control m-bot15" name="status">
                <option value="0" selected>有效</option>
                <option value="1">过期</option>
              </select> 
            </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">广告图片</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="pic" id="inputEmail1" type="file"/> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">描述</label> 
              <div class="col-md-3 col-xs-9">
              	<textarea name="title" cols="51" rows="4">{{old('title')}}</textarea>
              </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10"> 
              <button class="btn btn-primary" type="submit">提交</button> 
            </div> 
          </div>
          {{csrf_field()}} 
        </form> 
      </div> 
    </section>
  </div>
 </body>
</html>
@endsection
@section('title','商品添加')