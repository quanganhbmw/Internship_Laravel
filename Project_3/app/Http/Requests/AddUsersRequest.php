<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUsersRequest extends FormRequest
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
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|',
            'full'=>'required|min:4',
            'phone'=>'required|min:7|numeric|unique:users,email'
        ];
    }
    public function messages(){
        return [
        'email.required'=>'Email không được để trống',
        'email.email'=>'Eamil không đúng đinh dạng',
        'email.unique'=>'Email đã tồn tại',
        'password.required'=>'Mật khẩu không dược để trống',
        'password.min'=>'Mật khẩu phải lơn hơn  5 ký tự',
        'full.required'=>'Họ tên không được để trống',
        'full.min'=>'Họ tên phải lớn hơn 5 ký tự',
        'phone.required'=>'Số điện thoại không dược trống',
        'phone.min'=>'Số điện thoại phải lớn hơn 7 ký tự',
        'phone.numeric'=>'Số điện thoại không chứa chữ cái',
        'phone.unique'=>'Số điện thoại đã tồn tại'
    ];
    }
}
