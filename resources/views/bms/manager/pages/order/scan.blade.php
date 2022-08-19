@extends("bms.manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quét Mã QR</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{route("manager.dashboard")}}" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">order</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">scan QR CODE</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="row">
    <div class="col-8">
        <div class="card mb-5">
            <div class="card-body">
                <div id="video-container">
                    <video id="qr-video"></video>
                </div>
                <b>Kết quả mã vạch</b>
                <span id="cam-qr-result">None</span>
                <br>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="text-center">Thông tin đơn hàng</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="module" src="{{asset('admin/assets/app/js/Order/scan.js')}}"></script>
@endsection