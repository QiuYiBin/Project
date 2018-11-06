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

Route::resource('/admins','Admin\AdminController');

Route::resource('/admincates','Admin\CateController');

// 路由组（项目里推荐）
// login中间件规则名 可以和kernel.php里的中间件做匹配，匹配到的话，直接调用中间件类
// 中间件结合路由使用（项目里推荐使用）
// Route::group(['middleware'=>'login'],function(){

//     // 子路由
//     Route::get('/adminorder',function(){
//         echo '这是后台订单界面';
//     });

//     Route::get('/adminlist',function(){
//         echo '这是后台友情链接管理';
//     });
// });

// 加载后台模板广告模板
// Route::get('/adminads',function(){
//     echo '这是后台的广告模板';
// })->middleware('login');

// 登录界面
// Route::get('/login',function(){
    // return view('login');
// });

// 普通控制器使用
// Route::get('/userindex','Admin\UserController@index');

// Route::get('/useradd','Admin\UserController@add');
// // 执行添加
// Route::post('/userinsert','Admin\UserController@insert');

// // 带有参数的控制器
// Route::get('/userdelete/{id}','Admin\UserController@delete');

// // 普通控制器结合中间件方法一
// Route::get('/useredit','Admin\UserController@edit')->middleware('login');
// // 普通控制器结合路由组使用中间件
// Route::group(['middleware'=>'login'],function(){
//     // 子路由
//     Route::get('/userinfo','Admin\UserController@info');
//     // 子路由二
//     Route::get('/useraddress','Admin\UserController@address');
// });

// // 资源控制器（项目里推荐用法） 控制器里方法都可以统统交给同一个资源路由去处理
// Route::resource('/adminshop','Admin\UsersController');

// Route::get('/adminshopindex1','Admin\UsersController@index1');
