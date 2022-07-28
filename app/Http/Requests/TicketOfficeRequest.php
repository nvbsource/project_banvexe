<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketOfficeRequest extends FormRequest
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
            "address" => "required",
            "phone_official" => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
            "phone_reserved" => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10"
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Vui lòng nhập tên văn phòng",
            "address.required" => "Vui lòng nhập địa chỉ",
            "phone_official.required" => "Vui lòng nhập số điện thoại chính",
            "phone_official.regex|phone_official.regexmin" => "Số điện thoại chính không hợp lệ",
            "phone_official.regex" => "Số điện thoại chính không hợp lệ",
            "phone_official.min" => "Số điện thoại chính không hợp lệ",
            "phone_reserved.required" => "Vui lòng nhập số điện thoại phụ",
            "phone_reserved.regex" => "Số điện thoại phụ không hợp lệ",
            "phone_reserved.min" => "Số điện thoại phụ không hợp lệ",
        ];
    }
}