"use strict";

var KTCommon = (function () {
    var select_departure;
    var select_destination;
    var select_date;
    var btn_find;
    var btn_login;
    var btn_verification;
    var formLogin;
    var formVerification;
    var timeInterval;
    var initHome = function () {
        $("#select_date").flatpickr({
            dateFormat: "m-d-Y",
            minDate: new Date(),
            defaultDate: new Date(),
            locale: "vn",
            positionElement: document.querySelector("#element_date"),
        });
        $("#element_departure").on("click", function () {
            select_departure.classList.add("active");
            select_destination.classList.remove("active");
        });
        $("#element_destination").on("click", function () {
            select_destination.classList.add("active");
            select_departure.classList.remove("active");
        });
        $("#element_date").on("click", function () {
            select_departure.classList.remove("active");
            select_destination.classList.remove("active");
        });
        $(document).on("click", function (event) {
            const array = [
                "#element_departure",
                "#select_departure",
                "#element_destination",
                "#select_destination",
            ];
            const result = array.filter(
                (item) => $(event.target).closest(item).length > 0
            );
            if (result.length === 0) {
                select_departure.classList.remove("active");
                select_destination.classList.remove("active");
            }
        });
        $(btn_find).on("click", handleFindTicket);
    };
    const millisToMinutesAndSeconds = (millis) => {
        const date = new Date(parseInt(millis));
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();
        return minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
    };
    const handleFindTicket = (e) => {
        e.preventDefault();
        btn_find.disabled = true;
        btn_find.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Tìm vé`;
    };
    const handleLoginForm = () => {
        FormValidation.formValidation(formLogin, {
            fields: {
                phone: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập số điện thoại",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: "fa fa-check",
                    invalid: "fa fa-times",
                    validating: "fa fa-refresh",
                }),
            },
        }).on("core.form.valid", function () {
            handleVerification();
            otpSend();
        });
    };
    const handleVerification = () => {
        FormValidation.formValidation(formVerification, {
            fields: {
                code: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập mã code",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: "fa fa-check",
                    invalid: "fa fa-times",
                    validating: "fa fa-refresh",
                }),
            },
        }).on("core.form.valid", function () {
            otpVerify();
        });
    };
    function otpSend() {
        const phone = $(formLogin.querySelector("[name='phone']")).val();
        btn_login.disabled = true;
        btn_login.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Tiếp tục`;
        $.ajax({
            method: "POST",
            url: "/login",
            data: {
                phone: phone,
            },
            success: (success) => {
                toastr.success(success.message, "Thành công");
                $(formVerification.querySelector("#minutes")).attr(
                    "data-time",
                    success.time
                );
                if (timeInterval) {
                    clearInterval(timeInterval);
                }
                let timeExpiry = success.time;
                timeInterval = setInterval(() => {
                    const eleMinutes = formVerification.querySelector("#minutes");
                    timeExpiry -= 1000;
                    eleMinutes.innerHTML = millisToMinutesAndSeconds(timeExpiry);
                    if (timeExpiry < 1000) {
                        eleMinutes.innerHTML = "";
                        formVerification.querySelector(".form-verification-resend").disabled = false;
                        clearInterval(timeInterval);
                    }
                }, 1000);
                $("#modal-login").modal("hide");
                $("#modal-verification").modal("show");
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            },
            complete: () => {
                btn_login.disabled = false;
                btn_login.innerHTML = `Tiếp tục`;
            },
        });
    }

    function otpVerify() {
        const code = $(formVerification.querySelector("[name='code']")).val();
        const phone = $(formLogin.querySelector("[name='phone']")).val();
        btn_verification.disabled = true;
        btn_verification.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Tiếp tục`;
        $.ajax({
            method: "POST",
            url: "/check-verification",
            data: {
                phone,
                code,
            },
            success: (success) => {
                toastr.success(success.message, "Thành công", {
                    timeOut: 1000,
                    onHidden: function () {
                        location.reload();
                    },
                });
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
                btn_verification.disabled = false;
                btn_verification.innerHTML = `Tiếp tục`;
            }
        });
    }

    function resend() {
        const phone = $(formLogin.querySelector("[name='phone']")).val();
        $.ajax({
            method: "POST",
            url: "/send-new-code",
            data: {
                phone: phone,
            },
            success: (success) => {
                toastr.success(success.message, "Thành công");
                $(formVerification.querySelector("#minutes")).attr(
                    "data-time",
                    success.time
                );
                formVerification.querySelector(".form-verification-resend").disabled = true;
                if (timeInterval) {
                    clearInterval(timeInterval);
                }
                let timeExpiry = success.time;
                timeInterval = setInterval(() => {
                    const eleMinutes = formVerification.querySelector("#minutes");
                    timeExpiry -= 1000;
                    eleMinutes.innerHTML = millisToMinutesAndSeconds(timeExpiry);
                    if (timeExpiry < 1000) {
                        eleMinutes.innerHTML = "";
                        formVerification.querySelector(".form-verification-resend").disabled = false;
                        clearInterval(timeInterval);
                    }
                }, 1000);
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            }
        });
    }
    
    return {
        init: function () {
            select_departure = document.querySelector("#select_departure");
            select_destination = document.querySelector("#select_destination");
            select_date = document.querySelector("#select_date");
            btn_find = document.querySelector("#btn_find");
            btn_login = document.querySelector("#button_login");
            btn_verification = document.querySelector("#button_verification");
            formLogin = document.querySelector("#form-login");
            formVerification = document.querySelector("#form-verification");
            formVerification.querySelector(".form-verification-resend").addEventListener("click", resend);
            handleLoginForm();
            initHome();
        },
    };
})();

$(document).ready(function () {
    KTCommon.init();
});
