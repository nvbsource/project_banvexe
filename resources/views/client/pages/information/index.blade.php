@extends('client.pages.information.layout')
@section('content-information')
<form action="{{route('client.change')}}" class="form" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            @if(Session::has("success"))
                <div class="alert alert-success col-12">{{Session::get("success")}}</div>
            @endif
            @if($errors->any())
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger col-12">{{$item}}</div>
                    @break
                @endforeach
            @endif
            <div class="col-md-12 p-0">
                <div class="form-group w-100">
                    <label for="#">Họ và tên</label>
                    <input type="text" name="name" class="form-control border" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-md-6 p-0 pr-3">
                <div class="form-group w-100">
                    <label for="#">Số điện thoại</label>
                    <input type="text" class="form-control border" value="{{$user->phone}}" disabled>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="form-group w-100">
                    <label for="#">Email</label>
                    <input type="text" class="form-control border" value="{{$user->email}}" disabled>
                </div>
            </div>
            <div class="col-md-6 p-0 pr-3">
                <div class="form-group w-100">
                    <label for="#">Ngày sinh</label>
                    <input type="date" name="birthday" class="form-control border" value="{{$user->birthday}}">
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="form-group w-100">
                    <label for="#">CMND/CCCD</label>
                    <input type="text" name="idCard" class="form-control border" value="{{$user->idCard}}">
                </div>
            </div>
            <button class="form-login-button form-change-information">Thay đổi</button>
        </div>
    </div>
</form>
@endsection