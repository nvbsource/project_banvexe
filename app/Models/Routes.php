<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;
    protected $fillable = [
        'departure_province_id',
        'destination_province_id',
        'departure_name',
        'destination_name',
        'departure_longlitude',
        'departure_latitude',
        'destination_longlitude',
        'destination_latitude',
        'passengerCarCompany_id'
    ];
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public function departureProvince()
    {
        return $this->belongsTo(Province::class, 'departure_province_id', 'id');
    }
    public function destinationProvince()
    {
        return $this->belongsTo(Province::class, 'destination_province_id', 'id');
    }
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
}