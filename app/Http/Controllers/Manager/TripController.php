<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CreateTripRequest;
use App\Http\Requests\SearchTripRequest;
use App\Models\AssistantDriver;
use App\Models\Driver;
use App\Models\Route;
use App\Models\Trip;
use App\Models\Vehicle;
use App\Models\AssistantDriversDetail;
use App\Models\DriversDetail;
use App\Models\Order;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TripController extends Controller
{
    use FunctionTrait;
    public function viewList()
    {
        $trips = Trip::all();
        return view('bms.manager.pages.trip.index', compact('trips'));
    }
    public function viewCreate()
    {
        $drivers = Driver::all();
        $assistantDrivers = AssistantDriver::all();
        $vehicles = Vehicle::all();
        $routes = Route::all();
        return view('bms.manager.pages.trip.createTrip', compact('drivers', 'assistantDrivers', 'vehicles', 'routes'));
    }
    public function handleCreate(CreateTripRequest $request)
    {
        $data = $request->all();
        $listAssistantDrivers = $data['assistantDrivers'];
        $listDrivers = $data['drivers'];
        $companyId = $this->getCompanyAccountLogin()->id;
        $vehicle = Vehicle::find($data["vehicle_id"]);
        if ($vehicle->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Xe khách không tồn tại trong công ty",
            ], 404);
        }

        // $assistantDriverInCompany = array_map(function($item){

        //     return 
        // }, $listAssistantDrivers);

        // if (AssistantDriver::where("id", $)) {
        //     return response()->json([
        //         "message" => "Xe khách không tồn tại trong công ty",
        //     ], 404);
        // }

        $trip = Trip::create($data);

        $assistantDrivers = AssistantDriversDetail::createMany(array_map(function ($item)  use ($trip) {
            return array("trip_id" => $trip->id, "assitantDriver_id" => $item);
        }, $listAssistantDrivers));

        $drivers = DriversDetail::createMany(array_map(function ($item)  use ($trip) {
            return array("trip_id" => $trip->id, "driver_id" => $item);
        }, $listDrivers));

        return response()->json([
            "message" => "Thêm chuyến đi thành công",
            "data" => array(
                "trip" => $trip->makeHidden([
                    'created_at',
                    'updated_at'
                ]),
                "assistantDrivers" => $assistantDrivers,
                "drivers" => $drivers,
            )
        ]);
    }

    public function search(SearchTripRequest $request)
    {
        $routeId = $request->input("route_id");
        $startDate = $request->input("start_date");

        $routeFind = Route::find($routeId);
        $companyId = $this->getCompanyAccountLogin()->id;

        if ($routeFind->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Tuyến đường không tồn tại trong công ty",
            ], 404);
        }

        $trips = Trip::where(["route_id" => $routeId, "passenger_car_company_id" => $companyId])->whereDate("start_date", "=", $startDate)->get();
        $dateFormat = Carbon::parse($startDate)->format('d-m-Y');

        if ($trips->count() <= 0) {
            return response()->json([
                "message" => "Không tìm thấy chuyến xe nào ngày " . $dateFormat,
            ], 404);
        }

        return response()->json([
            "message" => "Có " . $trips->count() . " chuyến xe đi từ " . $routeFind->departureDistrict->name . " - " . $routeFind->destinationDistrict->name . " ngày " . $dateFormat,
            "data" => $trips->map(function ($item) {
                $countSeatBooked = $item->orders->reduce(function ($sum, $order) {
                    return $sum += $order->detailsOrders()->whereHas("order", function ($item) {
                        return $item->where("isPayment", true)->orWhereHas("detailsOrders", function($query){
                            return $query->where("status", true)->where("paymentMethod", "=", "OFFICE");
                        });
                    })->count();
                }, 0);
                return array(
                    "trip_id" => $item->id,
                    "time" => Carbon::parse($item->start_date)->format('h:i'),
                    "total_number_of_seats_booked" => $countSeatBooked,
                    "total_number_seats" => $item->vehicle->countSeat
                );
            })
        ]);
    }

    public function detail($tripId)
    {
        $trip = Trip::find($tripId);
        $companyId = $this->getCompanyAccountLogin()->id;

        if ($trip->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Chuyến đi không tồn tại trong công ty",
            ], 404);
        }

        $dateTimeFormat = Carbon::parse($trip->start_date)->format('h:i');
        $dateFormat = Carbon::parse($trip->start_date)->format('d-m-Y');
        $countSeatBooked = $trip->orders->reduce(function ($sum, $order) {
            return $sum += $order->detailsOrders()->whereHas("order", function ($item) {
                return $item->where("isPayment", true)->orWhereHas("detailsOrders", function($query){
                    return $query->where("status", true)->where("paymentMethod", "=", "OFFICE");
                });
            })->count();
        }, 0);
        $seats = $trip->vehicle->seats()->select(["id", "name", "isLocked"])->get();
        $orderDetails = $trip->orders()->with("detailsOrders")->get();
        $orderDetails = array_merge(...$orderDetails->map(function ($item) {
            return $item->toArray()['details_orders'];
        })->toArray());

        $driverList = $trip->drivers()->with("driver")->get();
        $driverList = $driverList->map(function ($item) {
            return $item->toArray()['driver'];
        })->toArray();

        $assistantList = $trip->assitantDrivers()->with("assistantDriver")->get();
        $assistantList = $assistantList->map(function ($item) {
            return $item->toArray()['assistant_driver'];
        })->toArray();
        return response()->json([
            "message" => "lấy thông tin chi tiết chuyến xe thành công",
            "data" => array(
                "time_start" => $dateTimeFormat,
                "date_start" => $dateFormat,
                "rangeOfVehicle" => $trip->vehicle->rangeOfVehicle->type,
                "total_number_seats" => $trip->vehicle->countSeat,
                "total_number_of_seats_booked" => $countSeatBooked,
                "order_number_has_been_paid" => $trip->orders->where("isPayment", true)->count(),
                "order_number" => $trip->orders->count(),
                "licensePlates" => $trip->vehicle->licensePlates,
                "driver" => array(
                    "driverList" => $driverList,
                    "assistantList" => $assistantList
                ),
                "number_of_seats_available" => $trip->vehicle->countSeat - $countSeatBooked,
                "total_trip_of_route" => $trip->route->trips->count(),
                "route" => $trip->route->departureDistrict->name . ' - ' . $trip->route->destinationDistrict->name,
                "route_area" => array(
                    "departure_route" => $trip->route->departure_name,
                    "destination_route" => $trip->route->destination_name,
                    "list_departure_route" => $trip->route->sameWayRoutes,
                    "list_destination_route" => $trip->route->sameWayRoutes,
                ),
                "price" => $trip->price,
                "seats" => $seats->map(function ($item) use ($trip) {
                    $checkSeatBlock = $item->pauseSeatDetails()->where("seat_id", $item->id)->whereHas("pauseSeat", function ($seat) use ($trip) {
                        return $seat->where("pauseTime", ">", Carbon::now())->where("trip_id", $trip->id);
                    })->first();

                    $seatBlockWaitPayment = $item->detailOrders()->whereHas("order", function ($order) use ($trip) {
                        return $order->whereNotNull("paymentPalidityPeriod")->where("paymentPalidityPeriod", ">", Carbon::now())->where("trip_id", $trip->id);
                    })->first();

                    $seatBlockPaymented = $item->detailOrders()->whereHas("order", function ($order) use ($trip) {
                        return $order->where("isPayment", true)->where("trip_id", $trip->id);
                    })->first();

                    $seatBlockOrder = $item->detailOrders()->where("status", 1)->whereHas("order", function ($order) use ($trip) {
                        return $order->where("paymentMethod", "=", "OFFICE")->where("trip_id", $trip->id);
                    })->first();

                    if ($seatBlockPaymented) {
                        return array_merge(
                            $item->toArray(),
                            [
                                "information" => $seatBlockPaymented->order->customer,
                                "status" => "paymented"
                            ]
                        );
                    } elseif ($seatBlockOrder) {
                        return array_merge(
                            $item->toArray(),
                            [
                                "information" => $seatBlockOrder->order->customer,
                                "status" => "wait"
                            ]
                        );
                    } elseif ($seatBlockWaitPayment) {
                        return array_merge(
                            $item->toArray(),
                            [
                                "information" => $seatBlockWaitPayment->order->customer,
                                "time" => Carbon::createFromDate($seatBlockWaitPayment->order->paymentPalidityPeriod)->valueOf() - Carbon::now()->valueOf(),
                                "status" => "wait_payment"
                            ]
                        );
                    } elseif ($checkSeatBlock) {
                        return array_merge(
                            $item->toArray(),
                            [
                                "author" => $checkSeatBlock->pauseSeat->account->name,
                                "time" => Carbon::createFromDate($checkSeatBlock->pauseSeat->pauseTime)->valueOf() - Carbon::now()->valueOf(),
                                "status" => "pause"
                            ]
                        );
                    } else {
                        return $item;
                    }
                })
            )
        ]);
    }
}
