<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Pnlinh\InfobipSms\Facades\InfobipSms;
class HomeController extends Controller
{
    public function index(){
       
        return view("client.pages.home");
    }
}
