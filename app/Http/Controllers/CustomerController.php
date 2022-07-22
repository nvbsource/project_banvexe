<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewList()
    {
        $customers = Customer::all();
        return view('admin.pages.customer.index', compact('customers'));
    }
}