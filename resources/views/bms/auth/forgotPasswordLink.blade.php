<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Quên mật khẩu hệ thống quản lý nhà xe</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	</head>
	<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<div class="w-lg-500px p-10">
							<form class="form w-100" novalidate="novalidate" action="{{route("bmsHandleResetPassword")}}" method="POST">
								@csrf
								<div class="text-center mb-10">
									<h1 class="text-dark fw-bolder mb-3">Cài đặt mật khẩu mới</h1>
									<div class="text-gray-500 fw-semibold fs-6">Bạn đã đặt lại mật khẩu? 
									<a href="{{route("bmsLogin")}}" class="link-primary fw-bold">Đăng nhập</a></div>
								</div>
								@foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                    @break
                                @endforeach

								@if(Session::has('error'))
									<div class="alert alert-danger">
										{{ Session::get('error') }}
									</div>
								@elseif(Session::has('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
								@endif
								<div class="fv-row mb-8">
									<input type="text" name="token" value="{{$token}}" autocomplete="off" class="form-control bg-transparent" readonly>
								</div>
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<div class="mb-1">
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password" placeholder="Mật khẩu" name="password" autocomplete="off">
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
									</div>
									<div class="text-muted">Mật khẩu phải từ 8 kí tự</div>
								</div>
								<div class="fv-row mb-8">
									<input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation" autocomplete="off" class="form-control bg-transparent">
								</div>
								<div class="d-grid mb-10">
									<button type="submit" class="btn btn-primary">
										<span class="indicator-label">Lấy lại mật khẩu</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{asset("admin/assets/media/auth/auth-bg.png")}})">
					<div class="d-flex flex-column flex-center py-15 px-5 px-md-15 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('admin/assets/media/auth/agency.png')}}" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('admin/assets/media/auth/agency-dark.png')}}" alt="" />
						<h1 class="text-white fs-2qx fw-bolder text-center mb-7">Hệ thống quản lý nhà xe</h1>
						<div class="text-white fs-base text-center fw-semibold">Ứng dụng quản lý nhà xe giúp các doanh nghiệp bán vé xe trực tuyến tại <a href="#" class="text-white fw-bold fs-4">VexeGroup</a></div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/app/js/main.js')}}"></script>
	</body>
</html>