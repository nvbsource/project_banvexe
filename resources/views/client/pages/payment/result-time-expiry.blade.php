
@extends("client.layout.index")
@section('content')
<section class="information">
    <div class="container">
        <div class="information-content">
            <div class="information-left">
                <p class="information-title information-title-success">Hết thời gian thanh toán</p>
                <img src="{{asset('images/route-no-schedule.png')}}" alt="" class="information-left-img">
                <h3 class="information-heading">Chúng tôi xin chân thành xin lỗi về sự bất tiện này.</h3>
                <p class="information-desc">Xin vui lòng đặt lại vé hoặc tìm chuyến khác cho hành trình của bạn.</p>
                <a href="#" class="information-redirect"><svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#a)">
                            <path
                                d="M42.379 14.451a1.5 1.5 0 0 0-.226 2.109c2.942 3.647 4.497 8.058 4.496 12.754 0 11.209-9.12 20.328-20.33 20.328-11.21 0-20.328-9.119-20.328-20.328 0-7.799 4.537-14.767 11.219-18.149 2.463-1.247 4.16.491 3.503 3.173l-1.262 5.14a1.5 1.5 0 1 0 2.914.714L25.68 6.695a1.5 1.5 0 0 0-.967-1.775L10.72.083a1.496 1.496 0 0 0-1.146.068c-.585.285-.977 1.42-.693 2.006.168.346.468.627.859.762l6.18 2.136c2.61.901 2.517 2.134.047 3.369-7.725 3.865-12.975 11.9-12.975 20.89 0 12.863 10.465 23.328 23.329 23.328 12.863 0 23.329-10.465 23.329-23.328 0-5.312-1.833-10.51-5.161-14.637a1.5 1.5 0 0 0-2.11-.226z"
                                fill="#0054B8"></path>
                        </g>
                        <defs>
                            <clipPath id="a">
                                <path fill="#fff" d="M0 0h52.642v52.642H0z"></path>
                            </clipPath>
                        </defs>
                    </svg> Đặt vé khác</a>
            </div>
            <div class="information-right">
                <div
                    class="StyledComponents__Column-sc-1dlqkzu-15 StyledComponents__ColumnRight-sc-1dlqkzu-17 dTsblZ kgugsv">
                    <article class="TicketInfo__Wrapper-sc-123out8-1 bhoEwO card ticket-info">
                        <nav>
                            <div class="StyledComponents__TitleContainer-sc-1dlqkzu-5 djFuUh">
                                <div class="StyledComponents__TitleLeft-sc-1dlqkzu-6 lkEsjS">
                                    <div class="StyledComponents__Title-sc-1dlqkzu-8 hjRdOf">Thông tin chuyến đi
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <section>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>MÃ ĐƠN HÀNG</div>
                                <div>{{$order->orderCode}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>HỌ TÊN</div>
                                <div>{{$order->customer->name}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>SỐ ĐIỆN THOẠI</div>
                                <div>{{$order->customer->phone}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>SỐ CMND/CCCD</div>
                                <div>{{$order->customer->idCard}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>EMAIL</div>
                                <div>{{$order->customer->email}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>NHÀ XE</div>
                                <div>{{$order->trip->passengerCarCompany->name}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>TUYẾN ĐƯỜNG</div>
                                <div>{{$order->trip->route->departureDistrict->name}} - {{$order->trip->route->destinationDistrict->name}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>LOẠI XE</div>
                                <div>{{$order->trip->vehicle->rangeOfVehicle->type}} {{$order->trip->vehicle->countSeat}} chỗ</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>SỐ LƯỢNG KHÁCH</div>
                                <div>{{$order->detailsOrders->count()}}</div>
                            </div>
                        </section>
                    </article>
                    <article class="Transaction__Wrapper-sc-1x7bijr-1 lgJwdj card transaction-info">
                        <div>Thông tin giao dịch</div>
                        <section>
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Phương thức thanh
                                    toán</span><span>{{$paymentMethod}}</span></div>
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Trạng thái</span><span>{{$status}}</span></div>
                        </section>
                        <section>
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Giá vé</span><span>{{number_format($order->trip->price)}}&nbsp;₫</span></div>
                        </section>
                        <section>
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Tổng
                                    tiền</span><span>{{number_format($order->price)}}&nbsp;₫</span></div>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection