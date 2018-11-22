@extends('Home.Indexpublic.public')
@section('main')
<!DOCTYPE html>
	<html lang="cn" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths pc " style="" data-blockbyte-bs-uid="23468">
	<head>
		<script type="text/javascript" src="/Home/js/jquery-1.8.3.min.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="/Home/Clearing/style1503546983737.css">
	<meta name="keywords" content="一加手机，1+手机，一加手机官网商城,一加商城,1+手机商城,1+商城,一加智能手机商城">
	<meta name="description" content="一加手机官网商城是一加科技旗下面向全国服务的电子商务平台官网，专业提供官方正品一加手机及1+手机配件，品质保证，欢迎在线购买！">
	<!--[if lte IE 9]>
	<meta http-equiv="refresh" content="0;url=https://www.oneplus.com/cn/upgrade/browser">
	<script>location.href="https://www.oneplus.com/cn/upgrade/browser";</script>
	<![endif]-->

	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<meta name="screen-orientation" content="portrait">
	<meta name="x5-orientation" content="portrait">
	<meta name="full-screen" content="no">
	<meta name="x5-fullscreen" content="true">
	<meta name="x5-page-mode" content="app">
	<meta name="msapplication-tap-highlight" content="no"> 
	<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />-->
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="always" name="referrer">
	<link href="/Home/Clearing/vendor.css" rel="stylesheet">
	<link href="/Home/Clearing/index.css" rel="stylesheet">
	<link rel="stylesheet" href="/Home/Clearing/header.css">
	<!-- <link rel="stylesheet" type="text/css" href="./View/orders/orders/common_pc.css"> -->
	 <link rel="stylesheet" type="text/css" href="/Home/Clearing/order.css">
	<link charset="utf-8" rel="stylesheet" href="/Home/Clearing/nc.css" disabled=""><style>@charset "utf-8";
	<style>
         input[name="address"]{
            /*display: none;*/
            opacity: 0;
            border-radius:0px;

         }
        input:checked+div{
        	width: 380px;
        	height: 150px;
            border:2px solid rgb(235, 0, 40);

        }
		
		input{-webkit-appearance:none;}

	</style>
</head>
<body class="account-page" style="visibility: visible;">
	<!-- 模态框 -->
	<div class="modal fade" id="mymodal" style="display:none;" >
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <!-- 这是模态框的头 -->
	        <div class="modal-header">
	        <!-- 关闭modal框的 data-dismiss -->
	          <h3>添加收货地址</h3>
	          <button class="close" data-dismiss="modal">&times;</button>
	        </div>
	        <div class="modal-body">
	          <form action="/Clearing" method="post" enctype="multipart/form-data">
	            <div class="form-group">
	              <label>收件人:</label>
	              <input type="text"  name="name" class="form-control" placeholder="请输入正常的收件人" >
	            </div>
	            <div class="form-group">
	              <label>电话:</label>
	              <input type="text" name="phone" class="form-control"  placeholder="请输入正常的联系电话" ">
	            </div>
	            <div class="form-group">
	              <label>邮编:</label>
	              <input type="text" name="postcode" class="form-control"  placeholder="邮编可以不填" >
	            </div>
	            <div class="form-group">
	              <label>地址:</label>
	              <select id="sid">
	                <option class="ss">--请选择--</option>
	              </select>
	              <input type="hidden" name="huo">
	            </div>
	             <div class="form-group">
	              <label>详细地址:</label>
	              <input type="text" name="adds" class="form-control">
	            </div>
	            {{csrf_field()}}
	            <button type="submit" id="tijiao" class="btn btn-success">提交</button>
	          </form>
	        </div>
	        <div class="modal-footer">
	          <button class="btn  btn-info" data-dismiss="modal">关闭</button>
	        </div>
	      </div>
	    </div>
	</div>
	<!-- 模态框结束 -->
