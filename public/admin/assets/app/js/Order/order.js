"use strict";
var KTOrder = (function () {
    var form;
    var formModal;
    var validator;
    var modal;
    var submitFromModal;
    var cancelFormModal;
    var route;
    var startDate;
    var eleInformationTrip;
    var eleListSeat;
    var eleListTime;
    var eleInformationSeats;
    var refresh;
    var arraySeat;
    var trip_id;
    var timeOutRefresh;
    var timeTimeDown;
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
        eleInformationSeats.classList.add("d-none");
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
                renderTrip(success.data);
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
    const renderTrip = (data) => {
        const contentHTML = data
            .map(
                (
                    item
                ) => `<div class="time-item p-3 border border-1 rounded w-150px" data-id="${item.trip_id}">
            <span class="time-title fs-3 fw-bold">${item.time}</span>
            <div class="time-seat d-flex justify-content-between">
                <span>------</span>
                <span class="time-seat-couter">
                    <b class="fs-4 fw-bold">${item.total_number_of_seats_booked}</b>/${item.total_number_seats}
                </span>
            </div>
            <div class="progress">
                <div class="progress__percent" style="width: ${(100 * item.total_number_of_seats_booked / item.total_number_seats).toFixed(0)}%"></div>
            </div>
        </div>`
            )
            .join("");
        eleListTime.innerHTML = contentHTML;
        const eleTimes = document.querySelectorAll(".time-item");
        eleTimes.forEach((ele) =>
        ele.addEventListener("click", (e) => {
                eleTimes.forEach((ele)=> ele.classList.remove("select"))
                e.target.closest(".time-item").classList.add("select")
                const tripId = e.target.closest(".time-item").dataset.id;
                trip_id = tripId;
                arraySeat.clear();
                document
                    .querySelector("#loading_overlay")
                    .classList.add("show");
                handleGetInforTrip();
            })
        );
    };

    const millisToMinutesAndSeconds = (millis) => {
        const date = new Date(parseInt(millis));
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();
        return minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
    };
    const handleGetInforTrip = () => {
        $.ajax({
            method: "GET",
            url: `/trip/${trip_id}`,
            success: (success) => {
                const contentHTML = success.data.seats
                    .map((item) => {
                        let typeHightlight = "";
                        if (item.status === "wait") {
                            typeHightlight = "seat-item-blocking";
                        } else if(item.status === "paymented") {
                            typeHightlight = "seat-item-success";
                        }  else if (item.time) {
                            typeHightlight = "seat-item-pause";
                        }
                        const select = arraySeat.has(item.id.toString())
                            ? "select"
                            : "";
                        return `<div class="col-md-4 col-xl-3 col-xxl-2 mb-2 px-1 ${select}" id="seat_item" data-id="${
                            item.id
                        }">
                            <div class="seat-item ${typeHightlight} h-200px h-xl-250px p-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="seat-name">${item.name}</h2>
                                    ${
                                        item.time
                                            ? `<div class="seat-time-pause fw-bold fs-5" data-time="${
                                                  item.time
                                              }">
                                               ${millisToMinutesAndSeconds(
                                                  item.time
                                              )}</div>`
                                            : ""
                                    }
                                </div>
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
                                        : `<div class="seat-action d-flex justify-content-between align-items-center">
                                        <span id="book_seat" class="seat-action-item border border-2 d-flex flex-center border border-white text-white">B</span>
                                        ${
                                            item.author
                                                ? `<div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                                  </svg> ${item.author}</div>`
                                                : ""
                                        }
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
                eleInformationSeats.classList.remove("d-none");

                renderDataModal(success.data);
                addTimeInterval();
                
                document
                    .querySelectorAll("#seat_item")
                    .forEach((item) =>
                        item.addEventListener("click", selectSeat)
                    );
                document
                    .querySelectorAll("#book_seat")
                    .forEach((item) =>
                        item.addEventListener("click", handleBookSeat)
                    );
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
    const renderDataModal = (data)=>{
        const startDateModal = $(formModal.querySelector("[name='start_date_modal']"));
        startDateModal.flatpickr({
            dateFormat: "m-d-Y",
            defaultDate: new Date(data.date_start),
            locale: "vn",
        });
        const dateOfBirthday = $(formModal.querySelector("[name='dateOfBirthday']"));
        dateOfBirthday.flatpickr({
            dateFormat: "d-m-Y",
            locale: "vn",
        });
        const departureSameWayRoute = formModal.querySelector("[name='departureSameWayRoute']");
        const destinationSameWayRoute = formModal.querySelector("[name='destinationSameWayRoute']");
        const price = formModal.querySelector("[name='price']");
        const arraySameWayRouteDeparture = data.route_area.list_departure_route.map((item)=> `<option value="${item.id}">${item.name}</option>`);
        const arraySameWayRouteDestination = data.route_area.list_destination_route.map((item)=> `<option value="${item.id}">${item.name}</option>`);
        arraySameWayRouteDeparture.unshift(`<option value="0">${data.route_area.departure_route}</option>`)
        arraySameWayRouteDestination.unshift(`<option value="0">${data.route_area.destination_route}</option>`)
        departureSameWayRoute.innerHTML = arraySameWayRouteDeparture.join("");
        destinationSameWayRoute.innerHTML = arraySameWayRouteDestination.join("");
        price.value = data.price;

        document.querySelector(
            "#information_trip_modal"
        ).innerHTML = `${data.time_start} ${data.route} (${data.total_trip_of_route}) ${data.date_start}`;
    }
    const checkTimeRefreshInformation = () => {
        timeOutRefresh = setTimeout(() => {
            handleGetInforTrip();
        }, 2000);
    };

    const addTimeInterval = () => {
        const times = document.querySelectorAll(".seat-time-pause");
        times.forEach((item) => {
            const timeInterval = setInterval(() => {
                item.dataset.time -= 1000;
                item.innerHTML =
                    item.dataset.time < 1000
                        ? "0:00"
                        : millisToMinutesAndSeconds(item.dataset.time);
                if (item.dataset.time <= 1000) {
                    clearInterval(timeInterval);
                    if (timeOutRefresh) {
                        clearTimeout(timeOutRefresh);
                    }
                    checkTimeRefreshInformation();
                }
            }, 1000);
        });
    };

    const handleRefreshInformation = () => {
        document.querySelector("#loading_overlay").classList.add("show");
        handleGetInforTrip();
        arraySeat.clear();
    };

    const selectSeat = (e) => {
        const seatId = e.target.closest("#seat_item").dataset.id;
        if (arraySeat.has(seatId)) {
            arraySeat.delete(seatId);
            e.target.closest("#seat_item").classList.remove("select");
        } else {
            arraySeat.add(seatId);
            e.target.closest("#seat_item").classList.add("select");
        }
    };

    const handleBookSeat = (e) => {
        console.log(arraySeat);
        e.stopPropagation();
        const seatId = e.target.closest("#seat_item").dataset.id;
        const array = Array.from(arraySeat);
        const checkExist = array.includes(seatId);
        if (!checkExist) {
            return toastr.error(
                "Vui lòng chọn ghế mới được booking",
                "Thất bại"
            );
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
                document
                    .querySelector("#loading_overlay")
                    .classList.add("show");
                const eleListNameSeat =
                    document.querySelector("#list_name_seat");
                const eleCountSeat = document.querySelector("#count_seat");
                const eleTimeDown = document.querySelector("#time_down");
                eleListNameSeat.innerHTML = success.data
                    .map(
                        (item) =>
                            `<button class="mx-1 py-2 px-4 btn btn-dark">${item}</button>`
                    )
                    .join("");
                const totalPrice = formModal.querySelector("[name='total_price']");
                totalPrice.value = success.total_price;
                eleCountSeat.innerHTML = arraySeat.size;
                eleTimeDown.setAttribute("data-timedown", success.time);
                eleTimeDown.innerHTML = millisToMinutesAndSeconds(success.time);
                if (timeTimeDown) {
                    clearInterval(timeTimeDown);
                }
                timeTimeDown = setInterval(() => {
                    eleTimeDown.dataset.timedown -= 1000;
                    eleTimeDown.innerHTML = millisToMinutesAndSeconds(
                        eleTimeDown.dataset.timedown
                    );
                }, 1000);
                handleGetInforTrip();
                $("#form_order").modal("show");
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại", {
                    timeOut: 7000,
                });
            },
            complete: () => {
                document
                    .querySelector("#loading_overlay")
                    .classList.remove("show");
            },
        });
    };
    const handleFormModal = () => {
        validator = FormValidation.formValidation(
            formModal,
            {
                fields: {
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số điện thoại người đặt'
                            }
                        }
                    },
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên khách hàng'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
        submitFromModal.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitFromModal.setAttribute('data-kt-indicator', 'on');
                        submitFromModal.disabled = true;
                        $.ajax({
                            method: "POST",
                            url: "/order",
                            data: {
                                "trip_id": trip_id,
                                "departure_id": $(formModal.querySelector("[name='departureSameWayRoute']")).val(),
                                "destination_id": $(formModal.querySelector("[name='destinationSameWayRoute']")).val(),
                                "seats": Array.from(arraySeat),
                                "discount_code" : $(formModal.querySelector("[name='discountCode']")).val(),
                                "name": $(formModal.querySelector("[name='name']")).val(),
                                "email": $(formModal.querySelector("[name='email']")).val(),
                                "phone": $(formModal.querySelector("[name='phone']")).val(),
                                "methodPayment": $(formModal.querySelector("[name='methodPayment']")).val(),
                                "sendEmail": formModal.querySelector("[name='sendEmail']").checked,
                                "sendPhone": formModal.querySelector("[name='sendPhone']").checked,
                                "received_ticket": formModal.querySelector("[name='received_ticket']").checked,
                            },
                            success: (success) => {
                                handleGetInforTrip();
                                toastr.success(success.message, "Thành công");
                                modal.hide();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitFromModal.removeAttribute('data-kt-indicator');
                                submitFromModal.disabled = false;
                            }
                        })
                    }
                });
            }
        });
        cancelFormModal.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
                text: "Bạn có chắc chắn thực hiện hành động này?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    modal.hide(); // Hide modal				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }
    return {
        init: function () {
            const modalEl = document.querySelector('#form_order');
            if (!modalEl) {
                return;
            }
            modal = new bootstrap.Modal(modalEl);
            form = document.querySelector("#form_filter");
            formModal = document.querySelector("#form_order");
            eleInformationTrip = document.querySelector("#information_trip");
            eleListSeat = document.querySelector("#list_seat");
            eleListTime = document.querySelector("#list_time");
            startDate = form.querySelector('[name="start_date"]');
            route = form.querySelector('[name="route"]');
            refresh = document.querySelector("#refresh");
            eleInformationSeats = document.querySelector("#information_seats");
            submitFromModal = document.querySelector("#form_submit_modal");
            cancelFormModal = document.querySelector("#form_cancel_modal");
            refresh.addEventListener("click", handleRefreshInformation);
            initOrder();
            handleFormModal();
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTOrder.init();
});
