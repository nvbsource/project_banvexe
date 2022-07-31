"use strict";

var KTCreateTrip = function () {
    var initCreateTrip = function () {
    }
    const initFormRepeater = () => {
        $('#add_driver_options').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();

                // Init select2 on new repeated items
                initConditionsSelect2();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    }
    const initConditionsSelect2 = () => {
        // Tnit new repeating condition types
        const allConditionTypes = document.querySelectorAll('[data-kt-ecommerce-catalog-add-driver="driver_option"]');
        allConditionTypes.forEach(type => {
            if ($(type).hasClass("select2-hidden-accessible")) {
                return;
            } else {
                $(type).select2({
                    minimumResultsForSearch: -1
                });
            }
        });
    }
    return {
        init: function () {
            initCreateTrip();
            initFormRepeater();
            initConditionsSelect2();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTCreateTrip.init();
});