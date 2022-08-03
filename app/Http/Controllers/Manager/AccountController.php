<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\AddStaffRequest;
use App\Http\Requests\EditStaffRequest;
use App\Mail\AddStaffMail;
use App\Models\TicketOffice;
use App\Models\Account;
use App\Traits\FunctionTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    use FunctionTrait;
    public function create(AddStaffRequest $request, $id)
    {
        $ticketOffice = TicketOffice::find($id);
        $request = $request->all();
        $password = $request["password"];
        $request["password"] = Hash::make($request['password']);

        if (!$ticketOffice) {
            return response()->json([
                "message" => "Không tìm thấy văn phòng có id " . $id
            ], 404);
        }

        $companyId = $this->getCompanyAccountLogin()->id;
        if ($ticketOffice->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Bạn không có quyền thao tác liệu này"
            ], 401);
        }

        $staff = Account::create(array_merge(
            $request,
            [
                "passenger_car_company_id" => $companyId,
                "ticket_office_id" => $id
            ]
        ));

        $mailData = [
            "nameStaff" => $staff->name,
            "nameCompany" => $staff->passengerCarCompany->name,
            "addressOffice" => $staff->ticketOffice->address,
            "roleName" => $staff->roleUser->name,
            "username" => $request["username"],
            "password" => $password
        ];

        Mail::to($request["email"])->send(new AddStaffMail($mailData));

        return response()->json([
            "message" => "Thêm nhân viên thành công",
            "data" => $staff
        ]);
    }
    public function detroy($id)
    {
        $staff = Account::find($id);
        if (!$staff) {
            return response()->json(["message" => "Không tìm thấy nhân viên có id " . $id], 404);
        }
        $companyId = $this->getCompanyAccountLogin()->id;
        if ($staff->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Bạn không có quyền thao tác liệu này"
            ], 401);
        }
        $staff->delete();
        return response()->json(["message" => "Xoá dữ liệu thành công", "data" => $staff]);
    }
    public function update(EditStaffRequest $request, $id)
    {
        $request = $request->all();
        $staff = Account::find($id);
        $companyId = $this->getCompanyAccountLogin()->id;

        if (!$staff) {
            return response()->json([
                "message" => "Không tìm thấy nhân viên có id " . $id
            ], 404);
        }

        if ($staff->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Bạn không có quyền thao tác liệu này"
            ], 401);
        }
        $existAccount = Account::where("username", $request["username"])->first();
        if ($request["username"] !== $staff->username && $existAccount) {
            return response()->json([
                "message" => "Tài khoản đã tồn tại trên hệ thống"
            ], 422);
        }

        if (!$request["password"]) {
            $request["password"] = $staff->password;
        } else {
            $request["password"] = Hash::make($request["password"]);
        }

        $newStaff = $staff->update([
            "name" => $request["name"],
            "email" => $request["email"],
            "username" => $request["username"],
            "password" => $request["password"],
            "role" => $request["role"]
        ]);

        return response()->json([
            "message" => "Chỉnh sửa dữ liệu thành công",
            "data" => $newStaff
        ]);
    }
}