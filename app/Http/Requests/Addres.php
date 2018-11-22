<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Addres extends FormRequest
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
            'name'=>'required',
            'adds'=>'required',
            'phone' => 'required|regex:/\w{11}/',
            'huo'=>'required',
        ];
    }

    //自定义错误消息
    public function messages(){
        return [
            'name.required'=>'收货人名不能为空',
            'adds.required'=>'地址不能为空',
            'huo.required'=>'详细地址不能为空',
            'phone.required'=>'电话不能为空',

            'name.regex'=>'收货人名必须为4-8位任意的数字字母下划线',
            'phone.regex'=>'电话不符合规则',
        ];
    }
}
