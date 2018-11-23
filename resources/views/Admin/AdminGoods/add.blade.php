@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head>
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
      <header class="panel-heading" style="border-bottom: hidden; margin-top: 10px;">
      <div>
        <a href="/admingoods" class="btn btn-warning">&lt;&lt;商品列表</a>
      </div>
      </header>
      <div class="panel-body"> 
        <form class="form-horizontal" role="form" action="/admingoods" method="post" enctype="multipart/form-data"> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品名称</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="name" id="inputEmail1" type="text" value="{{old('name')}}" placeholder="请输入商品名称" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择分类</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="cates_id">
                <option value="0">--请选择--</option>
                @foreach($cate as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
              </select> 
            </div> 
          </div>  
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">价格</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="price" id="inputEmail1" type="text" value="{{old('price')}}" placeholder="请输入价格" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">库存</label> 
              <div class="col-md-3 col-xs-9"> 
                <input class="form-control" name="store" id="inputEmail1" type="text" value="{{old('store')}}" placeholder="请输入库存" /> 
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputPassword1">请选择状态</label> 
            <div class="col-md-3 col-xs-9"> 
              <select class="form-control m-bot15" name="status">
                <option value="0" selected>上架</option>
                <option value="1">待上架</option>
              </select> 
            </div> 
          </div> 
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品封面图</label> 
              <div class="col-md-3 col-xs-9"> 
                <input name="pic" id="uploads" type="file" />
              </div> 
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">商品多图片</label> 
              <div class="col-md-3 col-xs-12" style="width: 1000px"> 
                <input name="imgs[]" id="uploadss" type="file" multiple />
          </div>
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">详细信息</label> 
              <div class="col-md-3 col-xs-9">
                <script id="editor" type="text/plain" name="text" style="width:800px;height:500px;"></script>
              </div> 
          </div>     
          <div class="form-group" style="margin-top: 40px"> 
            <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">描述</label> 
              <div class="col-md-3 col-xs-9">
              	<textarea name="descr" cols="51" rows="4">{{old('descr')}}</textarea>
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
 <script type="text/javascript">
   // 当所有html代码加载完毕
    $(function() {
      // 调用百度编辑器
      var ue = UE.getEditor('editor',{
        autoFloatEnabled:false
      });
      var ues = UE.getEditor('editors',{
        autoFloatEnabled:false
      });
    });

    
</script>
</html>
@endsection
@section('title','商品添加')