<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Articlesinsert extends FormRequest
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
            'title'=>'required',
            'descr'=>'required',
        ];
    }

    //自定义错误消息
    public function messages(){
        return [
            'title.required'=>'标题不能为空',
            'descr.required'=>'内容不能为空',
        ];
    }
}
