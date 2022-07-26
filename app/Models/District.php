<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'province_id'
    ];
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    public function departureRoutes()
    {
        return $this->hasMany(Route::class);
    }
    public function destinationRoutes()
    {
        return $this->hasMany(Route::class);
    }
    public function sameWayRoutes()
    {
        return $this->hasMany(SameWayRoutes::class);
    }
}