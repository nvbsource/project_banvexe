<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'vehicle_id',
    ];
    public function detailOrders()
    {
        return $this->hasMany(DetailOrder::class);
    }
}