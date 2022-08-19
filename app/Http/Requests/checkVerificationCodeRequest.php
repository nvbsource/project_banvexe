<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checkVerificationCodeRequest extends FormRequest
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
            "phone" => "required",
            "code" => "required"
        ];
    }
    public function messages()
    {
        return [
            "phone.required" => "Vui lòng nhập số điện thoại",
            "code.required" => "Vui lòng nhập mã code"
        ];
    }
}
