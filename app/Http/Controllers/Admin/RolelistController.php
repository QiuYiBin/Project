<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入模型类Users
use App\Models\Rolelist;
class RolelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取所有角色
        $role=Rolelist::all();
        // dd($role);
        //加载模板
        return view("Admin.Rolelist.index",['role'=>$role]);
    }

    //分配权限
    public function auth($id){
        //获取当前操作的角色信息
        $role=DB::table("bro_role")->where("id",'=',$id)->first();
        //获取所有的权限信息
        $node=DB::table("bro_node")->get();
        //获取当前角色已有的权限信息
        $data=DB::table("bro_role_node")->where("rid",'=',$id)->get();
        //判断
        if(count($data)){
            //当前角色有权限信息
            //遍历
            foreach($data as $v){
                $nid[]=$v->nid;
            }
            // echo "<pre>";
            // var_dump($nid);
            return view("Admin.Rolelist.auth",['role'=>$role,'node'=>$node,'nid'=>$nid]);

        }else{
            //当前角色没有权限信息
            //加载模板
            return view("Admin.Rolelist.auth",['role'=>$role,'node'=>$node,'nid'=>array()]);
        }
        
    }

    //保存角色
    public function saveauth(Request $request){
        // echo "this is saveauth";
        //向role_node 插入数据
        //获取角色id
        $rid=$request->input('rid');
        //获取分配的权限id
        $nid=$_POST['nid'];
        // echo $rid;
        // echo "<pre>";
        // var_dump($nid);
        //删除当前角色已有的权限信息
        DB::table("bro_role_node")->where("rid",'=',$rid)->delete();
        //遍历
        foreach($nid as $key=>$value){
            //封装需要插入的数据
            $data['rid']=$rid;
            $data['nid']=$value;
            DB::table("bro_role_node")->insert($data);
        }

        return redirect("/role")->with('success','权限分配成功');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //导入添加模版
        return view("Admin.Rolelist.add");
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
        $data['status']=1;
        // dd($data);
        if(DB::table("bro_role")->insert($data)){
            return redirect('/role')->with('success','添加成功');
        }else{
            return redirect('/role/create')->with('error','添加失败');
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
        $user=DB::table("bro_role")->where("id","=",$id)->first();
        if($user == null){
            return redirect('/role')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Admin.Rolelist.edit",['user'=>$user]);
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
        //获取参数
        $data=$request->except(['_token','_method']);
        // dd($data);
        if(DB::table("bro_role")->where("id","=",$id)->update($data)){
            return redirect("/role")->with('success',"修改成功");
        }else{
            return  back()->with('error',"修改失败",'id',$id);
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
    // Ajax删除
    public function del(Request $request)
    {
        //获取参数id
        $id=$request->input('id');
        // echo $id;
        if(DB::table("bro_role")->where("id","=",$id)->delete()){
            //json格式
            return response()->json(['msg'=>1]);
        }else{
            return response()->json(['msg'=>0]);
        }
    }
}
