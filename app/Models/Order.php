<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'paymentMethod',
        'isPayment',
        'isTicketReceived',
        'price',
        'discount_code_id',
        'ticketPickUpTime',
        'ticketOffice_id',
        'departure_same_way_route_id',
        'destination_same_way_route_id',
        'trip_id',
        'customer_id',
    ];
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
    public function departureSameWayRoute()
    {
        return $this->belongsTo(SameWayRoutes::class, 'departure_same_way_route_id', 'id');
    }
    public function destinationSameWayRoute()
    {
        return $this->belongsTo(SameWayRoutes::class, 'destination_same_way_route_id', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function detailsOrders()
    {
        return $this->hasMany(DetailOrder::class);
    }
    public function discount()
    {
        return $this->belongsTo(DiscountCode::class, "discount_code_id", "id");
    }
}