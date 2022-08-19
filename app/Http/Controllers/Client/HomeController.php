<?php

namespace App\Http\Controllers\Client;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pnlinh\InfobipSms\Facades\InfobipSms;

class HomeController extends Controller
{
    public function index()
    {
        return view("client.pages.home");
    }
    public function trip()
    {
        return view("client.pages.trips.list");
    }
}