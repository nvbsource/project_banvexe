<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_district_id',
        'to_district_id',
        'address_start',
        'address_end',
        'start_date',
        'status',
        'price',
        'driver_id',
        'vehicle_id'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'id');
    }
    public function fromDistrict()
    {
        return $this->belongsTo(District::class, 'from_district_id', 'id');
    }
    public function toDistrict()
    {
        return $this->belongsTo(District::class, 'to_district_id', 'id');
    }
}