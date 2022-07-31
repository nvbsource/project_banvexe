<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SameWayRoutes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'longlitude',
        'latilute',
        'district_id',
        'route_id'
    ];
    public function route()
    {
        return $this->belongsTo(Route::class, "route_id", "id");
    }
    public function departureOrders()
    {
        return $this->hasMany(Order::class);
    }
    public function destinationOrders()
    {
        return $this->hasMany(Order::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class, "district_id", "id");
    }
}