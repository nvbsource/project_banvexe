<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date',
        'end_date',
        'status',
        'price',
        'route_id',
        'vehicle_id',
        'passenger_car_company_id'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function drivers()
    {
        return $this->hasMany(DriversDetail::class);
    }
    public function assitantDrivers()
    {
        return $this->hasMany(AssistantDriversDetail::class);
    }
    public function pauseSeats()
    {
        return $this->hasMany(PauseSeat::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}