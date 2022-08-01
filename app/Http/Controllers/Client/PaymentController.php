<?php

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $allOrders = Order::all();
        return view("client.pages.payment", compact('allOrders'));
    }
    private function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function payment(Request $request)
    {
        $order_id = $request->input("order_id");
        $paymentMethod = $request->input("payment_method");
        $order = Order::find($order_id);
        if (!$order) {
            return "Không tìm thấy order id";
        }
        if ($paymentMethod === "VNPAY") {
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost:8000/payment/vnpay/callback";
            $vnp_TmnCode = "DO26YX1F"; //Mã website tại VNPAY 
            $vnp_HashSecret = "DTZBDVXSHFKZVBPKDVXGRNTPXYXMNMFX"; //Chuỗi bí mật
            $vnp_TxnRef = $order->id;
            $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->id;
            $vnp_OrderType = "other";
            $vnp_Amount = $order->price * 100;
            $vnp_Locale = "vn";
            $vnp_BankCode = "";
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            return  redirect($vnp_Url);
        } else if ("MOMO") {
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
            $partnerCode = 'MOMOLYLG20191106';
            $accessKey = 'eQAm6r5KrIE7Zrhr';
            $serectkey = 'NYJq8cfB2uNGiMRLq9qMSsEPGhUarrti';
            $orderInfo = "Thanh toán qua MoMo";
            $amount = $order->price;
            $orderId = time() . "";
            $redirectUrl = "http://localhost:8000/payment/momo/callback";
            $ipnUrl = "http://localhost:8000/payment/momo/callback";
            $extraData = "";

            $orderId = $order->id; // Mã đơn hàng
            $requestId = time() . "";
            $requestType = "captureWallet";
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $serectkey);
            $data = array(
                'partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature
            );
            $result = $this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            if ($jsonResult['resultCode'] === 0) {
                return redirect($jsonResult['payUrl']);
            } else {
                return $jsonResult['message'];
            }
        }
    }
    public function returnMomo(Request $request)
    {
        dd($request->all());
    }
    public function returnVnpay(Request $request)
    {
        dd($request->all());
    }
    // public function callback(Request $request)
    // {
    //     $vnp_HashSecret = "DTZBDVXSHFKZVBPKDVXGRNTPXYXMNMFX"; //Chuỗi bí mật
    //     $inputData = array();
    //     $returnData = array();

    //     foreach ($request->all() as $key => $value) {
    //         if (substr($key, 0, 4) == "vnp_") {
    //             $inputData[$key] = $value;
    //         }
    //     }

    //     $vnp_SecureHash = $inputData['vnp_SecureHash'];
    //     unset($inputData['vnp_SecureHash']);
    //     ksort($inputData);
    //     $i = 0;
    //     $hashData = "";
    //     foreach ($inputData as $key => $value) {
    //         if ($i == 1) {
    //             $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
    //         } else {
    //             $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
    //             $i = 1;
    //         }
    //     }

    //     $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
    //     $vnp_Amount = $inputData['vnp_Amount'] / 100;
    //     $orderId = $inputData['vnp_TxnRef'];
    //     if ($secureHash == $vnp_SecureHash) {
    //         $order = Order::find($orderId);
    //         if ($order != NULL) {
    //             if ($order->price == $vnp_Amount) {
    //                 if (!$order->isPayment) {
    //                     if ($inputData['vnp_ResponseCode'] == '00' || $inputData['vnp_TransactionStatus'] == '00') {
    //                     } else {
    //                     }
    //                     $returnData['RspCode'] = '00';
    //                     $returnData['Message'] = 'Confirm Success';
    //                 } else {
    //                     $returnData['RspCode'] = '02';
    //                     $returnData['Message'] = 'Order already confirmed';
    //                 }
    //             } else {
    //                 $returnData['RspCode'] = '04';
    //                 $returnData['Message'] = 'invalid amount';
    //             }
    //         } else {
    //             $returnData['RspCode'] = '01';
    //             $returnData['Message'] = 'Order not found';
    //         }
    //     } else {
    //         $returnData['RspCode'] = '97';
    //         $returnData['Message'] = 'Invalid signature';
    //     }
    //     //Trả lại VNPAY theo định dạng JSON
    //     return json_encode($returnData);
    // }
}