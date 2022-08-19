@extends("client.layout.index")
@section('content')
<section class="information">
    <div class="container">
        <div class="information-content">
            <div class="information-left">
                <p class="information-title information-title-success">Thanh toán thành công</p>
                <div
                    class="StyledComponents__Column-sc-1fcpe3g-15 StyledComponents__ColumnLeft-sc-1fcpe3g-16 jSskDI kDafmE">
                    <div class="StyledComponents__Section-sc-1fcpe3g-19 kKCzuv">
                        <div class="StyledComponents__PageTitle-sc-1fcpe3g-13 gImeWL">Thanh toán thành công</div>
                        <div
                            class="StyledComponents__Content-sc-1fcpe3g-10 StyledComponents__PageNotification-sc-1fcpe3g-14 bQzlse heETIx">
                            <p>Chúng tôi đã gửi thông tin chuyến đi đến SĐT <strong>{{$order->customer->phone}}</strong> và email
                                <strong>{{$order->customer->email}}</strong>, bạn hãy kiểm tra thật kĩ nhé!</p>
                        </div>
                        <div class="StyledComponents__Title-sc-1fcpe3g-8 bNpXqC">Thông tin vé</div>
                        <div class="StyledComponents__PhoneNumberStyled-sc-1fcpe3g-28 BwxtM">
                            <div class="StyledComponents__SubTitle-sc-1fcpe3g-9 cFOEaj"><b> Lưu ý:</b> Mọi thông tin về
                                chuyến đi (bao gồm biển số xe, số điện thoại tài xế,...) sẽ được VeXeRe thông báo đến
                                quý khách qua email ngay sau khi nhà xe cập nhật thông tin. Thông thường nhà xe sẽ cập
                                nhật thông tin này trễ nhất 15-30 phút trước giờ khởi hành tùy thuộc vào kế hoạch của
                                nhà xe.</div>
                            <div class="StyledComponents__SubTitle-sc-1fcpe3g-9 cFOEaj">Nếu gặp vấn đề khi ra xe, quý
                                khách vui lòng liên hệ theo số Hotline nhà xe.</div>
                        </div>
                    </div>
                    <div class="StyledComponents__Section-sc-1fcpe3g-19 kKCzuv">
                        <div class="StyledComponents__Title-sc-1fcpe3g-8 bNpXqC">Hướng dẫn lên xe</div>
                        <div class="StyledComponents__Content-sc-1fcpe3g-10 bQzlse">
                            <p>Bạn cần ra điểm đón trước 15 phút, đưa SMS hoặc email xác nhận thanh toán của Vexere cho
                                nhân viên văn phòng vé để đổi chứng từ giấy</p>
                            <p>Khi lên xe, bạn xuất trình chứng từ giấy cho tài xế hoặc phụ xe.</p>
                        </div>
                    </div>
                    <div class="StyledComponents__Section-sc-1fcpe3g-19 kKCzuv">
                        <div
                            class="StyledComponents__Container-sc-1fcpe3g-0 StyledComponents__PointContainer-sc-1fcpe3g-38 zIqWJ ypNEm pick-up">
                            <div class="StyledComponents__TitleContainer-sc-1fcpe3g-5 kUwbyw">
                                <div class="StyledComponents__TitleLeft-sc-1fcpe3g-6 gwVPIH">
                                    <div class="StyledComponents__Title-sc-1fcpe3g-8 bNpXqC">Điểm đón</div>
                                </div>
                            </div>
                            <div class="StyledComponents__SubTitle-sc-1fcpe3g-9 cFOEaj">
                                @if($order->departure_same_way_route_id)
                                    <b>{{$order->departureSameWayRoute->name}}</b> ({{$order->departureSameWayRoute->address}})
                                @else
                                    <b>{{$order->trip->route->departure_name}}</b> ({{$order->trip->route->departure_address}})
                                @endif
                            </div>
                            <div class="StyledComponents__Content-sc-1fcpe3g-10 bQzlse" style="margin-top: 14px;">
                                <p>Đón lúc: <strong>{{$timeStart}}</strong></p>
                            </div>
                        </div>
                        <div
                            class="StyledComponents__Container-sc-1fcpe3g-0 StyledComponents__PointContainer-sc-1fcpe3g-38 zIqWJ ypNEm drop-off">
                            <div class="StyledComponents__TitleContainer-sc-1fcpe3g-5 kUwbyw">
                                <div class="StyledComponents__TitleLeft-sc-1fcpe3g-6 gwVPIH">
                                    <div class="StyledComponents__Title-sc-1fcpe3g-8 bNpXqC">Điểm trả</div>
                                </div>
                            </div>
                            <div
                                class="StyledComponents__Content-sc-1fcpe3g-10 StyledComponents__SubContent-sc-1fcpe3g-11 bQzlse eRpHgX">
                                @if($order->destination_same_way_route_id)
                                    <b>{{$order->destinationSameWayRoute->name}}</b> ({{$order->destinationSameWayRoute->address}})
                                @else
                                    <b>{{$order->trip->route->destination_name}}</b> ({{$order->trip->route->destination_address}})
                                @endif
                        </div>
                        </div>
                    </div>
                </div>
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
                                <div>{{$order->trip->route->departureDistrict->name}} -
                                    {{$order->trip->route->destinationDistrict->name}}</div>
                            </div>
                            <div class="TicketInfo__Row-sc-123out8-0 bkvmFS">
                                <div>LOẠI XE</div>
                                <div>{{$order->trip->vehicle->rangeOfVehicle->type}}
                                    {{$order->trip->vehicle->countSeat}} chỗ</div>
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
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Trạng
                                    thái</span><span>{{$status}}</span></div>
                        </section>
                        <section>
                            <div class="Transaction__Row-sc-1x7bijr-0 jmnnsf"><span>Giá
                                    vé</span><span>{{number_format($order->trip->price)}}&nbsp;₫</span></div>
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