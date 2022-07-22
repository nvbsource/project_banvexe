<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePassengerCarCompanyRequest extends FormRequest
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
            "phone" => "required|digits:10",
            "numberLicense" => "required",
            "imageLicense" => "image|mimes:jpg,png,jpeg|max:2048",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Vui lòng nhập tên công ty",
            "phone.required" => "Vui lòng nhập số điện thoại",
            "phone.digits" => "Số điện thoại không đúng",
            "numberLicense.required" => "Vui lòng nhập mã số thuế",
            "imageLicense.image" => "Ảnh không đúng định dạng",
        ];
    }
}