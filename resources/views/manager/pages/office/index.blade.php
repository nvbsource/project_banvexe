@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quản lý văn
                phòng</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('manager.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">office</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Văn phòng</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Hiện tại công ty đang có <span
                    class="badge badge-light-success fs-7 fw-bold">{{$offices->count()}}</span> văn phòng</span>
        </h3>
        <div class="card-toolbar">
            <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                data-bs-target="#form_add_office_modal">
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                            transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                    </svg>
                </span>
                Thêm văn phòng</a>
        </div>
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
                    <th class="min-w-125px">Tên văn phòng</th>
                    <th class="min-w-125px">Địa chỉ</th>
                    <th class="min-w-125px">Số điện thoại</th>
                    <th class="min-w-125px">Số lượng nhân viên</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-semibold">
                @foreach($offices as $item)
                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>{{$item->address}}</td>
                    <td class="d-flex flex-column gap-2">
                        <span class="badge badge-light fw-bold">
                            <i class="bi bi-telephone me-3"></i>
                            {{$item->phone_official}}
                        </span>
                        <span class="badge badge-light fw-bold">
                            <i class="bi bi-telephone me-3"></i>
                            {{$item->phone_reserved}}
                        </span>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-light-primary fw-bold">{{$item->accounts->count()}}</span>
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
                                <a href="{{route('manager.viewOffice', $item->id)}}"
                                    class="menu-link px-3">Xem và cập nhật</a>
                            </div>
                            <div class="menu-item px-3">
                                <span data-id="{{$item->id}}" class="menu-link px-3" id="office_delete">Delete</span>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="form_add_office_modal" tabindex="-1" aria-hidden="true">
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
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Thêm văn phòng mới</h1>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tên văn phòng</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                aria-label="Specify a target name for future usage and reference"
                                data-kt-initialized="1"></i>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Nhập tên văn phòng"
                            name="name">
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
                            name="address">
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
                                <input type="text" class="form-control form-control-solid" placeholder="Số điện thoại chính"
                                    name="phone_official">
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
                                <input type="text" class="form-control form-control-solid" placeholder="Số điện thoại phụ"
                                    name="phone_reserved">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" id="form_add_office_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="form_add_office_submit" class="btn btn-primary">
                            <span class="indicator-label">Thêm mới</span>
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
<script src="{{asset('admin/assets/app/js/Office/office.js')}}"></script>
@endsection