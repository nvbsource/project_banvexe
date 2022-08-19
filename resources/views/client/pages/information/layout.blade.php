@extends('client.layout.index')
@section('content')
   <div class="container">
    <div class="address-link">
        <span class="address-item active">Trang chủ</span>
        <span><img src="https://storage.googleapis.com/fe-production/images/chevron-right.svg" width="12" height="16" alt=""></span>
        <span>Vé của tôi</span>
    </div>
    <div class="information-content">
        <div class="information-menu">
            <ul>
                <li class="{{Request::is("information") ? 'active' : ''}}">
                    <a href="{{route('client.information')}}"><img src="https://storage.googleapis.com/fe-production/images/Auth/account-circle.svg" width="24" height="16" alt=""> Thông tin tài khoản</a>
                </li>
                <li class="{{Request::is("information/ticket") ? 'active' : ''}}">
                    <a href="{{route("client.ticket")}}"><img src="https://storage.googleapis.com/fe-production/images/ticket.svg" width="24" height="16" alt=""> Vé của tôi</a>
                </li>
                <li class="{{Request::is("information") ? 'active' : ''}}">
                    <a href="#"><img src="https://storage.googleapis.com/fe-production/images/review.svg" width="24" height="16" alt=""> Nhận xét chuyến đi</a>
                </li>
                <li>
                    <a href="{{route("client.logout")}}"><img src="https://storage.googleapis.com/fe-production/images/Auth/logout.svg" width="24" height="16" alt=""> Đăng xuất</a>
                </li>
            </ul>
        </div>
        <div class="information-body">
            @yield("content-information")
        </div>
    </div>
   </div>
@endsection