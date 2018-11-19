<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取到session里面id
        $id = session('id');
        // dd($id);
        //查出用户详情
        $data = \DB::table('bro_username')->where("user_id",'=',$id)->first();
        $userinfo = array();
        $userinfo['name'] = $data->name;
        $userinfo['pic'] = $data->pic;
        session(['userinfo'=>$userinfo]);
        // dd(session('userinfo'));
        
        return view('Home.Personal.index')->with('data',$data)->with('id',$id);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->only(['name','sex','age','email','phone','hobby','user_id']);
        // dd($data);
         //执行文件上传
        if($request->hasFile("pic")){
            //初始化名字 获取后缀
            $name=time()+rand(1,10000);
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file("pic")->move('./Uploads/User',$name.".".$ext);
            //初始化$data
            $data['pic']=trim($name.".".$ext);
            // dd($data);
            //执行数据库的插入
            if(DB::table("bro_username")->insert($data)){
                return redirect('/homepersonal')->with('success','成功,你的个人资料已更新');
            }else{
                return redirect('/homepersonal')->with('error',"你的个人资料更新失败");
            }
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $data = $request->only(['name','sex','age','email','phone','hobby']);
         //获取需要修改的数据
        $info=DB::table("bro_username")->where("id","=",$id)->first();
        // dd($info);
        //如果有新图上传
       if($request->hasFile("pic")){
            //初始化名字 获取后缀
            $name=time()+rand(1,10000);
            $ext=$request->file("pic")->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file("pic")->move('./Uploads/User',$name.".".$ext);
            //初始化$data
            $data['pic']=trim($name.".".$ext);
            // dd($info->pic);
            // $a = '/public/Uploads/User/'.$info->pic;
            // dd($data);
            //执行数据库的修改
            if(DB::table("bro_username")->where("id","=",$id)->update($data)){
                //删除原图
                unlink('./Uploads/User/'.$info->pic);
                return  back()->with('success',"成功,你的个人资料已更新");
            }
        }else{
            //没有图片修改
             if(DB::table("bro_username")->where("id","=",$id)->update($data)){
                return  back()->with('success',"成功,你的个人资料已更新");
            }
        }
        // dd($data);
        // if(DB::table("bro_username")->where("id","=",$id)->update($data)){
        //     return back()->with('success',"成功,你的个人资料已更新");
        // }else{
        //     return back()->with('error',"你的个人资料更新失败");
        // }
      
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
