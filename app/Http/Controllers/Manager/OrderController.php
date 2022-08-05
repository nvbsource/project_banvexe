<?php

namespace App\Http\Controllers\Manager;

use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewBooking(){
        $trips = Trip::all();
        $routes = Route::all();
        return view("manager.pages.order.booking", compact("trips","routes"));
    }
}
