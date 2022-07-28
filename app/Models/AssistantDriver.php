<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistantDriver extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'idCard',
        'path_avatar',
        'passenger_car_company_id',
    ];
    public function passengerCarCompany()
    {
        return $this->belongsTo(PassengerCarCompany::class, 'passenger_car_company_id', 'id');
    }
    public function assistantDriversDetails()
    {
        return $this->hasMany(AssistantDriversDetail::class);
    }
}