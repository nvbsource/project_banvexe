<?php

namespace App\Http\Controllers\Manager;

use App\Models\DetailOrder;
use App\Models\Order;
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

        $seatsBlockCheckTime = PauseDetailSeat::whereIn("seat_id", $arraySeat)->whereHas("pauseSeat", function ($pauseSeat) use ($trip) {
            return $pauseSeat->where("pauseTime", ">", Carbon::now())->where("trip_id", $trip->id)->where("account_id", "!=", Auth::guard("bms")->user()->id);
        })->get();


        $seatBlockCheckPayment = DetailOrder::whereIn("seat_id", $arraySeat)->whereHas("order", function ($item) {
            return $item->where(function($query){
                $query->whereNotNull("paymentPalidityPeriod")->where("paymentPalidityPeriod", ">", Carbon::now());
            })->orWhere(function($query){
                $query->whereNotNull("paymentPalidityPeriod")->where("isPayment", true);
            })->orWhereHas("detailsOrders", function($query){
                return $query->where("status", true)->where("paymentMethod", "=", "OFFICE");
            });
        })->whereHas("order",function($query) use ($trip){
            return $query->where("trip_id", $trip->id);
        })->get();

        $collectionSeatMerge = $seatsBlockCheckTime->merge($seatBlockCheckPayment)->sortBy("seat_id");
        $arraySeatError = $collectionSeatMerge->map(function ($seat_detail) {
            return $seat_detail->seat->name;
        });
        if ($collectionSeatMerge->count() > 0) {
            return response()->json([
                "message" => "Ghế " . json_encode(array_values($arraySeatError->toArray())) . " đang tạm ngưng vui lòng chọn ghế khác"
            ], 422);
        }

        $pauseSeatsDetail = PauseDetailSeat::whereIn("seat_id", $arraySeat)->whereHas("pauseSeat", function ($pauseSeat) use ($trip) {
            return $pauseSeat->where("pauseTime", ">", Carbon::now())->where("trip_id", $trip->id);
        });

        $unblockedSeats = $seatsFindArray->whereNotIn("id", $pauseSeatsDetail->pluck("seat_id")->toArray());

        $pauseSeatNew = PauseSeat::create([
            "account_id" => Auth::guard("bms")->user()->id,
            "trip_id" => $trip->id,
            "pauseTime" => Carbon::now()->addMinute(5)
        ]);

        $pauseSeatsDetail->update(["pause_seat_id" => $pauseSeatNew->id]);

        if ($unblockedSeats->count() > 0) {
            PauseDetailSeat::insert($unblockedSeats->map(function ($item) use ($pauseSeatNew) {
                return array(
                    "seat_id" => $item->id,
                    "pause_seat_id" => $pauseSeatNew->id,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                );
            })->toArray());
        }

        return response()->json([
            "message" => "Đã tạm ngưng đặt các ghế đã chọn vui lòng nhập thông tin khách hàng",
            "data" => $seatsFindArray->pluck("name"),
            "total_price" => $trip->price * $seatsFindArray->count(),
            "time" => Carbon::createFromDate($pauseSeatNew->pauseTime)->valueOf() - Carbon::now()->valueOf()
        ]);
    }
}
