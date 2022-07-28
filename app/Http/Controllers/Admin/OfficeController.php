<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddStaffRequest;
use App\Http\Requests\TicketOfficeRequest;
use App\Mail\NotifyMail;
use App\Models\Account;
use App\Models\Role;
use App\Models\TicketOffice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class OfficeController extends Controller
{
    public function viewList()
    {
        $passengerCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $offices = TicketOffice::where("passenger_car_company_id",  $passengerCompany)->orderByDesc("id")->get();
        return view('admin.pages.office.index', compact('offices'));
    }
    public function viewDetail($id)
    {
        $passengerCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $office = TicketOffice::find($id);
        if (!$office) {
            abort(404);
        }
        $staffs = Account::where([
            "ticket_office_id" => $id,
            "passenger_car_company_id" => $passengerCompany
        ])->orderByDesc("id")->get();
        $roles = Role::all();
        return view('admin.pages.office.detail', compact('staffs', 'office', 'roles'));
    }
    public function create(TicketOfficeRequest $request)
    {
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $office = TicketOffice::create(array_merge($request->all(), ["passenger_car_company_id" => $passengerCarCompany]));

        return response()->json([
            "message" => "Thêm văn phòng thành công",
            "data" => $office->makeHidden([
                'passenger_car_company_id',
                'created_at',
                'updated_at'
            ])
        ]);
    }
    public function detroy($id)
    {
        $ticketOffice = TicketOffice::find($id);
        if (!$ticketOffice) {
            return response()->json(["message" => "Không tìm thấy văn phòng có id " . $id], 404);
        }
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        if ($ticketOffice->passengerCarCompany->id !== $passengerCarCompany) {
            return response()->json(["message" => "Bạn không có quyền chỉnh sửa dữ liệu này"], 401);
        }
        $ticketOffice->delete();
        return response()->json(["message" => "Xoá dữ liệu thành công", "data" => $ticketOffice]);
    }


    public function update(TicketOfficeRequest $request, $id)
    {
        $ticketOffice = TicketOffice::find($id);
        if (!$ticketOffice) {
            return response()->json(["message" => "Không tìm thấy văn phòng có id " . $id], 404);
        }
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        if ($ticketOffice->passengerCarCompany->id !== $passengerCarCompany) {
            return response()->json(["message" => "Bạn không có quyền chỉnh sửa dữ liệu này"], 401);
        }
        $ticketOffice->update($request->all());
        return response()->json([
            "message" => "Chỉnh sửa thông tin văn phòng thành công",
            "data" => $ticketOffice
        ]);
    }
}