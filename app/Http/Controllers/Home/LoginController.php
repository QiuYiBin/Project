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

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Home.Login.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //退出
        $request->session()->pull('username');
        //跳转
        return redirect("/");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      //邮件测试发送  $id,$token,$mail 接收方
    public function sendMail($id,$token,$mail)
    {
        // Home.Register.a 模板  ['id'=>$id,'token'=>$token] 分配参数 
        // $message 消息生成器
        //在闭包函数内部不能直接使用闭包函数外部的变量  如果想使用 use 导入
        Mail::send('Home.Login.a',['id'=>$id,'token'=>$token],function($message)use($mail){

            $message->to($mail);
            $message->subject('请激活你的用户');
        });
        return true;
        }

    //激活
    public function activation(Request $request)
    {
         //获取id和token
        $id=$request->input('id');
        // dd($id);
        $info=DB::table("bro_user")->where("id",'=',$id)->first();
        $token=$request->input('token');
        // echo $info->token.":".$token;

        //对比邮件token是否和数据的token值一致
        if($token==$info->token){
            //封装修改的数据
            $data['status']=0;
            $data['token']=rand(1,10000);
            if(DB::table("bro_user")->where("id",'=',$id)->update($data)){
                return redirect("/logindex");
            }else{
                return redirect("/register");
            }
            
        }
    }


    public function store(Request $request)
    {
        // 获取验证码
        $vcode=$request->input('vcode');
        // dd($vcode);
        //获取存储在session的验证码
        $fcode=session('fcode');
        // dd($fcode);
        if($vcode != $fcode){
            return back()->with('error1','输入的验证码有误');
        }else{
             $username=$request->input('username');
             // dd($username)
             $password=$request->input("password");
             $email=$request->input("email");
             // dd($email);
             
             if(!count($row=DB::table("bro_user")->where("username",'=',$username)->first())){
              return back()->with('error2','用户不存在');

             }elseif($email != $row->email){
                  return back()->with('error5','邮箱错误');
             }elseif(Hash::check($password,$row->password)){
                  if($row->status==0){
                    //将会员的信息存储在session里
                    session(['username'=>$row->username]);
                    return redirect("/");
                    // echo "登陆成功";
                }else{
                    if($res=$this->sendMail($row->id,$row->token,$row->email)){
                    echo "用户未激活,请登录邮箱激活用户";
                }

                }
             }else{
                return back()->with('error4','密码不正确');
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








                