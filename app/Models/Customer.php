<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'birthday',
        'idCard',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function evaluates()
    {
        return $this->hasMany(Evaluate::class);
    }
}