<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CheckDiscountRequest;
use App\Models\DiscountCode;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    use FunctionTrait;
    public function checkDiscount(CheckDiscountRequest $request){
        $code = $request->input("code");
        $findCode = DiscountCode::find($code);
        $companyId = $this->getCompanyAccountLogin()->id;

        if($findCode->passengerCarCompany->id !== $companyId){
            return response()->json([
                "message" => "Mã khuyến mãi không hợp lệ"
            ], 404);
        }
        $timeRemaining = Carbon::now()->gt($findCode->end_date);
        if($timeRemaining){
            return response()->json([
                "message" => "Mã khuyến mãi đã hết hạn",
                "data" => array(
                    "start_date" => $findCode->start_date,
                    "end_date" => $findCode->end_date,
                    "discount" => $findCode->price,
                    "code" => $findCode->code
                )
            ], 422);
        }

        return response()->json([
            "message" => "Kiểm tra mã khuyến mãi thành công",
            "data" => array(
                "start_date" => $findCode->start_date,
                "end_date" => $findCode->end_date,
                "discount" => $findCode->price,
                "code" => $findCode->code
            )
        ]);
    }
}
