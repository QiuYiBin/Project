<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view("Home.Phone.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //加载修改密码页面
    public function store(Request $request)
    {
        $value=$request->input("phone");
        // dd($value);
        return view("Home.Phone.index",['value'=>$value]);

    }

    //处理修改数据
    public function reset(Request $request){
        
        $phone=$request->input("phone");
        // dd($phone);
        $password=$request->input("password");

        $repassword=$request->input("repassword");
        // dd($repassword);
        if($password != $repassword){
           return back()->with("error10","两次密码不一致");
        }else{
            $data['password']=Hash::make($request->input('password'));
            if(DB::table('bro_user')->where('phone','=',$phone)->update($data)){
                return view("Home.Phone.deit");
            }else{
                echo '重置密码失败,5秒后返回!<meta http-equiv="refresh" content="5;url=/retrieve">';
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
    //发送短信
    public function phone(Request $request){
        $phone1 = $request->input('p');
        // return $phone;
        sendsphone($phone1);
    }

    //验证手机号是否存在
    public function demo(Request $request){
        // 获取ajax参数
        $phone = $request->input('phone');
        // 查询数据
        $phones = DB::table('bro_user')->where('phone','=',$phone)->first();
        // dd($phones);
        // 判断是否有数据
        if($phones){
            echo 1;
        }else{
            echo 2;
        }
    }
   public function code(Request $request){
       //获取输入的校验码
        $code=isset($_GET['code'])?$_GET['code']:'';
        // echo $code;
        if(isset($_COOKIE['fcode']) && !empty($code)){
            //输入的校验码和手机接收的校验码做对比
            if($code==$_COOKIE['fcode']){
                echo 1;//ok
            }else{
                echo 2;//校验码有误
            }
        }elseif(empty($code)){
            echo 3;//输入的校验码不能为空
        }else{
            echo 4;//校验码已经过期
        } 
   }

}
