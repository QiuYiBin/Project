@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head>
 	<script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/Ueditor/ueditor.all.min.js"> </script>
  <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  <script type="text/javascript" charset="utf-8" src="/Ueditor/lang/zh-cn/zh-cn.js"></script> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;height: 100%"> 
   <header class="panel-heading">
     添加公告 
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/adminarticle" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-sm-2 control-label" for="inputEmail1">标题:</label> 
        <div class="col-md-3 col-xs-9"> 
       <input class="form-control" name="title" id="inputEmail1" type="text"/> 
      </div> 
     </div> 

     <div class="form-group" style="margin-top: 40px"> 
      <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">文本内容:</label> 
      
      <div class="col-md-3 col-xs-9"> 
      <script id="editor" type="text/plain"  name="descr" style="width:800px;height:500px;"></script>
       
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
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
</script>

</html>
@endsection
@section('title','添加公告')