@extends('client.pages.information.layout')
@section('content-information')
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Hiện tại</a>
      <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đã đi</a>
      <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Đã huỷ</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        @foreach ($ticketCurrent as $item)
            <div class="trip-item">
                <p class="trip-date">{{$item->time}}</p>
                <div class="trip-content">
                    <h2 class="trip-time">{{$item->hours}}</h2>
                    <p>{{$item->trip->passengerCarCompany->name}}</p>
                    <p>{{$item->route}}</p>
                    <p>Biển số xe <b>{{$item->trip->vehicle->licensePlates}}</b></p>
                    <span class="trip-status pending">Đang chuẩn bị</span>
                </div>
            </div>
        @endforeach
        @if($ticketCurrent->count() <= 0)
            <p class="text-center mt-3">Bạn chưa có chuyến sắp đi nào, <a href="{{route('client.home')}}">đặt vé ngay</a></p>
        @endif
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
        @foreach ($completed as $item)
            <div class="trip-item">
                <p class="trip-date">{{$item->time}}</p>
                <div class="trip-content">
                    <h2 class="trip-time">{{$item->hours}}</h2>
                    <p>{{$item->trip->passengerCarCompany->name}}</p>
                    <p>{{$item->route}}</p>
                    <p>Biển số xe <b>{{$item->trip->vehicle->licensePlates}}</b></p>
                    <span class="trip-status success">Đã hoàn thành</span>
                </div>
            </div>
        @endforeach
        @if($completed->count() <= 0)
            <p class="text-center mt-3">Chưa có chuyến đi nào</p>
        @endif
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        @foreach ($canceled as $item)
            <div class="trip-item">
                <p class="trip-date">{{$item->time}}</p>
                <div class="trip-content">
                    <h2 class="trip-time">{{$item->hours}}</h2>
                    <p>{{$item->trip->passengerCarCompany->name}}</p>
                    <p>{{$item->route}}</p>
                    <p>Biển số xe <b>{{$item->trip->vehicle->licensePlates}}</b></p>
                    <span class="trip-status error">Đã huỷ</span>
                </div>
            </div>
        @endforeach
        @if($canceled->count() <= 0)
            <p class="text-center mt-3">Chưa có chuyến đi nào</p>
        @endif
    </div>
  </div>
@endsection