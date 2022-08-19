<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CreateOrderRequest;
use App\Models\Customer;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\PauseDetailSeat;
use App\Models\Route;
use App\Models\SameWayRoutes;
use App\Models\Trip;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    use FunctionTrait;

    function execPostRequest($url, $data)
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

    public function viewBooking()
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $trips = Trip::where("passenger_car_company_id",  $companyId)->get();
        $routes = Route::where("passenger_car_company_id",  $companyId)->get();
        return view("bms.manager.pages.order.booking", compact("trips", "routes"));
    }

    public function methodVNPay($orderId)
    {
        $order = Order::find($orderId);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_ReturnUrl = env("VNP_REDIRECT");
        $vnp_TmnCode = env("VNP_TMN_CODE"); //Mã website tại VNPAY 
        $vnp_HashSecret = env("VNP_HASH_SECRET"); //Chuỗi bí mật
        $vnp_TxnRef = $order->orderCode;
        $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->orderCode;
        $vnp_OrderType = "momo_wallet";
        $vnp_Amount = $order->price * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $startTime = date("YmdHis");
        $expire = date('YmdHis', strtotime('+10 minutes', strtotime($startTime)));

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
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $expire,
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
        return $vnp_Url;
    }
    public function callbackVNPay(Request $request)
    {
        $vnp_ResponseCode = $request->input("vnp_ResponseCode");
        $vnp_SecureHash = $request->input("vnp_SecureHash");
        $orderId = $request->input('vnp_TxnRef');
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, env("VNP_HASH_SECRET"));

        if ($secureHash === $vnp_SecureHash) {
            if ($vnp_ResponseCode === "00") {
                $order = Order::where("orderCode", $orderId)->first();
                $order["time"] = Carbon::create($order->trip->start_date)->format("H:i"). " ngày ". Carbon::create($order->trip->start_date)->format("d/m/Y");
                $seats = implode(", ", $order->detailsOrders()->where("status", true)->get()->map(function($item){
                    return $item->seat->name;
                })->toArray());
                $driversPhone = implode(", ", $order->trip->drivers()->get()->map(function($item){
                    return $item->driver->phone;
                })->toArray());
                $driversAssitantPhone = implode(", ", $order->trip->assitantDrivers()->get()->map(function($item){
                    return $item->assistantDriver->phone;
                })->toArray());
                Mail::send('email.paymentResult', ["order" => $order, "seats" => $seats, "driversAssitantPhone" => $driversAssitantPhone, "driversPhone" => $driversPhone], function ($message) use ($order) {
                    $message->to($order->customer->email);
                    $message->subject('Thông tin mã đơn hàng [' . $order->orderCode . ']');
                });
                return "Thanh toán thành công";
            } else {
                return "Thanh toán thất bại";
            }
        } else {
            return "Chữ ký không hợp lệ";
        }
    }
    public function methodMomo($orderId)
    {
        $order = Order::find($orderId);
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        $partnerCode = env("MOMO_PARTNER_CODE");
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $orderInfo = "Thanh toán đơn hàng " . $order->orderCode;
        $amount = $order->price;
        $orderId = time() . "";
        $redirectUrl = env("MOMO_REDIRECT");
        $ipnUrl = env("MOMO_IPN");
        $extraData = "";
        $requestId = $order->orderCode;
        $requestType = "captureWallet";

        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
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
        $jsonResult = json_decode($result, true);

        return $jsonResult['payUrl'];
    }

    public function callbackMomo(Request $request)
    {
        $accessKey = env("MOMO_ACCESS_KEY");
        $secretKey = env("MOMO_SECRET_KEY");
        $partnerCode = $_GET["partnerCode"];
        $orderId = $_GET["orderId"];
        $requestId = $_GET["requestId"];
        $amount = $_GET["amount"];
        $orderInfo = $_GET["orderInfo"];
        $orderType = $_GET["orderType"];
        $transId = $_GET["transId"];
        $resultCode = $_GET["resultCode"];
        $message = $_GET["message"];
        $payType = $_GET["payType"];
        $responseTime = $_GET["responseTime"];
        $extraData = $_GET["extraData"];
        $m2signature = $_GET["signature"]; //MoMo signature

        //Checksum
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&message=" . $message . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
            "&orderType=" . $orderType . "&partnerCode=" . $partnerCode . "&payType=" . $payType . "&requestId=" . $requestId . "&responseTime=" . $responseTime .
            "&resultCode=" . $resultCode . "&transId=" . $transId;

        $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);

        if ($m2signature == $partnerSignature) {
            if ($resultCode == '0') {
                $order = Order::where("orderCode", $requestId)->first();
                $order["time"] = Carbon::create($order->trip->start_date)->format("H:i"). " ngày ". Carbon::create($order->trip->start_date)->format("d/m/Y");
                return redirect()->route("client.paymentResult", ["code" => $order->orderCode]);
            } else {
                return redirect()->route("paymentResult", ["code" => $requestId]);
            }
        } else {
            return '<div class="alert alert-danger">This transaction could be hacked, please check your signature and returned signature</div>';
        }
    }

    public function ipnVNPay(Request $request)
    {
        $inputData = array();
        $returnData = array();
        
        foreach ($request->all() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        
        $secureHash = hash_hmac('sha512', $hashData, env("VNP_HASH_SECRET"));
        $vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
        $vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
        $vnp_Amount = $inputData['vnp_Amount']/100; // Số tiền thanh toán VNPAY phản hồi
        
        $orderId = $inputData['vnp_TxnRef'];
        
        try {
            if ($secureHash == $vnp_SecureHash) {
                $order = Order::where("orderCode", $orderId)->first();
                if ($order != NULL) {
                    if($order->price == $vnp_Amount)
                    {
                        if (!$order->isPayment) {
                            if ($inputData['vnp_ResponseCode'] == '00' || $inputData['vnp_TransactionStatus'] == '00') {
                                $order->isPayment = true;
                                $order->save();
                            }
                            $returnData['RspCode'] = '00';
                            $returnData['Message'] = 'Confirm Success';
                        } else {
                            $returnData['RspCode'] = '02';
                            $returnData['Message'] = 'Order already confirmed';
                        }
                    }
                    else {
                        $returnData['RspCode'] = '04';
                        $returnData['Message'] = 'invalid amount';
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                }
            } else {
                $returnData['RspCode'] = '97';
                $returnData['Message'] = 'Invalid signature';
            }
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
        die(json_encode($returnData));
    }
    
    public function ipnMomo(Request $request)
    {
        $data = $request->all();
        $accessKey = env("MOMO_ACCESS_KEY");
        $secretKey = env("MOMO_SECRET_KEY");
        $partnerCode = $data["partnerCode"];
        $orderId = $data["orderId"];
        $requestId = $data["requestId"];
        $amount = $data["amount"];
        $orderInfo = $data["orderInfo"];
        $orderType = $data["orderType"];
        $transId = $data["transId"];
        $resultCode = $data["resultCode"];
        $message = $data["message"];
        $payType = $data["payType"];
        $responseTime = $data["responseTime"];
        $extraData = $data["extraData"];
        $m2signature = $data["signature"]; //MoMo signature

        //Checksum
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&message=" . $message . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo .
            "&orderType=" . $orderType . "&partnerCode=" . $partnerCode . "&payType=" . $payType . "&requestId=" . $requestId . "&responseTime=" . $responseTime .
            "&resultCode=" . $resultCode . "&transId=" . $transId;

        $partnerSignature = hash_hmac("sha256", $rawHash, $secretKey);
        if ($m2signature == $partnerSignature) {
            if ($resultCode == '0') {
                $order = Order::where("orderCode", $requestId)->first();
                $order->isPayment = true;
                $order->save();
                $order["time"] = Carbon::create($order->trip->start_date)->format("H:i"). " ngày ". Carbon::create($order->trip->start_date)->format("d/m/Y");
                $seats = implode(", ", $order->detailsOrders()->where("status", true)->get()->map(function($item){
                    return $item->seat->name;
                })->toArray());
                $driversPhone = implode(", ", $order->trip->drivers()->get()->map(function($item){
                    return $item->driver->phone;
                })->toArray());
                $driversAssitantPhone = implode(", ", $order->trip->assitantDrivers()->get()->map(function($item){
                    return $item->assistantDriver->phone;
                })->toArray());
                Mail::send('email.paymentResult', ["order" => $order, "seats" => $seats, "driversAssitantPhone" => $driversAssitantPhone, "driversPhone" => $driversPhone], function ($message) use ($order) {
                    $message->to($order->customer->email);
                    $message->subject('Thông tin mã đơn hàng [' . $order->orderCode . ']');
                });
            }
        }
    }

    public function create(CreateOrderRequest $request)
    {
        $data = $request->all();
        $tripId = $data["trip_id"];
        $departureId = $data["departure_id"]; // allow null
        $destinationId = $data["destination_id"]; // allow null
        $seatsBook = $data["seats"];
        $discountCode = $data["discount_code"]; // allow null
        $email = $data["email"]; // allow null
        $phone = $data["phone"]; // allow null
        $methodPayment = $data["methodPayment"]; // office, vnpay, momo
        $sendEmail = filter_var($data["sendEmail"], FILTER_VALIDATE_BOOLEAN); // true or false
        $sendPhone = filter_var($data["sendPhone"], FILTER_VALIDATE_BOOLEAN); // true or false
        $receivedTicket = filter_var($data["received_ticket"], FILTER_VALIDATE_BOOLEAN); // true or false
        $customer = Customer::where("email", $email)->orWhere("phone", $phone)->first();

        $trip = Trip::find($tripId);
        $companyId = $this->getCompanyAccountLogin()->id;

        if (!$trip) {
            return response()->json([
                "message" => "Không tìm thấy chuyến xe có id " . $trip->id
            ], 404);
        }

        if ($trip->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Chuyến xe không tồn tại trong công ty"
            ], 404);
        }

        if (array_search($methodPayment, ["office", "vnpay", "momo"]) === false) {
            return response()->json([
                "message" => "Hình thức thanh toán không hợp lệ"
            ], 422);
        }

        if ($departureId != 0 && !$trip->route->sameWayRoutes->where("id", $departureId)->first()) {
            return response()->json([
                "message" => "Tuyến đường điểm đón không hợp lệ"
            ], 404);
        }

        if ($destinationId != 0 && !$trip->route->sameWayRoutes->where("id", $destinationId)->first()) {
            return response()->json([
                "message" => "Tuyến đường điểm đến không hợp lệ"
            ], 404);
        }

        // Check old customer and change phone or email if data have change

        if (!$customer) {
            $customer = Customer::create($data);
        } else {
            $customer->phone = $phone;
            if ($email) {
                $customer->email = $email;
            }
            $customer->save();
        }

        $price = count($seatsBook) * $trip->price;
        
        $order = Order::create([
            "orderCode" => $this->generateRandomString(),
            "trip_id" => $trip->id,
            "customer_id" => $customer->id,
            "price" => $price,
            "paymentMethod" => strtoupper($methodPayment),
            "isTicketReceived" => filter_var($receivedTicket, FILTER_VALIDATE_BOOLEAN),
        ]);
        $orderDetails = DetailOrder::insert(array_map(function ($seat) use ($order) {
            return array(
                "seat_id" => $seat,
                "order_id" => $order->id,
            );
        }, $seatsBook));

        if ($departureId != 0) {
            $order->departure_same_way_route_id = $departureId;
        }

        if ($destinationId != 0) {
            $order->destination_same_way_route_id = $destinationId;
        }
        if ($receivedTicket) {
            $order->ticketPickUpTime = Carbon::now();
            $order->ticketOffice_id = Auth::guard("bms")->user()->ticketOffice->id;
        }

        if ($methodPayment !== "office") {
            $order->paymentPalidityPeriod = Carbon::now()->addMinute(10);
        }

        PauseDetailSeat::whereIn("seat_id", $seatsBook)->delete();

        $order->save();

        switch (strtoupper($methodPayment)) {
            case "VNPAY":
                $urlPayment = $this->methodVNPay($order->id);
                break;
            case "MOMO":
                $urlPayment = $this->methodMomo($order->id);
                break;
            default:
                $urlPayment = "";
                break;
        }
        
        if ($sendEmail) {
            $path = 'images/qrcode/'. $order->orderCode.'.png';
            \QrCode::size(350)->format('png')->generate($order->orderCode, public_path($path));
            $order["time"] = Carbon::create($order->trip->start_date)->format("H:i"). " ngày ". Carbon::create($order->trip->start_date)->format("d/m/Y");
            $seats = implode(", ", $order->detailsOrders()->where("status", true)->get()->map(function($item){
                return $item->seat->name;
            })->toArray());
            Mail::send('email.requiredPayment', ['url' => $urlPayment, "order" => $order, "seats" => $seats], function ($message) use ($email, $order) {
                $message->to($email);
                $message->subject('Thanh toán mã đơn hàng [' . $order->orderCode . ']');
            });
        }

        // Send order phone to customer
        if ($sendPhone) {
            $timeStart = Carbon::create($order->trip->start_date)->format("H:i"). " ". Carbon::create($order->trip->start_date)->format("d/m/Y");
            $routeArea = $order->trip->route->departureDistrict->name . ' - ' . $order->trip->route->destinationDistrict->name;
            $company = $order->trip->passengerCarCompany->name;
            $timeExpiry = Carbon::create($order->paymentPalidityPeriod)->format("H:i d/m/Y");
            $msg = 'Vui lòng TT mã '.$order->orderCode.' bằng ví '.$order->paymentMethod.', '.$routeArea.' '.$timeStart.', xe '. $company.' - '. number_format($order->price).'đ'.' trước '. $timeExpiry;
            $this->sendSms($phone, $msg);
        }


        return response()->json([
            "message" => "Tạo đơn hàng thành công"
        ]);
    }
    public function scanQR(){
        return view("bms.manager.pages.order.scan");
    }
}
