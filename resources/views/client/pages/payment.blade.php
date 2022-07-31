<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form class="form" action="{{route("handlePayment")}}" method="POST">
            @csrf
            <div class="form-group">
                <select class="form-control" name="order_id">
                    <option value="">Chọn đơn hàng</option>
                    @foreach ($allOrders as $item)
                        <option value="{{$item->id}}">{{$item->id}} - {{number_format($item->price)}}vnđ</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="d-flex">
                    <input type="radio" name="payment_method" value="COD" id="payment_cod">
                    <label for="payment_cod">Thanh toán tại văn phòng</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="payment_method" value="MOMO" id="payment_momo">
                    <label for="payment_momo">Thanh toán bằng momo</label>
                </div>
                <div class="d-flex">
                    <input type="radio" name="payment_method" value="VNPAY" id="payment_vnpay">
                    <label for="payment_vnpay">Thanh toán bằng vnpay</label>
                </div>
            </div>
            <button class="btn btn-primary">Thanh toán</button>
        </form>
    </div>
</body>

</html>