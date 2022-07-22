<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating',
        'comment',
        'passenger_car_company_id',
        'customer_id',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(Customer::class, 'passenger_car_company_id', 'id');
    }
}