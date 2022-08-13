<?php

namespace App\Http\Controllers\BMS;

use App\Models\Account;
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
            $findUser = Account::where('email', $user->email)->first();
            if ($findUser) {
                Auth::guard("bms")->login($findUser);
                switch (Auth::guard("bms")->user()->role) {
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
                return redirect()->route("bmsLogin")->with('error', 'Tài khoản không tồn tại trong hệ thống');
            }
        } catch (Exception $e) {
            if (Auth::guard("bms")->check()) {
                switch (Auth::guard("bms")->user()->role) {
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
                return redirect()->route("bmsLogin")->with('error', 'Lỗi đăng nhập');
            }
        }
    }
}