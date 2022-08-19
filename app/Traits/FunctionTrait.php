<?php 
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait FunctionTrait
{
    protected function getCompanyAccountLogin()
    {
        return Auth::guard("bms")->user()->passengerCarCompany;
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomCode($length = 6) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function getCurrentUserClient(){
        return Auth::guard("client")->user();
    }
    public function sendSms($phone, $msg)
    {
        $data_json = array(
            "from" => "InfoSMS",
            "to" => "84" . $phone,
            "text" => $msg
        );
        $authorization = base64_encode(env("INFOBIP_USERNAME") . ':' . env("INFOBIP_PASSWORD"));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json', "Authorization: Basic $authorization"));
        curl_setopt($ch, CURLOPT_URL, 'https://api.infobip.com/sms/1/text/single');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_json));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

}
?>