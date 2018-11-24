@extends("Admin.AdminPublic.public")
@section("main")
<html>
 <head></head> 
 <body>
  <div class="col-lg-12"> 
  <section class="panel" style="margin-top: 45px;"> 
   <header class="panel-heading">
     查看评论
   </header>
   <div class="panel-body"> 
    <form class="form-horizontal" role="form" action="/comment/{{$user->id}}" method="post"> 
     <div class="form-group" style="margin-top: 40px"> 
        <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">用户评论</label> 
      <div class="col-md-3 col-xs-9">
        <textarea name="text" cols="51" rows="4" disabled>{{$user->text}}</textarea>
        </div> 
      </div>
      @if($user->reply != null)
       <div class="form-group" style="margin-top: 40px"> 
        <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">回复评论</label> 
        <div class="col-md-3 col-xs-9">
          <textarea name="reply" cols="51" rows="4" disabled>{{$user->reply}}</textarea>
        </div> 
      </div>
      @else
      <div class="form-group" style="margin-top: 40px"> 
        <label class="col-lg-2 col-sm-2 control-label" for="inputEmail1">回复评论</label> 
        <div class="col-md-3 col-xs-9">
          <textarea name="reply" cols="51" rows="4">{{$user->reply}}</textarea>
        </div> 
      </div>
      <div class="form-group" style="margin-top: 40px"> 
        <div class="col-lg-offset-2 col-lg-10"> 
          <button class="btn btn-primary" type="submit">提交</button> 
        </div> 
      </div> 
      @endif
      {{csrf_field()}}
      {{method_field('PUT')}}
     
    </form> 
   </div>
      <header class="panel-heading" style="border-bottom: hidden; margin-top: 10px;">
      <div>
        <a href="/comment" class="btn btn-warning">&lt;&lt;<<评论列表</a>
      </div>
      </header> 
  </section>
  </div>  
 </body>
</html>
@endsection
@section('title','查看评论')