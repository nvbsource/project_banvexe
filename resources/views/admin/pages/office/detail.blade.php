@extends("admin.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Chi tiết văn
                phòng - {{$office->name}}</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">office</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">detail</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content") <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <div class="card-header cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Chi tiết văn phòng - {{$office->id}}</h3>
        </div>
        <a href="#" class="btn btn-primary align-self-center" data-bs-toggle="modal"
            data-bs-target="#form_edit_office_modal">Chỉnh sửa
            văn phòng</a>
    </div>
    <div class="card-body p-9">
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Tên văn phòng</label>
            <div class="col-lg-8">
                <span class="fw-bold fs-6 text-gray-800">{{$office->name}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Địa chỉ</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$office->address}} <a href="#" class="badge badge-light-success fs-7 fw-bold"  data-bs-toggle="modal"
                    data-bs-target="#form_maps">Xem vị trí trên bản đồ <i class="bi bi-geo-alt text-white"></i></a></span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Công ty</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$office->passengerCarCompany->name}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số lượng nhân viên</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$staffs->count()}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số điện thoại chính</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$office->phone_official}}</span>
            </div>
        </div>
        <div class="row mb-7">
            <label class="col-lg-4 fw-semibold text-muted">Số điện thoại phụ</label>
            <div class="col-lg-8 fv-row">
                <span class="fw-semibold text-gray-800 fs-6">{{$office->phone_reserved}}</span>
            </div>
        </div>
        @if($staffs->count() <= 0) <div
            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
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
                    <h4 class="text-gray-900 fw-bold">Hiện tại văn phòng chưa có nhân viên nào!</h4>
                    <div class="fs-6 text-gray-700">Vui lòng tuyển thêm nhân viên</div>
                </div>
            </div>
    </div>
    @endif
</div>
</div>
<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Nhân viên</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Hiện tại văn phòng đang có <span
                    class="badge badge-light-success fs-7 fw-bold">{{$staffs->count()}}</span> nhân viên </span>
        </h3>
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                data-bs-target="#form_add_staff_modal">
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                            transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </span> Thêm nhân viên </a>
        </div>
    </div>
    <div class="card-body py-3">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_staffs">
            <thead>
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                data-kt-check-target="#table_staffs .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Tên nhân viên</th>
                    <th class="min-w-125px">Tài khoản</th>
                    <th class="min-w-125px">Chức vụ</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold"> @foreach($staffs as $item) <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->roleUser->name}}</td>
                    <td class="text-end">
                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">Actions <span class="svg-icon svg-icon-5 m-0">
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
                                <span class="menu-link px-3" data-staff="{{$item}}" id="staff_edit">Edit</span>
                            </div>
                            <div class="menu-item px-3">
                                <span data-id="{{$item->id}}" class="menu-link px-3" id="staff_delete">Delete</span>
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
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                    <input type="hidden" name="id" value="{{$office->id}}">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Chỉnh sửa văn phòng - {{$office->id}}</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tên văn phòng</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                aria-label="Specify a target name for future usage and reference"
                                data-kt-initialized="1"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập tên văn phòng"
                            name="name" value="{{$office->name}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Địa chỉ</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                aria-label="Specify a target name for future usage and reference"
                                data-kt-initialized="1"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập địa chỉ văn phòng"
                            name="address" value="{{$office->address}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số điện thoại chính</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Specify a target name for future usage and reference"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Số điện thoại chính" name="phone_official"
                                    value="{{$office->phone_official}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Số điện thoại phụ</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Specify a target name for future usage and reference"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Số điện thoại phụ" name="phone_reserved"
                                    value="{{$office->phone_reserved}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
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
<div class="modal fade" id="form_add_staff_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="form_add_staff" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    <input type="hidden" name="id" value="{{$office->id}}">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3" id="form-title">Thêm nhân viên cho văn phòng - {{$office->id}}</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tên nhân viên</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập tên nhân viên"
                            name="name">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Tài khoản</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập tài khoản"
                                    name="username">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Mật khẩu</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập mật khẩu"
                                    name="password">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Địa chỉ email</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập địa chỉ địa chỉ email"
                            name="email">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="required fs-6 fw-semibold mb-2">Loại nhân viên
                        </label>
                            <select class="form-select form-select-solid" data-hide-search="true" data-placeholder="Chọn loại nhân viên" name="role">
                                <option value="">Chọn loại nhân viên</option>
                                @foreach ($roles as $item)
                                    <option value="{{$item->role}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="form_add_staff_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="form_add_staff_submit" class="btn btn-primary">
                            <span class="indicator-label">Thêm nhân viên</span>
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
<div class="modal fade" id="form_edit_staff_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="form_edit_staff" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    <input type="hidden" name="id">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Chỉnh sửa nhân viên - <span id="name"></span></h1>
                    </div>
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Lưu ý</h4>
                                <div class="fs-6 text-gray-700">Bỏ qua mật khẩu nếu bạn muốn dùng mật khẩu cũ</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tên nhân viên</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập tên nhân viên"
                            name="name">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Tài khoản</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập tài khoản"
                                    name="username">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Mật khẩu</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nhập mật khẩu"
                                    name="password">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Địa chỉ email</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập địa chỉ địa chỉ email"
                            name="email">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="required fs-6 fw-semibold mb-2">Loại nhân viên
                        </label>
                            <select class="form-select form-select-solid" data-hide-search="true" data-placeholder="Chọn loại nhân viên" name="role">
                                <option value="">Chọn loại nhân viên</option>
                                @foreach ($roles as $item)
                                    <option value="{{$item->role}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="form_edit_staff_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="form_edit_staff_submit" class="btn btn-primary">
                            <span class="indicator-label">Sửa nhân viên</span>
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
<div class="modal fade" id="form_maps" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y p-0">
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Vị trí trên bản đồ <i class="bi bi-geo-alt-fill text-white fs-2"></i>
                    </h1>
                    <p><b>Địa chỉ:</b> {{$office->address}}</p>
                </div>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="{{asset('admin/assets/app/js/office/detailOffice.js')}}"></script>
<script>
    let map;
    let marker;
    let geocoder;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
        });
        geocoder = new google.maps.Geocoder();
        marker = new google.maps.Marker();
        geocode({ address: `{{$office->address}}` })
    }

    function geocode(request) {
        geocoder
            .geocode(request)
            .then((result) => {
                const { results } = result;
                map.setCenter(results[0].geometry.location);
                marker.setPosition(results[0].geometry.location);
                marker.setMap(map);
                return results;
            })
    }

    window.initMap = initMap;
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2bZb6EHli1AOxjTFhnFVooNO-zBMutTU&callback=initMap&v=weekly"
    defer></script>
@endsection