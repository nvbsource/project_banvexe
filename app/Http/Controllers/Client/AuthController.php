<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\LoginClientRequest;
use App\Models\Customer;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use FunctionTrait;
    public function sendSms($phone, $msg){
        $data_json = array(
            "from" => "InfoSMS",
            "to" => "84".$phone,
            "text" => $msg
        );
        $authorization = base64_encode(env("INFOBIP_USERNAME").':'.env("INFOBIP_PASSWORD"));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json',"Authorization: Basic $authorization"));
        curl_setopt($ch, CURLOPT_URL, 'https://api.infobip.com/sms/1/text/single');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_json));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function login(LoginClientRequest $request){
        $customer = Customer::where("phone", $request->input("phone"))->first();
        if($customer){
            $code = $this->generateRandomCode();
            $customer->code = $code;
            $customer->time_expiry = Carbon::now()->addMinute(1);
            $customer->save();
            $message = "Mã xác thực của bạn là ". $code;
            $this->sendSms($customer->phone, $message);
            return response()->json([
                "message" => "Gửi mã xác thực thành công"
            ]);
        }else{
            return response()->json([
                "message" => "Số điện thoại không tồn tại"
            ], 422);
        }
    }
}