<div id="op-wrap">
    <div id="op-aside"></div>
    <div id="op-wrap-mask"></div>
    <div id="op-content">
        <!--main start-->
        <div class="content">
            <div class="main-c">
                <div class="main-flow">
                    <div class="flow-line">
                        <span class="flow-name flow-point-1 was-on">购物车</span>
                        <span class="flow-name flow-point-2 is-on">填写订单</span>
                        <span class="flow-name flow-point-3">完成支付</span>
                        <div class="flow-red-line flow-step-2"></div>
                        <span class="flow-circular flow-point-1 actived"></span>
                        <span class="flow-circular flow-point-2 active"></span>
                        <span class="flow-circular flow-point-3"></span>
                    </div>
                </div>
                <div class="mobile-big-title">填写订单</div>
            </div>       
            <div class="main-c order-info">
                <div class="user-address-panel clearfix">
                    <div class="title">收货人信息</div>
                    <div class="info" id="userAddressListPanel">
                    <div class="address-all-panel hide">
                    <div class="address-all-list clearfix">
                </div>
             </div>
            	<div class="add-address-rectangle hide">
            		<span>增加地址</span>
            	</div>
           	<form action="/Clearings" method="post">
           		<!-- 添加收货地址 -->
           		@if($addres == '')
            	<!-- 添加收货地址结束 -->
            	@else
				<div class="row">
					@foreach($addres as $key=>$value)
                    <div class="col-4 padding-top-1x">
                    	<label>
                    		<input type="radio" name="address" value="{{$value->id}}" @if($value->status == 1) checked @endif>
	                        <div class="custom-control custom-checkbox d-block">
	                            <font style="vertical-align: inherit; height: 30px;line-height: 30px">
	                              <font style="vertical-align: inherit;">收货人：{{$value->name}}<br>
	                              	收货人电话：{{$value->phone}}<br>
	                              	收货地址：{{$value->huo}}
	                              </font>
	                            </font>
	                            <input class="btn btn-danger del" value="删除" style="width: 100px">
	                        </div> 
                        </label>
                        <hr class="padding-bottom-1x">
                    </div>
                    @endforeach

                </div>
            	@endif
            	<button class="btn btn-success" data-toggle="modal" data-target="#mymodal" type="button">+添加收货地址</button>
                    
					
            </div>
        </div>
           
                <!--配送方式-->
                <div class="send-way clearfix">
                    <div class="title">配送时间</div>
                    <div class="info clearfix" style="line-height: 1.5">
                            <span class="send-tips">18:00前支付预计24小时内发货，18:00后支付预计48小时内发货</span>
                    </div>
                </div>
                <!-- 商品列表 -->
                <div class="goods-list clearfix">
                    <div class="title">商品清单
                        <span class="m-title-arrow">共 <strong>{{$num}}</strong> 件商品<i class="i-arrow" data-btn="show"></i></span>
                    </div>
                    <div class="info">
                        <div id="shop-list-box">
					        <ul class="goods-list-box">
								<li class="list-head">
									<ul class="clearfix">
										<!-- li增加class -->
										<li class="tb-name"><span>商品</span></li>
										<li class="tb-price">价格</li>
										<li class="tb-number">数量</li>
										<li class="tb-total">小计</li>
									</ul>
								</li>
								<?php 

									$money = '';

								?>
								<!-- 商品开始 -->
								@foreach($array as $value)
								<li class="list-body">
									<div class="main-goods">
										<ul class="clearfix ">
											<li class="tb-name">
												<img class="goods-img" src="/Uploads/Goods/{{$value->pic}}">
												<span class="name-info">
													<span>
														<a href="">{{$value->name}}</a>
														<span class="stock-tip"></span>
													</span>
												</span>
											</li>
											<li class="tb-price price">
												<div>
													<p>¥ {{$value->price}}</p>
												</div>
											</li>
						
											<li class="tb-number"><span>×{{$value->num}}</span></li>
											<?php
												// 计算每个商品的小计
												$total = $value->num * $value->price;
												// 计算总价格
												$money += $total; 
											?>
											<li class="tb-total">¥ {{$total}}</li>
										</ul>
									</div>
								</li>
								<!-- 商品结束 -->
								@endforeach
							</ul>
    					</div>
                            <p class="back-buy">
                                <a href="/homecart">
                                    <span class="arrow-right back-buy-icon"></span><span>返回购物车修改</span>
                                </a>
                            </p>
                    </div>
             	</div>
             <!-- 发票 -->
                <div class="set-invoice clearfix" style="margin-top: 20px">
                    <div class="info">
                        <label class="need-invoice">
                            <span>发票</span>
                        </label>

                        <div class="choose-invoice">
                            <div class="invoice-type-box">
                                <ul>
                                    <li class="active" data-code="2">电子发票</li>   
                                </ul>
                            </div>
                            <p class="invoice-type">
                                <span class="tit">发票内容：</span>商品明细
                            </p>
                        </div>
                    </div>
                </div>
                
		        <div class="main-c total-price" style="margin-top: 20px">
		            <div class="inner">
		                <div class="title">&nbsp;</div>
		                <div class="info clearfix">
		                    <div class="left">
		                        <p>商品总金额：<span class="all-price">¥ {{$money}}</span></p>
		                        <p>优惠金额：<span class="coupon-money">-¥0</span></p>
		                        <p>运费：<span class="ship-price">+¥0</span></p>
		                        <p>支付方式：<span class="pay-way">在线支付</span></p>
		                    </div>
		                    <div class="right">
		                        <p class="total-pay">应付总额：<em>¥ {{$money}}</em></p>
		                        <button type="submit" class="submit-order-btn">提交订单</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <input type="hidden" name="total" value="{{$money}}">
		        {{csrf_field()}}
        </form>
    </div>
