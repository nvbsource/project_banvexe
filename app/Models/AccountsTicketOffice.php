<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsTicketOffice extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'ticketOffice_id',
        'passenger_car_company_id',
    ];
    public function ticketOffice()
    {
        return $this->belongsTo(TicketOffice::class, 'ticketOffice_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}
