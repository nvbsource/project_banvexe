@extends('admin.layout.index')
@section('toolbar')
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Quản trị hệ thống</h1>
    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
</div>
@endsection
@section('content')
<div class="row g-6 g-xl-9">
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/twitch.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Twitch Posts</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">$500.00</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-danger me-2">+40.5%</div>
                    <div class="fw-bold text-gray-400">more impressions</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">0.5%</span>
                    <span class="text-gray-400 fs-7">MRR</span>
                    <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title=""
                        data-bs-original-title="Recurring" aria-label="Recurring"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/twitter.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Twitter Followers</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">807k</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-success me-2">+17.62%</div>
                    <div class="fw-bold text-gray-400">Followers growth</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">5%</span>
                    <span class="text-gray-400 fs-7">New trials</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/spotify.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Spotify Listeners</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">1,073</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-danger me-2">+10.45%</div>
                    <div class="fw-bold text-gray-400">Less comments than usual</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                    <span class="text-gray-400 fs-7">Impressions</span>
                    <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title=""
                        data-bs-original-title="This is the total number of new non-trial"
                        aria-label="This is the total number of new non-trial"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/pinterest-p.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Pinterest Posts</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">97</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-success me-2">+26.1%</div>
                    <div class="fw-bold text-gray-400">More posts</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">10%</span>
                    <span class="text-gray-400 fs-7">Spend</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/github.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Github Contributes</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">4,109</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-danger me-2">+32.8%</div>
                    <div class="fw-bold text-gray-400">Less contributions</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                    <span class="text-gray-400 fs-7">Dispute</span>
                    <i class="fas fa-exclamation-circle fs-7 ms-2" data-bs-toggle="tooltip" title=""
                        data-bs-original-title="This is the total number of new non-trial"
                        aria-label="This is the total number of new non-trial"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card h-100">
            <div class="card-header flex-nowrap border-0 pt-9">
                <div class="card-title m-0">
                    <div class="symbol symbol-45px w-45px bg-light me-5">
                        <img src="assets/media/svg/brand-logos/youtube-play.svg" alt="image" class="p-3">
                    </div>
                    <a href="#" class="fs-4 fw-bold text-hover-primary text-gray-600 m-0">Youtube Subscribers</a>
                </div>
                <div class="card-toolbar m-0">
                    <button type="button"
                        class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <span class="svg-icon svg-icon-3 svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"></i></a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                checked="checked" name="notifications">
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                <div class="fs-2tx fw-bolder mb-3">354</div>
                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                    <div class="fw-bolder text-success me-2">+29.45%</div>
                    <div class="fw-bold text-gray-400">Subscribers growth</div>
                </div>
                <div class="d-flex align-items-center fw-bold">
                    <span class="badge bg-light text-gray-700 px-3 py-2 me-2">40%</span>
                    <span class="text-gray-400 fs-7">Subscribers</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-5">
    <div class="card-header border-0 pt-6">
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black"></path>
                    </svg>
                </span>
                <input type="text" data-kt-user-table-filter="search"
                    class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="black"></path>
                        </svg>
                    </span>
                </button>
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <div class="separator border-gray-200"></div>
                    <div class="px-7 py-5" data-kt-user-table-filter="form">
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">Role:</label>
                            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true"
                                data-select2-id="select2-data-10-62o0" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-12-11we"></option>
                                <option value="Administrator">Administrator</option>
                                <option value="Analyst">Analyst</option>
                                <option value="Developer">Developer</option>
                                <option value="Support">Support</option>
                                <option value="Trial">Trial</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-11-jyyk" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-xoi7-container"
                                        aria-controls="select2-xoi7-container"><span class="select2-selection__rendered"
                                            id="select2-xoi7-container" role="textbox" aria-readonly="true"
                                            title="Select option"><span class="select2-selection__placeholder">Select
                                                option</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true"
                                data-kt-user-table-filter="two-step" data-hide-search="true"
                                data-select2-id="select2-data-13-dwiz" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-15-sii6"></option>
                                <option value="Enabled">Enabled</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                data-select2-id="select2-data-14-nq2j" style="width: 100%;"><span
                                    class="selection"><span
                                        class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-disabled="false" aria-labelledby="select2-d6a9-container"
                                        aria-controls="select2-d6a9-container"><span class="select2-selection__rendered"
                                            id="select2-d6a9-container" role="textbox" aria-readonly="true"
                                            title="Select option"><span class="select2-selection__placeholder">Select
                                                option</span></span><span class="select2-selection__arrow"
                                            role="presentation"><b role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true"
                                data-kt-user-table-filter="filter">Apply</button>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_export_users">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                transform="rotate(90 12.75 4.25)" fill="black"></rect>
                            <path
                                d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                fill="black"></path>
                            <path
                                d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                fill="#C4C4C4"></path>
                        </svg>
                    </span>
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_user">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                </div>
                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete
                    Selected</button>
            </div>
            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="fw-bolder">Export Users</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <form id="kt_modal_export_users_form"
                                class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                    <select name="role" data-control="select2" data-placeholder="Select a role"
                                        data-hide-search="true"
                                        class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        data-select2-id="select2-data-16-4aeh" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-18-x73w"></option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Analyst">Analyst</option>
                                        <option value="Developer">Developer</option>
                                        <option value="Support">Support</option>
                                        <option value="Trial">Trial</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-17-qi6c" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-role-vm-container"
                                                aria-controls="select2-role-vm-container"><span
                                                    class="select2-selection__rendered" id="select2-role-vm-container"
                                                    role="textbox" aria-readonly="true" title="Select a role"><span
                                                        class="select2-selection__placeholder">Select a
                                                        role</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>
                                    <select name="format" data-control="select2" data-placeholder="Select a format"
                                        data-hide-search="true"
                                        class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        data-select2-id="select2-data-19-zbec" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-21-vzau"></option>
                                        <option value="excel">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr" data-select2-id="select2-data-20-9yeg" style="width: 100%;"><span
                                            class="selection"><span
                                                class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-format-d2-container"
                                                aria-controls="select2-format-d2-container"><span
                                                    class="select2-selection__rendered" id="select2-format-d2-container"
                                                    role="textbox" aria-readonly="true" title="Select a format"><span
                                                        class="select2-selection__placeholder">Select a
                                                        format</span></span><span class="select2-selection__arrow"
                                                    role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="text-center">
                                    <button type="reset" class="btn btn-light me-3"
                                        data-kt-users-modal-action="cancel">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <h2 class="fw-bolder">Add User</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                action="#">
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                    data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                    data-kt-scroll-max-height="auto"
                                    data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                    data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px"
                                    style="max-height: 217px;">
                                    <div class="fv-row mb-7">
                                        <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url(assets/media/avatars/blank.png)">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(assets/media/avatars/150-1.jpg);"></div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                        <input type="text" name="user_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name"
                                            value="Emma Smith">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                        <input type="email" name="user_email"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="example@domain.com" value="e.smith@kpmg.com.au">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="mb-7">
                                        <label class="required fw-bold fs-6 mb-5">Role</label>
                                        <div class="d-flex fv-row">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="0" id="kt_modal_update_role_option_0" checked="checked">
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">Administrator</div>
                                                    <div class="text-gray-600">Best for business owners and company
                                                        administrators</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <div class="d-flex fv-row">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="1" id="kt_modal_update_role_option_1">
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bolder text-gray-800">Developer</div>
                                                    <div class="text-gray-600">Best for developers or people primarily
                                                        using the API</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <div class="d-flex fv-row">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="2" id="kt_modal_update_role_option_2">
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bolder text-gray-800">Analyst</div>
                                                    <div class="text-gray-600">Best for people who need full access to
                                                        analytics data, but don't need to update business settings</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <div class="d-flex fv-row">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="3" id="kt_modal_update_role_option_3">
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bolder text-gray-800">Support</div>
                                                    <div class="text-gray-600">Best for employees who regularly refund
                                                        payments and respond to disputes</div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-5"></div>
                                        <div class="d-flex fv-row">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input me-3" name="user_role" type="radio"
                                                    value="4" id="kt_modal_update_role_option_4">
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bolder text-gray-800">Trial</div>
                                                    <div class="text-gray-600">Best for people who need to preview
                                                        content data, but don't need to make any updates</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3"
                                        data-kt-users-modal-action="cancel">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
                        
                            
                        
                    " style="width: 29.25px;">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                        data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1" aria-label="User: activate to sort column ascending"
                                style="width: 235.734px;">User</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1" aria-label="Role: activate to sort column ascending"
                                style="width: 151.039px;">Role</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1" aria-label="Last login: activate to sort column ascending"
                                style="width: 151.039px;">Last login</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1" aria-label="Two-step: activate to sort column ascending"
                                style="width: 151.039px;">Two-step</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1"
                                colspan="1" aria-label="Joined Date: activate to sort column ascending"
                                style="width: 151.039px;">Joined Date</th>
                            <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                aria-label="Actions" style="width: 117.359px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-bold">





















                        <tr class="odd">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-1.jpg" alt="Emma Smith" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                    <span>e.smith@kpmg.com.au</span>
                                </div>
                            </td>
                            <td>Administrator</td>
                            <td data-order="2022-07-18T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">Yesterday</div>
                            </td>
                            <td></td>
                            <td data-order="2021-06-24T10:30:00+07:00">24 Jun 2021, 10:30 am</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                                    <span>melody@altbox.com</span>
                                </div>
                            </td>
                            <td>Analyst</td>
                            <td data-order="2022-07-19T16:57:46+07:00">
                                <div class="badge badge-light fw-bolder">20 mins ago</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bolder">Enabled</div>
                            </td>
                            <td data-order="2021-04-15T22:10:00+07:00">15 Apr 2021, 10:10 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-26.jpg" alt="Max Smith" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                                    <span>max@kt.com</span>
                                </div>
                            </td>
                            <td>Developer</td>
                            <td data-order="2022-07-16T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">3 days ago</div>
                            </td>
                            <td></td>
                            <td data-order="2021-06-20T14:40:00+07:00">20 Jun 2021, 2:40 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-4.jpg" alt="Sean Bean" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                                    <span>sean@dellito.com</span>
                                </div>
                            </td>
                            <td>Support</td>
                            <td data-order="2022-07-19T12:17:46+07:00">
                                <div class="badge badge-light fw-bolder">5 hours ago</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bolder">Enabled</div>
                            </td>
                            <td data-order="2021-02-21T18:05:00+07:00">21 Feb 2021, 6:05 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-15.jpg" alt="Brian Cox" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                                    <span>brian@exchange.com</span>
                                </div>
                            </td>
                            <td>Developer</td>
                            <td data-order="2022-07-17T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">2 days ago</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bolder">Enabled</div>
                            </td>
                            <td data-order="2021-11-10T20:43:00+07:00">10 Nov 2021, 8:43 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-warning text-warning">M</div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                                    <span>mikaela@pexcom.com</span>
                                </div>
                            </td>
                            <td>Administrator</td>
                            <td data-order="2022-07-14T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">5 days ago</div>
                            </td>
                            <td></td>
                            <td data-order="2021-10-25T17:20:00+07:00">25 Oct 2021, 5:20 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-8.jpg" alt="Francis Mitcham"
                                                class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                                    <span>f.mitcham@kpmg.com.au</span>
                                </div>
                            </td>
                            <td>Trial</td>
                            <td data-order="2022-06-28T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">3 weeks ago</div>
                            </td>
                            <td></td>
                            <td data-order="2021-10-25T06:43:00+07:00">25 Oct 2021, 6:43 am</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                                    <span>olivia@corpmail.com</span>
                                </div>
                            </td>
                            <td>Administrator</td>
                            <td data-order="2022-07-18T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">Yesterday</div>
                            </td>
                            <td></td>
                            <td data-order="2021-08-19T20:43:00+07:00">19 Aug 2021, 8:43 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                                    <span>owen.neil@gmail.com</span>
                                </div>
                            </td>
                            <td>Analyst</td>
                            <td data-order="2022-07-19T16:57:46+07:00">
                                <div class="badge badge-light fw-bolder">20 mins ago</div>
                            </td>
                            <td>
                                <div class="badge badge-light-success fw-bolder">Enabled</div>
                            </td>
                            <td data-order="2021-06-24T20:43:00+07:00">24 Jun 2021, 8:43 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="even">
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/150-6.jpg" alt="Dan Wilson" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                                    <span>dam@consilting.com</span>
                                </div>
                            </td>
                            <td>Developer</td>
                            <td data-order="2022-07-16T17:17:46+07:00">
                                <div class="badge badge-light fw-bolder">3 days ago</div>
                            </td>
                            <td></td>
                            <td data-order="2021-06-20T20:43:00+07:00">20 Jun 2021, 8:43 pm</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="../../demo1/dist/apps/user-management/users/view.html"
                                            class="menu-link px-3">Edit</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-users-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div
                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                </div>
                <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                    <div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="kt_table_users_previous"><a
                                    href="#" aria-controls="kt_table_users" data-dt-idx="0" tabindex="0"
                                    class="page-link"><i class="previous"></i></a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_users"
                                    data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_table_users"
                                    data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="kt_table_users"
                                    data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item next" id="kt_table_users_next"><a href="#"
                                    aria-controls="kt_table_users" data-dt-idx="4" tabindex="0" class="page-link"><i
                                        class="next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection