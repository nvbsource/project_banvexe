<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PicturesVehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'vehicle_id'
    ];
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
}