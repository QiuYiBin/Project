<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserinsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 授权校验类
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
   //设置规则
    public function rules()
    {
        return [
            //required 数据不能为空规则  regex 正则规则  unique唯一规则 bro_user操作的数据表  same一致规则
            'username'=>'required|regex:/\w{4,8}/|unique:bro_user',
            'password'=>'required|regex:/\w{6,18}/',
            'passwords'=>'required|regex:/\w{6,18}/|same:password',
            // email邮箱格式规则
            'email'=>'required|email',
            'phone'=>'required|regex:/\d{11}/',


        ];
    }

    //自定义错误消息
    public function messages(){
        return [
                'username.required'=>'用户名不能为空',
                'username.regex'=>'用户名必须为4-8位任意的数字字母下划线',
                'username.unique'=>'用户名被占用',
                'password.required'=>'密码不能为空',
                'password.regex'=>'密码必须为8-18位任意的数字字母下划线',
                'passwords.required'=>'确认密码不能为空',
                'passwords.regex'=>'不密码不正确请重新输入',
                'repassword.same'=>'两次密码不一致',
                'email.required'=>'邮箱不能为空',
                'email.email'=>'邮箱不符合规则',
                'phone.required'=>'电话不能为空',
                'phone.regex'=>'电话不符合规则',
                ];
    }
}
