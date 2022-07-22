<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePassengerCarCompanyRequest;
use App\Models\PassengerCarCompany;

class PassengerCarCompanyApiController extends Controller
{
    public function create(CreatePassengerCarCompanyRequest $request)
    {
        $file = $request->file('imageLicense');
        if ($file) {
            $filename = time() . "." . $file->getClientOriginalExtension();
            $path = 'administrator/images/passengerCarCompany';
            $file->move(public_path($path), $filename);
        }
        $requestAll = $request->all();
        $requestAll['imageLicense'] = isset($path) ? $path . "/" . $filename : NULL;
        $company = PassengerCarCompany::create($requestAll);
        return response()->json(['success' => true, 'message' => 'Thêm doanh nghiệp mới thành công', 'passengerCarCompany' => $company]);
    }
}