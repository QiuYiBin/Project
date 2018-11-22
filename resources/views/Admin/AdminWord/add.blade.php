@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head>
    <script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.config.js"></script>

    <script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.all.min.js"> </script>

    <script type="text/javascript" charset="utf-8" src="/Ueditor/lang/zh-cn/zh-cn.js"></script>
    
  </head> 
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px;"> 
       
      <header class="panel-heading" style="float:right">
        文章添加 
      </header> 
      <div class="btn-group" style="margin-top: 10px;margin-left: 10px;">
       <a href="/word"><button class="btn btn-primary" id="editable-sample_new"><<&nbsp;&nbsp;文章列表</button></a>
      </div>
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/word" method="post" enctype="multipart/form-data"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">标题</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="title" value="{{old('title')}}" id="inputEmail1" type="text" placeholder="请输入文章标题" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
              <div class="col-md-3 col-xs-9">  
                <select class="form-control m-bot15" name="status">
                  <option value="0" selected>有效</option>
                  <option value="1">无效</option>
                </select> 
              </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">内容</label> 
              <div class="col-md-3 col-xs-9"> 
                <script id="editor" type="text/plain" name="content" style="width:800px;height:400px">{!!old('content')!!}</script> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10" > 
              <button class="btn btn-primary" type="submit">提交</button> 
            </div>
          </div>
          {{csrf_field()}} 
        </form> 
      </div> 
    </section>
  </div>
 </body>
 <script>
    var ue = UE.getEditor('editor');
 </script>
</html>
@endsection
@section('title','文章管理')