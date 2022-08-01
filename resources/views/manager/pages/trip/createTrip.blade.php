@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Thêm chuyến
                xe</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('manager.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">trip</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">create</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card card-flush py-4">
    <form id="form_add_trip" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        <div class="card-body pt-7">
            <div class="mb-5 fv-row fv-plugins-icon-container">
                <label class="required form-label">Chọn tuyến đường</label>
                <select name="country" aria-label="Chọn tuyến đường" data-control="select2"
                    data-placeholder="Chọn tuyến đường..." class="form-select fw-semibold">
                    <option value="">Chọn tuyến đường...</option>
                    @foreach ($routes as $item)
                    <option value="{{$item->id}}">{{$item->departureDistrict->name}} -
                        {{$item->destinationDistrict->name}}</option>
                    @endforeach
                </select>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-6 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Thời gian khởi hành</label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                    fill="currentColor" />
                                <path
                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <input class="form-control ps-12" placeholder="Select a date" name="due_date" />
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-xl-6 fv-row fv-plugins-icon-container">
                    <label class="required form-label">Thời gian dự kiến</label>
                    <div class="position-relative d-flex align-items-center">
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                    fill="currentColor" />
                                <path
                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                    fill="currentColor" />
                                <path
                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <input class="form-control ps-12" placeholder="Select a date" name="due_date" />
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>
            <div class="mb-5 fv-row fv-plugins-icon-container">
                <label class="required form-label">Base Price</label>
                <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="">
                <div class="text-muted fs-7">Set the product price.</div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="fv-row mb-5">
                <label class="fs-6 fw-semibold mb-2">Giảm giá</label>
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true"
                    data-kt-buttons-target="[data-kt-button='true']" data-kt-initialized="1">
                    <div class="col">
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 active"
                            data-kt-button="true">
                            <span
                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="discount_option" value="1"
                                    checked="checked">
                            </span>
                            <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                            </span>
                        </label>
                    </div>
                    <div class="col">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                            data-kt-button="true">
                            <span
                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="discount_option" value="2">
                            </span>
                            <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                            </span>
                        </label>
                    </div>
                    <div class="col">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                            data-kt-button="true">
                            <span
                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="discount_option" value="3">
                            </span>
                            <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-5 fv-row d-none" id="kt_ecommerce_add_product_discount_percentage">
                <label class="form-label">Set Discount Percentage</label>
                <div class="d-flex flex-column text-center mb-5">
                    <div class="d-flex align-items-start justify-content-center mb-7">
                        <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">44</span>
                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                    </div>
                    <div id="kt_ecommerce_add_product_discount_slider"
                        class="noUi-sm noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                        <div class="noUi-base">
                            <div class="noUi-connects"></div>
                            <div class="noUi-origin" style="transform: translate(-56.7319%, 0px); z-index: 4;">
                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider"
                                    aria-orientation="horizontal" aria-valuemin="1.0" aria-valuemax="100.0"
                                    aria-valuenow="43.8" aria-valuetext="43.84">
                                    <div class="noUi-touch-area"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
            </div>
            <div class="mb-5 fv-row d-none" id="kt_ecommerce_add_product_discount_fixed">
                <label class="form-label">Fixed Discounted Price</label>
                <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price">
                <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the
                    determined
                    fixed price</div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="" data-kt-ecommerce-catalog-add-driver="auto-options">
                        <label class="required form-label">Tài xế</label>
                        <div id="add_driver_options">
                            <div class="form-group">
                                <div data-repeater-list="add_driver_options"
                                    class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex align-items-center gap-5">
                                        <select name="driver_option" aria-label="Chọn tài xế" data-control="select2"
                                            data-placeholder="Chọn tài xế..." class="form-select fw-semibold" data-kt-ecommerce-catalog-add-driver="driver_option">
                                            <option value="">Chọn tài xế...</option>
                                            @foreach ($drivers as $item)
                                            <option value="{{$item}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="button" data-repeater-delete=""
                                            class="btn btn-sm btn-icon btn-light-danger">
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2"
                                                        rx="1" transform="rotate(-45 7.05025 15.5356)"
                                                        fill="currentColor" />
                                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                                        transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="currentColor" />
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Thêm tài xế</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                        <label class="required form-label">Phụ xe</label>
                        <div id="add_assistant">
                            <div class="form-group">
                                <div data-repeater-list="add_assistant"
                                    class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex align-items-center gap-5">
                                        <select name="assistant_driver" aria-label="Chọn phụ xe" data-control="select2"
                                            data-placeholder="Chọn phụ xe..." class="form-select fw-semibold" data-kt-ecommerce-catalog-add-assistant-driver="assistant_option">
                                            <option value="">Chọn phụ xe...</option>
                                            @foreach ($assistantDrivers as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <button type="button" data-repeater-delete=""
                                            class="btn btn-sm btn-icon btn-light-danger">
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2"
                                                        rx="1" transform="rotate(-45 7.05025 15.5356)"
                                                        fill="currentColor" />
                                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                                        transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-5">
                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="currentColor" />
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    Thêm phụ xe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" id="form_add_trip_submit" class="btn btn-primary">
                    <span class="indicator-label">Thêm chuyến</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
<script src="{{asset('admin/assets/app/js/Trip/createTrip.js')}}"></script>
@endsection