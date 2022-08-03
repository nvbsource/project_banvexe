@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Chi tiết văn
                xe khách - {{$vehicle->name}}</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('manager.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">vehicle</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">detail</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Chi tiết xe khách - {{$vehicle->id}}</h3>
        </div>
        <a href="#" class="btn btn-primary align-self-center" data-bs-toggle="modal"
            data-bs-target="#form_edit_office_modal">Chỉnh sửa
            Xe khách</a>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Tên xe</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{$vehicle->name}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Biển số xe</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->licensePlates}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số lượng ghế</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->countSeat}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số tầng</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->countFloor}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số lượng ghế theo chiều dọc</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->numColumn}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số lượng ghế theo chiều ngang</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->numRow}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Loại xe</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$vehicle->rangeOfVehicle->type}}</span>
            </div>
        </div>
        @if($vehicle->trips->count() <= 0) 
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-7">
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor">
                        </rect>
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor">
                        </rect>
                    </svg>
                </span>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Hiện tại xe chưa có chuyến đi nào!</h4>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            @foreach($vehicle->pictures as $item)
                <div class="col-12 col-sm-4 col-md-2 pb-7">
                    <div class="vehicle__image--item rounded-3 h-200px">
                        <img src="{{asset($item->path)}}" alt="" class="h-100">
                    </div>
                </div>
        @endforeach
        </div>
    </div>
</div>
<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Danh sách chuyến đi</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Số chuyến đã chạy <span
                    class="badge badge-light-success fs-7 fw-bold">{{$vehicle->trips->count()}}</span></span>
        </h3>
   
    </div>
    <div class="card-body py-3">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_office">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                data-kt-check-target="#table_office .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Điểm đi - Điểm đến</th>
                    <th class="min-w-125px">Ngày bắt đầu</th>
                    <th class="min-w-125px">Giá vé</th>
                    <th class="min-w-125px">Xe khách</th>
                    <th class="min-w-125px">Trạng thái</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @foreach ($vehicle->trips as $item)
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <svg class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                xmlns="http://www.w3.org/2000/svg" width="14" height="44" viewBox="0 0 14 74">
                                <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2"
                                    stroke-dasharray="0 7" d="M7 13.5v46"></path>
                                <g fill="none" stroke="#484848" stroke-width="3">
                                    <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                    <circle cx="7" cy="7" r="5.5"></circle>
                                </g>
                                <path
                                    d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                    fill="#787878"></path>
                            </svg>
                            <div class="ms-2">
                                <div class="place mb-2">• {{$item->route->departureDistrict->name}} - <span>
                                        {{$item->route->destinationDistrict->province->name}}</span></div>
                                <div class="place">• {{$item->route->departureDistrict->name}} -
                                    <span>{{$item->route->destinationDistrict->province->name}}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{$item->start_date}}</td>
                    <td><span class="badge badge-dark">{{number_format($item->price)}}<sup>vnđ</sup></span></td>
                    <td>{{$item->vehicle->name}}</td>
                    <td>
                        @if ($item->status === "pending")
                        <span class="badge badge-light-warning">Chưa mở bán</span>
                        @elseif($item->status === "runing")
                        <span class="badge badge-light-info">Đang chạy</span>
                        @elseif($item->status === "completed")
                        <span class="badge badge-light-success">Đã hoàn thành</span>
                        @elseif($item->status === "active")
                        <span class="badge badge-light-dark">Đang bán</span>
                        @endif
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
                                <a href="#"
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
<div class="modal fade" id="form_edit_office_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor"></rect>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="form_office" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    <input type="hidden" name="id" value="{{$vehicle->id}}">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Chỉnh sửa xe khách - {{$vehicle->id}}</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tên xe</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập tên xe"
                            name="name" value="{{$vehicle->name}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Biển số xe</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập biển số xe"
                            name="licensePlates" value="{{$vehicle->licensePlates}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số lượng ghế</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập số lượng ghế"
                                    name="countSeat" value="{{$vehicle->countSeat}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số tầng</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập số tầng"
                                    name="countFloor" value="{{$vehicle->countSeat}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số lượng ghế theo chiều dọc</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập số lượng ghế theo chiều dọc"
                                    name="numColumn" value="{{$vehicle->numColumn}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số lượng ghế theo chiều ngang</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập số lượng ghế theo chiều ngang"
                                    name="numRow" value="{{$vehicle->numRow}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Loại xe</span>
                        </label>
                        <select name="rangeOfVehicle" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Chọn loại xe">
                            <option value="">Chọn loại xe</option>
                            @foreach($rangeOfVehicles as $item)
                                <option value="{{$item->id}}">{{$item->type}}</option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="form_edit_office_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="form_edit_office_submit" class="btn btn-primary">
                            <span class="indicator-label">Chỉnh sửa</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <div></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endsection