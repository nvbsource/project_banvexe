<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'passenger_car_company_id',
    ];
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}
