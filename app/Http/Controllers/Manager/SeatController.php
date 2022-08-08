<?php

namespace App\Http\Controllers\Manager;

use App\Models\PauseDetailSeat;
use App\Models\PauseSeat;
use App\Models\Seat;
use App\Models\Trip;
use App\Traits\FunctionTrait;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    use FunctionTrait;
    public function blockSeat(Request $request){
        $arraySeat = $request->input("seats");
        $tripId = $request->input("trip_id");
        $trip = Trip::find($tripId);

        $companyId = $this->getCompanyAccountLogin()->id;
        if($trip->passengerCarCompany->id !== $companyId){
            return response()->json([
                "message" => "Chuyến xe không tồn tại trong hệ thống"
            ], 404);
        }

        $seats = $trip->vehicle->seats;
        $seatsFindArray = $seats->whereIn('id', $arraySeat); 
        if($seatsFindArray->count() !== count($arraySeat)){
            return response()->json([
                "message" => "Lỗi chọn ghế"
            ], 422);
        }
        $pauseSeatNew = PauseSeat::create();
        PauseDetailSeat::insert($seatsFindArray->map(function($item) use ($pauseSeatNew){
            return array(
                "seat_id" => $item->id,
                "pause_seat_id" => $pauseSeatNew->id
            );
        })->toArray());
        
        return response()->json([
            "message" => "Đã tạm ngưng đặt các ghế đã chọn"
        ]);
    }
}
