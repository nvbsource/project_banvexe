<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketOffice extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'longitude',
        'latitude',
        'phone_official',
        'phone_reserved',
        'passenger_car_company_id'
    ];
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}
