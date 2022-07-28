<?php

namespace App\Http\Controllers\Admin;

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
            return redirect()->route('dashboard');
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