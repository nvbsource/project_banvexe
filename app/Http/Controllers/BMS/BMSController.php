<?php

namespace App\Http\Controllers\BMS;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BMSController extends Controller
{
    public function login()
    {
        return view('bms.auth.login');
    }

    public function handleLogin(Request $request)
    {
        if (Auth::guard("bms")->attempt($request->only('username', 'password'))) {
            switch(Auth::guard("bms")->user()->role){
                case "manager":
                    return redirect(RouteServiceProvider::MANAGER_HOME);
                break;
                case "bus":
                    return redirect(RouteServiceProvider::BUS_HOME);
                break;
                case "ticket":
                    return redirect(RouteServiceProvider::TICKET_HOME);
                break;
            }
        } else {
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng!');
        }
    }
    
    public function handleLogout()
    {
        Session::flush();
        Auth::guard("admin")->logout();
        return redirect()->route('bmsLogin');
    }
}