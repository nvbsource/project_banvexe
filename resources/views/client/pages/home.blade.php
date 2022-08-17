@extends("client.layout.index")
@section('content')
<section class="banner">
    <img src="{{asset('images/leaderboard.png')}}" alt="" class="banner-img">
    <div class="banner-content">
        <div class="container">
            <h2 class="banner-title">VeXeRe - Cam kết hoàn 150% nếu nhà xe không giữ vé</h2>
            <div class="banner-form">
                <div class="form-tabs">
                    <div class="form-tabs-item">
                        <div class="form-bus-icon">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z">
                                </path>
                            </svg>
                        </div>
                        <span>Xe khách</span>
                    </div>
                </div>
                <form action="#" class="form" id="form-search-trip">
                    <div class="form-group" id="element_departure">
                        <div class="form-maps-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.781 16">
                                <defs></defs>
                                <path class="svg-location"
                                    d="M5.89 0A5.9 5.9 0 0 0 0 5.891 5.746 5.746 0 0 0 .517 8.3a37.14 37.14 0 0 0 5.127 7.591.328.328 0 0 0 .5 0A37.159 37.159 0 0 0 11.266 8.3a5.743 5.743 0 0 0 .515-2.4A5.9 5.9 0 0 0 5.89 0zm0 8.95a3.06 3.06 0 1 1 3.06-3.06 3.063 3.063 0 0 1-3.06 3.06z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" class="form-control">
                        <svg class="form-swap-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                            viewBox="0 0 28 28">
                            <g stroke="#0060c4">
                                <g fill="#fff">
                                    <circle cx="14" cy="14" r="14" stroke="none"></circle>
                                    <circle cx="14" cy="14" r="13.5" fill="none"></circle>
                                </g>
                                <path fill="none" stroke-linecap="round" stroke-miterlimit="10"
                                    d="M20 10.5H8.5M20.5 10.5L17 7M20.5 10.5L17 14M19.5 17.5H9M8 17.5l3.5-3.5M11.5 21L8 17.5">
                                </path>
                            </g>
                        </svg>
                        <ul class="form-menu-dropdown" id="select_departure">
                            <li class="form-menu-dropdown-item">
                                <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                <ul class="form-menu-dropdown-item-list">
                                    <li>Bình thuận</li>
                                    <li>Ninh thuận</li>
                                </ul>
                            </li>
                            <li class="form-menu-dropdown-item">
                                <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                <ul class="form-menu-dropdown-item-list">
                                    <li>Bình thuận</li>
                                    <li>Ninh thuận</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group" id="element_destination">
                        <div class="form-maps-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.781 16">
                                <defs></defs>
                                <path class="svg-location"
                                    d="M5.89 0A5.9 5.9 0 0 0 0 5.891 5.746 5.746 0 0 0 .517 8.3a37.14 37.14 0 0 0 5.127 7.591.328.328 0 0 0 .5 0A37.159 37.159 0 0 0 11.266 8.3a5.743 5.743 0 0 0 .515-2.4A5.9 5.9 0 0 0 5.89 0zm0 8.95a3.06 3.06 0 1 1 3.06-3.06 3.063 3.063 0 0 1-3.06 3.06z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" class="form-control">
                        <ul class="form-menu-dropdown" id="select_destination">
                            <li class="form-menu-dropdown-item">
                                <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                <ul class="form-menu-dropdown-item-list">
                                    <li>Bình thuận</li>
                                    <li>Ninh thuận</li>
                                    <li>Ninh thuận</li>
                                    <li>Ninh thuận</li>
                                    <li>Ninh thuận</li>
                                    <li>Ninh thuận</li>
                                </ul>
                            </li>
                            <li class="form-menu-dropdown-item">
                                <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                <ul class="form-menu-dropdown-item-list">
                                    <li>Bình thuận</li>
                                    <li>Ninh thuận</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group" id="element_date">
                        <div class="form-calendar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18.471" height="20.745"
                                viewBox="0 0 20.471 22.745">
                                <g fill="#1861c5">
                                    <path
                                        d="M18.196 2.275h-1.137V0h-2.274v2.275h-9.1V0H3.412v2.275H2.275A2.264 2.264 0 0 0 .012 4.55L.001 20.472a2.274 2.274 0 0 0 2.275 2.275h15.92a2.274 2.274 0 0 0 2.271-2.276V4.549a2.274 2.274 0 0 0-2.271-2.274zm0 18.2H2.275V7.961h15.921z">
                                    </path>
                                    <path
                                        d="M13.394 18.954h3.033v-2.148h-3.033v2.148zM8.593 18.954h3.033v-2.148H8.593v2.148zM3.896 18.954h3.033v-2.148H3.896zM13.394 15.552h3.033v-2.148h-3.033v2.148zM8.593 15.659h3.033v-2.148H8.593v2.148zM6.824 13.511H3.791v2.148h3.033zM13.394 12.257h3.033v-2.148h-3.033v2.148zM8.593 12.257h3.033v-2.148H8.593v2.148zM3.896 12.257h3.033v-2.148H3.896z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <input type="date" class="form-control" id="select_date">
                    </div>
                    <button class="form-button" id="btn_find">Tìm vé</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-login-title">Đăng nhập</h5>
                <button class="modal-login-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg viewBox="64 64 896 896" class="" data-icon="close" width="1em" height="1em" fill="currentColor"
                        aria-hidden="true" focusable="false">
                        <path
                            d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-login" id="form-login">
                    <div class="form-group">
                        <label for="phone" class="mb-0">Số điện thoại</label>
                        <div class="form-input">
                            <span>+84</span>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <div id="recaptcha-container"></div>
                    </div>
                    <button class="form-login-button">Tiếp tục</button>
                    <div class="form-login-line">
                        <span class="text-center d-block">Hoặc</span>
                    </div>
                    <button class="form-login-button form-login-button-google">Tiếp tục với google</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-verification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-login-title">Nhập mã xác thực</h5>
                <button class="modal-login-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg viewBox="64 64 896 896" class="" data-icon="close" width="1em" height="1em" fill="currentColor"
                        aria-hidden="true" focusable="false">
                        <path
                            d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-login" id="form-verification">
                    <div class="form-group">
                        <label for="code" class="mb-0">Nhập mã xác thực vừa được gửi đến số điện thoại <b id="number_phone"></b></label>
                        <div class="form-input">
                            <input type="text" id="code" name="code">
                        </div>
                        <div id="recaptcha-container"></div>
                    </div>
                    <a href="#" class="text-primary">Gửi lại mã xác thực</a>
                    <button class="form-login-button">Tiếp tục</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://formvalidation.io/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>
<script src="{{asset('js/lang/vn.js')}}"></script>
<script src="{{asset('js/home/home.js')}}"></script>
@endsection