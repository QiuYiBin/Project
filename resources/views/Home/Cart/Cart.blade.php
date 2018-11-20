@extends('Home.Indexpublic.public')
@section('main')
	<style type="text/css">
			<style type="text/css">	
		* {
                margin: 0;
                padding: 0;
                border: 0;
                outline: 0
            }
            
            ul,
            li {
                list-style: none;
            }
            
            a {
                text-decoration: none;
            }
            
            a:hover {
                cursor: pointer;
                text-decoration: none;
            }
            
            a:link {
                text-decoration: none;
            }
            
            img {
                vertical-align: middle;
            }
            
            .btn-numbox {
                overflow: hidden;
                margin-top: 20px;
            }
            
            .btn-numbox li {
                float: left;
            }
            
            .btn-numbox li .number,
            .kucun {
                display: inline-block;
                font-size: 12px;
                color: #808080;
                vertical-align: sub;
            }
            
            .btn-numbox .count {
                overflow: hidden;
                margin: 0 16px 0 -20px;
            }
            
            .btn-numbox .count .num-jian,
            .input-num,
            .num-jia {
                display: inline-block;
                width: 28px;
                height: 28px;
                line-height: 28px;
                text-align: center;
                font-size: 18px;
                color: #999;
                cursor: pointer;
                border: 1px solid #e6e6e6;
            }
            .btn-numbox .count .input-num {
                width: 58px;
                height: 26px;
                color: #333;
                border-left: 0;
                border-right: 0;
            }
            .kucun{	
            	text:center;

            }
	</style>
	 <script type="text/javascript" src="/Admin/js/jquery-1.8.3.min.js"></script>
	<html lang="zxx<head">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>购物车页面</title>
    <!-- Mobile Specific Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/Home/images/favicon.ico">
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/font-awesome.min.css">
    <!-- Feather Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/feather-icons.css">
    <!-- Pixeden Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/pixeden.css">
    <!-- Social Icons CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/socicon.css">
    <!-- PhotoSwipe CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/photoswipe.css">
    <!-- Izitoast Notification CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/izitoast.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" media="screen" href="/Home/css/style.css">
</head>
<body>
<?php
	$tot = 0;
?>
    <!-- Start Cart Content -->
    <div class="container padding-top-1x padding-bottom-3x" style="margin-top:100px">
        <!-- Start Shopping Cart -->
        <div class="table-responsive shopping-cart">
            <table class="table">
                <thead>
                <tr>
                    <th>产品名称</th>
                    <th class="text-center">数量</th>
                    <th class="text-center">库存</th>
                    <th class="text-center">单价</th>
                    <th class="text-center">小计</th>
                    

                    <th class="text-center">
                        <a class="btn btn-sm btn-outline-danger qingkong" href="#" id="qingkong" >清空购物车</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                <tr>
                	@if(empty($data))
                		echo <h1>暂无数据</h1>
                	@else
                    <td>
                        <div class="product-item">

                            <a class="product-thumb" href="shop-single-1.html">
                                <img src="/Home/images/shop/cart/01.jpg" alt="Product">
                            </a>
                            <div class="product-info">
                                <h4 class="product-title">{{$row->name}}</a></h4>
                                
                            </div>
                        </div>
                    </td>
                    <?php
							
							$money = $row->price * session('cart.'.$row->id)['num'];
							//var_dump($money);
							$tot += $money;
							//var_dump($tot);
						?>
					<td class="btn-numbox">
					            
					            	
						<ul class="count">
				             <li id="num-jian" ids="{{$row->id}}" class="num-jian" money="{{$row->price}}">-</li>
				             <li><input type="text" class="input-num" id="input-num" ids="{{$row->id}}" value="{{session('cart.'.$row->id)['num']}}"  money="{{$row->price}}" disabled/></li>
				             <li id="num-jia" ids="{{$row->id}}" class="num-jia" money="{{$row->price}}">+</li>

				         </ul>     
					  </td>          
						
	             		
		                   	<td class="text-center text-lg text-medium" value="{{$row->store}}" id="kucun">{{$row->store}}</td>
							<td class="text-center text-lg text-medium"  value="{{$row->price}}">{{$row->price}}</td>
		                    <td class="text-center text-lg text-medium " data-k="{{$money}}" id="money{{$row->id}}">{{$money}}</td>
		                    <td class="text-center">
		                    <input type="hidden" name="id" value="{{$row->id}}">
		                    <a class="remove-from-cart del" href="javascript:void(0)" data-toggle="tooltip" title="Remove item">
		                    <i class="icon-cross"></i>
		                    </a>
		                    </td>
                		
                
       			</tr>
       			@endif
               	@endforeach
               	
                </tbody>
            </table>
        </div>
        <div class="shopping-cart-footer">
            <div class="column">
                
            </div>
            @if(empty($data))
            	<h1>0</h1>
            @else
            <div class="column text-lg">总计 &nbsp;&nbsp;&nbsp; <span class="text-medium" id="heji">{{$tot}}</span>元</div>
            @endif
        </div>
        <div class="shopping-cart-footer">
            <div class="column">
                <a class="btn btn-outline-secondary" href="shop-grid-1.html"><i class="icon-arrow-left"></i>&nbsp;回到购物</a>
            </div>
            <div class="column">
                <a class="btn btn-primary" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">更新购物车</a><a class="btn btn-success" href="checkout-address.html">结账</a>
            </div>
        </div>
        <!-- End Shopping Cart -->
        <!-- Start Related Products -->
        <h3 class="text-center padding-top-3x mb-30">发布的产品</h3>
        <div class="owl-carousel" data-owl-carousel='{ "nav": false, "dots": false, "margin": 30, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},";1200":{"items":4}} }'>
            <!-- Start Product #1 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/01.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">iPhone X</a></h3>
                    <h4 class="product-price">$749.99</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物车</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #1 -->
            <!-- Start Product #2 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/05.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">Panasonic TX-32</a></h3>
                    <h4 class="product-price">$949.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物车</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #2 -->
            <!-- Start Product #3 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/09.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">Sony HDR-AS50R</a></h3>
                    <h4 class="product-price">$700.00</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物车</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #3 -->
            <!-- Start Product #4 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/13.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">HP LaserJet Pro 200</a></h3>
                    <h4 class="product-price">$249.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">添加到购物车</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #4 -->
            <!-- Start Product #5 -->
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single-3.html">
                        <img src="/Home/images/shop/products/17.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-3.html">Apple Watch 3</a></h3>
                    <h4 class="product-price">$449.00</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #5 -->
            <!-- Start Product #6 -->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars">
                        <i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div>
                    <a class="product-thumb" href="shop-single-2.html">
                        <img src="/Home/images/shop/products/21.jpg" alt="Product">
                    </a>
                    <h3 class="product-title"><a href="shop-single-2.html">Acer Aspire 15.6 i3</a></h3>
                    <h4 class="product-price">$649.50</h4>
                    <div class="product-buttons">
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist">
                                <i class="icon-heart"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product #6 -->
        </div>
        <!-- End Related Products -->
    </div>
    <!-- End Cart Content -->
