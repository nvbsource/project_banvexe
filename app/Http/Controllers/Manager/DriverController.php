<?php

namespace App\Http\Controllers\Manager;

use App\Models\PassengerCarCompany;

class DriverController extends Controller
{
    public function getDriverByCompany($company_id)
    {
        $company = PassengerCarCompany::find($company_id);
        $drivers = $company->drivers->makeHidden(['passenger_car_company_id', 'created_at', 'updated_at']);
        return [
            'company' => $company->name,
            'drivers' => $drivers,
        ];
    }
}