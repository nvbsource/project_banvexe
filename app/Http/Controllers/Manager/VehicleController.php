<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\CreateVehicleRequest;
use App\Http\Requests\UploadImageVehicleRequest;
use App\Models\PicturesVehicle;
use App\Models\RangeOfVehicle;
use App\Models\Seat;
use App\Models\Vehicle;
use App\Traits\FunctionTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VehicleController extends Controller
{
    use FunctionTrait;
    public function viewList()
    {
        $passengerCarCompany = Auth::guard('admin')->user()->passengerCarCompany->id;
        $vehicles = Vehicle::where("passenger_car_company_id", $passengerCarCompany)->get();
        return view('manager.pages.vehicle.index', compact('vehicles'));
    }
    public function detail($id)
    {
        $vehicle = Vehicle::find($id);
        $rangeOfVehicles = RangeOfVehicle::all();
        return view('manager.pages.vehicle.detail', compact('vehicle','rangeOfVehicles'));
    }
    public function viewCreate(){
        $rangeOfVehicles = RangeOfVehicle::all();
        return view("manager.pages.vehicle.create", compact('rangeOfVehicles'));
    }
    public function viewUpload($id){
        $vehicle = Vehicle::where([
            "id" => $id,
            "passenger_car_company_id" => $this->getCompanyAccountLogin()->id
        ])->first();
        if (!$vehicle) {
            abort(404);
        }
        $pictures = PicturesVehicle::where("vehicle_id", $id)->get();
        return view("manager.pages.vehicle.upload", compact('pictures', 'id'));
    }
    public function uploadImage(UploadImageVehicleRequest $request, $id){
        $vehicle = Vehicle::find($id);
        if ($vehicle->passengerCarCompany->id !== $this->getCompanyAccountLogin()->id) {
            return response()->json(["message" => "Bạn không có quyền thao tác dữ liệu này"], 401);
        }
        $file = $request->file('file');
        if ($file) {
            $filename = time() ."_".rand(). "." . $file->getClientOriginalExtension();
            $path = 'admin/images/vehicle/'. $id;
            $file->move(public_path($path), $filename);
            $picture = PicturesVehicle::create([
                "path" => $path.'/'.$filename,
                "vehicle_id" => $id
            ]);
            return response()->json([
                "message" => "Tải hình ảnh lên thành công",
                "data" => $picture
            ]);
        }
    }
    public function deleteImage(Request $request, $id){
        $picture = PicturesVehicle::find($id);
        if ($picture->vehicle->passengerCarCompany->id !== $this->getCompanyAccountLogin()->id) {
            return response()->json(["message" => "Bạn không có quyền thao tác dữ liệu này"], 401);
        }
        $picture->delete();
        if(File::exists($picture->path)){
            unlink($picture->path);
        }
        return response()->json([
            "message" => "Xoá ảnh thành công"
        ]);
    }
    public function create(CreateVehicleRequest $request){
        $vehicle = Vehicle::create(array_merge($request->all(), ["passenger_car_company_id" => $this->getCompanyAccountLogin()->id]));
        for ($i = 1; $i <= $vehicle->countSeat; $i++) {
            Seat::create([
                'name' => "G" . $i,
                'vehicle_id' => $vehicle->id
            ]);
        }
        return response()->json([
            "message" => "Thêm xe mới thành công",
            "data" => $vehicle
        ]);
    }
    public function update(CreateVehicleRequest $request, $id){
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(["message" => "Không tìm thấy văn phòng có id " . $id], 404);
        }

        $companyId = $this->getCompanyAccountLogin()->id;
        if ($vehicle->passengerCarCompany->id !== $companyId) {
            return response()->json(["message" => "Bạn không có quyền chỉnh sửa dữ liệu này"], 401);
        }

        $vehicle->update($request->all());
        return response()->json([
            "message" => "Chỉnh sửa thông tin xe khách thành công",
            "data" => $vehicle
        ]);
    }
}