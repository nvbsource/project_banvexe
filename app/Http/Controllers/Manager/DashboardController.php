<?php

namespace App\Http\Controllers\Manager;

class DashboardController extends Controller
{
    public function index()
    {
        return view('bms.manager.pages.dashboard');
    }
}