<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function create(){
        return view("admin.pages.district.create");
    }
}
