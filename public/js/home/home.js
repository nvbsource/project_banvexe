"use strict";

var KTHome = (function (window) {
    var select_departure;
    var select_destination;
    var select_date;
    var btn_find;
    var formLogin;
    var formVerification;

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
            otpSend();
        });
    };
    function otpSend() {
        const phone = $(formLogin.querySelector("[name='phone']")).val();
        $.ajax({
            method: "POST",
            url: "/login",
            data: {
                phone: phone,
            },
            success: (success) => {
                $("#modal-login").modal("hide")
                $("#modal-verification").modal("show")
            }
        })
    }

    function otpVerify() {
        const code = $(formVerification.querySelector("[name='code']")).val();
       
    }
    return {
        init: function () {
            select_departure = document.querySelector("#select_departure");
            select_destination = document.querySelector("#select_destination");
            select_date = document.querySelector("#select_date");
            btn_find = document.querySelector("#btn_find");
            formLogin = document.querySelector("#form-login");
            formVerification = document.querySelector("#form-verification");
            handleLoginForm();
            initHome();
        },
    };
})(window);

$(document).ready(function () {
    KTHome.init();
});
