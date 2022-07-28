<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStaffRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required",
            "username" => "required|unique:accounts",
            "password" => "required",
            "email" => "required|unique:accounts",
            "role" => "required",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Vui lòng nhập tên nhân viên",
            "username.required" => "Vui lòng nhập tài khoản",
            "username.unique" => "Tài khoản đã tồn tại trong hệ thống",
            "password.required" => "Vui lòng nhập mật khẩu",
            "email.required" => "Vui lòng nhập địa chỉ email nhận tài khoản",
            "email.unique" => "Email đã tồn tại trong hệ thống",
            "role.required" => "Vui lòng chọn loại nhân viên",
        ];
    }
}