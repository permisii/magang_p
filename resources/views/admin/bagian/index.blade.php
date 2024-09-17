@extends('templates.web.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-body ">
                <table id="data-table" class="table table-bordered table-striped table-hover nowrap">
                    <thead>
                        <th>OPTIONS</th>
                        <th>NAMA</th>

                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bagian.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Listrik</td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bagian.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Instrumen</td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bagian.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Komputer</td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bagian.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Mekanik</td>

                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bagian.detail') }}" class="btn btn-sm btn-default text-blue"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a onclick="confirm('Yakin akan menghapus?')" class="btn btn-sm btn-default text-red"><i class="fas fa-trash"></i> Delete</a>
                                </div>

                            </td>
                            <td>Produksi</td>

                        </tr>




                    </tbody>
                    {{-- <tfoot>
                        <th>OPTIONS</th>
                        <th>NAMA</th>
                        <th>VALID</th>
                    </tfoot> --}}
                </table>
            </div>
            <div class="card-footer"></div>
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
    $(function () {
        $("#data-table").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs" : [
                // {"className": "text-center", "targets":[2]},
                {"width" : "125px", "targets": [0]}
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
                    text: '<i class="fas fa-plus"></i> Tambah Departemen',
                    className : 'btn btn-default text-blue',
                    action: function ( e, dt, node, config ) {
                        window.open("{{ route('admin.bagian.form') }}", "_self")
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
