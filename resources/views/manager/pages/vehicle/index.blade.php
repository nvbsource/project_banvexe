@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quản lý xe khách</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('manager.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">vehicle</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Danh sách xe khách</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Hiện tại công ty đang có <span
                    class="badge badge-light-success fs-7 fw-bold">{{$vehicles->count()}}</span> xe khách</span>
        </h3>
        <div class="card-toolbar">
            <a href="{{route('manager.createVehicle')}}" class="btn btn-sm btn-light-primary">
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                            transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </span>
                Thêm xe khách</a>
        </div>
    </div>
    <div class="card-body py-3">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_vehicle">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                data-kt-check-target="#table_vehicle .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Tên xe khách</th>
                    <th class="min-w-125px">Biển số xe</th>
                    <th class="min-w-125px text-center">Số ghế</th>
                    <th class="min-w-125px">Loại xe</th>
                    <th class="min-w-125px">Nhà xe</th>
                    <th class="min-w-125px text-center">Số chuyến</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @foreach ($vehicles as $vehicle)
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->licensePlates}}</td>
                    <td class="text-center">
                        <span class="label pulse pulse-success mr-10">
                            <span class="position-relative">{{$vehicle->countSeat}}</span>
                            <span class="pulse-ring"></span>
                        </span>
                    </td>
                    <td>{{$vehicle->rangeOfVehicle->type}}</td>
                    <td>{{$vehicle->passengerCarCompany->name}}</td>
                    <td class="text-center">
                        <span class="label pulse pulse-success mr-10">
                            <span class="position-relative">{{$vehicle->trips->count()}}</span>
                            <span class="pulse-ring"></span>
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <a href="{{route("manager.detailVehicle", $vehicle->id)}}"
                                    class="menu-link px-3">Xem và cập nhật</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('admin/assets/app/js/Vehicle/vehicle.js')}}"></script>
@endsection