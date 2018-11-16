@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head>
    <!-- 引入文件上传css -->
    <link rel="stylesheet" type="text/css" href="/Uploadify/uploadify.css">
    <!-- 引入文件上传插件 -->
    <script type="text/javascript" src="/Uploadify/jquery.uploadify.min.js"></script>
    <!-- 引入百度编辑器文件 -->
    <script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Ueditor/lang/zh-cn/zh-cn.js"></script>
  </head>
  <body>
    <div class="col-lg-12">
    <section class="panel" style="margin-top: 45px;"> 
      <header class="panel-heading">
        添加商品 
      </header> 
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/admingoods/{{$data->id}}" method="post" enctype="multipart/form-data"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品名称</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" value="{{$data->name}}" placeholder="请输入商品名称" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择分类</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="cates_id">
                <option value="0">--请选择--</option>
                @foreach($cate as $value)
                <option value="{{$value->id}}" @if($value->id == $data->cates_id) selected @endif>{{$value->name}}</option>
                @endforeach
              </select> 
            </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">价格</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="price" id="inputEmail1" type="text" value="{{$data->price}}" placeholder="请输入价格" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">库存</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="store" id="inputEmail1" type="text" value="{{$data->store}}" placeholder="请输入库存" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="0" @if($data->status == 0) selected @endif>上架</option>
                <option value="1" @if($data->status == 1) selected @endif>待上架</option>
              </select> 
            </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品封面图</label> 
              <div class="col-md-3 col-xs-9"> 
                <input name="pics" id="uploads" type="file" />
                <div id="main" >

                </div> 
                <input type="hidden" name="pic" id="imgs">
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品多图片</label> 
              <div class="col-md-3 col-xs-12" style="width: 1000px"> 
                <input name="picss" id="uploadss" type="file" />
                <div id="mains" >

                </div> 
                <input type="hidden" name="picdouble" id="imgss"> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">详细信息</label> 
              <div class="col-md-3 col-xs-9">
                <script id="editor" type="text/plain" name="text" style="width:800px;height:500px;">
                  {{$data->text}}
                </script>
              </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">配置信息</label> 
              <div class="col-md-3 col-xs-9">
                <script id="editors" type="text/plain" name="config" style="width:800px;height:500px;">
                  {{$data->config}}
                </script>
              </div> 
          </div>    
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">描述</label> 
              <div class="col-md-3 col-xs-9">
              	<textarea name="descr" cols="51" rows="4">{{$data->descr}}</textarea>
              </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <div class="col-lg-offset-2 col-lg-10"> 
              <button class="btn btn-primary" type="submit">提交</button> 
            </div> 
          </div>
          {{ method_field('PUT') }}
          {{csrf_field()}} 
        </form> 
      </div> 
    </section>
  </div>
 </body>
 <script type="text/javascript">
   // 当所有html代码加载完毕
    $(function() {
      // 调用百度编辑器
      var ue = UE.getEditor('editor');
      var ues = UE.getEditor('editors');
      // 声明字符串
      var imgs = '';
      $('#uploads').uploadify({
        // 设置文本
        'buttonText' : '商品封面图',
        // 设置文本传输数据
        'formDate' : { 
          '_token' : '{{csrf_field()}}',
          'file' : 'Goods'
        },
        // 上传的flash动画
        'swf' : '/Uploadify/uploadify.swf',
        'auto': true,
        // 文件上传的地址(路由)
        'uploader' : '/admingoods/upload',
        // 设置文件上传格式
        'fileTypeExts': '*.gif; *.jpg; *.png; *.bmp',
        // 当文件上传成功
        'onUploadSuccess' : function(file, data, response) {
          // 拼接图片
          imgs = '<img width="200" src="/Uploads/Goods/'+data+'">';
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
      // 小图上传
      // 声明字符串
      var imgss = '';
      var arr = [];
      $('#uploadss').uploadify({
        // 设置文本
        'buttonText' : '商品小图片上传',
        // 设置文本传输数据
        'formDate' : { 
          '_token' : '{{csrf_field()}}',
          'file' : 'Goods'
        },
        // 上传的flash动画
        'swf' : '/Uploadify/uploadify.swf',
        // 文件上传的地址(路由)
        'uploader' : '/admingoods/upload',
        // 设置文件上传格式
        'fileTypeExts': '*.gif; *.jpg; *.png; *.bmp',
        // 当文件上传成功
        'onUploadSuccess' : function(file, data, response) {
          // 拼接图片
          imgss += '<img width="200" src="/Uploads/Goods/'+data+'">';
          // 显示图片
          $('#mains').html(imgss);
          // 把返回的全部文件名放进数组里面
          arr.push(data);
          // 隐藏传递数据 用逗号拼接
          $('#imgss').val(arr.join(','));

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
</html>
@endsection
@section('title','商品修改')