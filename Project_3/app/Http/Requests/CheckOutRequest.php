<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'full'=>'required|min:5',
            'email'=>'required|email|unique:email',
            'phone'=>'required|min:7',
        ];
    }
    public function messages(){
        return [
            'full.required'=>'Họ tên không đươc để trống',
            'full.min'=>'Họ tên lớn hơn 5 ký tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng đinh dạng',
            'email.unique'=>'Email đã tồn tại',
            'phone.required'=>'Điện thoại không được để trống',
            'phone.min'=>'Số điện thoại phải lớn hơn 7 ký tự',
        ];
    }
}
