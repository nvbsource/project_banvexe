<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CreateTripRequest;
use App\Models\AssistantDriver;
use App\Models\Driver;
use App\Models\Route;
use App\Models\Trip;
use App\Models\Vehicle;
use App\Models\AssistantDriversDetail;
use App\Models\DriversDetail;
use App\Traits\FunctionTrait;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    use FunctionTrait;
    public function viewList()
    {
        $trips = Trip::all();
        return view('manager.pages.trip.index', compact('trips'));
    }
    public function viewCreate()
    {
        $drivers = Driver::all();
        $assistantDrivers = AssistantDriver::all();
        $vehicles = Vehicle::all();
        $routes = Route::all();
        return view('manager.pages.trip.createTrip', compact('drivers', 'assistantDrivers', 'vehicles', 'routes'));
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
}