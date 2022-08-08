<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PauseDetailSeat extends Model
{
    use HasFactory;
    protected $fillable = [
        "pause_seat_id",
        "seat_id"
    ];
    public function pauseSeat(){
        return $this->belongsTo(PauseSeat::class, 'pause_seat_id', 'id');
    }
    public function seat(){
        return $this->belongsTo(Seat::class, 'seat_id', 'id');
    }
}
