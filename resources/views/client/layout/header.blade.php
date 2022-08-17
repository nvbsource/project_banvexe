<header class="header">
    <div class="container">
        <div class="header-content">
            <a href="{{route("home")}}"><img src="./images/logo.svg" alt="" class="header-logo"></a>
            <nav class="navbar">
                <ul class="navbar-menu">
                    <li class="navbar-item"><a href="#" class="navbar-link">Thuê xe</a></li>
                    <li class="navbar-item"><a href="#" class="navbar-link">Xe Limousine</a></li>
                    <li class="navbar-item"><a href="#" class="navbar-link">Quản lý đơn hàng</a></li>
                    <li class="navbar-item"><a href="#" class="navbar-link">Trở thành đối tác</a></li>
                    <li class="navbar-item">
                        <button class="header-login" data-toggle="modal" data-target="#modal-login">
                            <img src="{{asset('images/account-circle-fill.svg')}}" alt="" class="header-login-icon-account">
                            <span>Đăng nhập</span>
                            {{-- <img src="{{asset('images/caret-down.svg')}}" alt="" class="header-login-icon-arrow"> --}}
                        </button>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>