<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRouteRequest extends FormRequest
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
            "departure_district_id" => "required",
            "destination_district_id" => "required",
            "departure_name" => "required",
            "destination_name" => "required",
            "departure_address" => "required",
            "destination_address" => "required",
        ];
    }
    public function messages()
    {
        return [
            "departure_district_id.required" => "Vui lòng nhập nơi đi",
            "destination_district_id.required" => "Vui lòng nhập nơi đến",
            "departure_name.required" => "Vui lòng nhập tên nơi đi",
            "destination_name.required" => "Vui lòng nhập tên nơi đến",
            "departure_address.required" => "Vui lòng nhập địa chỉ nơi đi",
            "destination_address.required" => "Vui lòng nhập địa chỉ nơi đến",
        ];
    }
}