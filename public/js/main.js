var baseUrl = 'http://localhost:8000/api';
$.ajaxSetup({
    beforeSend: function (xhr, options) {
        options.url = baseUrl + options.url;
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
    }
})