</div>
<!-- Start Back To Top -->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-arrow-up"></i>
</a>
<!-- End Back To Top -->
<div class="site-backdrop"></div>
<!-- Modernizr JS -->
<script src="/Home/js/modernizr.min.js"></script>
<!-- JQuery JS -->
<script src="/Home/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="/Home/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/Home/js/bootstrap.min.js"></script>
<!-- CountDown JS -->
<script src="/Home/js/count.min.js"></script>
<!-- Gmap JS -->
<script src="/Home/js/gmap.min.js"></script>
<!-- ImageLoader JS -->
<script src="/Home/js/imageloader.min.js"></script>
<!-- Isotope JS -->
<script src="/Home/js/isotope.min.js"></script>
<!-- NouiSlider JS -->
<script src="/Home/js/nouislider.min.js"></script>
<!-- OwlCarousel JS -->
<script src="/Home/js/owl.carousel.min.js"></script>
<!-- PhotoSwipe UI JS -->
<script src="/Home/js/photoswipe-ui-default.min.js"></script>
<!-- PhotoSwipe JS -->
<script src="/Home/js/photoswipe.min.js"></script>
<!-- Velocity JS -->
<script src="/Home/js/velocity.min.js"></script>
<!-- Main JS -->
<script src="/Home/js/script.js"></script><script src="/Home/js/custom.js"></script>
</body>
<script type="text/javascript">
     $(".del").click(function(){	
     	//获取id
     	id=$(this).prev().val();
     	
     	s = $(this).parents("tr");
     	//console.log(s);
     	//alert(s.html());
     	//s.remove();
     	$.get("/homecartdel",{id:id},function(data){
     		console.log(data);
     		if(data){	
     			s.remove();
     		}
 		});
     });


     $(".num-jia").click(function(){
     	a = $(this).parent().parent().next().html();	
     	obj = $(this);
     	num = obj.prev().find("input").val();
		num = Number(num);
     	//alert(num);
     	//获取商品id
     	id=($(this).attr('ids'));
     	//alert(id);exit;
     	//发送ajax请求
     	if(num > a){	
     		return false;
     	}
     	if (num < a) {
	     	$.get("/CarAdd",{id:id},function(data){	
	     		//alert(data);
	     		if(data){	
			     	obj.prev().find("input").val(++num);
			     	//获取商品的价格
			     	price=Number(obj.attr("money"));
			     	//alert(price);
			     	money=Number($('#money'+id).html());

			     	money=money+price;
			     	$('#money'+id).html(money);
			     	//合计
			     	tot=Number($("#heji").html());
			     	
			     	tot = tot+price;
			     	$("#heji").html(tot);
			     	//alert(tot);
	     			}
	     		   });
	     }else{	
	     	return false;
	     }
     	

     });

     $(".num-jian").click(function(){
     	obj=$(this);	
     	//获取商品id
     	id=$(this).attr('ids');
     	num=obj.next().find("input").val();
		//alert(num);
		num=Number(num);
		//alert(num);
		if(num > 1){
			//发送ajax请求
	     	$.get("/Carjian",{id:id},function(data){	
	     		if (data) {	
					
			     	obj.next().find("input").val(--num);
			     	price = Number(obj.attr("money"));
			     	//alert(price);
			     	money=Number($('#money'+id).html());
			     	money=money-price;
			     	//alert(money);
			     	$('#money'+id).html(money);
			     	//合计
			     	tot=Number($("#heji").html());
			     	
			     	tot = tot-price;
			     	$("#heji").html(tot);
			     	//alert(tot);
		     	}
	     	});	
		}else{	
			return false;
		}  	
     	
     });

		$("#qingkong").click(function(){
			var num = 1;
			$.get('/Carqingkong',{num:num},function(data){	
				if(data){	
					alert('清空成功');
				}
			});
		});	   	  

     
</script>
</html>

@endsection
@section('title','我的购物车')
