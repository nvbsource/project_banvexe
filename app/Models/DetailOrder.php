<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'seat_id',
        'status',
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    public function seat()
    {
        return $this->belongsTo(Seat::class, 'seat_id', 'id');
    }
}