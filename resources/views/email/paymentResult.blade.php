<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background-color:#1365af;padding:15px 5px 15px"><div class="adM">
    </div><div style="max-width:600px;margin:0 auto;font-family:Arial,sans-serif"><div class="adM">
      </div><div style="background-color:#fff"><div class="adM">
        </div><div style="text-align:center;padding-top:10px"><div class="adM">
          </div><img src="https://ci6.googleusercontent.com/proxy/O9CKGThGurSki7VPEA8jklBQTXEGjPCG6yc9P3TKm3PkopQJsTFzc64be1mCSZUMfolfi6o4pqmiy4LGAF-18AdEd4YKI0qTvBGbvQ=s0-d-e1-ft#https://static.vexere.com/webnx/prod/img/tra-lan-vien.png" alt="" width="200px" style="max-height:100px;object-fit:contain" class="CToWUd" data-bit="iit" jslog="138226; u014N:xr6bB; 53:W2ZhbHNlLDJd">
        </div>
        <div>
      <img src="https://ci6.googleusercontent.com/proxy/xzqK7eT3jtq920-KusEninFa_vtRUjCQq2wO0Ab65ep5talHqA5qK4e022SU-T-dplOSiWZsCG_DyEsnpcQR=s0-d-e1-ft#https://static.vexere.com/images/divider.png" alt="divider" width="100%" style="max-height:40px" class="CToWUd" data-bit="iit">
    </div>
        <div style="padding:10px 25px;font-family:arial,sans-serif;font-size:14px;line-height:24px">
          <div style="border:1px solid #1e62a3;border-radius:5px;width:100%">
            <div style="border-top-left-radius:5px;border-top-right-radius:5px;background-color:#1d65b1;width:100%">
              <table style="width:100%">
                <tbody><tr>
                  <td style="width:100%">
                    <div style="float:left;padding:5px">
                      <img src="https://ci6.googleusercontent.com/proxy/O9CKGThGurSki7VPEA8jklBQTXEGjPCG6yc9P3TKm3PkopQJsTFzc64be1mCSZUMfolfi6o4pqmiy4LGAF-18AdEd4YKI0qTvBGbvQ=s0-d-e1-ft#https://static.vexere.com/webnx/prod/img/tra-lan-vien.png" alt="" height="40px" class="CToWUd" data-bit="iit" jslog="138226; u014N:xr6bB; 53:W2ZhbHNlLDJd">
                    </div>
                    <div style="float:right;width:240px;color:#ffffff;font-size:1.2em;font-weight:bold;text-align:right;padding:10px 5px">
                      <span>
                          MÃ ĐƠN HÀNG:
                      </span> <span style="color:#fdb813">{{$order->orderCode}}</span>
                    </div>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <div style="background-color:#fff;padding-bottom:15px">
              <div style="padding-left:15px;padding-right:15px">
                <h3 style="font-size:1.7em;color:#1e62a3;text-align:center;margin:10px 0">
                  Thông tin đơn hàng
                </h3>
                <table style="width:100%;vertical-align:text-top;font-size:13px;color:#000;line-height:20px;font-family:Arial,sans-serif">
                  <tbody><tr>
                    <td style="width:35%;padding:5px">Hãng xe:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->trip->passengerCarCompany->name}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Loại xe:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->trip->vehicle->rangeOfVehicle->type}} {{$order->trip->vehicle->countSeat}} chỗ ngồi</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Điểm đón:</td>
                    <td style="width:65%;padding:5px">
                        @if($order->departure_same_way_route_id)
                            <b>{{$order->departureSameWayRoute->name}}</b><br>
                            {{$order->departureSameWayRoute->address}}
                        @else
                            <b>{{$order->trip->route->departure_name}}</b><br>
                            {{$order->trip->route->departure_address}}
                        @endif
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Giờ đón (dự kiến):</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->time}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Điểm trả:</td>
                    <td style="width:65%;padding:5px">
                        @if($order->destination_same_way_route_id)
                            <b>{{$order->destinationSameWayRoute->name}}</b><br>
                            {{$order->destinationSameWayRoute->address}}
                        @else
                            <b>{{$order->trip->route->destination_name}}</b><br>
                            {{$order->trip->route->destination_address}}
                        @endif  
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Số ghế/giường:</td>
                    <td style="width:65%;padding:5px">
                      <strong>{{$seats}}</strong> (Giá vé: {{number_format($order->trip->price)}} VND/1 vé) <br>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Tuyến:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->trip->route->departureDistrict->name . ' - ' . $order->trip->route->destinationDistrict->name}}</b><br>
                      (xuất phát {{$order->time}})
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Giảm giá:</td>
                    <td style="width:65%;padding:5px">
                      <strong>{{number_format($order->discount)}} VND</strong>
                    </td>
                  </tr>
                  <tr style="font-size:16px;font-weight:bold">
                    <td style="width:35%;padding:10px 5px;color:#1e62a3">Tổng tiền:</td>
                    <td style="width:65%;padding:10px 5px;color:#fd8017">{{number_format($order->price)}} VND</td>
                  </tr></tbody></table>
                <hr>
                <h3 style="font-size:1.7em;color:#1e62a3;text-align:center;margin:10px 0">
                  Thông tin liên hệ
                </h3>
                <table style="width:100%;vertical-align:text-top;font-size:13px;color:#000;line-height:20px;font-family:Arial,sans-serif">
                  <tbody><tr>
                    <td style="width:35%;padding:5px">Biển số xe:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->trip->vehicle->licensePlates}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Số điện thoại phụ xe:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$driversAssitantPhone}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Số điện thoại tài xế:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$driversPhone}}</b>
                    </td>
                  </tr>
                </tbody></table>
                <div>
                  <span>
                      <i><b>Lưu ý: </b>
                          Kế hoạch của nhà xe có thể thay đổi về thông tin xe (biển số xe, số tài) trước giờ khởi hành. Để biết thêm thông tin chi tiết, quý khách vui lòng liên hệ Hotline nhà xe
                      </i>
                  </span>
                </div>
                <hr>
                <h3 style="font-size:1.7em;color:#1e62a3;text-align:center;margin:10px 0">
                  Thông tin hành khách
                </h3>
                <table style="width:100%;vertical-align:text-top;font-size:13px;color:#000;line-height:15px">
                  <tbody><tr>
                    <td style="width:35%;padding:5px">Họ tên:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->customer->name}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Điện thoại:</td>
                    <td style="width:65%;padding:5px">
                      <b>{{$order->customer->phone}}</b>
                    </td>
                  </tr>
                  <tr>
                    <td style="width:35%;padding:5px">Hình thức T.T:</td>
                    <td style="width:65%;padding:5px">
                        @switch($order->paymentMethod)
                            @case("MOMO")
                                <b>Online / Ví Momo</b>
                                @break
                                @case("VNPAY")
                                <b>Online / Ví VNPay</b>
                                @break
                                @case("ZALOPAY")
                                <b>Online / Ví Zalo pay</b>
                                @break
                                @default
                                <b>Online</b>
                        @endswitch
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" style="width:100%;padding:10px 5px;text-align:center">
                      <img src="https://ci3.googleusercontent.com/proxy/NZ7PAvmZYEi4Ac6S-zgxZT0_DrfHPxz5zHL-dGVNCmsYOMUboyZGzxbFjSUfdn89hqR7-dmo-RQa_MOyxH2sZ5Lu=s0-d-e1-ft#https://static.vexere.com/images/paid-stamp.png" alt="đã thanh toán" width="184px" class="CToWUd" data-bit="iit">
                    </td>
                  </tr>
                </tbody>
              </table>
              </div>
            </div>
            <div style="background-color:#1d65b1;color:#ffffff;line-height:24px;padding:5px 15px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;font-size:12px">
              <table style="width:100%">
                <tbody><tr>
                  <td style="width:100%;color:#fff">
                    <div style="float:left">
                      <span>Hotline: 02583528079, 0914592728</span>
                    </div>
                    <div style="float:right">
                      <span>E-Ticket: 18:59 04/07/2022</span>
                    </div>
                  </td>
                </tr>
              </tbody></table>
            </div>
          </div>
        </div>
        <div>
      <img src="https://ci6.googleusercontent.com/proxy/xzqK7eT3jtq920-KusEninFa_vtRUjCQq2wO0Ab65ep5talHqA5qK4e022SU-T-dplOSiWZsCG_DyEsnpcQR=s0-d-e1-ft#https://static.vexere.com/images/divider.png" alt="divider" width="100%" style="max-height:40px" class="CToWUd" data-bit="iit">
    </div>
        <div class="adL">
      </div></div><div class="adL">
    </div></div><div class="adL">
    </div></div>
</body>
</html>