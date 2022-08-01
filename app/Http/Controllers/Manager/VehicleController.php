<?php

namespace App\Http\Controllers\Manager;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function viewList()
    {
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $vehicles = Vehicle::where("passenger_car_company_id", $passengerCarCompany)->get();
        return view('manager.pages.vehicle.index', compact('vehicles'));
    }
}