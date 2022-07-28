"use strict";

var KTOfficeDetail = function () {
    var tableStaffs = document.getElementById('table_staffs');
    var datatableStaffs;
    var formOffice;
    var formStaff;
    var formEditStaff;
    var modalOffice;
    var modalStaff;
    var modalEditStaff;
    var submitOfficeButton;
    var cancelOfficeButton;
    var submitStaffButton;
    var cancelStaffButton;
    var submitEditStaffButton;
    var cancelEditStaffButton;
    var validatorOffice;
    var validatorStaff;
    var validatorEditStaff;
    var deletes;
    var edits;
    var initOfficeDetail = function () {
        datatableStaffs = $(tableStaffs).DataTable({
            "info": false,
            'order': [],
            "pageLength": 5,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 },
                { orderable: false, targets: 4 },
            ]
        });
        deletes.forEach((item) => item.addEventListener("click", handleDeleteStaffs));
        edits.forEach((item) => item.addEventListener("click", handleEditStaff));
    }
    const handleFormEditStaff = () => {
        validatorEditStaff = FormValidation.formValidation(
            formEditStaff,
            {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên nhân viên'
                            }
                        }
                    },
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tài khoản'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập mật khẩu'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập địa chỉ email nhận tài khoản'
                            }
                        }
                    },
                    role: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng chọn loại nhân viên'
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
        $(formEditStaff.querySelector('[name="role"]')).on('change', function () {
            validatorEditStaff.revalidateField('role');
        });
        submitEditStaffButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validatorEditStaff) {
                validatorEditStaff.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitEditStaffButton.setAttribute('data-kt-indicator', 'on');
                        submitEditStaffButton.disabled = true;
                        $.ajax({
                            method: "PUT",
                            url: `/office/${$(formStaff.querySelector("[name='id']")).val()}/staff`,
                            data: {
                                name: $(formStaff.querySelector("[name='name']")).val(),
                                username: $(formStaff.querySelector("[name='username']")).val(),
                                password: $(formStaff.querySelector("[name='password']")).val(),
                                email: $(formStaff.querySelector("[name='email']")).val(),
                                role: $(formStaff.querySelector("[name='role']")).val(),
                            },
                            success: (success) => {
                                toastr.success(success.message, "Thành công", {
                                    timeOut: 1000,
                                    onHidden: function () {
                                        location.reload();
                                    }
                                });
                                modalEditStaff.hide();
                                formEditStaff.reset();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitEditStaffButton.removeAttribute('data-kt-indicator');
                                submitEditStaffButton.disabled = false;
                            }
                        })
                    }
                });
            }
        });
        cancelEditStaffButton.addEventListener('click', function (e) {
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
                    formEditStaff.reset(); // Reset form	
                    modalEditStaff.hide(); // Hide modal				
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
    const handleEditStaff = (e) => {
        const staff = JSON.parse(e.target.dataset.staff);
        $(formEditStaff.querySelector("#name")).html(staff.name);
        $(formEditStaff.querySelector("[name='name']")).val(staff.name);
        $(formEditStaff.querySelector("[name='username']")).val(staff.username);
        $(formEditStaff.querySelector("[name='email']")).val(staff.email);
        const options = $(formEditStaff.querySelector("[name='role']"))[0];
        options.forEach((item) => {
            if (item.value === staff.role) {
                item.selected = true;
            }
        })
        modalEditStaff.show();
    }
    const handleFormOffice = () => {
        validatorOffice = FormValidation.formValidation(
            formOffice,
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
        submitOfficeButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validatorOffice) {
                validatorOffice.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitOfficeButton.setAttribute('data-kt-indicator', 'on');
                        submitOfficeButton.disabled = true;
                        $.ajax({
                            method: "PUT",
                            url: `/office/${$(form.querySelector("[name='id']")).val()}`,
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
                                modalOffice.hide();
                                formOffice.reset();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitOfficeButton.removeAttribute('data-kt-indicator');
                                submitOfficeButton.disabled = false;
                            }
                        })
                    }
                });
            }
        });
        cancelOfficeButton.addEventListener('click', function (e) {
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
                    formOffice.reset(); // Reset form	
                    modalOffice.hide(); // Hide modal				
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
    const handleFormStaff = () => {
        validatorStaff = FormValidation.formValidation(
            formStaff,
            {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên nhân viên'
                            }
                        }
                    },
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tài khoản'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập mật khẩu'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập địa chỉ email nhận tài khoản'
                            }
                        }
                    },
                    role: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng chọn loại nhân viên'
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
        $(formStaff.querySelector('[name="role"]')).on('change', function () {
            validatorStaff.revalidateField('role');
        });
        submitStaffButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validatorStaff) {
                validatorStaff.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitStaffButton.setAttribute('data-kt-indicator', 'on');
                        submitStaffButton.disabled = true;
                        $.ajax({
                            method: "POST",
                            url: `/office/${$(formStaff.querySelector("[name='id']")).val()}/staff`,
                            data: {
                                name: $(formStaff.querySelector("[name='name']")).val(),
                                username: $(formStaff.querySelector("[name='username']")).val(),
                                password: $(formStaff.querySelector("[name='password']")).val(),
                                email: $(formStaff.querySelector("[name='email']")).val(),
                                role: $(formStaff.querySelector("[name='role']")).val(),
                            },
                            success: (success) => {
                                toastr.success(success.message, "Thành công", {
                                    timeOut: 1000,
                                    onHidden: function () {
                                        location.reload();
                                    }
                                });
                                modalStaff.hide();
                                formStaff.reset();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitStaffButton.removeAttribute('data-kt-indicator');
                                submitStaffButton.disabled = false;
                            }
                        })
                    }
                });
            }
        });
        cancelStaffButton.addEventListener('click', function (e) {
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
                    formStaff.reset(); // Reset form	
                    modalStaff.hide(); // Hide modal				
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
    const handleDeleteStaffs = (e) => {
        const id = e.target.dataset.id;
        $.ajax({
            method: "DELETE",
            url: `/office/${id}/staff`,
            success: (success) => {
                toastr.success(success.message, "Thành công", {
                    timeOut: 1000,
                    onHidden: function () {
                        location.reload();
                    }
                });
            },
            error: (error) => {
                toastr.error(error.responseJSON.message, "Thất bại");
            }
        })
    }
    return {
        init: function () {
            const modalElOffice = document.querySelector('#form_edit_office_modal');
            const modalElStaff = document.querySelector('#form_add_staff_modal');
            const modalEditElStaff = document.querySelector('#form_edit_staff_modal');
            if (!tableStaffs || !modalElOffice || !modalElStaff || !modalEditElStaff) {
                return;
            }
            modalOffice = new bootstrap.Modal(modalElOffice);
            modalStaff = new bootstrap.Modal(modalElStaff);
            modalEditStaff = new bootstrap.Modal(modalEditElStaff);
            formOffice = document.querySelector('#form_office');
            formStaff = document.querySelector('#form_add_staff');
            formEditStaff = document.querySelector('#form_edit_staff');
            submitOfficeButton = document.getElementById('form_edit_office_submit');
            cancelOfficeButton = document.getElementById('form_edit_office_cancel');
            submitStaffButton = document.getElementById('form_add_staff_submit');
            cancelStaffButton = document.getElementById('form_add_staff_cancel');
            submitEditStaffButton = document.getElementById('form_edit_staff_submit');
            cancelEditStaffButton = document.getElementById('form_edit_staff_cancel');
            deletes = document.querySelectorAll('#staff_delete');
            edits = document.querySelectorAll('#staff_edit');
            initOfficeDetail();
            handleFormOffice();
            handleFormStaff();
            handleFormEditStaff();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTOfficeDetail.init();
});
