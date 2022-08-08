<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PauseSeat extends Model
{
    use HasFactory;
    protected $fillable = [
        "pauseTime"
    ];
    public function pauseSeatDetails()
    {
        return $this->hasMany(PauseDetailSeat::class);
    }
}
