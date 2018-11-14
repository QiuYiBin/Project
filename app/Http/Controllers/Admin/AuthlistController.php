<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入模型类Users
use App\Models\Authlist;
class AuthlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //权限列表
    public function index(Request $request)
    {
        //$auth=Authlist::all();
        //加载模板
        //return view("Admin.Authlist.index",['auth'=>$auth]);
        // 获取总条数
        $tot=DB::table("bro_node")->count();
        //每页显示数据条数
        $rev = 10;
        //获取最大页
        $maxpage=ceil($tot/$rev);
        // echo $maxpage;
        //获取传递参数
        $page=$request->input("page");
        // echo $page;
        //判断
        if(empty($page)){
            $page=1;
        }
        $offset=($page-1)*$rev;

        $sql="select * from bro_node limit {$offset},{$rev}";
        //执行sql语句
        $data=DB::select($sql);

        // $request->ajax() 判断请求是否为Ajax true 是 否则否
        if($request->ajax()){
            // echo $page;exit;
            //独立加载一个模板
            return view("Admin.Authlist.page",['data'=>$data]);
        }
        //for
        for($i=1;$i<=$maxpage;$i++){
            $pp[$i]=$i;
        }
        // echo 1;
        // echo "<pre>";
        // var_dump($pp);

        return view("Admin.Authlist.index",['pp'=>$pp,'data'=>$data])->with('tot',$tot);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //导入添加模版
        return view("Admin.Authlist.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有数据
        // dd($request->except(['_token']));
        $data=$request->except(['_token']);
        // dd($data);
        if(DB::table("bro_node")->insert($data)){
            return redirect('/authlist')->with('success','添加成功');
        }else{
            return redirect('/authlist/create')->with('error','添加失败');
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
        // echo $id;
        //获取需要修改的数据
        $user=DB::table("bro_node")->where("id","=",$id)->first();
        if($user == null){
            return redirect('/authlist')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Admin.Authlist.edit",['user'=>$user]);
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
        if(DB::table("bro_node")->where("id","=",$id)->update($data)){
            return redirect("/authlist")->with('success',"修改成功");
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
        
        // // echo $id;
        // if(DB::table("bro_node")->where("id",'=',$id)->delete()){
        //     return redirect("/authlist")->with('success','删除成功');
        // }else{
        //     return redirect("/authlist")->with('error','删除失败');
        // }
    }

     public function del(Request $request){
        //获取参数id
        $id = $request->input('id');
        
        
        if(DB::table("bro_node")->where("id","=",$id)->delete()){
            //json格式
            return json_encode(['msg'=>1]);;
        }else{
            return json_encode(['msg'=>0]);;
        }
    }
}
