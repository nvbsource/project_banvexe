<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\checkVerificationCodeRequest;
use App\Http\Requests\LoginClientRequest;
use App\Models\Customer;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    use FunctionTrait;
    
    public function login(LoginClientRequest $request)
    {
        $customer = Customer::where("phone", $request->input("phone"))->first();
        if ($customer) {
            $code = $this->generateRandomCode();
            $customer->code = $code;
            $customer->time_expiry = Carbon::now()->addMinute(1);
            $customer->save();
            $message = "Mã xác thực của bạn là " . $code;
            $this->sendSms($customer->phone, $message);
            return response()->json([
                "message" => "Gửi mã xác thực thành công",
                "time" => Carbon::createFromDate($customer->time_expiry)->valueOf() - Carbon::now()->valueOf()
            ]);
        } else {
            return response()->json([
                "message" => "Số điện thoại không tồn tại"
            ], 422);
        }
    }
    public function checkVerificationCode(checkVerificationCodeRequest $request)
    {
        $code = $request->input("code");
        $phone = $request->input("phone");
        $customer = Customer::where("phone", $phone)->first();
        if (!$customer) {
            return response()->json([
                "message" => "Số điện thoại không tồn tại"
            ], 422);
        }
        if ($customer->code != $code) {
            return response()->json([
                "message" => "Mã code không hợp lệ"
            ], 422);
        }
        if (Carbon::createFromDate($customer->time_expiry)->valueOf() < Carbon::now()->valueOf()) {
            return response()->json([
                "message" => "Mã code đã hết hiệu lực"
            ], 422);
        }
        Auth::guard("client")->login($customer);
        return response()->json([
            "message" => "Đăng nhập thành công"
        ]);
    }

    public function sendNewCode(LoginClientRequest $request)
    {
        $customer = Customer::where("phone", $request->input("phone"))->first();
        if ($customer) {
            $code = $this->generateRandomCode();
            $customer->code = $code;
            $customer->time_expiry = Carbon::now()->addMinute(1);
            $customer->save();
            $message = "Mã xác thực của bạn là " . $code;
            $this->sendSms($customer->phone, $message);
            return response()->json([
                "message" => "Gửi lại mã xác thực thành công",
                "time" => Carbon::createFromDate($customer->time_expiry)->valueOf() - Carbon::now()->valueOf()
            ]);
        } else {
            return response()->json([
                "message" => "Số điện thoại không tồn tại"
            ], 422);
        }
    }
    public function logout(){
        Session::flush();
        Auth::guard("client")->logout();
        return redirect()->route('client.home');
    }
}
