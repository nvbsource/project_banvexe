<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo(Order::class, "discount_code_id", "id");
    }
}