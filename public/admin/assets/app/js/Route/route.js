"use strict";

var KTOffices = function () {
    var table = document.getElementById('table_route');
    var database;
    var modalAdd;
    var formAdd;
    var submitDistance;
    var submitAddButton;
    var cancelAddButton;
    var informationDistance;
    var address_departure;
    var address_destination;
    var field_address_departure;
    var field_address_destination;
    var directionsService;
    var directionsRenderer;
    var validator;
    var initRoute = function () {
        database = $(table).DataTable({
            "info": false,
            'order': [],
            "pageLength": 20,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 },
                { orderable: false, targets: 2 },
            ]
        });
        $(submitDistance).click(handleShowInformationDistanceAndMaps);
    }
    const handleShowInformationDistanceAndMaps = function () {
        address_departure = $(formAdd.querySelector("[name='address_departure']")).val();
        address_destination = $(formAdd.querySelector("[name='address_destination']")).val();
        if (!address_departure || !address_departure) {
            return toastr.error("Vui lòng nhập địa chỉ điểm khởi hành và điểm đến", "Thất bại");
        }
        submitDistance.setAttribute('data-kt-indicator', 'on');
        submitDistance.disabled = true;
        $(formAdd.querySelector("#map_start")).html(address_departure);
        $(formAdd.querySelector("#map_end")).html(address_destination);
        calculateAndDisplayRoute(directionsService, directionsRenderer);
    }
    function initAutocomplete() {
        field_address_departure = document.querySelector('[name="address_departure"]');
        field_address_destination = document.querySelector('[name="address_destination"]');
        new google.maps.places.Autocomplete(field_address_departure, {
            componentRestrictions: { country: ["vn"] },
        });
        new google.maps.places.Autocomplete(field_address_destination, {
            componentRestrictions: { country: ["vn"] },
        });
        field_address_departure.focus();
        field_address_destination.focus();
    }
    function initMap() {
        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        const map = new google.maps.Map(
            document.getElementById("map_departure"),
            {
                zoom: 7,
                center: { lat: 14.058324, lng: 108.277199 },
            }
        );

        directionsRenderer.setMap(map);
        initAutocomplete();
    }
    function calculateAndDisplayRoute(
        directionsService,
        directionsRenderer
    ) {
        directionsService
            .route({
                origin: {
                    query: address_departure,
                },
                destination: {
                    query: address_destination,
                },
                travelMode: google.maps.TravelMode.DRIVING,
            })
            .then((response) => {
                directionsRenderer.setDirections(response);
                const route = response.routes[0].legs[0];
                $(formAdd.querySelector("#map_distance")).html(route.distance.text);
                $(formAdd.querySelector("#map_expected")).html(route.duration.text);
                $(formAdd.querySelector("#map_departure")).removeClass("d-none");
                $(formAdd.querySelector("#information_distance")).removeClass("d-none");
                console.log(response.routes[0].legs[0].end_location.lat(), response.routes[0].legs[0].end_location.lng());
                console.log(response.routes[0].legs[0].start_location.lat(), response.routes[0].legs[0].start_location.lng());
            })
            .catch((e) => toastr.error("Địa chỉ không hợp lệ", "Thất bại"))
            .finally(() => {
                submitDistance.removeAttribute('data-kt-indicator');
                submitDistance.disabled = false;
            })
    }
    const handleFormRoute = () => {
        validator = FormValidation.formValidation(
            formAdd,
            {
                fields: {
                    fromProvince: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng chọn điểm đi'
                            }
                        }
                    },
                    toProvince: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng chọn điểm đến'
                            }
                        }
                    },
                    name_departure: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên địa chỉ đón khách'
                            }
                        }
                    },
                    name_destination: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập tên địa chỉ trả khách'
                            }
                        }
                    },
                    address_destination: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập địa chỉ khởi hành'
                            }
                        }
                    },
                    address_departure: {
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập địa chỉ nơi đến'
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
        $(formAdd.querySelector('[name="fromProvince"]')).on("change", () => {
            validator.revalidateField("fromProvince")
        })
        $(formAdd.querySelector('[name="toProvince"]')).on("change", () => {
            validator.revalidateField("toProvince")
        })
        submitAddButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        submitAddButton.setAttribute('data-kt-indicator', 'on');
                        submitAddButton.disabled = true;
                        $.ajax({
                            method: "POST",
                            url: "/route",
                            data: {
                                departure_district_id: $(formAdd.querySelector("[name='fromProvince']")).val(),
                                destination_district_id: $(formAdd.querySelector("[name='toProvince']")).val(),
                                departure_name: $(formAdd.querySelector("[name='name_departure']")).val(),
                                destination_name: $(formAdd.querySelector("[name='name_destination']")).val(),
                                departure_address: $(formAdd.querySelector("[name='address_departure']")).val(),
                                destination_address: $(formAdd.querySelector("[name='address_destination']")).val(),
                            },
                            success: (success) => {
                                toastr.success(success.message, "Thành công", {
                                    timeOut: 1000,
                                    onHidden: function () {
                                        location.reload();
                                    }
                                });
                                modalAdd.hide();
                                formAdd.reset();
                            },
                            error: (error) => {
                                toastr.error(error.responseJSON.message, "Thất bại");
                            },
                            complete: () => {
                                submitAddButton.removeAttribute('data-kt-indicator');
                                submitAddButton.disabled = false;
                            }
                        })
                    }
                });
            }
        });
        cancelAddButton.addEventListener('click', function (e) {
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
                    formAdd.reset(); // Reset form	
                    modalAdd.hide(); // Hide modal				
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
            const modalEl = document.querySelector('#form_route_add_modal');
            if (!table || !modalEl) {
                return;
            }
            modalAdd = new bootstrap.Modal(modalEl);
            formAdd = document.querySelector('#form_route_add_from');
            submitAddButton = document.getElementById('form_route_add_submit');
            cancelAddButton = document.getElementById('form_route_add_cancel');
            submitDistance = document.getElementById('submit_distance');
            informationDistance = document.getElementById('information_distance');
            initRoute();
            handleFormRoute();
            window.initMap = initMap;
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTOffices.init();
});