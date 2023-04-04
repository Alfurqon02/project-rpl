/* ------------------------------------------------------------------------------
 *
 *  # Datatables API
 *
 *  Demo JS code for datatable_api.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

const DatatableAPI = function() {


    //
    // Setup module components
    //

    // Basic Datatable examples
    const _componentDatatableAPI = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: true,
            "columnDefs": [{
                "searchable": false,
                "orderable": true,
                width: 100,
                "targets": 0,
            },
            {
                "searchable": false,
                "orderable": false,
                "targets": -1
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                searchPlaceholder: 'Ketik untuk cari...',
                lengthMenu: '<span class="me-3">Menampilkan:</span> _MENU_',
                paginate: { 'first': 'Pertama', 'last': 'Terakhir', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' },
                lengthMenu: "Menampilkan _MENU_ data tiap halaman",
                zeroRecords: "Maaf data tidak ditemukan",
                info: "Menampilkan halaman ke-_PAGE_ dari _PAGES_ halaman",
                infoEmpty: "Data tidak ditemukan",
                infoFiltered: "(difilter dari total _MAX_ data)",
                emptyTable: "Tidak ada data dalam tabel"
            }
        });


        // Single row selection
        const singleSelect = $('.datatable-selection-single').DataTable();
        $('.datatable-selection-single tbody').on('click', 'tr', function() {
            if ($(this).hasClass('table-success')) {
                $(this).removeClass('table-success');
            }
            else {
                singleSelect.$('tr.table-success').removeClass('table-success');
                $(this).addClass('table-success');
            }
        });


        // Multiple rows selection
        $('.datatable-selection-multiple').DataTable();
        $('.datatable-selection-multiple tbody').on('click', 'tr', function() {
            $(this).toggleClass('table-success');
        });


        // Individual column searching with text inputs
        $('.datatable-column-search-inputs thead tr:eq(1) th').not(':last-child').each(function () {
            const title = $(this).text();
            if (title == 'No' || title == 'Kontrak' || title == 'Config' || title == 'Generate' || title == 'Berkas Bayar' || title == 'Cetak') {
                $(this).html( '' );
            }else{
                $(this).html('<input type="text" class="form-control" placeholder="Cari ' + title + '" />');
            }
        });
        $('.datatable-column-search-inputs').DataTable({
            orderCellsTop: true,
            sDom: 'rtip',
            // fixedHeader: true,
            responsive: true,
            // sDom: "d-none",
            // sDom: "ltipr",
            // "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
            // "sDom": "rt<'fluid-row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>><'fluid-row'<'col-md-12 col-sm-12'<'pull-right'l>>>",
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function (index) {
                        const that = this;
                        $('input:not(.non-table)').on('keyup change clear', function () {
                            console.log(that.search())
                            if (that.search() !== this.value) {
                                that.column($(this).parent().index() + ':visible').search(this.value).draw();
                                // that.search(this.value).draw();
                            }
                        });
                    });
            }
        });
        // Individual column searching with selects
        $('.datatable-column-search-selects').DataTable({
            orderCellsTop: true,
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        const column = this;
                        const select = $('<select class="form-select"><option value="0" selected disabled>Filter</option></select>')
                            .appendTo($('.datatable-column-search-selects thead tr:eq(1) th').not(':last-child').eq(column.index()).empty())
                            .on('change', function () {
                                const val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="'+d.replace(/<(?:.|\n)*?>/gm, '')+'">'+d.replace(/<(?:.|\n)*?>/gm, '')+'</option>')
                            });
                    });
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatableAPI();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DatatableAPI.init();
});
