<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckDiscountRequest extends FormRequest
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
            "code" => "required|exists:discount_codes,code"
        ];
    }
    public function messages(){
        return [
            "code.required" => "Vui lòng nhập mã khuyến mãi",
            "code.exists" => "Mã khuyến mãi không hợp lệ"
        ];
    }
}
