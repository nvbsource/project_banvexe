<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function viewList()
    {
        $vehicles = Vehicle::all();
        return view('admin.pages.vehicle.index', compact('vehicles'));
    }
}