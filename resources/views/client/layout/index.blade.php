<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="https://vexere.com/images/vexere-ico.ico?v=0.0.3">
    <title>Dự Án Vé Xe Rẻ Nhóm 1</title>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/plugins/FormValidation.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('/css/plugins/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/plugins/antd.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>

<body>
    @include('client.layout.header')
    @yield('content')
        <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-login-title">Đăng nhập</h5>
                    <button class="modal-login-close" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="64 64 896 896" class="" data-icon="close" width="1em" height="1em"
                            fill="currentColor" aria-hidden="true" focusable="false">
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
                        <button class="form-login-button" id="button_login">Tiếp tục</button>
                        <div class="form-login-line">
                            <span class="text-center d-block">Hoặc</span>
                        </div>
                        <button class="form-login-button form-login-button-google">Tiếp tục với google</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-verification" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-login-title">Nhập mã xác thực</h5>
                    <button class="modal-login-close" type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <svg viewBox="64 64 896 896" class="" data-icon="close" width="1em" height="1em"
                            fill="currentColor" aria-hidden="true" focusable="false">
                            <path
                                d="M563.8 512l262.5-312.9c4.4-5.2.7-13.1-6.1-13.1h-79.8c-4.7 0-9.2 2.1-12.3 5.7L511.6 449.8 295.1 191.7c-3-3.6-7.5-5.7-12.3-5.7H203c-6.8 0-10.5 7.9-6.1 13.1L459.4 512 196.9 824.9A7.95 7.95 0 0 0 203 838h79.8c4.7 0 9.2-2.1 12.3-5.7l216.5-258.1 216.5 258.1c3 3.6 7.5 5.7 12.3 5.7h79.8c6.8 0 10.5-7.9 6.1-13.1L563.8 512z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-login" id="form-verification">
                        <div class="form-group">
                            <label for="code" class="mb-0">Nhập mã xác thực vừa được gửi đến số điện thoại <b
                                    id="number_phone"></b></label>
                            <div class="form-input">
                                <input type="text" id="code" name="code">
                            </div>
                            <div id="recaptcha-container"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="text-primary form-verification-resend" disabled>Gửi lại mã xác thực</button>
                            <span id="minutes"></span>
                        </div>
                        <button class="form-login-button" id="button_verification">Tiếp tục</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/plugins/FormValidation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://formvalidation.io/vendors/formvalidation/dist/js/plugins/Bootstrap.min.js"></script>

    <script src="{{ asset('js/plugins/toastr.min.js') }}"></script>
    <script src="{{ asset('js/common/common.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
