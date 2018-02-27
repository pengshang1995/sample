<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            //
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ];
    }

//    public function messages()
//    {
//        return [
//            'name.required' => '名称是必填的',
//            'name.max' => '名称不超过50个字符',
//            'email.required' => '邮箱是必填的',
//            'email.email' => '邮箱格式必须要填正确的',
//            'email.unique' => '邮箱已存在',
//            'email.max' => '邮箱不超过255个字符',
//            'password.required' => '密码是必填的',
//            'password.confirmed' => '222',
//            'password.min' => '密码不少于六位'
//        ];
//    }
}
