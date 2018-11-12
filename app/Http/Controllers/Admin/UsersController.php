<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入Hash类
use Hash;
//导入校验类
use App\Http\Requests\AdminUserinsert;
//导入模型类Users
use App\Models\Users;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //用户列表
    public function index(Request $request)
    {   
         //获取搜索关键词
        $k=$request->input('keywords');

        //获取列表数据
        $data=Users::where("username",'like',"%".$k."%")->orderBY('id','asc')->paginate(5);
      
        //导入列表页
       return view("Admin.Users.users",['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //导入添加模版
        // return view("Admin.Users.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserinsert $request)
    {
        //获取所有数据
        // // dd($request->except(['passwords','_token']));
        // $data=$request->except(['passwords','_token']);
        // //密码加密
        // $data['password']=Hash::make($data['password']);
        // $data['status']=1;
        // $data['token']=str_random(50);
        // if(DB::table("bro_user")->insert($data)){
        //     //设置提示信息 存储在session里 with 可以设置session信息
        //     return redirect('/adminusers')->with('success','添加成功');
        // }else{
        //     return redirect('/adminusers/create')->with('error','添加失败');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 查看用户详情
    public function show($id)
    {
         // echo $id;单条结果
        $data=DB::table('bro_username')->where('user_id','=',$id)->first();
        if($data == null){
            return back()->with('error','没有数据');
        }
        //加载模板 分配数据
        return view("Admin.Users.info",['data'=>$data]);
    }

    //获取收货地址
    public function addres($id)
    {
        // echo $id;
       $data=DB::table('bro_useraddres')->where('user_id','=',$id)->first();
        // dd($data);
        // 加载模板 分配数据
       if($data == null){
         return back()->with('error','没有数据');
       }
        return view("Admin.Users.addres",['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo $id;
        //获取需要修改的数据
        $user=DB::table("bro_user")->where("id","=",$id)->first();
        if($user == null){
            return redirect('/adminusers')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Admin.Users.edit",['user'=>$user]);
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
       // echo $id;
        // //获取参数
        $data=$request->except(['_token','_method']);
        // dd($data);
        if(DB::table("bro_user")->where("id","=",$id)->update($data)){
            return redirect("/adminusers")->with('success',"修改成功");
        }else{
            return back()->with('error',"修改失败",'id',$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $id=$id;
        // // echo $id;
        // if(DB::table("bro_user")->where("id",'=',$id)->delete()){
        //     return redirect("/adminusers")->with('success','删除成功');
        // }else{
        //     return redirect("/adminusers")->with('error','删除失败');
        // }
    }
}
