@extends('Home.Indexpublic.public')
@section('main')
					
 <head>
 	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
 	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 	<style type="text/css" media="screen">
 		a {
            color: #f1c40f;
        }

        a:hover,
        a:active,
        a:focus {
            color: #dab10d;
        }

        .rating-stars {
            width: 100%;
            text-align: center;
        }

        .rating-stars .rating-stars-container {
            font-size: 0px;
        }

        .rating-stars .rating-stars-container .rating-star {
            display: inline-block;
            font-size: 20px;
            color: #555555;
            cursor: pointer;
            padding: 5px 10px;
        }

        .rating-stars .rating-stars-container .rating-star.is--active,
        .rating-stars .rating-stars-container .rating-star.is--hover {
            color: #f1c40f;
        }

        .rating-stars .rating-stars-container .rating-star.is--no-hover {
            color: #555555;
        }

 	</style>

 </head>                   
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                 
 <div style="width:800px;height:auto;margin:auto">
 	            
	<form class="row" action="/homedetail" method="post" style="margin-top:80px" enctype="multipart/form-data" >
	@foreach($article as $key=>$row)
	<div class="col-sm-6">
	<label for="review_text" style="width: 700px">商品名称：{{$row->gname}}</label>
	<label for="review_text">商品图片：<img src="/Uploads/Goods/{{$row->pic}}" width="100px" style="margin-left: 10px"></label><br />
	<label for="review_text" style="margin-top: 10px;">你的评级：</label>
	    <div class="form-group">
	            <div class="rating-stars block" id="rating">
	                <input type="hidden" readonly class="form-control rating-value" name="start[{{$key}}]" id="rating-stars-value" value="5">
	                <div class="rating-stars-container">
	                    <div class="rating-star">
	                        <i class="fa fa-star"></i>
	                    </div>
	                    <div class="rating-star">
	                        <i class="fa fa-star"></i>
	                    </div>
	                    <div class="rating-star">
	                        <i class="fa fa-star"></i>
	                    </div>
	                    <div class="rating-star">
	                        <i class="fa fa-star"></i>
	                    </div>
	                    <div class="rating-star">
	                        <i class="fa fa-star"></i>
	                    </div>
	                </div>
	            </div>
	    </div>
	</div>
	<div class="col-12">
		<label for="review_text">评论：</label>
	    <div class="form-group">
	        <textarea name="text[{{$key}}]" class="form-control form-control-rounded" id="review_text" rows="8" style="margin-bottom: 30px"></textarea>
	        晒图：
	        <input name="imgs[{{$key}}][]" id="uploadss" type="file" multiple />
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
<script type="text/javascript" src="/js/jquery.rating-stars.min.js"></script>
<script type="text/javascript">
        var ratingOptions = {
            selectors: {
                starsSelector: '.rating-stars',
                starSelector: '.rating-star',
                starActiveClass: 'is--active',
                starHoverClass: 'is--hover',
                starNoHoverClass: 'is--no-hover',
                targetFormElementSelector: '.rating-value'
            }
        };

        $(".rating-stars").ratingStars(ratingOptions);
    </script>               
@endsection
@section('title','商品评论')