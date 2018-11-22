@extends('Home.Indexpublic.public')
@section('main')
					
 <head>
 
 </head>                   
                    
 <div style="width:800px;height:auto;margin:auto">
 	@foreach($article as $row)                
	<form class="row" action="/homedetail" method="post" style="margin-top:80px">
	
	<div class="col-sm-6">
	
	 <p>商品名称：{{$row->gname}}</p>
	 <label for="review_text">商品图片：<img src="/Uploads/Goods/{{$row->pic}}" width="100px"></label>
	    <div class="form-group">
	        <label for="review_rating">你的评级</label>
	        <select class="form-control form-control-rounded" id="review_rating" name="start[]">
	            <option value="5">5 星</option>
	            <option value="4">4 星</option>
	            <option value="3">3 星</option>
	            <option value="2">2 星</option>
	            <option value="1">1 星</option>
	        </select>
	    </div>
	</div>
	<div class="col-12">
	    <div class="form-group">
	        <label for="review_text">评论 </label>
	        <textarea name="text[]" class="form-control form-control-rounded" id="review_text" rows="8"></textarea>
	        晒图：
	        <input name="picss" id="uploadss" type="file" />
            <div id="mains" >

            </div> 
            <input type="hidden" name="imgs" id="imgss"> 
	    </div>
	</div>
	{{csrf_field()}}
	<input type="hidden" name="gid[]" value="{{$row->gid}}">	
	<input type="hidden" name="oid" value="{{$row->oid}}">	
	@endforeach
	<div class="col-12 text-right">
	    <button class="btn btn-outline-primary" type="submit">提交 评论</button>
	</div>
	</form>
</div> 
               
@endsection
@section('title','商品评论')