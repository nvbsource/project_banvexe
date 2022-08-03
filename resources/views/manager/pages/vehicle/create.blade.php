@extends("manager.layout.index") @section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Thêm xe khách
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('manager.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">vehicle</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">Create</li>
            </ul>
        </div>
    </div>
</div>
@endsection @section("content")
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Thêm xe mới</h3>
        </div>
    </div>
    <div id="kt_account_settings_profile_details" class="collapse show">
        <form id="form_create_vehicle" class="form fv-plugins-bootstrap5 fv-plugins-framework"
            novalidate="novalidate">
            <div class="card-body border-top p-9">
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Tên xe</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Nhập tên xe..."
                        name="name" />
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Biến số xe</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Nhập Biến số xe..."
                        name="licensePlates" />
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Số ghế</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" placeholder="Nhập số ghế..."
                                name="countSeat" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Số tầng</span>
                            </label>
                            <input type="number" value="2" class="form-control form-control-solid" placeholder="Nhập số tầng..."
                                name="countFloor"/>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Số lượng ghế chiều dọc</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" placeholder="Nhập số ghế theo chiều dọc..."
                                name="countColumn" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Số lượng ghế chiều ngang</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" placeholder="Nhập số lượng ghế theo chiều ngang..."
                                name="countRow" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Chọn loại xe</span>
                    </label>
                    <select name="rangeOfVehicle" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Chọn loại xe">
                        <option value="">Chọn loại xe</option>
                        @foreach($rangeOfVehicles as $item)
                            <option value="{{$item->id}}">{{$item->type}}</option>
                        @endforeach
                    </select>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">
                    Discard
                </button>
                <button type="submit" class="btn btn-primary" id="form_create_vehicle_submit">
                    Save Changes
                </button>
            </div>
            <input type="hidden" />
            <div id="preview-template" class="d-none"></div>
        </form>
    </div>
</div>
@endsection @section('scripts')
<script src="{{
        asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')
    }}"></script>
<script src="{{ asset('admin/assets/app/js/Vehicle/createVehicle.js') }}"></script>
@endsection