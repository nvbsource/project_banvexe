<?php

namespace App\Http\Controllers\Admin;

use App\Models\PassengerCarCompany;

class PassengerCarCompanyController extends Controller
{
    public function viewList()
    {
        $listCompany = PassengerCarCompany::all();
        return view("admin.pages.passengerCarCompany.index", compact('listCompany'));
    }
    public function viewCreate()
    {
        return view("admin.pages.passengerCarCompany.createPassengerCarCompany");
    }
}