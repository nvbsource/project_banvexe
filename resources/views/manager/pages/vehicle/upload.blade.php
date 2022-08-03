@extends("manager.layout.index")
@section("toolbar")
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Quản lý hình ảnh
            </h1>
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
                <li class="breadcrumb-item text-muted">image manager</li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section("content")
<div class="card card-flush card-p-0 bg-transparent border-0">
    <div class="card-body">
        <form>
            <input type="hidden" value="{{$id}}" id="id">
        </form>
        <div class="fv-row mb-7">
            <div class="dropzone" id="uploadImages">
                <div class="dz-message needsclick">
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Thả tệp vào đây hoặc nhấp vào để tải lên.</h3>
                        <span class="fs-7 fw-semibold">Tải lên tối đa 10 tệp</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($pictures as $item)
                <div class="col-12 col-sm-4 col-md-2 pb-7">
                    <div class="vehicle__image--item rounded-3 h-200px">
                        <img src="{{asset($item->path)}}" alt="" class="h-100">
                        <div class="vehicle__image--overlay">
                            <i class="bi bi-trash vehicle__image--icon" data-id="{{$item->id}}"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('admin/assets/app/js/Vehicle/upload.js')}}"></script>
@endsection