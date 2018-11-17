<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Advert extends FormRequest
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
            'name'=>'required|unique:bro_advertisement',
            'url'=>'required|url',
            'status'=>'required',
            'pic'=>'required',
            'title'=>'required'
        ];
    }

    public function messages(){
        return[
            'name.required'=>'用户名不能为空',
            // 'name.regex'=>'用户名必须为4-8位的任意数字字母下划线',
            'name.unique'=>'用户名重复',
            'url.required'=>'请填写url地址',
            'url.url'=>'请填写有效的url地址',
            'status.required'=>'请选择状态',
            'pic.required'=>'请选择上传图片',
            'title.required'=>'请填写广告描述'
            ];
    }
}
