<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Quên mật khẩu hệ thống quản lý nhà xe</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
	</head>
	<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url('{{asset("admin/assets/media/auth/bg10.jpeg")}}'); } [data-theme="dark"] body { background-image: url('{{asset("admin/assets/media/auth/bg10-dark.jpeg")}}'); }</style>
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-lg-row-fluid">
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('admin/assets/media/auth/agency.png')}}" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{asset('admin/assets/media/auth/agency-dark.png')}}" alt="" />
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Hệ thống quản lý nhà xe</h1>
						<div class="text-gray-600 fs-base text-center fw-semibold">Ứng dụng quản lý nhà xe giúp các doanh nghiệp bán vé xe trực tuyến tại <a href="#" class="fw-bold fs-4">VexeGroup</a></div>
					</div>
				</div>
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<div class="w-md-400px">
							<form class="form w-100" novalidate="novalidate" action="{{route('bmsHandleForgotPassword')}}" method="POST">
								@csrf
								<div class="text-center mb-11">
									<h1 class="text-dark fw-bolder mb-3">Quên mật khẩu</h1>
									<div class="text-gray-500 fw-semibold fs-6">Sử dụng tài khoản email của bạn để lấy lại mật khẩu</div>
								</div>
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                    @break
                                @endforeach

								@if(Session::has('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
								@endif
								<div class="fv-row mb-8">
									<input type="text" placeholder="Địa chỉ email" name="email" class="form-control bg-transparent" />
								</div>
								<div class="d-grid mb-10">
									<button type="submit" class="btn btn-primary">
										<span class="indicator-label">Lấy lại</span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/app/js/main.js')}}"></script>
	</body>
</html>