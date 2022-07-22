var createCompany = {
    companyController: function () {
        $("#create_reset").click(createCompany.handleReset)
        createCompany.handleCreate();
    },
    handleCreate() {
        const form = document.getElementById("form_create_company");
        const buttomSubmit = form.querySelector("#create_submit");
        t = FormValidation.formValidation(form, {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập tên công ty"
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập số điện thoại"
                        },
                        regexp: {
                            regexp: /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/,
                            message: "Số điện thoại không hợp"
                        }
                    }
                },
                numberLicense: {
                    validators: {
                        notEmpty: {
                            message: "Vui lòng nhập mã số thuế"
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
            const formData = new FormData(form);
            $.ajax({
                url: `/passengerCarCompany`,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
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
                    createCompany.handleReset();
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
    },
    handleReset() {
        const name = $("#name");
        const phone = $("#phone");
        const numberLicense = $("#numberLicense");
        name.val("");
        phone.val("");
        numberLicense.val("");
    }
};
$(document).ready(function () {
    createCompany.companyController();
});