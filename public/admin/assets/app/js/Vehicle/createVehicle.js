"use strict";

var KTCreateVehicle = function () {
    var form;
    var validator;
    var submitButton;
    var initCreateVehicle = function () {
    }
    var handleForm = function(){
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên văn phòng'
                            }
                        }
                    },
                    licensePlates: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập biển số xe'
                            }
                        }
                    },
                    countSeat: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số ghế'
                            }
                        }
                    },
                    countFloor: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số tầng'
                            },
                            between: {
                                min: 1,
                                max: 2,
                                message: 'Số tầng chỉ nhập 1 hoặc 2'
                            }
                        }
                    },
                    countColumn: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số ghế theo chiều dọc'
                            }
                        }
                    },
                    countRow: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số ghế theo chiều ngang'
                            }
                        }
                    },
                    rangeOfVehicle: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng chọn loại xe'
                            }
                        }
                    },
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
        $(form.querySelector('[name="rangeOfVehicle"]')).on("change", () => {
            validator.revalidateField("rangeOfVehicle")
        })
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        $.ajax({
                            method: "POST",
                            url: "/vehicle",
                            data: {
                                name: $(form.querySelector("[name='name']")).val(),
                                licensePlates: $(form.querySelector("[name='licensePlates']")).val(),
                                countSeat: $(form.querySelector("[name='countSeat']")).val(),
                                countFloor: $(form.querySelector("[name='countFloor']")).val(),
                                numColumn: $(form.querySelector("[name='countColumn']")).val(),
                                numRow: $(form.querySelector("[name='countRow']")).val(),
                                rangeOfVehicle_id: $(form.querySelector("[name='rangeOfVehicle']")).val(),
                            },
                            success: (success) => {
                                toastr.success(success.message, "Thành công", {
                                    timeOut: 1000,
                                    onHidden: function () {
                                        location.reload();
                                    }
                                });
                                modal.hide();
                                form.reset();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                            }
                        })
                    }
                });
            }
        });
    }
    return {
        init: function () {
            form = document.querySelector('#form_create_vehicle');
            submitButton = document.getElementById('form_create_vehicle_submit');
            handleForm();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTCreateVehicle.init();
});