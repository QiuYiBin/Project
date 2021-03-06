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
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Home.Register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //邮件测试发送  $id,$token,$mail 接收方
    public function sendMail($id,$token,$mail){
        // Home.Register.a 模板  ['id'=>$id,'token'=>$token] 分配参数 
        // $message 消息生成器
        //在闭包函数内部不能直接使用闭包函数外部的变量  如果想使用 use 导入
        Mail::send('Home.Register.a',['id'=>$id,'token'=>$token],function($message)use($mail){

            $message->to($mail);
            $message->subject('请激活你的用户');
        });
        return true;
        }
    
    //激活
    public function activation(Request $request)
    {
         //获取id和token
        $id = $request->input('id');
        $info=DB::table("bro_user")->where("id",'=',$id)->first();
        $token=$request->input('token');
        // echo $id.":".$token;
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

    public function create()
    {
        //
    }

    //图片验证码
    public function codes(){
        ob_clean();//清除操作
        $builder = new CaptchaBuilder;
       //可以设置图片宽高及字体
       $builder->build($width = 150, $height = 50, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->flashOnly('username','phone','email');
        // 获取验证码
        $vcode=$request->input('vcode');
        //获取存储在session的验证码
        $fcode=session('vcode');
        //获取密码
        $password=$request->input('password');
        //获取确定密码
        $repassword=$request->input('repassword');

        if($password !== $repassword){
            return back()->with('error','两次密码不一致');

        }elseif ($vcode !== $fcode) {
            return back()->with('error1','输入的验证码有误');
        }else{
            $data=$request->only(['username','phone','email','password']);
            $data['password']=Hash::make($data['password']);
            $data['status']=1;//1 未激活  0代表已经激活
            $data['token']=rand(1,10000);

            if($id=DB::table("bro_user")->insertGetId($data)){

               if($res=$this->sendMail($id,$data['token'],$data['email'])){
                    echo '激活用户邮件已经发送,请登录邮箱激活用户,5秒后返回首页!<meta http-equiv="refresh" content="5;url=/">';
                }
            }else{
                return back()->with('error2','注册失败');
            }

            
        }

    }
     //检测用户是否存在
    public function yonghu(Request $request){
        // return 1;
        $username = $request->input('h');
        // 查询数据
        $names = DB::table('bro_user')->where('username','=',$username)->first();
        // dd($phones);
        // 判断是否有数据
        if($names){
            echo 1;
        }else{
            echo 2;
        }

    }
   //检测手机是否存在
    public function phone(Request $request){
        $phones = $request->input('j');
        // 查询数据
        $phoness = DB::table('bro_user')->where('phone','=',$phones)->first();
        // dd($phones);
        // 判断是否有数据
        if($phoness){
            echo 1;
        }else{
            echo 2;
        }
    }
   
   //验证邮箱是否存在
    public function email(Request $request){
        $emails = $request->input('x');
        // 查询数据
        $emailss = DB::table('bro_user')->where('email','=',$emails)->first();
        // dd($phones);
        // 判断是否有数据
        if($emailss){
            echo 1;
        }else{
            echo 2;
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

    // public function code()
    // {
    //     ob_clean();//清除前面脚本
    //     //生成验证码
    //     //生成验证码图片的Builder对象，配置相应属性
    //     $builder = new CaptchaBuilder;
    //     //可以设置图片宽高及字体
    //     $builder->build($width = 100, $height = 40, $font = null);
    //     //获取验证码的内容
    //     $phrase = $builder->getPhrase();
    //     //把内容存入session
    //     session(['fcode'=>$phrase]);
    //     //生成图片
    //     header("Cache-Control: no-cache, must-revalidate");
    //     header('Content-Type: image/jpeg');
    //     //输出验证码
    //     $builder->output();
    //     // die;
    // }


}
