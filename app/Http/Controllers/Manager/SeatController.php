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

        if (PauseDetailSeat::whereIn("seat_id", $arraySeat)->with("pause_seats")) {
        }

        $pauseSeatNew = PauseSeat::create([
            "account_id" => Auth::guard("admin")->user()->id
        ]);
        PauseDetailSeat::insert($seatsFindArray->map(function ($item) use ($pauseSeatNew) {
            return array(
                "seat_id" => $item->id,
                "pause_seat_id" => $pauseSeatNew->id
            );
        })->toArray());

        return response()->json([
            "message" => "Đã tạm ngưng đặt các ghế đã chọn",
            "data" => $seatsFindArray->pluck("id")
        ]);
    }
}