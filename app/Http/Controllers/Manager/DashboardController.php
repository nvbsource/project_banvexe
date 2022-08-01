<?php

namespace App\Http\Controllers\Manager;

class DashboardController extends Controller
{
    public function index()
    {
        return view('manager.pages.dashboard');
    }
}