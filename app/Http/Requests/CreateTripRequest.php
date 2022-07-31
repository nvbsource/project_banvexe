<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTripRequest extends FormRequest
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
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',
            'status' => 'in:active,pending,completed,runing',
            'price' => 'required|numeric|gt:0',
            'route_id' => 'required',
            'vehicle_id' => 'required',

        ];
    }
    public function messages()
    {
        return [
            "start_date.required" => "Vui lòng nhập ngày khởi hành",
            "start_date.date" => "Ngày khởi hành phải lớn hơn ngày hiện tại",
            "end_date.required" => "Vui lòng nhập thời gian kết thúc",
            "end_date.date" => "Thời gian kết thúc phải lớn hơn ngày khởi hành",
            "price.required" => "Vui lòng nhập giá",
            "price.numeric" => "Giá tiền phải là số",
            "price.gt" => "Giá tiền phải lớn hơn 0",
            "status.in" => "status không hợp lệ (active, pending, completed, runing)",
            "route_id.required" => "Vui lòng chọn tuyến đường",
            "vehicle_id.required" => "Vui lòng chọn xe khách",
        ];
    }
}