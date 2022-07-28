<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriversDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'trip_id'
    ];
    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id', 'id');
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}