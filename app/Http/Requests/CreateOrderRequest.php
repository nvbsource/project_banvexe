<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            "phone" => "required",
        ];
    }
    public function messages(){
        return [
            "name.required" => "Vui lòng nhập tên khách hàng",
            "phone.required" => "Vui lòng nhập số điện thoại khách hàng",
        ];
    }
}
