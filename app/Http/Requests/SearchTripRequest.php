<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchTripRequest extends FormRequest
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
            "route_id" => "required|exists:routes,id",
            "start_date" => "required|date"
        ];
    }
    public function messages(){
        return [
            "route_id.required" => "Tuyến đường không được bỏ trống",
            "route_id.exists" => "Tuyến đường không tồn tại trong hệ thống",
            "start_date.required" => "Ngày khởi hành không được bỏ trống",
            "start_date.date" => "Ngày khởi hành không hợp lệ"
        ];
    }
}
