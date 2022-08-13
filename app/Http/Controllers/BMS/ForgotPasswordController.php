<?php

namespace App\Http\Controllers\BMS;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('bms.auth.forgotPassword');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:accounts',
            ],
            [
                "email.required" => "Vui lòng nhập email",
                "email.email" => "Địa chỉ email không hợp lệ",
                "email.exists" => "Địa chỉ email không tồn tại trong hệ thống"
            ]
        );

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgotPassword', ['token' => $token, 'email' => $request->email], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Yêu cầu lấy lại mật khẩu quản lý hệ thống bán vé xe');
        });

        return back()->with('success', 'Vui lòng kiểm tra email để lấy lại mật khẩu');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($token)
    {
        $findToken = DB::table('password_resets')
            ->where([
                'token' => $token
            ])
            ->first();
        if(!$findToken){
            abort(404);
        }
        return view('bms.auth.forgotPasswordLink', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate(
        [
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ],
        [
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Mật khẩu phải từ 8 kí tự",
            "password_confirmation.required" => "Vui lòng nhập lại mật khẩu",
            "password.confirmed" => "Nhập lại mật khẩu không đúng"
        ]);

        $findToken = DB::table('password_resets')
            ->where([
                'token' => $request->input("token")
            ])
            ->first();

        if (!$findToken) {
            return back()->withInput()->with('error', 'Token không hợp lệ');
        }

        $findAccount = Account::where("email", $findToken->email)->first();

        if (!$findAccount) {
            DB::table('password_resets')->where(['email' => $findToken->email])->delete();
            return back()->withInput()->with('error', 'Tài khoản không tồn tại');
        }
        
        $findAccount->update(['password' => Hash::make($request->input("password"))]);
        
        DB::table('password_resets')->where(['email' => $findToken->email])->delete();

        return redirect()->route("bmsLogin")->with('success', 'Thay đổi mật khẩu thành công!');
    }
}
