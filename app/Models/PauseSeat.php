<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PauseSeat extends Model
{
    use HasFactory;
    protected $fillable = [
        "pauseTime",
        "account_id",
        "trip_id"
    ];
    public function pauseSeatDetails()
    {
        return $this->hasMany(PauseDetailSeat::class);
    }
    public function account()
    {
        return $this->belongsTo(Account::class, "account_id", "id");
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class, "trip_id", "id");
    }
}