@extends('Home.Indexpublic.public')
@section('main')
					
 <head>
 	<style type="text/css" media="screen">
 		.ct-star {
        display: inline-block;
        margin: 0 1px;
        width: 30px;
        height: 30px;
        background: url(/Uploads/stars.gif) no-repeat;
        vertical-align: -2px;
        cursor: pointer;
    }
    .ic-star-off {
        background-position: -39px 0;
    }
 	</style>
 </head>                   
                    
 <div style="width:800px;height:auto;margin:auto">
 	            
	<form class="row" action="/homedetail" method="post" style="margin-top:80px">
	@foreach($article as $key=>$row)
	<div class="col-sm-6">
	
	 <p>商品名称：{{$row->gname}}</p>
	 <label for="review_text">商品图片：<img src="/Uploads/Goods/{{$row->pic}}" width="100px"></label>
	    <div class="form-group">
	        <label for="review_rating">你的评级</label>
	        <select class="form-control form-control-rounded" id="review_rating" name="start[{{$key}}]">
	            <option value="5">5 星</option>
	            <option value="4">4 星</option>
	            <option value="3">3 星</option>
	            <option value="2">2 星</option>
	            <option value="1">1 星</option>
	        </select>
	        <span class="star">
		        <b class="ct-star  ic-star-off"></b>
		        <b class="ct-star  ic-star-off"></b>
		        <b class="ct-star  ic-star-off"></b>
		        <b class="ct-star  ic-star-off"></b>
		        <b class="ct-star  ic-star-off"></b>
			</span>
			<span class="star-txt"></span>
	    </div>
	</div>
	<div class="col-12">
	    <div class="form-group">
	        <label for="review_text">评论 </label>
	        <textarea name="text[{{$key}}]" class="form-control form-control-rounded" id="review_text" rows="8"></textarea>
	        晒图：
	        <input name="imgs" id="uploadss" type="file" />
	    </div>
	</div>
	{{csrf_field()}}
	<input type="hidden" name="gid[{{$key}}]" value="{{$row->gid}}">	
	<input type="hidden" name="oid" value="{{$row->oid}}">	
	@endforeach
	<div class="col-12 text-right">
	    <button class="btn btn-outline-primary" type="submit">提交 评论</button>
	</div>
	</form>
</div> 
<script>
    window.onload=function(){
        var aSpan=document.getElementsByClassName("star")[0];
        var aStxt=document.getElementsByClassName("star-txt")[0];
        var aBstar=aSpan.getElementsByTagName("b");
        var arrBtxt=["很差","较差","还行","推荐","力荐"];
        var num=0;
        var onOff=true;for(var i= 0;i<aBstar.length;i++){
                aBstar[i].index=i;
                //鼠标移入
                aBstar[i].onmouseover=function(){
                    if(onOff) {
                        num = this.index;
                        aStxt.innerHTML = arrBtxt[num];
                        for (var i = 0; i <=this.index; i++) {
                            aBstar[i].style.backgroundPosition = "39 0";
                        }
                    }
                };
                //鼠标移开
                aBstar[i].onmouseout=function(){
                 if(onOff){//设定个开关，等开关为真就执行鼠标移除的代码
                     aStxt.innerHTML="";
                     for(var i=0;i<=this.index;i++){
                         aBstar[i].style.backgroundPosition="-39px 0";
                     }
                   }
                 };
                //鼠标点击
                aBstar[i].onclick=function(){
                    onOff=false;//开关为假就不执行鼠标移除的代码
                    //先清空
                    aStxt.innerHTML="";
                    for(var i=0;i<aBstar.length;i++){
                        aBstar[i].style.backgroundPosition="10px 0";
                    }
                    //点击当前星星，之前的都点亮包含自己
                    num = this.index ;
                    aStxt.innerHTML=arrBtxt[num];
                    for(var i=0;i<=this.index;i++){
                        aBstar[i].style.backgroundPosition="0 0";

                    }

                };
            }
    }

</script>               
@endsection
@section('title','商品评论')