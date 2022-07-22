var table = {
    tableController: function () {
        const t = $(document.querySelector("#table-list")).DataTable({
            info: !1,
            order: [],
            columnDefs: [{
                orderable: !1,
                targets: 0
            }, {
                orderable: !1,
                targets: 4
            }]
        })
        document.querySelector('[data-kt-customer-table-filter="search"]').addEventListener("keyup", (function (e) {
            t.search(e.target.value).draw()
        }))
    },
};
$(document).ready(function () {
    table.tableController();
});