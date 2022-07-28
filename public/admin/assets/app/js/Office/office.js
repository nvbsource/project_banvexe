"use strict";

var KTOffices = function () {
    var tableOffice = document.getElementById('table_office');
    var datatableOffice;
    var form;
    var modal;
    var submitButton;
    var submitEditButton;
    var cancelButton;
    var validator;
    var deletes;
    var initOffices = function () {
        datatableOffice = $(tableOffice).DataTable({
            "info": false,
            'order': [],
            "pageLength": 20,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 },
                { orderable: false, targets: 5 },
            ]
        });
        deletes.forEach((item) => item.addEventListener("click", handleDeleteOffice));
    }
    const handleFormOffice = () => {
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
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập địa chỉ'
                            }
                        }
                    },
                    phone_official: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số điện thoại'
                            }
                        }
                    },
                    phone_reserved: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập số điện thoại'
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
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        $.ajax({
                            method: "POST",
                            url: "/office",
                            data: {
                                name: $(form.querySelector("[name='name']")).val(),
                                address: $(form.querySelector("[name='address']")).val(),
                                phone_official: $(form.querySelector("[name='phone_official']")).val(),
                                phone_reserved: $(form.querySelector("[name='phone_reserved']")).val()
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
        cancelButton.addEventListener('click', function (e) {
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
                    form.reset(); // Reset form	
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
    const handleDeleteOffice = (e) => {
        const id = e.target.dataset.id;
        $.ajax({
            method: "DELETE",
            url: `/office/${id}`,
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
            }
        })
    }
    return {
        init: function () {
            const modalEl = document.querySelector('#form_add_office_modal');
            if (!tableOffice || !modalEl) {
                return;
            }
            modal = new bootstrap.Modal(modalEl);
            form = document.querySelector('#form_office');
            submitButton = document.getElementById('form_add_office_submit');
            cancelButton = document.getElementById('form_add_office_cancel');
            deletes = document.querySelectorAll('#office_delete');
            initOffices();
            handleFormOffice();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTOffices.init();
});