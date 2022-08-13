<?php

namespace App\Http\Controllers\Manager;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewList()
    {
        $customers = Customer::all();
        return view('bms.manager.pages.customer.index', compact('customers'));
    }
}