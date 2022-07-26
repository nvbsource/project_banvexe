var baseUrl = 'http://localhost:8000/api';
$.ajaxSetup({
    beforeSend: function (xhr, options) {
        options.url = baseUrl + options.url;
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
    }
})

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "3000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }