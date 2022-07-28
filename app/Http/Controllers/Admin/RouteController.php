<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function viewList()
    {
        return view('admin.pages.route.index');
    }
}