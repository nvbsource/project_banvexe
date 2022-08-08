<?php

namespace App\Http\Controllers\Manager;

use App\Models\Route;
use App\Models\Trip;
use App\Traits\FunctionTrait;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    use FunctionTrait;
    public function viewBooking()
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $trips = Trip::where("passenger_car_company_id",  $companyId)->get();
        $routes = Route::where("passenger_car_company_id",  $companyId)->get();
        return view("manager.pages.order.booking", compact("trips", "routes"));
    }
}