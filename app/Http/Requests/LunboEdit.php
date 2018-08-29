<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LunboEdit extends FormRequest
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
            'pic' => 'required',
            'url' => 'required|url'
        ];
    }

    public function messages() {
        return [
            'pic.required' => '图片不能为空',
            'url.required' => 'url不能为空',
            'url.url' => 'url链接格式不对'
        ];
    }
}
