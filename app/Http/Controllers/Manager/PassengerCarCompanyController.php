<?php

namespace App\Http\Controllers\Manager;

use App\Models\PassengerCarCompany;

class PassengerCarCompanyController extends Controller
{
    public function viewList()
    {
        $listCompany = PassengerCarCompany::all();
        return view("manager.pages.passengerCarCompany.index", compact('listCompany'));
    }
    public function viewCreate()
    {
        return view("manager.pages.passengerCarCompany.createPassengerCarCompany");
    }
}