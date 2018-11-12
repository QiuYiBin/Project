<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
//导入校验类
use DB;

//导入校验类
use App\Http\Requests\AdminUsers;
class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('bro_users')->join('bro_user_role','bro_users.id','=','bro_user_role.uid')->join('bro_role','bro_role.id','=','bro_user_role.rid')->select('bro_users.*','bro_user_role.*','bro_role.name as rname')->get();
        // dd($data);
        //分配数据 加载模板
        return view("Admin.Adminuser.index")->with('data',$data);

    }

    //分配角色
    public function rolelist($id){
        // echo $id;
        //获取管理员的信息
        $info=DB::table("bro_users")->where("id",'=',$id)->first();
        //获取所有的角色
        $role=DB::table("bro_role")->get();
        //获取当前用户的角色信息
        $data=DB::table("bro_user_role")->where("uid",'=',$id)->get();
        //判断
        if(count($data)){
            //当前分配的用户有角色信息
            //遍历
            foreach($data as $v){
                //把角色rid存储在数组里
                $rids[]=$v->rid;
            }
            // echo "<pre>";
            // var_dump($rids);
            return view("Admin.Adminuser.rolelist",['info'=>$info,'role'=>$role,'rids'=>$rids]);

        }else{
            //当前用户没有角色信息
            //加载模板
            return view("Admin.Adminuser.rolelist",['info'=>$info,'role'=>$role,'rids'=>array()]);
        }
        
    }

    //保存角色
    public function saverole(Request $request){
        // echo "this is saverole";
        //user_role 数据表插入数据  uid  rid 
        $uid=$request->input('uid');
        //获取rid
        $rid=$_POST['rid'];
        //删除当前用户已有的角色信息
        DB::table("bro_user_role")->where("uid","=",$uid)->delete();
        // echo "<pre>";
        // var_dump($rid);
        foreach($rid as $key=>$value){
            //封装需要插入的数据
            $data['uid']=$uid;
            $data['rid']=$value;
            //执行插入
            DB::table("bro_user_role")->insert($data);
        }

        return redirect("/adminsuser")->with('success','角色分配成功');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = \DB::table('bro_role')->get();
        // dd($res);
        //加载添加模块
        return view("Admin.Adminuser.add")->with('res',$res);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUsers $request)
    {
        //执行管理员用户添加
        //获取所有数据
        // dd($request->except(['passwords','_token']));
        $data=$request->except(['passwords','_token']);
        // //密码加密
        $data['password']=Hash::make($data['password']);
        $data['status'] = 0;
        // dd($data);
        // 创建新数组放置rid和uid
        $res = array();
        $res['rid'] = $data['rid'];
        unset($data['rid']);
        // var_dump($res);
        // dd($data);
        if($id = DB::table("bro_users")->insertGetId($data)){
            //设置提示信息 存储在session里 with 可以设置session信息
            $res['uid'] = $id;
            \DB::table('bro_user_role')->insert($res);
            return redirect('/adminsuser')->with('success','添加成功');
        }else{
            return redirect('/adminsuser/create')->with('error','添加失败');
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
        //获取需要修改的数据 查询单条数据 
        $admin=DB::table("bro_users")->where("id","=",$id)->first();
       
        if($admin == null){
            return redirect('/adminsuser')->with('error','不要瞎改');
        }
        //加载模板 分配数据
        return view("Admin.Adminuser.edit",['admin'=>$admin]);
        //echo $id;
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
        //获取参数
        //获取全部参数
        //dd($request->all());
        //出去 token和method相关参数
        $data=$request->except(['_token','_method']);
        //dd($data);
        //执行修改操作
        if(DB::table("bro_users")->where("id","=",$id)->update($data)){
   			return redirect("/adminsuser")->with('success','修改成功');
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
        // 执行删除操作
        // 获取需要删除的id
        $id=$id;
        //echo $id;
        if(DB::table("bro_users")->where("id","=",$id)->delete()){
        	return redirect("/adminsuser")->with('success','删除成功');
        }else{	
        	return redirect("/adminsuser")->with('error','删除失败');
        }
    }

    public function del(Request $request){	
    	//获取需要删除的id
    	//$id=$request->input('id');
    	//获取需要删除的id
    	$id=$request->input('id');
    	//echo $id;
    	if(DB::table("bro_users")->where("id","=",$id)->delete()){
    		//json 格式
    		return response()->json(['msg'=>1]);
    	}else{	
    		return response()->json(['msg'=>0]);
    	}
    }
}
