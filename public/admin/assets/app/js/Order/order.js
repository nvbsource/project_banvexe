"use strict";

var KTOrder = function () {
    var form;
    var initOrder = function () {
        var start_date = $(form.querySelector('[name="start_date"]'));
		start_date.flatpickr({
			enableTime: true,
			dateFormat: "d, M Y, H:i",
		});
    }
    return {
        init: function () {
            form = document.querySelector('#form_filter');;
            initOrder();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTOrder.init();
});