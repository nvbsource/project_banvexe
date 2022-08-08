<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'isLocked',
        'vehicle_id',
    ];
    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
    public function pauseSeatDetails()
    {
        return $this->hasMany(PauseDetailSeat::class);
    }
}