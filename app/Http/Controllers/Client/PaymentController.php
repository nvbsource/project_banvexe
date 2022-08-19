<?php

namespace App\Http\Controllers\Client;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function result(Request $request)
    {
        $orderCode = $request->input("code");
        $order = Order::where("orderCode", $orderCode)->first();
        if(!$order){
            return redirect()->route("client.home");
        }
        switch ($order->paymentMethod) {
            case "MOMO":
                $paymentMethod = "Ví Momo";
                break;
            case "VNPAY":
                $paymentMethod = "Ví VNpay";
                break;
            case "ZALOPAY":
                $paymentMethod = "Ví ZaloPay";
                break;
            default:
                $paymentMethod = "Tại văn phòng";

        }
        if($order->detailsOrders->count() === $order->detailsOrders->where("status", false)->count() || (!$order->isPayment && $order->trip->status === "completed")){
            $status = "Đã huỷ vé";
            return view("client.pages.payment.result-cancel", compact("order", "paymentMethod", "status"));
        }else if($order->isPayment){
            $timeStart = Carbon::create($order->trip->start_date)->format("H:i"). " - ". Carbon::create($order->trip->start_date)->format("d/m/Y");
            $status = "Đã thanh toán";
            return view("client.pages.payment.result-success", compact("order", "paymentMethod", "status", "timeStart"));
        }else if($order->paymentMetod != "OFFICE" && Carbon::createFromDate($order->paymentPalidityPeriod)->valueOf() > Carbon::now()->valueOf()){
            $status = "Chờ thanh toán";
            return view("client.pages.payment.result-pending", compact("order", "paymentMethod", "status"));
        }else if(Carbon::createFromDate($order->paymentPalidityPeriod)->valueOf() < Carbon::now()->valueOf() && !$order->isPayment){
            $status = "Hết thời gian thanh toán";
            return view("client.pages.payment.result-time-expiry", compact("order", "paymentMethod", "status"));
        }else if($order->paymentMetod == "OFFICE"){
            $status = "Đặt ghế thành công";
            return view("client.pages.payment.result-hold-seat", compact("order", "paymentMethod", "status"));
        }
    }
}
