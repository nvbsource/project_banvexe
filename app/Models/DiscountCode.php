<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    protected $fillable = [
        "code",
        "price",
        "start_date",
        "end_date",
        "order_id",
        "passenger_car_company_id",
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, "order_id", "id");
    }

    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, "passenger_car_company_id", "id");
    }
}