@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quản lý tuyến
                đường</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('manager.dashboard')}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">Route</li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3" data-select2-id="select2-data-145-829n">
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                data-bs-target="#form_route_add_modal">Thêm tuyến đường</a>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card mb-7">
    <div class="card-body">
        <div class="d-flex flex-wrap flex-stack">
            <div class="d-flex flex-wrap align-items-center my-1">
                <h3 class="fw-bold me-5 my-1">Công ty đang có {{$routes->count()}} tuyến đường</h3>
            </div>
            <div class="d-flex flex-wrap my-1" data-select2-id="select2-data-131-wknw">
                <ul class="nav nav-pills me-6 mb-2 mb-sm-0" role="tablist">
                    <li class="nav-item m-0" role="presentation">
                        <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                            data-bs-toggle="tab" href="#kt_project_users_card_pane" aria-selected="true" role="tab">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                            opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                            opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                            opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item m-0" role="presentation">
                        <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab"
                            href="#route_table" aria-selected="false" role="tab" tabindex="-1">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                        fill="currentColor"></path>
                                    <path opacity="0.3"
                                        d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="d-flex my-0">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-content">
    <div id="kt_project_users_card_pane" class="tab-pane fade active show" role="tabpanel">
        <div class="row g-6 g-xl-9">
            @foreach ($routes as $item)
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                        <div class="fs-4 text-gray-800 text-hover-primary fw-bold d-flex align-items-center">
                            <div
                                class="d-flex flex-column text-center border border-gray-300 border-dashed rounded p-3">
                                <span>{{$item->departureDistrict->name}} </span>
                                <span class="fs-8">({{$item->departureDistrict->province->name}})</span>
                            </div>
                            <span class="mx-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-truck-front" viewBox="0 0 16 16">
                                    <path
                                        d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Z" />
                                    <path fill-rule="evenodd"
                                        d="M4 2a1 1 0 0 0-1 1v3.9c0 .625.562 1.092 1.17.994C5.075 7.747 6.792 7.5 8 7.5c1.208 0 2.925.247 3.83.394A1.008 1.008 0 0 0 13 6.9V3a1 1 0 0 0-1-1H4Zm0 1h8v3.9c0 .002 0 .001 0 0l-.002.004a.013.013 0 0 1-.005.002h-.004C11.088 6.761 9.299 6.5 8 6.5s-3.088.26-3.99.406h-.003a.013.013 0 0 1-.005-.002L4 6.9c0 .001 0 .002 0 0V3Z" />
                                    <path fill-rule="evenodd"
                                        d="M1 2.5A2.5 2.5 0 0 1 3.5 0h9A2.5 2.5 0 0 1 15 2.5v9c0 .818-.393 1.544-1 2v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V14H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2a2.496 2.496 0 0 1-1-2v-9ZM3.5 1A1.5 1.5 0 0 0 2 2.5v9A1.5 1.5 0 0 0 3.5 13h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 12.5 1h-9Z" />
                                </svg>
                            </span>
                            <div
                                class="d-flex flex-column text-center border border-gray-300 border-dashed rounded p-3">
                                <span>{{$item->destinationDistrict->name}}</span>
                                <span class="fs-8">({{$item->destinationDistrict->province->name}})</span>
                            </div>
                        </div>
                        <div class="fw-semibold my-6 badge badge-light">Có {{$item->sameWayRoutes->count()}} tuyến đường
                            chung</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div id="route_table" class="tab-pane fade" role="tabpanel">
        <div class="card card-flush">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <input type="text" data-kt-customer-table-filter="search"
                            class="form-control form-control-solid w-250px ps-15" placeholder="Tìm kiếm tuyền đương">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="table_route">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#table_office .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Điểm đi - Điểm đến</th>
                                <th class="min-w-125px">Địa chỉ đi</th>
                                <th class="min-w-125px">Địa chỉ đến</th>
                                <th class="min-w-125px text-center">Số chuyến</th>
                                <th class="min-w-125px text-center">Đón/trả khách</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach($routes as $item)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <svg class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr" xmlns="http://www.w3.org/2000/svg" width="14" height="44" viewBox="0 0 14 74">
                                            <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46"></path>
                                            <g fill="none" stroke="#25e008" stroke-width="3">
                                                <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                                <circle cx="7" cy="7" r="5.5"></circle>
                                            </g>
                                            <path d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z" fill="#f74455"></path>
                                        </svg>
                                        <div class="ms-2 text-white">
                                            <div class="place mb-2">• {{$item->departureDistrict->name}} - <span>
                                                    {{$item->departureDistrict->province->name}}</span></div>
                                            <div class="place">• {{$item->destinationDistrict->name}} -
                                                <span>{{$item->destinationDistrict->province->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$item->departure_address}}</td>
                                <td>{{$item->destination_address}}</td>
                                <td class="text-center">
                                    <span class="label pulse pulse-success mr-10">
                                        <span class="position-relative">{{$item->trips->count()}}</span>
                                        <span class="pulse-ring"></span>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="label pulse pulse-success mr-10">
                                        <span class="position-relative">{{$item->sameWayRoutes->count()}}</span>
                                        <span class="pulse-ring"></span>
                                    </span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
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
                                            <a href="#" class="menu-link px-3">Xem và cập nhật</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <span data-id="#" class="menu-link px-3" id="office_delete">Delete</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="form_route_add_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div class="modal-content">
            <form class="form" action="#" id="form_route_add_from">
                <div class="modal-header" id="form_route_add_header">
                    <h2>Thêm tuyến đường</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body px-10 px-lg-15 pt-10">
                    <div class="scroll-y me-n7 pe-7">
                        <div class="row g-9 mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2 required">
                                        Điểm khởi hành
                                    </label>
                                    <select name="fromProvince" data-control="select2"
                                        data-dropdown-parent="#form_route_add_modal" data-placeholder="Chọn điểm đi"
                                        class="form-select form-select-solid">
                                        <option value="">Chọn điểm đi</option>
                                        @foreach ($districts as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <div class="d-flex flex-column mb-5 fv-row">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2 required">
                                        Điểm đến
                                    </label>
                                    <select name="toProvince" data-control="select2"
                                        data-dropdown-parent="#form_route_add_modal" data-placeholder="Chọn điểm đếm"
                                        class="form-select form-select-solid">
                                        <option value="">Chọn điểm đến</option>
                                        @foreach ($districts as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-9 mb-5">
                            <div class="col-md-6 fv-row">
                                <label class="fs-5 fw-semibold mb-2 required">Tên địa chỉ khởi hành</label>
                                <input class="form-control form-control-solid" placeholder="Nhập tên địa chỉ khởi hành"
                                    name="name_departure">
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="fs-5 fw-semibold mb-2 required">Tên địa chỉ trả khách</label>
                                <input class="form-control form-control-solid" placeholder="Nhập tên địa chỉ trả khách"
                                    name="name_destination">
                            </div>
                        </div>
                        <div class="row g-9 mb-5">
                            <div class="col-md-6 fv-row">
                                <label class="fs-5 fw-semibold mb-2 required">Địa chỉ điểm đi</label>
                                <input class="form-control form-control-solid" placeholder="Nhập địa chỉ điểm khởi hành"
                                    name="address_departure" autocomplete="off">
                            </div>
                            <div class="col-md-6 fv-row">
                                <label class="fs-5 fw-semibold mb-2 required">Địa chỉ điểm đến</label>
                                <input class="form-control form-control-solid" placeholder="Nhập địa chỉ điểm trả"
                                    name="address_destination" autocomplete="off">
                            </div>
                        </div>
                        <div class="d-flex flex-column mb-5 gap-5">
                            <button type="button" class="btn btn-primary" id="submit_distance">
                                <span class="indicator-label">Đo khoảng cách trên bảng đồ</span>
                                <span class="indicator-progress">Đang đo khoảng cách...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6 d-none"
                                id="information_distance">
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <div class="mb-3 mb-md-0 fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Thông tin tuyến đường</h4>
                                        <div class="fs-6 pe-7">Điểm đi: <span id="map_start"
                                                class="text-gray-700"></span></div>
                                        <div class="fs-6 pe-7">Điểm đến: <span id="map_end"
                                                class="text-gray-700"></span></div>
                                        <div class="fs-6 pe-7">Khoảng cách: <span id="map_distance"
                                                class="text-gray-700"></span></div>
                                        <div class="fs-6 pe-7">Dự kiến: <span id="map_expected"
                                                class="text-gray-700"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div id="map_departure" class="d-none"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="form_route_add_cancel" class="btn btn-light me-3">Discard</button>
                    <button type="submit" id="form_route_add_submit" class="btn btn-primary">
                        <span class="indicator-label">Thêm tuyến đường</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('admin/assets/app/js/Route/route.js')}}" defer></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2bZb6EHli1AOxjTFhnFVooNO-zBMutTU&callback=initMap&libraries=places&v=weekly"
    defer></script>
@endsection