<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 后台登录管理
Route::resource('/adminlogin','Admin\AdminLoginController');
Route::group(['middleware'=>'login'],function(){
	// 后台首页
	Route::resource('/admins','Admin\AdminController');
	// 管理员管理
	Route::resource('/adminusers','Admin\AdminuserController');
	// ajax删除
	Route::get('/adminsuserdel','Admin\AdminuserController@del');
	// 分配角色
	Route::get('/adminusersrolelist/{id}','Admin\AdminuserController@rolelist');
	// 保存角色
	Route::post("/saverole","Admin\AdminuserController@saverole");
	// 角色管理
	Route::resource("/role","Admin\RolelistController");
	// 角色管理Ajax删除
	Route::get("/roles","Admin\RolelistController@del");
	// 权限分配
	Route::get("/authrole/{id}","Admin\RolelistController@auth");
	// 保存权限
	Route::post("/saveauth","Admin\RolelistController@saveauth");
	// 权限管理
	Route::resource("/authlist","Admin\AuthlistController");
	// 权限管理Ajax删除
	Route::get("/authlists","Admin\AuthlistController@del");
	// 用户管理
	Route::resource('/adminuser','Admin\UsersController');
	// 用户列表收货地址
	Route::get('/adminusersaddres/{id}','Admin\UsersController@addres');
	// 后台分类管理
	Route::resource('/admincates','Admin\CateController');
	// 商品管理
	Route::resource('/admingoods','Admin\GoodsController');
	// 查看商品
	Route::get('/admingoods/show/{id}','Admin\GoodsController@show');
	// 轮播图管理
	Route::resource('/slider','Admin\SliderController');
	// 轮播图文件上传路由
	Route::any('/slider/upload','Admin\SliderController@upload');
	// 商品添加图片上传路由
	Route::any('/admingoods/upload','Admin\GoodsController@upload');
	// 后台轮播图AJAX删除
	Route::get('/sliderdel','Admin\SliderController@ajaxdel');
	// 公告模块管理
	Route::resource('/adminarticle','Admin\AdminarticleController');
	// 公告批量删除
	Route::get('/articledel','Admin\AdminarticleController@del');
	// 友情链接
	Route::resource("/link","Admin\LinkController");
	// 友情链接ajax删除
	Route::get("/linkajax","Admin\LinkController@del");
	// 订单列表
	Route::resource("/crder","Admin\CrderController");
	// 订单ajax删除
	Route::get("/crderajax","Admin\CrderController@del");
	// 关联商品详情
	Route::get("/details/{id}","Admin\CrderController@details");
	// 订单详情表
	Route::resource("/crderinfo","Admin\CrderinfoController");
	// 优惠券
	Route::resource("/coupon","Admin\CouponController");
	// 优惠券ajax删除
	Route::get("/couponajax","Admin\CouponController@del");
	// 评论管理
	Route::resource("/comment","Admin\CommentController");
	// 广告管理
	Route::resource('/advert','Admin\AdvertController');
	// Ajax删除
	Route::get('/del','Admin\AdvertController@del');
	// 文章管理
	Route::resource('/word','Admin\WordController');
});


// 前台首页
Route::resource('/','Home\IndexController');
//注册
Route::resource('/register','Home\RegisterController');
//验证码
Route::get("/code","Home\RegisterController@code");
//激活用户
Route::get("/activation","Home\RegisterController@activation");
//登陆
Route::resource("/login","Home\LoginController");
//激活成功
Route::get("/logindex","Home\LoginController@index");
//
Route::get("/logintion","Home\LoginController@activation");
//找回密码
Route::resource("/retrieve","Home\RetrieveController");
//
Route::get("/rtion","Home\RetrieveController@activation");
//
Route::post("/doreset","Home\RetrieveController@doreset");
// 商品详情
Route::get('/shopsingle/{id}','Home\SingleController@index');
// 个人中心
Route::Resource('/homepersonal','Home\PersonalController');
// 我的订单
Route::Resource('/homeorder','Home\OrderController');
// 我的地址
Route::Resource('/homeaddres','Home\AddresController');
// 地址Ajax
Route::get('/homeaddresdel','Home\AddresController@del');
// 添加地址发送请求
Route::get('/homeaddress','Home\AddresController@ajax');
// 我的优惠卷
Route::Resource('/homecoupon','Home\CouponController');
// 商品列表
Route::resource('/goods','Home\GoodsController');
// 友情链接
Route::resource('/friendship','Home\FriendshipController');
// 广告列表
Route::resource('/homeadvert','Home\AdvertController');
// 文章页
Route::resource('/homeword','Home\WordController');
// 前台购物车路由
Route::resource('/homecart','Home\CartController');
// 前台公告路由
Route::resource("/article","Home\ArticleController");
//加
//ajax删除
Route::get("/homecartdel","Home\CartController@del");
//ajax商品加
Route::get("/CarAdd","Home\CartController@CarAdd");
//ajax商品减
Route::get("/Carjian","Home\CartController@Carjian");
Route::get("/Carqingkong","Home\CartController@Carqingkong");
// 结算路由
Route::resource('/Clearing','Home\ClearingController');
// 结算处理路由
Route::post('/Clearings','Home\ClearingController@order');
// 订单页
Route::resource('/homedetail','Home\DetailController');
Route::get('/curl','Home\IndexController@curl');
// 我的收藏
Route::resource('/homewish','Home\WishController');
// ajax删除收藏
Route::get('/homewishdel','Home\WishController@del');
