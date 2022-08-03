<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
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
            "licensePlates" => "required",
            "countSeat" => "required",
            "countFloor" => "required|digits_between:1,2",
            "numColumn" => "required",
            "numRow" => "required",
            "rangeOfVehicle_id" => "required|exists:range_of_vehicles,id",
        ];
    }
    public function messages(){
        return [
            "name.required" => "Vui lòng nhập tên xe",
            "licensePlates.required" => "Vui lòng nhập biển số xe",
            "countSeat.required" => "Vui lòng nhập số lượng ghế",
            "countFloor.required" => "Vui lòng nhập số tầng",
            "countFloor.digits_between" => "Số tầng không hợp lệ",
            "numColumn.required" => "Vui lòng nhập lượng ghế chiều dọc",
            "numRow.required" => "Vui lòng nhập số lượng ghế chiều ngang",
            "rangeOfVehicle_id.required" => "Vui lòng chọn loại xe",
            "rangeOfVehicle_id.exists" => "Loại xe không tồn tại trong hệ thống",
        ];
    }
}
