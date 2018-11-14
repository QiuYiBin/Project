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

Route::get('/', function () {
	// 加载模板
    return view('welcome');
});



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
	// 添加商品规格
	Route::get('/goodsspec/{id}','Admin\GoodsController@spec');
});


// 前台首页
Route::resource('/homeindex','Home\IndexController');

Route::resource('/homecates','Home\CatesController');
