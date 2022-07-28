<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'idCard',
        'drivingExperience',
        'drivingLicense',
        'path_avatar',
        'passenger_car_company_id',
    ];
    public function driverDetails()
    {
        return $this->hasMany(DriversDetail::class);
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}