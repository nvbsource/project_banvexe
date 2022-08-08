<?php

namespace App\Http\Controllers\Manager;

use App\Models\PauseDetailSeat;
use App\Models\PauseSeat;
use App\Models\Seat;
use App\Models\Trip;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeatController extends Controller
{
    use FunctionTrait;
    public function blockSeat(Request $request)
    {
        $arraySeat = $request->input("seats");
        $tripId = $request->input("trip_id");
        $trip = Trip::find($tripId);

        $companyId = $this->getCompanyAccountLogin()->id;
        if ($trip->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Chuyến xe không tồn tại trong hệ thống"
            ], 404);
        }
        
        $seats = $trip->vehicle->seats;
        $seatsFindArray = $seats->whereIn('id', $arraySeat);
        if ($seatsFindArray->count() !== count($arraySeat)) {
            return response()->json([
                "message" => "Lỗi chọn ghế phát hiện ghế không tồn tại trong chuyến xe"
            ], 422);
        }

        $pauseSeatsDetail = PauseDetailSeat::whereIn("seat_id", $arraySeat)->whereHas("pauseSeat", function($pauseSeat){
            return $pauseSeat->where("pauseTime", ">", Carbon::now());
        })->get();

        if ($pauseSeatsDetail->count() > 0) {
            return response()->json([
                "message" => "Có 1 số ghế đang tạm ngưng vui lòng load lại trang " . $pauseSeatsDetail->map(function($seat_detail){
                    return $seat_detail->seat->name;
                })
            ], 422);
        }

        $pauseSeatNew = PauseSeat::create([
            "account_id" => Auth::guard("admin")->user()->id,
            "pauseTime" => Carbon::now()->addMinute(10)
        ]);
        
        PauseDetailSeat::insert($seatsFindArray->map(function ($item) use ($pauseSeatNew) {
            return array(
                "seat_id" => $item->id,
                "pause_seat_id" => $pauseSeatNew->id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            );
        })->toArray());

        return response()->json([
            "message" => "Đã tạm ngưng đặt các ghế đã chọn",
            "data" => $seatsFindArray->pluck("id")
        ]);
    }
}