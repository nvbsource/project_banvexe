<?php

namespace App\Http\Controllers\Manager;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewList()
    {
        $customers = Customer::all();
        return view('manager.pages.customer.index', compact('customers'));
    }
}