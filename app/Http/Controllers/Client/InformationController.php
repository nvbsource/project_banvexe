<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\ChangeInformationRequest;
use App\Models\Customer;
use App\Models\Order;
use App\Traits\FunctionTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformationController extends Controller
{
    use FunctionTrait;

    public function index(){
        $user = $this->getCurrentUserClient();
        return view("client.pages.information.index", compact('user'));
    }

    public function change(ChangeInformationRequest $request){
        $customer = Customer::find(Auth::guard("client")->user()->id);
        $customer->update([
            "name" => $request->input("name"),
            "birthday" => $request->input("birthday"),
            "idCard" => $request->input("idCard"),
        ]);
        return redirect()->back()->with("success", "Thay đổi thông tin thành công");
    }

    public function ticket(){
        $customer = Auth::guard("client")->user();
        $ticketCurrent = Order::where("customer_id", $customer->id)->whereHas("trip", function($query){
            return $query->where("status", "!=", "completed");
        })->get()->filter(function($item){
            return $item->detailsOrders->count() !== $item->detailsOrders->where("status", false)->count();
        });
        $ticketCurrent = $ticketCurrent->map(function($item){
            $item["time"] = Carbon::create($item->trip->start_date)->locale("vi")->dayName. ", ". Carbon::create($item->trip->start_date)->format("d/m/Y");
            $item["hours"] = Carbon::create($item->trip->start_date)->format("h:i");
            $item["route"] = $item->trip->route->departureDistrict->name." - ".$item->trip->route->destinationDistrict->name;
           return $item;
        });

        $completed = Order::where("customer_id", $customer->id)->whereHas("detailsOrders", function($query){
            return $query->where("status", true);
        })->whereHas("trip", function($query){
            return $query->where("status", "completed");
        })->get();

        $completed = $completed->map(function($item){
            $item["time"] = Carbon::create($item->trip->start_date)->locale("vi")->dayName. ", ". Carbon::create($item->trip->start_date)->format("d/m/Y");
            $item["hours"] = Carbon::create($item->trip->start_date)->format("h:i");
            $item["route"] = $item->trip->route->departureDistrict->name." - ".$item->trip->route->destinationDistrict->name;
           return $item;
        });

        $canceled = Order::where("customer_id", $customer->id)->get()->filter(function($item){
            return $item->detailsOrders->count() === $item->detailsOrders->where("status", false)->count();
        });
        $canceled = $canceled->map(function($item){
            $item["time"] = Carbon::create($item->trip->start_date)->locale("vi")->dayName. ", ". Carbon::create($item->trip->start_date)->format("d/m/Y");
            $item["hours"] = Carbon::create($item->trip->start_date)->format("h:i");
            $item["route"] = $item->trip->route->departureDistrict->name." - ".$item->trip->route->destinationDistrict->name;
           return $item;
        });
        return view("client.pages.information.ticket", compact('ticketCurrent', 'completed', 'canceled'));
    }
}
