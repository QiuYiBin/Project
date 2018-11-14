<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUsers extends FormRequest
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
            //required 数据不能为空规则  regex 正则规则  unique唯一规则 bro_users操作的数据表  same一致规则
            'name'=>'required|regex:/\p{Han}/u|unique:bro_users|max:10|min:4',
            'password'=>'required|regex:/\w{6,18}/',
            'passwords'=>'required|regex:/\w{6,18}/|same:password',
            


        ];
    }

    //自定义错误消息
    public function messages(){
        return [
                'name.required'=>'管理员名不能为空',
                'name.regex'=>'管理员名必须为纯中文或者中文加字母组成',
                'name.unique'=>'管理员名被占用',
                'name.max'=>'管理员名最大为10位',
                'name.min'=>'管理员名最少为4位',
                'password.required'=>'密码不能为空',
                'password.regex'=>'密码必须为8-18位任意的数字字母下划线',
                'passwords.required'=>'确认密码不能为空',
                'passwords.regex'=>'不密码不正确请重新输入',
                'repasswrds.same'=>'两次密码不一致',
               
                ];
    }
}
