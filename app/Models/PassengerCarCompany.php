<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerCarCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'numberLicense',
        'imageLicense'
    ];
    public function evaluates()
    {
        return $this->hasMany(Evaluate::class);
    }
    public function ticketOffices()
    {
        return $this->hasMany(TicketOffice::class);
    }
    public function accountTicketOffices()
    {
        return $this->hasMany(AccountsTicketOffice::class);
    }
    public function accountCompanies()
    {
        return $this->hasMany(AccountsCompany::class);
    }
    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}