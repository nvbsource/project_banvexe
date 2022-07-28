<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddStaffRequest;
use App\Mail\NotifyMail;
use App\Models\TicketOffice;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    public function addStaff(AddStaffRequest $request, $id)
    {
        $ticketOffice = TicketOffice::find($id);
        if (!$ticketOffice) {
            return response()->json(["message" => "Không tìm thấy văn phòng có id " . $id], 404);
        }
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        if ($ticketOffice->passengerCarCompany->id !== $passengerCarCompany) {
            return response()->json(["message" => "Bạn không có quyền thao tác liệu này"], 401);
        }
        $request = $request->all();
        $password = $request["password"];
        $request["password"] = Hash::make($request['password']);
        $staff = Account::create(array_merge($request, ["passenger_car_company_id" => $passengerCarCompany, "ticket_office_id" => $id]));
        $mailData = [
            "nameStaff" => $staff->name,
            "nameCompany" => $staff->passengerCarCompany->name,
            "addressOffice" => $staff->ticketOffice->address,
            "roleName" => $staff->roleUser->name,
            "username" => $request["username"],
            "password" => $password
        ];
        Mail::to($request["email"])->send(new NotifyMail($mailData));
        return response()->json(["message" => "Thêm nhân viên thành công", "data" => $staff]);
    }
    public function detroyStaff($id)
    {
        $staff = Account::find($id);
        if (!$staff) {
            return response()->json(["message" => "Không tìm thấy nhân viên có id " . $id], 404);
        }
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        if ($staff->passengerCarCompany->id !== $passengerCarCompany) {
            return response()->json(["message" => "Bạn không có quyền thao tác liệu này"], 401);
        }
        $staff->delete();
        return response()->json(["message" => "Xoá dữ liệu thành công", "data" => $staff]);
    }
}