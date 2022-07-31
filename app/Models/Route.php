<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'departure_district_id',
        'destination_district_id',
        'departure_name',
        'destination_name',
        'departure_address',
        'destination_address',
        'departure_location',
        'destination_location',
        'passenger_car_company_id'
    ];
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public function departureDistrict()
    {
        return $this->belongsTo(District::class, 'departure_district_id', 'id');
    }
    public function destinationDistrict()
    {
        return $this->belongsTo(District::class, 'destination_district_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
    public function sameWayRoutes()
    {
        return $this->hasMany(SameWayRoutes::class);
    }
}