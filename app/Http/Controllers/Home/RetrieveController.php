<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入Mail类
use Mail;
//导入Hash
use Hash;
use DB;
//导入三方类
use Gregwar\Captcha\CaptchaBuilder;
class RetrieveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.Retrieve.index');
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
    
     //邮件测试发送  $id,$token,$mail 接收方
    public function sendMail($id,$token,$mail)
    {    
        // Home.Register.a 模板  ['id'=>$id,'token'=>$token] 分配参数 
        // $message 消息生成器
        //在闭包函数内部不能直接使用闭包函数外部的变量  如果想使用 use 导入
        Mail::send('Home.Retrieve.a',['id'=>$id,'token'=>$token],function($message)use($mail){
            $message->to($mail);
            $message->subject('密码重置');
        });
        return true;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email=$request->input('email');
        // echo $email;\
       //获取数据库的数据
        $info=DB::table("bro_user")->where("email",'=',$email)->first();
        //发送邮件找回密码
        $res=$this->sendMail($info->id,$info->token,$email);
        if($res){
            echo "重置密码的邮件已经发送成功,请登录邮箱重置密码";
        }
    }
    
    public function activation(Request $request){
       // echo  "密码重置";
        $id=$request->input("id");
        // dd($id);
        $info=DB::table("bro_user")->where("id","=",$id)->first();
        // dd($info->token);
        $token=$request->input('token');
        // 对比 加载密码重置模板
        if($token==$info->token){
            return view("Home.Retrieve.vation",['id'=>$id]);
        }

    }

    public function doreset(Request $request){
        // echo "this is doreset";
       $id=$request->input('id');
       $password=$request->input('password');
       $repassword=$request->input('ressword');
       if($password != $repassword){
        return back()->with('error','两次密码不一致');
       }
        $data['password']=Hash::make($request->input('password'));
        // dd($data);
        $data['token']=rand(1,10000);
        //执行密码修改
        if(DB::table("bro_user")->where("id",'=',$id)->update($data)){
            return redirect("/logindex");
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
        echo "this is update";
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
