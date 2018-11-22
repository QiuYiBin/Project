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
        添加轮播图
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/slider" method="post" enctype="multipart/form-data">
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">标题</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" placeholder="请输入标题" value="{{old('name')}}" /> 
              </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">地址</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="url" value="http://" id="inputEmail1" type="text" placeholder="请输入URL地址" value="{{old('url')}}"/> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">排序</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="sort" id="inputEmail1" type="text" placeholder="数值越大越靠前展示" value="{{old('sort')}}"/> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">图片</label> 
              <div class="col-md-3 col-xs-9"> 
                <input name="pic" id="uploads" type="file" /> 
              </div>
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="0" selected>显示</option>
                <option value="1">隐藏</option>
              </select> 
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
 <script type="text/javascript">
    // data = data.substr(1); 
   // 当所有html代码加载完毕
    $(function() {
      // 声明字符串
      var img = '';
      $('#uploads').uploadify({
        // 设置文本
        'buttonText' : '图片上传',
        // 设置文本传输数据
        'formDate' : { 
          '_token' : '{{csrf_field()}}',
          'file' : 'Slider'
        },
        // 上传的flash动画
        'swf' : '/Uploadify/uploadify.swf',
        // 文件上传的地址(路由)
        'uploader' : '/slider/upload',
        // 设置文件上传格式
        'fileTypeExts': '*.gif; *.jpg; *.png; *.bmp',
        // 当文件上传成功
        'onUploadSuccess' : function(file, data, response) {
          var newdata  = data.split('_')[1];
          // 拼接图片
          imgs = '<img width="200" src="/Uploads/Slider/'+newdata+'">';
          // 显示图片
          $('#main').html(imgs);
          // 隐藏传递数据
          $('#imgs').val(data);
        },
        'onSelectError': function (file, errorCode, errorMsg) {
          switch (errorCode) {
              case -100:
                  alert("上传的文件数量已经超出系统限制的" + $('#file_upload').uploadify('settings', 'queueSizeLimit') + "个文件！");
                  break;
              case -110:
                  alert("文件 [" + file.name + "] 大小超出系统限制的" + $('#file_upload').uploadify('settings', 'fileSizeLimit') + "大小！");
                  break;
              case -120:
                  alert("文件 [" + file.name + "] 大小异常！");
                  break;
              case -130:
                  alert("文件 [" + file.name + "] 类型不正确！");
                  break;
          }
      },
      });
    });
</script>
@endsection
@section('title','添加轮播图')