@extends("admin.layout.index")
@section("toolbar")
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Danh sách các chuyến xe
        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
            <li class="breadcrumb-item text-muted">
                <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Administrator</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">Trip</li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-dark">List</li>
        </ul>
</div>
@endsection
@section("content")
<!--begin::Card-->
<div class="card">
    <div class="card-header border-0 pt-6">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black" />
                    </svg>
                </span>
                <input type="text" data-kt-customer-table-filter="search"
                    class="form-control form-control-solid w-250px ps-15" placeholder="Tìm kiếm chuyến xe" />
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end">
                <a href="{{route('createTrip')}}" class="btn btn-primary">Thêm chuyến xe mới</a>
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="table-list">
            <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">#ID</th>
                    <th class="min-w-125px">Điểm đi - Điểm đến</th>
                    <th class="min-w-125px">Ngày bắt đầu</th>
                    <th class="min-w-125px">Giá vé</th>
                    <th class="min-w-125px">Xe khách</th>
                    <th class="min-w-125px">Trạng thái</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-bold text-gray-600">
                @foreach ($trips as $trip)
                <tr>
                    <td>#{{$trip->id}}</td>
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
                                <div class="place mb-2">• {{$trip->fromDistrict->name}} - <span>
                                        {{$trip->fromDistrict->province->name}}</span></div>
                                <div class="place">• {{$trip->toDistrict->name}} -
                                    <span>{{$trip->toDistrict->province->name}}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{$trip->start_date}}</td>
                    <td><span class="badge badge-dark">{{number_format($trip->price)}}<sup>vnđ</sup></span></td>
                    <td>{{$trip->vehicle->name}}</td>
                    <td>
                        @if ($trip->status === "pending")
                        <span class="badge badge-light-warning">Chưa mở bán</span>
                        @elseif($trip->status === "runing")
                        <span class="badge badge-light-info">Đang chạy</span>
                        @elseif($trip->status === "completed")
                        <span class="badge badge-light-success">Đã hoàn thành</span>
                        @elseif($trip->status === "active")
                        <span class="badge badge-light-dark">Đang bán</span>
                        @endif
                    </td>

                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">Actions
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <div class="menu-item px-3">
                                    <a href="../../demo1/dist/apps/customers/view.html" class="menu-link px-3">View</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                        data-kt-customer-table-filter="delete_row">Delete</a>
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
<script src="{{asset('administrator/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('administrator/assets/app/js/tableList/tableList.js')}}"></script>
@endsection