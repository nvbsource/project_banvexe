<?php 
namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait FunctionTrait
{
    protected function getCompanyAccountLogin()
    {
        return Auth::guard("admin")->user()->passengerCarCompany;
    }
}
?>