<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewList()
    {
        $customers = Customer::all();
        return view('admin.pages.customer.index', compact('customers'));
    }
}