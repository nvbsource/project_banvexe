<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role',
        'ticket_office_id',
        'passenger_car_company_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function ticketOffice()
    {
        return $this->belongsTo(TicketOffice::class, 'ticket_office_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
    public function roleUser()
    {
        return $this->belongsTo(Role::class, 'role', 'role');
    }
    
}