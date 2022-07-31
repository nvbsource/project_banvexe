<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class EditStaffRequest extends FormRequest
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
            "username" => "required",
            "email" => "required",
            "role" => "required",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Vui lòng nhập tên nhân viên",
            "username.required" => "Vui lòng nhập tài khoản",
            "email.required" => "Vui lòng nhập địa chỉ email nhận tài khoản",
            "role.required" => "Vui lòng chọn loại nhân viên",
        ];
    }
}