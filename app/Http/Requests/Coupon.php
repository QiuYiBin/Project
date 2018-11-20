<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Coupon extends FormRequest
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

    public function prepareForValidation()
    {
        $this->offsetSet('start_time',date('Y-m-d'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'should' => [
                'required',
                'max:50',
                'regex: /\p{Han}/u'
            ],
            'start_time' => 'required|date|after_or_equal:start_time',
            'end_time' => 'required|date|after:start_time',
            'num' => 'required|regex:/^[0-9]*$/'
        ];
    }

    
    // 自定义错误信息
    public function messages()
    {
        return[
            'should.required' => '方案不能为空',
            'should.max' => '方案长度不正确',
            'should.regex' => '方案只能为中文或者中文加数字',
            'start_time.required' => '开始时间不能为空',
            'start_time.after_or_equal' => '开始时间只能在当前的时间之后',
            'end_time.required' => '结束时间不能为空',
            'end_time.after' => '结束时间只能在开始时间之后',
            'num.required' => '数量不能为空',
            'num.regex' => '数量只能为数字'
        ];
    }
}
