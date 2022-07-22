var createTrip = {
    tripController: function () {
        $("#selectVehicle").change(this.handleChangeVehicle)
        $("#create_reset").click(this.handleReset)
        createTrip.handleCreate();
    },
    handleCreate() {
        const form = document.getElementById("form_create_trip");
        const buttomSubmit = form.querySelector("#create_submit");
        t = FormValidation.formValidation(form, {
            fields: {
                fromProvince: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn thành phố đi"
                        }
                    }
                },
                toProvince: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn thành phố đến"
                        }
                    }
                },
                fromStation: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn bến xe đi"
                        }
                    }
                },
                toStation: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn bến xe đến"
                        }
                    }
                },
                start_date: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn ngày khởi hành"
                        }
                    }
                },
                price: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập giá vé"
                        },
                        greaterThan: {
                            min: 1,
                            message: 'Giá tiền phải lớn hơn 0'
                        }
                    }
                },
                selectVehicle: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn xe khách"
                        }
                    }
                },
                selectDriver: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng chọn tài xế cho chuyến xe"
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                submitButton: new FormValidation.plugins.SubmitButton,
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: ""
                })
            }
        }).on('core.form.valid', function () {
            buttomSubmit.setAttribute("data-kt-indicator", "on")
            buttomSubmit.disabled = true;
            const fromProvince = $("#fromProvince");
            const toProvince = $("#toProvince");
            const fromStation = $("#fromStation");
            const toStation = $("#toStation");
            const start_date = $("#start_date");
            const price = $("#price");
            const status = $("#status");
            const selectDriver = $("#selectDriver");
            const selectVehicle = $("#selectVehicle");
            const data = {
                'from_district_id': fromProvince.val(),
                'to_district_id': toProvince.val(),
                'address_start': fromStation.val(),
                'address_end': toStation.val(),
                'start_date': start_date.val(),
                'price': price.val(),
                'driver_id': selectDriver.val(),
                'vehicle_id': selectVehicle.val().split("-")[0].split("_")[1],
            }
            if (status.is(":checked")) {
                data.status = "active";
            }
            $.ajax({
                url: `/trip`,
                type: 'POST',
                data,
                success: function (res) {
                    Swal.fire({
                        text: res.message,
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Đồng ý",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                    createTrip.handleReset();
                },
                error: function (error) {
                    console.log(t);
                    Swal.fire({
                        text: error.responseJSON.message,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Đồng ý",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                },
                complete: function () {
                    buttomSubmit.removeAttribute("data-kt-indicator")
                    buttomSubmit.disabled = false;
                }
            });
        });
        $(form.querySelector('[name="fromProvince"]')).on("change", () => {
            t.revalidateField("fromProvince")
        });
        $(form.querySelector('[name="toProvince"]')).on("change", () => {
            t.revalidateField("toProvince")
        });
        $(form.querySelector('[name="selectVehicle"]')).on("change", () => {
            t.revalidateField("selectVehicle")
        });
        $(form.querySelector('[name="selectDriver"]')).on("change", () => {
            t.revalidateField("selectDriver")
        })
    },
    handleChangeVehicle(e) {
        const company_id = e.target.value.split("-")[1].split("_")[1];
        const selectDriver = $("#selectDriver");
        selectDriver.attr("disabled", true);
        $.ajax({
            url: `/driver/getDriverByCompany/${company_id}`,
            type: 'GET',
            success: function (res) {
                let contentHTML = `<option value="">Chọn tài xế</option>`;
                contentHTML += res.drivers.map((driver) => {
                    return `<option value="${driver.id}">${res.company} - ${driver.name} - ${driver.phone} - ${driver.drivingExperience} năm kinh nghiệm</option>`
                });
                selectDriver.html(contentHTML);
                selectDriver.removeAttr("disabled");
            }
        });
    },
    handleReset() {
        const fromProvince = $("#fromProvince");
        const toProvince = $("#toProvince");
        const fromStation = $("#fromStation");
        const toStation = $("#toStation");
        const start_date = $("#start_date");
        const price = $("#price");
        const selectDriver = $("#selectDriver");
        const selectVehicle = $("#selectVehicle");
        fromProvince.val("");
        toProvince.val("");
        fromStation.val("");
        toStation.val("");
        start_date.val("");
        price.val(0);
        selectDriver.val("");
        selectVehicle.val("");
        fromProvince.select2({
            allowClear: true
        });
        toProvince.select2({
            allowClear: true
        });
        selectDriver.select2({
            allowClear: true
        });
        selectVehicle.select2({
            allowClear: true
        });
        selectDriver.select2({
            allowClear: true
        });
    }
};
$(document).ready(function () {
    createTrip.tripController();
});