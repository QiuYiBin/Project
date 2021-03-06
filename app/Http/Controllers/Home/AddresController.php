<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入校验类
use App\Http\Requests\Addres;
class AddresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取到session里面id
        $id = session('id');
        //获取所有用户收货地址
        $data = \DB::table('bro_useraddres')->where("user_id",'=',$id)->get();
        // dd($data);
        //加载模版
        return view('Home.Addres.index')->with('data',$data)->with('id',$id);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Addres $request)
    {
        //获取所有数据
        $data=$request->except(['_token']);
        // dd($data);
        if(DB::table("bro_useraddres")->insert($data)){
            return redirect('/homeaddres')->with('success','添加成功');
        }else{
            return redirect('/homeaddres')->with('error','添加失败');
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
        // 获取当前登录用户的id
        $userid = session('id');
        $res['status'] = 0;
        $data['status'] = 1;
        DB::table('bro_useraddres')->where('user_id','=',$userid)->update($res);
        if(DB::table('bro_useraddres')->where('id','=',$id)->where('user_id','=',$userid)->update($data)){
            return redirect('/homeaddres');
        }else{
            return redirect('/homeaddres');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取需要修改的数据 查询单条数据 
        $admin=DB::table("bro_useraddres")->where("id","=",$id)->first();
       
        if($admin == null){
            return redirect('/homeaddres')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Home.Addres.edit")->with('admin',$admin);

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
        
        // 获取全部参数
        // dd($request->all());
        // 干掉两个没用的字段
        $data=$request->except(['_token','_method']);
        //dd($data);
        //执行修改操作
        if(DB::table("bro_useraddres")->where("id","=",$id)->update($data)){
            return redirect("/homeaddres")->with('success','修改成功');
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
        //
    }

    public function ajax(Request $request)
    {
        $upid =$request->get('upid');
        $sql = "SELECT * FROM bro_district WHERE upid = {$upid}";
        //查出地址表
        $data = DB::select($sql);
        return $data;
        // return json_decode($data);
    }

    //Ajax删除
     public function del(Request $request)
    {
        //获取删除的id
        $id = $request->input('id');
        //删除操作
        if(DB::table("bro_useraddres")->where("id","=",$id)->delete()){
            //json格式
            return json_encode(['msg'=>1]);;
        }else{
            return json_encode(['msg'=>0]);;
        }
    }
}
