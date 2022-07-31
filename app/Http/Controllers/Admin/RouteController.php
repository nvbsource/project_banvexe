<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddRouteRequest;
use App\Models\District;
use Illuminate\Http\Request;
use App\Models\Route;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function viewList()
    {
        $passengerCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $routes = Route::where("passenger_car_company_id",  $passengerCompany)->orderByDesc("id")->get();
        $districts = District::all();
        return view('admin.pages.route.index', compact('routes', 'districts'));
    }
    public function create(AddRouteRequest $request)
    {
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $request = $request->all();
        $checkExistRoute = Route::where([
            "departure_district_id" => $request["departure_district_id"],
            "destination_district_id" => $request["destination_district_id"],
            "passenger_car_company_id" => $passengerCarCompany
        ])->first();

        if ($checkExistRoute) {
            return response()->json([
                "message" => "Tuyến đường đã tồn tại trong công ty",
            ], 422);
        }

        $route = Route::create(array_merge(
            $request,
            [
                "passenger_car_company_id" => $passengerCarCompany
            ]
        ));

        return response()->json([
            "message" => "Thêm tuyến đường thành công",
            "data" => $route->makeHidden([
                'passenger_car_company_id',
                'created_at',
                'updated_at'
            ])
        ]);
    }
}