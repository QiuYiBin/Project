@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head>
    
    <!-- 引入文件上传css -->
    <link rel="stylesheet" type="text/css" href="/Uploadify/uploadify.css">
    <!-- 引入文件上传插件 -->
    <script type="text/javascript" src="/Uploadify/jquery.uploadify.min.js"></script>
  </head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px;"> 
      <header class="panel-heading">
        修改轮播图
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/slider/{{$data->id}}" method="post" enctype="multipart/form-data">
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">标题</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="请输入标题" value="{{$data->name}}" /> 
              </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">地址</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="url" id="inputEmail1" type="text" placeholder="请输入URL地址" value="{{$data->url}}"/> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">排序</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="sort" id="inputEmail1" type="text" placeholder="数值越大越靠前展示" value="{{$data->sort}}"/> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">图片</label> 
              <div class="col-md-3 col-xs-9">
                <input name="pic" id="uploads" type="file" />
              </div>
          </div>
          <input type="hidden" name="oldpic" value="{{$data->pic}}">
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="0" @if($data->status == '0')  selected @endif>显示</option>
                <option value="1" @if($data->status == '1')  selected @endif>隐藏</option>
              </select> 
            </div> 
          </div>
          {{csrf_field()}}
          {{method_field("PUT")}}  
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
@endsection
@section('title','添加轮播图')