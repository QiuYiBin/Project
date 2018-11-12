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


//后台登录管理
Route::resource('/adminlogin',"Admin\AdminLoginController");
Route::group(["middleware"=>'login'],function(){
	//首页
	Route::resource('/admins','Admin\AdminController');
	//管理员管理
	Route::resource('/adminsuser','Admin\AdminuserController');
	//ajax删除
	Route::get('/adminsuserdel','Admin\AdminuserController@del');
	//分配角色
	Route::get('/adminusersrolelist/{id}','Admin\AdminuserController@rolelist');
	//保存角色
	Route::post("/saverole","Admin\AdminuserController@saverole");
	//角色管理
	Route::resource("/role","Admin\RolelistController");
	//角色管理Ajax删除
	Route::get("/roles","Admin\RolelistController@del");
	//权限分配
	Route::get("/authrole/{id}","Admin\RolelistController@auth");
	//保存权限
	Route::post("/saveauth","Admin\RolelistController@saveauth");
	//权限管理
	Route::resource("/authlist","Admin\AuthlistController");
	//权限管理Ajax删除
	Route::get("/authlists","Admin\AuthlistController@del");
	//用户管理
	Route::resource('/adminusers','Admin\UsersController');
	//用户列表收货地址
	Route::get('/adminusersaddres/{id}','Admin\UsersController@addres');
	
});
