<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = Admin::where('email', $user->email)->first();
            if ($findUser) {
                Auth::guard("admin")->login($findUser);
                return redirect(RouteServiceProvider::ADMIN_HOME);
            } else {
                return redirect()->route("adminLogin")->with('error', 'Tài khoản không tồn tại trong hệ thống');
            }
        } catch (Exception $e) {
            if (Auth::guard("admin")->check()) {
                return redirect(RouteServiceProvider::ADMIN_HOME);
            } else {
                return redirect()->route("adminLogin")->with('error', 'Lỗi đăng nhập');
            }
        }
    }
}