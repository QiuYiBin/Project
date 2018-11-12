<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
//导入校验类
use App\Http\Requests\AdminLogin;
class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //退出销毁session
        $request->session()->pull('id');
        $request->session()->pull('name');
        return redirect("/adminlogin/create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载后台登录模板
        return view("Admin.Login.login");
    }

    /**
     * Store a newly created resource in storage.
     *·
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminLogin $request)
    {
        //根据输入的用户名获取用户信息
        //检测用户名是有有误
        $info=DB::table("bro_users")->where("name",'=',$request->input('name'))->first();
        //检测是否被禁用
        if($info->status==1){
        	//检测密码
            	if(Hash::check($request->input('password'),$info->password)){	
                //把用户信息写入session
                session(['id'=>$info->id]);
                session(['name'=>$info->name]);
                //1.获取登录后台用户所有的权限信息
                    $sql="select n.name,n.mname,n.aname from bro_user_role as ur,bro_role_node as rn,bro_node as n  where ur.rid=rn.rid and rn.nid=n.id and uid={$info->id}";
                    //执行sql
                    $list=DB::select($sql);
                    // dd($list);
                    // echo "<pre>";
                    // var_dump($list);exit;
                    //2.初始化权限 
                    //让所有管理员都具有访问后台首页权限
                    $nodelist['AdminController'][]="index";
                    //遍历
                    foreach($list as $key=>$value){
                        //把登录用户的所有权限写入$nodelist 数组里
                        $nodelist[$value->mname][]=$value->aname;
                    //如果权限列表有create  添加store
                    if($value->aname=="create"){
                        $nodelist[$value->mname][]="store";
                    }
                    //如果权限列表有edit  添加update
                    if($value->aname=="edit"){
                        $nodelist[$value->mname][]="update";
                    }
                }
                // echo "<pre>";
                // var_dump($nodelist);exit;
                 //3.把所有权限信息 存储在session里
                session(['nodelist'=>$nodelist]);
        		return redirect("/admins")->with('success','登录成功');
        		}else{	
        			return back()->with('error','密码错误');
        		}
        }else{	
        	return back()->with('error','你的管理员身份被禁用，请联系超级管理员');
        }
    
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
