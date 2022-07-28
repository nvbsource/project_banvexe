<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTripRequest;
use App\Models\Trip;

class TripApiController extends Controller
{
    public function create(CreateTripRequest $request)
    {
        $trip = Trip::create($request->all());
        return response()->json(['success' => true, 'message' => 'Thêm chuyến xe mới thành công', 'trip' => $trip]);
    }
}