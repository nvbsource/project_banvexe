<?php

namespace App\Http\Controllers\Admin;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(Request $request)
    {
        if (Auth::guard("admin")->attempt($request->only('username', 'password'))) {
            switch(Auth::guard('admin')->user()->role){
                case "manager":
                    return redirect(RouteServiceProvider::MANAGER_HOME);
                break;
                case "bus":
                    return redirect(RouteServiceProvider::BUS_HOME);
                break;
                case "ticket":
                    return redirect(RouteServiceProvider::TICKET_HOME);
                break;
                case "admin":
                    return redirect(RouteServiceProvider::ADMIN_HOME);
                break;
            }
        } else {
            return redirect()->back()->with('error', 'Tài khoản hoặc mật khẩu không đúng!');
        }
    }
    
    public function hangleLogout()
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect()->route('adminLogin');
    }
}