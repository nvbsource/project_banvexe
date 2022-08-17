<?php

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function result(Request $request)
    {
        $orderCode = $request->input("code");
        $order = Order::where("orderCode", $orderCode)->first();
        switch ($order->paymentMethod) {
            case "OFFICE":
                $paymentMethod = "Tại văn phòng";
                break;
            case "MOMO":
                $paymentMethod = "Ví Momo";
                break;
            case "VNPAY":
                $paymentMethod = "Ví VNpay";
                break;
            case "ZALOPAY":
                $paymentMethod = "Ví ZaloPay";
                break;
        }
        return view("client.pages.payment.result", compact("order", "paymentMethod"));
    }
}
