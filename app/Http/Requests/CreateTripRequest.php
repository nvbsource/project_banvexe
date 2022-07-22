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
            'from_district_id' => 'required',
            'to_district_id' => 'required',
            'address_start' => 'required',
            'address_end' => 'required',
            'start_date' => 'required',
            'price' => 'required|numeric|gt:0',
            'driver_id' => 'required',
            'vehicle_id' => 'required',
            'status' => 'in:active,pending,completed,runing',

        ];
    }
    public function messages()
    {
        return [
            "from_district_id.required" => "Vui lòng chọn thành phố đi",
            "to_district_id.required" => "Vui lòng chọn thành phố đến",
            "address_start.required" => "Vui lòng chọn bến xe đi",
            "address_end.required" => "Vui lòng chọn bến xe đến",
            "start_date.required" => "Vui lòng nhập ngày khởi hành",
            "price.required" => "Vui lòng nhập giá",
            "price.numeric" => "Giá tiền phải là số",
            "price.gt" => "Giá tiền phải lớn hơn 0",
            "driver_id.required" => "Vui lòng chọn tài xế",
            "vehicle_id.required" => "Vui lòng chọn xe khách",
            "status.in" => "status không hợp lệ (active, pending, completed, runing)",
        ];
    }
}