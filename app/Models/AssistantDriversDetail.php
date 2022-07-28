<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistantDriversDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_id',
        'assitantDriver_id'
    ];
    public function assistantDriver()
    {
        return $this->belongsTo(AssistantDriver::class, 'assitantDriver_id', 'id');
    }
    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id', 'id');
    }
}