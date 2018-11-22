@extends('Home.Indexpublic.public')
@section('main')
	@foreach($comment as $value)
	<div class="comment">
                        <div class="comment-author-ava"><img src="/Home/images/reviews/01.jpg" alt="Review Author"></div>
                        <div class="comment-body">
                            <div class="comment-header d-flex flex-wrap justify-content-between">
                                <!-- <h4 class="comment-title">Lorem存有简直是虚拟</h4> -->
                                <div class="mb-2">
                                    <div class="rating-stars" style="color:#ffb74f">{{str_repeat("★",$value->start)}}{{str_repeat("☆",5-$value->start)}}</div>
                                </div>
                            </div>
                            <p class="comment-text">{{$value->text}}</p>
                            <div class="comment-footer"><span class="comment-meta">{{$value->username}}</span></div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <center>暂无评价哦~~~</center>
                    @endif
                    <!-- End Review #1 -->
                    <!-- Start Review Form -->
                    <h5 class="mb-30 padding-top-1x">离开评论</h5>
                    <form class="row" method="post">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review_rating">你的价格</label>
                                <select class="form-control form-control-rounded" id="review_rating">
                                    <option>5 星</option>
                                    <option>4 星</option>
                                    <option>3 星</option>
                                    <option>2 星</option>
                                    <option>1 星</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="review_text">评论 </label>
                                <textarea class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-outline-primary" type="submit">提交 评论</button>
                        </div>
               @endforeach
 @endsection
@section('title','商品详情')