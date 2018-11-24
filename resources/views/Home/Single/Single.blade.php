@extends('Home.Indexpublic.public')
@section('main')
<!DOCTYPE html>
<html lang="zxx">
<head>
</head>
<body>
<!-- End NavBar -->
<div class="offcanvas-wrapper">
    <!-- Start Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>商品详情</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="/">首页</a></li>
                    <li class="separator">&nbsp;</li>
                    <li><a href="/goods/{{0}}">商品分类</a></li>
                    <li class="separator">&nbsp;</li>
                    <li>商品详情</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Start Product Content -->
    <div class="container padding-top-1x padding-bottom-3x">
        <div class="row">
            <!-- Start Product Gallery -->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="gallery-wrapper">
                    	@foreach($imgs as $key=>$value)
                        <div class="gallery-item active"><a href="/Uploads/Goods/{{$value}}" data-hash="one{{$key}}" data-size="700x667"></a></div>
                        @endforeach
                    </div>
                    <div class="product-carousel owl-carousel owl-loaded owl-drag" style="">
                    	@foreach($imgs as $key=>$value)
                        <div data-hash="one{{$key}}"><img src="/Uploads/Goods/{{$value}}" alt="Product" width="523px" height="200px"></div>
                        @endforeach
                    </div>
                    <ul class="product-thumbnails">
                    	@foreach($imgs as $key=>$value)
                        <li class="active"><a href="#one{{$key}}"><img src="/Uploads/Goods/{{$value}}"alt="Product"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End Product Gallery -->
            <!-- Start Product Info -->
            <!-- <div class="col-md-6 single-shop">
            	<div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                </div>
                <h2 class="padding-top-1x text-normal with-side"></h2>
                <del class="text-muted text-normal">$899.00</del>
                <span class="h2 d-block with-side">¥{{$data->price}}</span>
                <p>{{$data->descr}}</p>
            </div> -->
            
            <!-- 图片右边内容 -->
            <div class="col-md-6 single-shop">
                <div class="hidden-md-up"></div>
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                </div>
                <span class="text-muted align-middle">&nbsp;&nbsp;5 | 13 Customer Reviews</span>
                <h1 class="padding-top-1x text-normal with-side" style="margin-top: 20px">{{$data->name}}</h1>
                <span class="h2 d-block with-side" style="margin-top: 50px">
                    <del class="text-muted text-normal">¥{{$data->price+100}}</del>
                    &nbsp; ¥{{$data->price}}
                </span>
                <p style="margin-top: 50px">{{$data->descr}}</p> 
            </div>
            <!-- 图片右边内容结束 -->
            <div class="col-md-12">
                <hr class="mt-30 mb-30">
                <div class="d-flex flex-wrap justify-content-between mb-30">
                    <div class="entry-share">
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                         <a  class="btn btn-outline-secondary btn-sm " data-toggle="tooltip" title="我喜欢" href="/homewish/{{$data->id}}" style="margin-top: 8px" >
                        <i class="icon-heart" ></i></a>
                        <form  method="post" action="/homecart" style="display:inline-block;">
                            <button class="btn btn-outline-primary btn-sm " data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!" style="margin-top: 8px">添加到购物车</button>
                            
                            <input type="hidden" name="id" value="{{$data->id}}">
                            {{csrf_field()}}
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Info -->
        <!-- Start Product Tabs -->
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">商品描述</a></li>
                <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">评论</a></li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane fade show active" id="description" role="tabpanel" style="margin: 0 auto">
                    {!!$data->text!!}
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                	@if(!empty($comment))
					@foreach($comment as $value)
                    <!-- Start Review #1 -->
                    <div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/01.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <!-- <h4 class="comment-title">Lorem存有简直是虚拟</h4> -->
                                <div class="mb-2">
                                    <div class="rating-stars" style="color:#ffb74f">{{str_repeat("★",$value->start)}}{{str_repeat("☆",5-$value->start)}}</div>
                                </div>
                            </div>
                            <p class="comment-text">@if(!empty($value->text)) {{$value->text}} @else 该用户没有评价内容哦 @endif</p>
                            <div class="comment-footer"><span class="comment-meta">{{$value->username}}</span></div>
                            @if($value->reply != null)
                             <div class="comment-footer">
                                <div class="column"><span class="comment-meta">{{$value->time}}</span></div>
                                <div class="column">
                                    <a class="reply-link" href="#"><i class="icon-reply"></i>商家回复</a>
                                </div>
                            </div>
                            <div class="comment comment-reply">
                                <div class="comment-author-ava"><img alt="Comment author" src="/Home/images/reviews/02.jpg"></div>
                                <div class="comment-body">
                                    <div class="comment-header">
                                        <h4 class="comment-title">商家</h4>
                                    </div>
                                    <p class="comment-text">{{$value->reply}}</p>
                                    <div class="comment-footer"><span class="comment-meta">{{$value->time}}</span></div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @else
                    <center>暂无评价哦~~~</center>
                    @endif
                    <!-- End Review #1 -->
                    <!-- Start Review Form -->
                </div>
            </div>
        </div>
        <!-- End Product Tabs -->
       
        </div>
        <!-- End Related Products -->
    </div>
    <!-- End Product Content -->
</div>
<!-- Start Photoswipe Container -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Photoswipe Container -->
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- End Back To Top -->
<div class="site-backdrop"></div>
</body>
</html>

@endsection
@section('title','商品详情')

