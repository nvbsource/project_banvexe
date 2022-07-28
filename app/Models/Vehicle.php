<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'licensePlates',
        'countSeat',
        'countFloor',
        'numColumn',
        'numRow',
        'rangeOfVehicle_id',
        'passenger_car_company_id',
    ];
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
    public function pictures()
    {
        return $this->hasMany(PicturesVehicle::class);
    }
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public function rangeOfVehicle()
    {
        return $this->belongsTo(RangeOfVehicle::class, 'rangeOfVehicle_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}