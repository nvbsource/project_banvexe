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
        'discount',
        'ticketPickUpTime',
        'ticketOffice_id',
        'trip_id',
        'customer_id',
    ];
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function details()
    {
        return $this->hasMany(DetailOrder::class);
    }
}