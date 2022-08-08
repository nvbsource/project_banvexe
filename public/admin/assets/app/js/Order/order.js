"use strict";
var KTOrder = (function () {
    var form;
    var route;
    var startDate;
    var eleInformationTrip;
    var eleListSeat;
    var eleListTime;
    var eleInformationSeats;
    var refresh;
    var arraySeat;
    var trip_id;
    var initOrder = function () {
        startDate.flatpickr({
            minDate: "today",
            dateFormat: "d-m-Y",
            defaultDate: new Date(),
            locale: "vn",
        });
        arraySeat = new Set();
        $(route).on("select2:select", handleChangeRoute);
        $(startDate).change(handleChangeStartDate);
    };
    const handleChangeRoute = (e) => {
        const valueRoute = e.target.value;
        const dateDMY = startDate.value.split("-");
        const valueDate = `${dateDMY[2]}-${dateDMY[1]}-${dateDMY[0]}`;
        startDate.focus();
        if (valueRoute && valueDate) {
            handleSearchTrip(valueRoute, valueDate);
        }
    };
    const handleChangeStartDate = (e) => {
        const value = e.target.value;
        const valueRoute = route.value;
        const dateDMY = value.split("-");
        const valueDate = `${dateDMY[2]}-${dateDMY[1]}-${dateDMY[0]}`;
        if (valueRoute && valueDate) {
            handleSearchTrip(valueRoute, valueDate);
        }
    };
    const resetContent = () => {
        eleInformationTrip.innerHTML = "";
        eleListSeat.innerHTML = "";
        eleListTime.innerHTML = "";
        eleInformationSeats.classList.add("d-none")
    };
    const handleSearchTrip = (routeId, startDate) => {
        document.querySelector("#loading_overlay").classList.add("show");
        resetContent();
        $.ajax({
            method: "GET",
            url: `/trip/search`,
            data: {
                route_id: routeId,
                start_date: startDate,
            },
            success: (success) => {
                toastr.success(success.message, "Thành công", {
                    timeOut: 3000,
                });
                renderTime(success.data);
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            },
            complete: () => {
                document
                    .querySelector("#loading_overlay")
                    .classList.remove("show");
            },
        });
    };
    const renderTime = (data) => {
        const contentHTML = data
            .map(
                (
                    item
                ) => `<div class="time-item p-3 border border-2 rounded w-150px" data-id="${item.trip_id}">
            <span class="time-title fs-3 fw-bold">${item.time}</span>
            <div class="time-seat d-flex justify-content-between">
                <span>------</span>
                <span class="time-seat-couter">
                    <b class="fs-4 fw-bold">${item.total_number_of_seats_booked}</b>/${item.total_number_seats}
                </span>
            </div>
        </div>`
            )
            .join("");
        eleListTime.innerHTML = contentHTML;
        const eleTimes = document.querySelectorAll(".time-item");
        eleTimes.forEach((ele) =>
            ele.addEventListener("click", (e) => {
                const tripId = e.target.closest(".time-item").dataset.id;
                trip_id = tripId;
                handleGetInforTrip(tripId);
            })
        );
    };
    const handleGetInforTrip = (tripId) => {
        document.querySelector("#loading_overlay").classList.add("show");
        refresh.setAttribute("data-id", tripId);
        $.ajax({
            method: "GET",
            url: `/trip/${tripId}`,
            success: (success) => {
                toastr.success(success.message, "Thành công", {
                    timeOut: 3000,
                });
                const contentHTML = success.data.seats
                    .map((item) => {
                        return `<div class="col-md-4 col-xl-3 col-xxl-2 mb-2 px-1" id="seat_item" data-id="${item.id}">
                        <div class="seat-item ${
                            item.information ? "seat-item-blocking" : ""
                        } border border-2 h-200px h-xl-250px p-5">
                            <h2 class="seat-name">${item.name}</h2>
                            ${
                                item.information
                                    ? `<div class="seat-infor">
                                <p class="fs-4">250.000vnđ</p>
                                <p>${item.information.name} - ${item.information.phone}</p>
                            </div>
                            <div class="seat-action d-flex gap-2">
                                <div class="seat-action-item border border-2 d-flex flex-center">U</div>
                                <div class="seat-action-item border border-2 d-flex flex-center">M</div>
                                <div class="seat-action-item border border-2 d-flex flex-center">X</div>
                            </div>`
                                    : `<div class="seat-action">
                                    <span id="book_seat" class="seat-action-item border border-2 d-flex flex-center text-white">B</span>
                                </div>`
                            }
                        </div>
                    </div>`;
                    })
                    .join("");
                const contentInformationTrip = `<div class="card mb-5">
                        <div class="information border rounded-2 p-4">
                            <p class="information-route text-primary mb-2">Thuộc chuyến <b>${
                                success.data.time_start
                            }</b> ngày ${success.data.date_start} tuyến <b>${
                    success.data.route
                } (${success.data.total_trip_of_route})</b></p>
                            <div class="information-content d-flex">
                                <div class="information-item">
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Loại xe:</div>
                                        <span class="information-value">${
                                            success.data.rangeOfVehicle
                                        } ${
                    success.data.total_number_seats
                } chổ</span>
                                    </div>
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Số xe:</div>
                                        <span class="information-value">${
                                            success.data.licensePlates
                                        }</span>
                                    </div>
                                </div>
                                <div class="information-item">
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Tài xế:</div>
                                        <span class="information-value">${success.data.driver.driverList
                                            .map((item) => item.name)
                                            .join(", ")}</span>
                                    </div>
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Phụ xe:</div>
                                        <span class="information-value">${success.data.driver.assistantList
                                            .map((item) => item.name)
                                            .join(", ")}</span>
                                    </div>
                                </div>
                                <div class="information-item">
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Tổng số vé đã đặt:</div>
                                        <span class="information-value"><b>${
                                            success.data
                                                .total_number_of_seats_booked
                                        }</b>. số ghế trống <b>${
                    success.data.number_of_seats_available
                }</b></span>
                                    </div>
                                    <div class="information-item-group mb-2 d-flex">
                                        <div class="information-label me-2">Thanh toán:</div>
                                        <span class="information-value"><b>${
                                            success.data
                                                .order_number_has_been_paid
                                        }</b>. hoá đơn <b>${
                    success.data.order_number
                }</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>`;
                eleInformationTrip.innerHTML = contentInformationTrip;
                eleListSeat.innerHTML = contentHTML;
                eleInformationSeats.classList.remove("d-none")
                document.querySelectorAll("#seat_item").forEach(item => item.addEventListener("click", selectSeat))
                document.querySelectorAll("#book_seat").forEach(item => item.addEventListener("click", handleBookSeat))
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            },
            complete: () => {
                document
                    .querySelector("#loading_overlay")
                    .classList.remove("show");
            },
        });
    };
    const handleRefreshInformation = (e) => {
        const tripId = e.target.closest("#refresh").dataset.id;
        handleGetInforTrip(tripId);
    };
    const selectSeat = (e) => {
        const seatId = e.target.closest("#seat_item").dataset.id;
        if(arraySeat.has(seatId)){
            arraySeat.delete(seatId);
            e.target.closest("#seat_item").classList.remove("select");
        }else{
            arraySeat.add(seatId);
            e.target.closest("#seat_item").classList.add("select");
        }
    }
    const handleBookSeat = (e) => {
        e.stopPropagation();
        const seatId = e.target.closest("#seat_item").dataset.id;
        const array = Array.from(arraySeat);
        const checkExist = array.includes(seatId);
        if(!checkExist){
           return toastr.error("Vui lòng chọn ghế mới được booking", "Thất bại");
        }
        $.ajax({
            method: "POST",
            url: `/seat/blockseat`,
            data: {
                trip_id: trip_id,
                seats: array,
            },
            success: (success) => {
                toastr.success(success.message, "Thành công", {
                    timeOut: 3000,
                });
                renderTime(success.data);
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            },
            complete: () => {
                document
                    .querySelector("#loading_overlay")
                    .classList.remove("show");
            },
        });
    }
    return {
        init: function () {
            form = document.querySelector("#form_filter");
            eleInformationTrip = document.querySelector("#information_trip");
            eleListSeat = document.querySelector("#list_seat");
            eleListTime = document.querySelector("#list_time");
            startDate = form.querySelector('[name="start_date"]');
            route = form.querySelector('[name="route"]');
            refresh = document.querySelector("#refresh");
            eleInformationSeats = document.querySelector("#information_seats");
            refresh.addEventListener("click", handleRefreshInformation);
            initOrder();
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTOrder.init();
});
