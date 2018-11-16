@extends('Admin.AdminPublic.public')
@section('main')
<html>
  <head></head>
  <body>
    <div class="col-lg-12">
    <div class="btn-group"> 
       <a href="/word" class="btn btn-primary"><<&nbsp;&nbsp;返回列表</a>
      </div>
    <section class="panel" style="margin-top: 45px;"> 
      <div class="panel-body">
      <h3>&nbsp;&nbsp;&nbsp;标题 : {{$content->title}}</h3>
          <div class="form-group" style="margin-top: 30px">
              <div class="col-md-3 col-xs-9" style="width:90%">
                {!!$content->content!!}
              </div> 
          </div>
      </div>

    </section>
  </div>
 </body>
</html>
@endsection
@section('title','文章管理');