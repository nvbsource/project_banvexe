"use strict";

var KTVehicle = function () {
    var tableVehicle = document.getElementById('table_vehicle');
    var datatable;
    var initVehicle = function () {
        datatable = $(tableVehicle).DataTable({
            "info": false,
            'order': [],
            "pageLength": 10,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 },
                { orderable: false, targets: 7 },
            ]
        });
    }
    return {
        init: function () {
            if (!tableVehicle) {
                return;
            }
            initVehicle();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTVehicle.init();
});