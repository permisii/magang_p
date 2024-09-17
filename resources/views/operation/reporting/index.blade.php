@extends('templates.web.template')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">


                <div class="card-body">


                    <div class="form-group row">
                        <label class="col-2 col-form-label text-right">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control datepicker">
                        </div>
                    </div>



                    <div class="form-group row mb-5">
                        <div class="offset-sm-2 col-sm-3">
                            <div class="btn-group btn-block">
                                <button class="btn btn-default btn-sm">
                                    <i class="fas fa-fw fa-search"></i>
                                    Filter
                                </button>
                                <button class="btn btn-default btn-sm">
                                    <i class="fas fa-undo"></i>
                                    Reset Filter
                                </button>
                            </div>

                        </div>
                    </div>

                    <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                        <thead>
                            <th>OPTIONS</th>
                            <th>TANGGAL</th>
                            <th>STATUS</th>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('operation.reporting.detail_sudah_dikerjakan') }}"
                                            class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                            Lihat Laporan</a>

                                    </div>

                                </td>
                                <td>01/09/2024</td>
                                <td><div class="badge badge-success">Sudah Dikerjakan</div></td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('operation.reporting.detail_draft') }}"
                                            class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                            Lanjutkan Laporan</a>

                                    </div>

                                </td>
                                <td>02/09/2024</td>
                                <td><div class="badge badge-warning">Belum Dikerjakan</div></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('operation.reporting.detail_belum_dikerjakan') }}"
                                            class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                            Buat Laporan</a>

                                    </div>

                                </td>
                                <td>02/09/2024</td>
                                <td><div class="badge badge-warning">Belum Dikerjakan</div></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            $("#data-table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "columnDefs": [{
                    "width": "125px",
                    "targets": [0, 2]
                }, {
                    "className": "text-center",
                    "targets": [2]
                }],
                "order": [
                    [1, 'asc'],

                ],
                "buttons": [

                ]
            }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');


        });
    </script>
@endsection
