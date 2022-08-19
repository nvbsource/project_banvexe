<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeInformationRequest extends FormRequest
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
            "birthday" => "required|date",
            "idCard" => "required|min:9"
        ];
    }
    public function messages(){
        return [
            "name.required" => "Vui lòng nhập họ và tên",
            "birthday.required" => "Vui lòng nhập ngày tháng năm sinh",
            "birthday.date" => "Năm sinh không hợp lệ",
            "idCard.required" => "Vui lòng nhập CMND hoặc CCCD",
            "idCard.min" => "Số CMND hoặc CCCD không hợp lệ"
        ];
    }
}