</div>
</body>
<script type="text/javascript">
	 // 第一级别获取
    $.get('/homeaddress',{upid:0},function(result){
      // console.log(result);
      // 禁止请选择选中
      $('.ss').attr('disabled','true');

      // 得到的数据数组内容，要遍历得到里面的每个对象
      for(var i = 0; i < result.length; i++){
        // console.log(result[i].name);
        // 将得到的地址名称卸载option标签中
        var info = $('<option value="'+result[i].id+'">'+result[i].name+'</option>');
        // 将得到的option标签放入到select对象中;
        $('#sid').append(info);
      }
    },'json');

    // 其他级别内容
    // live事件委派，可以帮助将动态生成的内容只要选择器相同就可以有相应的事件
    $('select').live('change',function(){
      // 将当期的对象存储起来
      obj = $(this);
      // 通过id来查找下一个
      id = $(this).val();

      // 清除所有其他的select
      obj.nextAll('select').remove();

      $.getJSON('/homeaddress',{upid:id},function(result){
        if(result != ''){
          // 创建一个select标签对象
          var select = $('<select></select>');
          // 防止当期城市没有办法选择，所有先写上一个请选择option标签
          var op = $('<option class="mm">--请选择--</option>');
          select.append(op);

          // 循环得到的数组里面的option标签添加到select
          for(var i = 0; i < result.length; i++){
            var info = $('<option value="'+result[i].id+'">'+result[i].name+'</option>');
            // 将option标签添加到select标签中
            select.append(info);
          }

          // 将select标签添加到当前标签的后面
          obj.after(select);
          // console.log(result);

          // 把其他级别的选择禁用
          $('.mm').attr('disabled','true');
        }
      })
    })

    // 获取选中的数据提交到操作页面
    $('button').click(function(){
      arr = [];
      // console.log($('select'));
      $('select').each(function(){
        // 获取当前select被选中的option标签里面的中文文本
        opdata = $(this).find('option:selected').html();
        // 将得到的每个值放置到数组中 push() 将数组添加到数组中
        arr.push(opdata);
      })
      // 将得到的数组直接赋值给隐藏域的value值即可
      $('input[name=huo]').val(arr);
    })

    // ajax删除地址
    $(".del").click(function(){
        //获取id
        id = $(this).parent().parent().find('input:first').val();
        // console.log(id);
        //获取删除数据所在的tr
        s = $(this).parent().parent().parent();
        //Ajax
        $.get('/homeaddresdel',{id:id},function(data){
            // alert(data);
            if(data.msg == 1){  
            //移除删除数据所在的tr 
            s.remove(); 
        }else{
          //终止请求动作
          request.abort();
        }
      	},'json')
    });


    $('#tijiao').click(function(){
		$("input[name='address']").click(function(){
			if($(this).attr("checked")) {
	            return false;
	        }
		});
	});
  </script>
</html>
@endsection
@section('title','订单结算')