<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class  Authlists extends FormRequest
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
            'name' => [
                'required',
            ],
            'mname' => [
                'required',
            ],
             'aname' => [
                'required',
            ],
            
        ];
    }

    // 自定义错误信息
    public function messages()
    {
        return[
            'name.required' => '权限名不能为空',
            'mname.required' => '控制器名不能为空',
            'aname.required' => '方法名不能为空',
        ];
    }
}
