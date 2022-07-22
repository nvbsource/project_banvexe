@extends("admin.layout.index")
@section("toolbar")
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Thêm chuyến doanh nghiệp mới
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Administrator</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">Passengenr Car Company</li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-dark">Create</li>
        </ul>
</div>
@endsection
@section("content")
<div class="card mb-5 mb-xl-10">
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#create_passengerCarCompany" aria-expanded="true" aria-controls="create_passengerCarCompany">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Nhập thông tin doanh nghiệp</h3>
        </div>
    </div>
    <div id="create_passengerCarCompany" class="collapse show">
        <form id="form_create_company" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            <div class="card-body border-top p-9">
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Tên công ty</label>
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="name" id="name"
                            class="form-control form-control-lg form-control-solid" placeholder="Tên công ty">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Số điện thoại</span>
                    </label>
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="phone" id="phone"
                            class="form-control form-control-lg form-control-solid" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Mã số thuế</span>
                    </label>
                    <div class="col-lg-8 fv-row">
                        <input type="number" name="numberLicense" id="numberLicense"
                            class="form-control form-control-lg form-control-solid" placeholder="Mã số thuế">
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Hình ảnh giấy phép kinh doanh</label>
                    <div class="col-lg-8">
                        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{asset('administrator/assets/media/avatars/blank.png')}})">
                            <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change image">
                                <i class="bi bi-pencil-fill fs-7"></i>
                                <input type="file" name="imageLicense" accept=".png, .jpg, .jpeg">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                <i class="bi bi-x fs-2"></i>
                            </span>
                        </div>
                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="button" id="create_reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                <button type="submit" class="btn btn-primary" id="create_submit">
                    <span class="indicator-label">Tạo doanh nghiệp</span>
                    <span class="indicator-progress">Đang tạo doanh nghiệp...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('administrator/assets/app/js/PassengerCarCompany/createPassengerCarCompany.js')}}"></script>
@endsection