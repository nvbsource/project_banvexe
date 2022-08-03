<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\TicketOfficeRequest;
use App\Models\Account;
use App\Models\Role;
use App\Models\TicketOffice;
use App\Traits\FunctionTrait;


class OfficeController extends Controller
{
    use FunctionTrait;
    public function viewList()
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $offices = TicketOffice::where("passenger_car_company_id",  $companyId)->orderByDesc("id")->get();
        return view('manager.pages.office.index', compact('offices'));
    }
    public function viewDetail($id)
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $office = TicketOffice::where([
            "id" => $id,
            "passenger_car_company_id" => $companyId
        ])->first();
        if (!$office) {
            abort(404);
        }
        $staffs = Account::where([
            "ticket_office_id" => $id,
            "passenger_car_company_id" => $companyId
        ])->orderByDesc("id")->get();
        $roles = Role::all();
        return view('manager.pages.office.detail', compact('staffs', 'office', 'roles'));
    }
    public function create(TicketOfficeRequest $request)
    {
        $companyId = $this->getCompanyAccountLogin()->id;
        $office = TicketOffice::create(array_merge(
            $request->all(),
            [
                "passenger_car_company_id" => $companyId
            ]
        ));

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
            return response()->json([
                "message" => "Không tìm thấy văn phòng có id " . $id
            ], 404);
        }
        if ($ticketOffice->accounts->count() > 0) {
            return response()->json([
                "message" => "Không thể xoá văn phòng khi đã có nhân viên"
            ], 422);
        }
        $companyId = $this->getCompanyAccountLogin()->id;
        if ($ticketOffice->passengerCarCompany->id !== $companyId) {
            return response()->json([
                "message" => "Bạn không có quyền chỉnh sửa dữ liệu này"
            ], 401);
        }
        $ticketOffice->delete();
        return response()->json([
            "message" => "Xoá văn phòng thành công",
            "data" => $ticketOffice
        ]);
    }


    public function update(TicketOfficeRequest $request, $id)
    {
        $ticketOffice = TicketOffice::find($id);
        if (!$ticketOffice) {
            return response()->json(["message" => "Không tìm thấy văn phòng có id " . $id], 404);
        }
        $companyId = $this->getCompanyAccountLogin()->id;
        if ($ticketOffice->passengerCarCompany->id !== $companyId) {
            return response()->json(["message" => "Bạn không có quyền chỉnh sửa dữ liệu này"], 401);
        }
        $ticketOffice->update($request->all());
        return response()->json([
            "message" => "Chỉnh sửa thông tin văn phòng thành công",
            "data" => $ticketOffice
        ]);
    }
}