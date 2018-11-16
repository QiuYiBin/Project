<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsEdit extends FormRequest
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
                'regex: /\p{Han}/u',
                'max:50'
            ],
            'price' => 'required|regex:/^[0-9]*$/|max:10',
            'store' => 'required|regex:/^[0-9]*$/|max:10',
            'text' => 'required',
            'descr' => 'required|max:255'
        ];
    }

    // 自定义错误信息
    public function messages()
    {
        return[
            'name.required' => '商品名不能为空',
            'name.regex' => '商品名格式不正确',
            'name.max' => '商品名长度不正确',
            'price.required' => '价格不能为空',
            'price.regex' => '请输入数字',
            'price.max' => '价格长度不正确',
            'store.required' => '库存不能为空',
            'store.regex' => '库存不能为空',
            'store.max' => '库存长度不正确',
            'text.required' => '描述不能为空',
            'descr.required' => '描述不能为空',
            'descr.max' => '描述长度不正确'
        ];
    }
}
