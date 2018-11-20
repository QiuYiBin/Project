@extends('Admin.AdminPublic.public')
@section('main')
<header class="panel-heading" style="border-bottom: hidden; margin-top: 10px;">
    <div>
       <a href="/admingoods" class="btn btn-warning">&lt;&lt;商品列表</a>
    </div>
</header>
<section class="panel" style="margin-top: 45px;"> 
  	<div class="panel-body">
  	<h3>&nbsp;&nbsp;商品名 : {{$res->name}}</h3>
      	<div class="form-group" style="margin-top: 30px">
      		<h4>&nbsp;&nbsp;&nbsp;封面图：</h4>
          	<div class="col-md-3 col-xs-9" style="width:100%">
            <img src="/Uploads/Goods/{{$res->pic}}" alt="" width="200px">
          	</div>
          	<h4>&nbsp;&nbsp;&nbsp;商品小图：</h4>
          	@foreach($imgs as $value)
            	<img src="/Uploads/Goods/{{$value}}" alt="" width="200px">
          	@endforeach  
      	</div>
  	</div>
 </section>
@endsection
@section('title','查看商品详情')