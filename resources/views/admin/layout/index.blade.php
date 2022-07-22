<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<title>Quản trị hệ thống VEXERE</title>
	<link rel="shortcut icon" href="{{asset('administrator/assets/media/logos/favicon.ico')}}" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="{{asset('administrator/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<link href="{{asset('administrator/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('administrator/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('administrator/assets/app/css/style.css')}}">
</head>

<body id="kt_body"
	class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
	style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			@include("admin.layout.sidebar")
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				@include("admin.layout.header")
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							@yield("toolbar")
						</div>
					</div>
					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-fluid">
							@yield("content")
						</div>
					</div>
				</div>
				@include("admin.layout.footer")
			</div>
		</div>
	</div>
	<div id="kt_drawer_chat" class="bg-body drawer drawer-end" data-kt-drawer="true" data-kt-drawer-name="chat"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close"
		style="width: 500px !important;">
		<div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<div class="card-title">
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-bold text-muted">Active</span>
						</div>
					</div>
				</div>
				<div class="card-toolbar">
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
							data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
							data-kt-menu="true">
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
										data-bs-original-title="Specify a contact email to send an invitation"
										aria-label="Specify a contact email to send an invitation"></i></a>
							</div>
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
								data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title=""
											data-bs-original-title="Coming soon">Create Group</a>
									</div>
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title=""
											data-bs-original-title="Coming soon">Invite Members</a>
									</div>
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title=""
											data-bs-original-title="Coming soon">Settings</a>
									</div>
								</div>
							</div>
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title=""
									data-bs-original-title="Coming soon">Settings</a>
							</div>
						</div>
					</div>
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="black"></rect>
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="black"></rect>
							</svg>
						</span>
					</div>
				</div>
			</div>
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
					data-kt-scroll-activate="true" data-kt-scroll-height="auto"
					data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
					data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px"
					style="height: 258px;">
					<div class="d-flex justify-content-start mb-10">
						<div class="d-flex flex-column align-items-start">
							<div class="d-flex align-items-center mb-2">
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-15.jpg')}}">
								</div>
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
							</div>
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">How likely are you to recommend our company to your
								friends and family ?</div>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-10">
						<div class="d-flex flex-column align-items-end">
							<div class="d-flex align-items-center mb-2">
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-26.jpg')}}">
								</div>
							</div>
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
								been subscribed to a repository on GitHub.</div>
						</div>
					</div>
					<div class="d-flex justify-content-start mb-10">
						<div class="d-flex flex-column align-items-start">
							<div class="d-flex align-items-center mb-2">
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-15.jpg')}}">
								</div>
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
							</div>
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Ok, Understood!</div>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-10">
						<div class="d-flex flex-column align-items-end">
							<div class="d-flex align-items-center mb-2">
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-26.jpg')}}">
								</div>
							</div>
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">You’ll receive notifications for all issues, pull
								requests!</div>
						</div>
					</div>
					<div class="d-flex justify-content-start mb-10">
						<div class="d-flex flex-column align-items-start">
							<div class="d-flex align-items-center mb-2">
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-15.jpg')}}">
								</div>
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
							</div>
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">You can unwatch this repository immediately by clicking
								here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-10">
						<div class="d-flex flex-column align-items-end">
							<div class="d-flex align-items-center mb-2">
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-26.jpg')}}">
								</div>
							</div>
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Most purchased Business courses during this sale!</div>
						</div>
					</div>
					<div class="d-flex justify-content-start mb-10">
						<div class="d-flex flex-column align-items-start">
							<div class="d-flex align-items-center mb-2">
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-15.jpg')}}">
								</div>
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
							</div>
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
								goals. Food and drinks provided</div>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<div class="d-flex flex-column align-items-end">
							<div class="d-flex align-items-center mb-2">
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-26.jpg')}}">
								</div>
							</div>
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text"></div>
						</div>
					</div>
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<div class="d-flex flex-column align-items-start">
							<div class="d-flex align-items-center mb-2">
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="{{asset('administrator/assets/media/avatars/150-15.jpg')}}">
								</div>
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
							</div>
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Right before vacation season we have the next Big Deal
								for you.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
					placeholder="Type a message"></textarea>
				<div class="d-flex flex-stack">
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="" data-bs-original-title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="" data-bs-original-title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
				</div>
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"></rect>
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"></path>
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<script src="{{asset('administrator/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('administrator/assets/js/scripts.bundle.js')}}"></script>
	<script src="{{asset('administrator/assets/js/custom/widgets.js')}}"></script>
	<script src="{{asset('administrator/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{asset('administrator/assets/js/custom/modals/create-app.js')}}"></script>
	<script src="{{asset('administrator/assets/js/custom/modals/upgrade-plan.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('administrator/assets/app/js/main.js')}}"></script>
	@yield("scripts")
</body>

</html>