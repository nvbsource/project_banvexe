<!DOCTYPE html>
<html lang="en">

<head>
	<title>Quản Lý Nhà Xe</title>
	<meta charset="utf-8" />
	<meta name="_token" content="{{csrf_token()}}" />
	<link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('admin/assets/app/css/style.css')}}">
</head>

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
	data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
	data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
	data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
	data-kt-scrolltop="on">
	<script>if (document.documentElement) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value"); if (themeMode === null) { if (defaultThemeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>

	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			@include("admin.layout.header")
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				@include("admin.layout.sidebar")
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<div class="loading-overlay" id="loading_overlay">
					<div class="d-flex flex-column flex-column-fluid">
						@yield("toolbar")
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<div id="kt_app_content_container" class="app-container">
								@yield("content")
							</div>
						</div>
					</div>
					<div class="loading-body">
						<div class="spinner spinner-white spinner-log"></div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
	<script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
	<script src="{{asset('admin/assets/js/custom/widgets.js')}}"></script>
	<script src="{{asset('admin/assets/app/js/main.js')}}"></script>
	@yield("scripts")
</body>


</html>