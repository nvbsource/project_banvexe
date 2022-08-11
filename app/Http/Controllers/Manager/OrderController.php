<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CreateOrderRequest;
use App\Models\Customer;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Models\Route;
use App\Models\SameWayRoutes;
use App\Models\Trip;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    use FunctionTrait;
    public function viewBooking()
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $trips = Trip::where("passenger_car_company_id",  $companyId)->get();
        $routes = Route::where("passenger_car_company_id",  $companyId)->get();
        return view("manager.pages.order.booking", compact("trips", "routes"));
    }
    public function create(CreateOrderRequest $request){
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
        
        if($trip->passengerCarCompany->id !== $companyId){
            return response()->json([
                "message" => "Chuyến xe không tồn tại trong công ty"
            ], 404);
        }
        
        if(array_search($methodPayment, ["office", "vnpay", "momo"]) === false){
            return response()->json([
                "message" => "Hình thức thanh toán không hợp lệ"
            ], 422);
        }

        if($departureId != 0 && !$trip->route->sameWayRoutes->where("id", $departureId)->first()){
            return response()->json([
                "message" => "Tuyến đường điểm đón không hợp lệ"
            ], 404);
        }

        if($destinationId != 0 && !$trip->route->sameWayRoutes->where("id", $destinationId)->first()){
            return response()->json([
                "message" => "Tuyến đường điểm đến không hợp lệ"
            ], 404);
        }

        // Check old customer and change phone or email if data have change

        if(!$customer){
            $customer = Customer::create($data);
        }else{
            $customer->phone = $phone;
            if($email){
                $customer->email = $email;
            }
            $customer->save();
        }
        $price = count($seatsBook) * $trip->price;
        $order = Order::create([
            "trip_id" => $trip->id,
            "customer_id" => $customer->id,
            "price" => $price,
            "paymentMethod" => strtoupper($methodPayment),
            "isTicketReceived" => filter_var($receivedTicket, FILTER_VALIDATE_BOOLEAN)
        ]);

        $orderDetails = DetailOrder::insert(array_map(function($seat) use ($order){
            return array(
                "seat_id" => $seat,
                "order_id" => $order->id
            );
        }, $seatsBook));

        if($departureId != 0){
            $order->departure_same_way_route_id = $departureId;
        }

        if($destinationId != 0){
            $order->destination_same_way_route_id = $destinationId;
        }
        if($receivedTicket){
            $order->ticketPickUpTime = Carbon::now();
            $order->ticketOffice_id = Auth::guard("admin")->user()->ticketOffice->id;
        }

        $order->save();

        // Send order email to customer
        if($sendEmail){

        }

        // Send order phone to customer
        if($sendPhone){

        }

        return response()->json([
            "message" => "Tạo đơn hàng thành công"
        ]);

    }
}