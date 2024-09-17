@extends('templates.web.template')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="row">
                <ol class="breadcrumb nav-asset">
                    <li class="breadcrumb-item">Unit Produksi 1</li>
                    <li class="breadcrumb-item">Stock Preparation 1</li>
                    <li class="breadcrumb-item">Refiner</li>
                    <li class="breadcrumb-item">Motor</li>
                </ol>
            </div>
            <div class="card card-info card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-gray" href="{{ route('operation.instruksikerja.detail') }}"
                                role="tab">General</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-gray active"
                                href="{{ route('operation.instruksikerja.pekeriaan.index') }}" role="tab">Pekerjaan</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">



                    <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                        <thead>
                            <tr>
                                <th>OPTIONS</th>
                                <th>NO PK</th>
                                <th>MASALAH</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('operation.instruksikerja.pekeriaan.detail') }}"
                                            class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i>
                                            Detail</a>
                                        <a onclick="confirm('Yakin akan menghapus?')"
                                            class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                    </div>

                                </td>
                                <td>K3/23H/001</td>
                                <td>Perbaikan mesin las cogen</td>
                                <td>
                                    <span class="badge badge-warning">
                                        Belum Dikerjakan
                                    </span>
                                </td>

                            </tr>

                        </tbody>


                    </table>
                </div>

                <div class="card-footer">
                    <a href="{{ route('operation.instruksikerja.index') }}" class="btn btn-default">
                        <i class="fa fa-fw fa-arrow-left"></i>
                        Kembali Ke Daftar Instruksi Kerja
                    </a>

                </div>
            </div>
        </div>
    </div>
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
                // "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "scrollX": true,
                "columnDefs": [
                    {"className": "text-center", "targets":[3]},
                    {
                        "width": "100px",
                        "targets": [0, 1, 3]
                    }
                ],
                "buttons": [
                    // {
                    //     extend: "colvis",
                    //     text: '<i class="fas fa-columns"></i> Kolom',
                    //     className : 'btn btn-default',
                    //     init: function(api, node, config) {
                    //         $(node).removeClass('btn-secondary')
                    //     }
                    // },
                    {
                        text: '<i class="fas fa-plus"></i> Tambah Pekerjaan',
                        className: 'btn btn-default text-blue',
                        action: function(e, dt, node, config) {
                            window.open('{{ route('operation.instruksikerja.pekeriaan.form') }}',
                                '_self')
                        }
                    }


                ]
            }).buttons().container().appendTo('#data-table_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
