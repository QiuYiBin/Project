<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdate extends FormRequest
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
            'name' => 'required|regex:/\p{Han}/u',
            'url' => [
                'required',
                'regex:/(http?|ftp?|https?):\/\/(www)\.([^\.\/]+)\.(com|cn)(\/[\w-\.\/\?\%\&\=]*)?/i'
            ],
            'sort' => 'required|regex:/^[0-9]*$/',
        ];
    }

    // 自定义错误信息
    public function messages()
    {
        return[
            'name.required' => '标题不能为空',
            'name.regex' => '标题只能是中文',
            'url.required' => '地址不能为空',
            'url.regex' => '链接格式不正确,正确格式为http://www.***.com或者http://www.***.cn',
            'sort.required' => '数值不能为空',
            'sort.regex' => '排序只能是数字',
        ];
    }
}
