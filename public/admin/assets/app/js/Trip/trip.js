"use strict";

var KTTrip = function () {
    var tableTrip = document.getElementById('table_trip');
    var datatable;
    var initTrip = function () {
        datatable = $(tableTrip).DataTable({
            "info": false,
            'order': [],
            "pageLength": 10,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 },
                { orderable: false, targets: 6 },
            ]
        });
    }
    return {
        init: function () {
            if (!tableTrip) {
                return;
            }
            initTrip();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTTrip.init();
});