

            <div class="card">
                <div class="card-header">
                    Index
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable datatable">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>book</th>
                            <th>books</th>
                            <th>email</th>
                            <th>textarea</th>
                            <th>radio</th>
                            <th>checkbox</th>
                            <th>date</th>
                            <th>datetime</th>
                            <th>time</th>
                            <th>file</th>
                            <th>photo</th>
                            <th>password</th>
                            <th>money</th>
                            <th>number</th>
                            <th>float</th>
                            <th>enum</th>
                            <th>location_address</th>
                            <th>&nbsp;</th>

                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
@section('scripts')
    @parent
    <script>

        $(document).ready(function () {

            let deleteButtonTrans = 'Delete selected';//
            let copyButtonTrans = 'Copy'; //
            let csvButtonTrans = 'CSV'; //
            let excelButtonTrans = 'Excel';
            let pdfButtonTrans = 'PDF'; //
            let printButtonTrans = 'Print'; //
            let colvisButtonTrans = 'Column visibility'; //

            let dtDefaultOptions = {
                retrieve: true,
                dom: 'lBfrtip<"actions">',
                columnDefs: [],
                "pageLength": 10,
                "aaSorting": [],
                select: true,
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn btn-info btn-xs',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-info btn-xs',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-info btn-xs',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-info btn-xs',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-info btn-xs',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn btn-info btn-xs',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        text: deleteButtonTrans,
                        className: 'btn btn-danger btn-xs',
                        action: function (e, dt, node, config) {
                            //delete button action to delete selected rows
                        }
                    },
                ],
                ajax: '{!! route('users2.index') !!}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'book.name', name: 'book.name'},
                    {data: 'books.name', name: 'books.name'},
                    {data: 'email', name: 'email'},
                    {data: 'textarea', name: 'textarea'},
                    {data: 'radio', name: 'radio'},
                    {data: 'checkbox', name: 'checkbox'},
                    {data: 'date', name: 'date'},
                    {data: 'datetime', name: 'datetime'},
                    {data: 'time', name: 'time'},
                    {data: 'file', name: 'file'},
                    {data: 'photo', name: 'photo'},
                    {data: 'password', name: 'password'},
                    {data: 'money', name: 'money'},
                    {data: 'number', name: 'number'},
                    {data: 'float', name: 'float'},
                    {data: 'enum', name: 'enum'},
                    {data: 'location_address', name: 'location_address'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
            };

            $('.datatable').dataTable(dtDefaultOptions);

        });
    </script>
@endsection