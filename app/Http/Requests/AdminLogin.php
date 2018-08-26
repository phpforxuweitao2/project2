<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLogin extends FormRequest
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
            'username' => 'required', //用户名规则
            'pass' => 'required', //密码规则
            'captcha' => 'required' //验证码规则
        ];
    }

    //自定义错误消息
    public function messages() {
        return [
            'username.required' => '用户名不能为空',
            'pass.required' => '密码不能为空',
            'captcha' => '验证码不能为空'
        ];
    }
}
