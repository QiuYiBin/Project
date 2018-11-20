<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserinsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            //required 数据不能为空规则  regex 正则规则  unique唯一规则 bro_users操作的数据表  same一致规则
            'username'=>'unique:bro_user|max:10|min:4',
            'email'=>'unique:bro_user',
            'phone'=>'unique:bro_user',
        ];
    }
     //自定义错误消息
    public function messages(){
        return [
                'name.unique'=>'用户名已存在',
                'email.unique'=>'邮箱已存在',
                'name.max'=>'管理员名最大为10位',
                'name.min'=>'管理员名最少为4位',
                'phone.unique'=>'电话已存在',
               
                ];
    }

}
