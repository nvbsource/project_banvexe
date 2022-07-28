<?php

namespace App\Http\Controllers\Admin;

use App\Models\District;
use App\Models\Driver;
use App\Models\Trip;
use App\Models\Vehicle;

class TripController extends Controller
{
    public function viewList()
    {
        $trips = Trip::all();
        return view('admin.pages.trip.index', compact('trips'));
    }
    public function viewCreate()
    {
        $districts = District::all();
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        return view('admin.pages.trip.createTrip', compact('districts', 'drivers', 'vehicles'));
    }
}