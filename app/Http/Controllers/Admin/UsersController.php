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
        // 获取搜索关键词
        $k = $request->input('keywords'); 
    	//获取数据总条数
    	$tot = DB::table("bro_user")->count();
    	//规定下每页显示的数据条数
    	$rev = 5;
    	//获取总页数 
    	$sums = ceil($tot/$rev);
    	//获取附加参数值
    	$page = $request->input('page');
    	//判断$page是否为空
    	if(empty($page)){
    		$page = 1;
    	}
    	//偏移量
    	$offset = ($page-1) * $rev;
    	//准备sql语句
       	$sql = "select * from bro_user ORDER BY id ASC limit $offset,$rev";
    	//执行sql语句
    	$data = DB::select($sql);
    	//判断是否是ajax请求
    	if($request->ajax()){
    		return view("Admin.Users.text",['data'=>$data]);
    	}
    	//遍历分条数
    	for($i=1;$i<=$sums;$i++) { 
    		$pp[$i] = $i;
    	}
        //获取列表数据
        $data = Users::where("username",'like',"%".$k."%")->orderBY('id','asc')->paginate(5);
      
        //导入列表页
       	return view("Admin.Users.users",['data'=>$data,'request'=>$request->all()],['pp'=>$pp,'data'=>$data])->with('k',$k)->with('tot',$tot);
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
        // 获取需要修改的数据
        $user=DB::table("bro_user")->where("id","=",$id)->first();
        // 加载模板 分配数据
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
        //获取参数
        $data=$request->except(['_token','_method']);
        // dd($data);
        if(DB::table("bro_user")->where("id","=",$id)->update($data)){
            return redirect("/adminusers")->with('success',"修改成功");
        }else{
            return redirect("/adminusers/{id}/edit")->with('error',"修改失败");
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
    }
}
