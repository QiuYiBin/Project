<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Catee extends FormRequest
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
           
            'name'=>'required',
            
        ];
    }

    //自定义错误消息
    public function messages(){
        return [
            'name.required'=>'分类名不能为空',
            
        ];
    }
}
